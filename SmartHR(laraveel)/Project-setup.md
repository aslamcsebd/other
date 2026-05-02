### Essential setup (Multi-auth)

- User table

		public function up(): void
		{
			Schema::create('users', function (Blueprint $table) {
				$table->id();
				$table->string('name');
				$table->string('email')->unique();
				$table->timestamp('email_verified_at')->nullable();
				$table->string('password');
				$table->enum('role', ['admin', 'user'])->default('user');
				$table->string('status', 20)->default('active');
				$table->rememberToken();
				$table->timestamps();
				$table->softDeletes();
			});

			$roles = ['admin', 'user'];
			foreach($roles as $role){
				DB::table('users')->insert([
					'name' => $role . ' name',
					'email' => $role . '@gmail.com',
					'password' => Hash::make('123456'),
					'role' => $role,
				]);
			}
		}

- User model

		class User extends Authenticatable
		{
			use HasFactory, Notifiable, SoftDeletes;
			protected $fillable = [
				'name',
				'email',
				'password',
				'role',
				'status',
				'deleted_at',
			];
		}

- php artisan make:middleware UserAccess

- App\Http\Middleware\UserAccess to add code

		class UserAccess
		{
			public function handle(Request $request, Closure $next, $userType): Response
			{
				$typeArray = explode('|', $userType);
				if (Auth::check() && in_array(auth()->user()->role, $typeArray)) {
					return $next($request);
				}
				return response()->view('404');
			}
		}

- Add file middleware

		if(laravel version <= 10){
			App\Http\Kernel.php;

			protected $routeMiddleware = [
				'user-access' => \App\Http\Middleware\UserAccess::class,
			];
		}else{
			bootstrap\app.php;
			return Application::configure(basePath: dirname(__DIR__))
				->withRouting(
					web: __DIR__.'/../routes/web.php',
					commands: __DIR__.'/../routes/console.php',
					health: '/up',
				)
				->withMiddleware(function (Middleware $middleware) {
					$middleware->alias([
						'user-access' => UserAccess::class,
					]);
				})
				->withExceptions(function (Exceptions $exceptions) {
					//
				})->create();
		}


### Controller setup

- LoginController

	Ensure Auto-Redirect After Login

		class LoginController extends Controller
		{
			public function showLoginForm()
			{
				$data['users'] = User::all();
				return view('auth.login', $data); 
			}

			public function authenticated(Request $request, $user)
			{
				return redirect()->route($user->role . '.dashboard');
			}
			
			Or
				
			public function login(Request $request)
			{
				$request->validate([
					'email' => 'required|email',
					'password' => 'required',
				]);

				if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
					return redirect()->route(Auth::user()->role . '.dashboard');
				}
				return back()->withErrors(['email' => 'These credentials do not match our records.'])->withInput();
			}
		}


- RegisterController

		class RegisterController extends Controller
		{
			protected function validator(array $data)
			{
				return Validator::make($data, [
					'role' => ['required', 'string', 'in:admin,user'],
				]);
			}

			protected function create(array $data)
			{
				return User::create([
					'role' => $data['role'],
				]);
			}
		}

- Dashboard Controller

		📂 app/Http/Controllers/Web
		├── Admin/DashboardController.php
		├── User/DashboardController.php

		📄 app/Http/Controllers/Web/Admin/DashboardController.php
		class DashboardController extends Controller
		{
			public function dashboard()
			{
				$data['types'] = [
					[
						'link'  => url('title-1'), // route('auth'),
						'value' => User::count(),
						'title' => 'Admin title 1'
					],
				];
				return view('admin.dashboard', $data);
			}
		}

		📄 app/Http/Controllers/Web/User/DashboardController.php
		class DashboardController extends Controller
		{
			public function dashboard()
			{
				$data['types'] = [
					[
						'link'  => url('title-1'), // route('auth'),
						'value' => User::count(),
						'title' => 'User title 1'
					],
				];
				return view('user.dashboard', $data);
			}
		}


### Route setup

- route folder

		📂 routes/
		├── web/
		│   ├── admin/
		│   │   ├── dashboard.php
		│   │   ├── settings.php
		│   ├── user/
		│   │   ├── dashboard.php
		│   │   ├── settings.php
		│   ├── guest.php
		├── api/
		│   ├── admin.php
		│   ├── user.php
		├── console.php


	web.php

		Auth::routes();

		Route::get('/', function () {
			if (Auth::check()) {
				return redirect()->route(Auth::user()->role . '.dashboard');
			}
			return view('welcome'); 
			// redirect()->route('login');
		});

		Route::prefix('admin')->middleware(['auth', 'user-access:admin'])->group(function() {
			require __DIR__ . '/web/admin/dashboard.php';
		});

		Route::prefix('employee')->middleware(['auth', 'user-access:employee'])->group(function() {
			require __DIR__ . '/web/employee/dashboard.php';
		});

		Route::fallback(function () {
			return view(404);
		});


	📄 routes/web/admin/dashboard.php

		use App\Http\Controllers\Web\Admin\DashboardController as AdminDashboard;

		Route::controller(AdminDashboard::class)->group(function () {
			Route::get('/dashboard', 'dashboard')->name('admin.dashboard');
			Route::post('/users', 'store');
		});

	📄 routes/web/user/dashboard.php

		use App\Http\Controllers\Web\User\DashboardController as UserDashboard;

		Route::controller(UserDashboard::class)->group(function () {
			Route::get('/dashboard', 'dashboard')->name('user.dashboard');
			Route::post('/users', 'store');
		});

### Blade setup

📄 resources/views/auth/register.blade.php
	
	After @csrf line no: 13
	<input type="hidden" name="role" value="user">

📄 resources/views/auth/login.blade.php
	
	line no: 17 hide => {{-- <input id="email"> --}}

	Then add this line bellow

	<select name="email" class="form-select" aria-label="Default select example">
		@foreach($users as $user)
			<option value="{{ $user->email }}">{{ $user->email }}</option>
		@endforeach
	</select>

📄 resources/views/admin/dashboard.blade.php

	@extends('layouts.app')

	@section('content')
		<h2>{{Auth::user()->role}} Dashboard</h2>
	@endsection

📄 resources/views/user/dashboard.blade.php

	@extends('layouts.app')

	@section('content')
		<h2>{{Auth::user()->role}} Dashboard</h2>
	@endsection

### Blade file's head, sidebar, footer will depand AdminLTE