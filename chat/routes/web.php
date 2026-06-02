<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppsController;

use App\Http\Controllers\ChatController;
use App\Http\Controllers\MapsController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\IconsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ChartsController;
use App\Http\Controllers\TablesController;
use App\Http\Controllers\ElementsControllere;
use App\Http\Controllers\UtilitiesController;
use App\Http\Controllers\AdvanceduiController;
use App\Http\Controllers\DashboardsController;
use App\Http\Controllers\LandingpageController;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/index', [DashboardsController::class, 'index']);

Route::middleware(['auth'])->group(function () {
    Route::get('/chat', [ChatController::class, 'index']);	
    Route::get('/fetch-users/{userId}', [ChatController::class, 'fetchUsers']);   
	Route::post('/send-message', [ChatController::class, 'sendMessage']);
	Route::get('/fetch-messages/{userId}', [ChatController::class, 'fetchMessages']);
	Route::get('/search-user', [ChatController::class, 'searchUser']);
});


// Icons //
Route::get('icons', [IconsController::class, 'icons']);

// Charts //
Route::get('apex-area-charts', [ChartsController::class, 'apex_area_charts']);
Route::get('apex-bar-charts', [ChartsController::class, 'apex_bar_charts']);
Route::get('apex-boxplot-charts', [ChartsController::class, 'apex_boxplot_charts']);
Route::get('apex-bubble-charts', [ChartsController::class, 'apex_bubble_charts']);
Route::get('apex-candlestick-charts', [ChartsController::class, 'apex_candlestick_charts']);
Route::get('apex-column-charts', [ChartsController::class, 'apex_column_charts']);
Route::get('apex-heatmap-charts', [ChartsController::class, 'apex_heatmap_charts']);
Route::get('apex-line-charts', [ChartsController::class, 'apex_line_charts']);
Route::get('apex-mixed-charts', [ChartsController::class, 'apex_mixed_charts']);
Route::get('apex-pie-charts', [ChartsController::class, 'apex_pie_charts']);
Route::get('apex-polararea-charts', [ChartsController::class, 'apex_polararea_charts']);
Route::get('apex-radar-charts', [ChartsController::class, 'apex_radar_charts']);
Route::get('apex-radialbar-charts', [ChartsController::class, 'apex_radialbar_charts']);
Route::get('apex-rangearea-charts', [ChartsController::class, 'apex_rangearea_charts']);
Route::get('apex-scatter-charts', [ChartsController::class, 'apex_scatter_charts']);
Route::get('apex-timeline-charts', [ChartsController::class, 'apex_timeline_charts']);
Route::get('apex-treemap-charts', [ChartsController::class, 'apex_treemap_charts']);
Route::get('chartjs-charts', [ChartsController::class, 'chartjs_charts']);
Route::get('echarts', [ChartsController::class, 'echarts']);

// Apps //
Route::get('cards', [AppsController::class, 'cards']);
Route::get('contacts', [AppsController::class, 'contacts']);
Route::get('draggable-cards', [AppsController::class, 'draggable_cards']);
Route::get('file-manager-details', [AppsController::class, 'file_manager_details']);
Route::get('file-manager-list', [AppsController::class, 'file_manager_list']);
Route::get('file-manager', [AppsController::class, 'file_manager']);
Route::get('full-calendar', [AppsController::class, 'full_calendar']);
Route::get('notifications', [AppsController::class, 'notifications']);
Route::get('treeview', [AppsController::class, 'treeview']);
Route::get('widget-notification', [AppsController::class, 'widget_notification']);
Route::get('widgets', [AppsController::class, 'widgets']);

// Elements //
Route::get('alerts', [ElementsControllere::class, 'alerts']);
Route::get('avatars', [ElementsControllere::class, 'avatars']);
Route::get('badge', [ElementsControllere::class, 'badge']);
Route::get('breadcrumb', [ElementsControllere::class, 'breadcrumb']);
Route::get('buttongroup', [ElementsControllere::class, 'buttongroup']);
Route::get('buttons', [ElementsControllere::class, 'buttons']);
Route::get('dropdowns', [ElementsControllere::class, 'dropdowns']);
Route::get('images-figures', [ElementsControllere::class, 'images_figures']);
Route::get('links-interactions', [ElementsControllere::class, 'links_interactions']);
Route::get('listgroup', [ElementsControllere::class, 'listgroup']);
Route::get('navbar', [ElementsControllere::class, 'navbar']);
Route::get('navs-tabs', [ElementsControllere::class, 'navs_tabs']);
Route::get('object-fit', [ElementsControllere::class, 'object_fit']);
Route::get('pagination', [ElementsControllere::class, 'pagination']);
Route::get('popovers', [ElementsControllere::class, 'popovers']);
Route::get('progress', [ElementsControllere::class, 'progress']);
Route::get('scrollspy', [ElementsControllere::class, 'scrollspy']);
Route::get('spinners', [ElementsControllere::class, 'spinners']);
Route::get('tags', [ElementsControllere::class, 'tags']);
Route::get('toasts', [ElementsControllere::class, 'toasts']);
Route::get('tooltips', [ElementsControllere::class, 'tooltips']);
Route::get('typography', [ElementsControllere::class, 'typography']);

// Advancedui //
Route::get('accordions-collpase', [AdvanceduiController::class, 'accordions_collpase']);
Route::get('blog-details', [AdvanceduiController::class, 'blog_details']);
Route::get('blog-post', [AdvanceduiController::class, 'blog_post']);
Route::get('blog', [AdvanceduiController::class, 'blog']);
Route::get('carousel', [AdvanceduiController::class, 'carousel']);
Route::get('modals-closes', [AdvanceduiController::class, 'modals_closes']);
Route::get('offcanvas', [AdvanceduiController::class, 'offcanvas']);
Route::get('placeholders', [AdvanceduiController::class, 'placeholders']);
Route::get('ratings', [AdvanceduiController::class, 'ratings']);
Route::get('search', [AdvanceduiController::class, 'search']);
Route::get('sweet-alerts', [AdvanceduiController::class, 'sweet_alerts']);
Route::get('swiperjs', [AdvanceduiController::class, 'swiperjs']);
Route::get('timeline', [AdvanceduiController::class, 'timeline']);
Route::get('userlist', [AdvanceduiController::class, 'userlist']);

// Pages //
Route::get('about', [PagesController::class, 'about']);
// Route::get('chat', [PagesController::class, 'chat']);
Route::get('check-out', [PagesController::class, 'check_out']);
Route::get('editprofile', [PagesController::class, 'editprofile']);
Route::get('emptypage', [PagesController::class, 'emptypage']);
Route::get('error404', [PagesController::class, 'error404']);
Route::get('error500', [PagesController::class, 'error500']);
Route::get('error501', [PagesController::class, 'error501']);
Route::get('faq', [PagesController::class, 'faq']);
Route::get('forgot', [PagesController::class, 'forgot']);
Route::get('gallery', [PagesController::class, 'gallery']);
Route::get('invoice', [PagesController::class, 'invoice']);
Route::get('lockscreen', [PagesController::class, 'lockscreen']);
Route::get('mail-compose', [PagesController::class, 'mail_compose']);
Route::get('mail-read', [PagesController::class, 'mail_read']);
Route::get('mail-settings', [PagesController::class, 'mail_settings']);
Route::get('mail', [PagesController::class, 'mail']);
Route::get('pricing', [PagesController::class, 'pricing']);
Route::get('product-cart', [PagesController::class, 'product_cart']);
Route::get('product-details', [PagesController::class, 'product_details']);
Route::get('products', [PagesController::class, 'products']);
Route::get('profile', [PagesController::class, 'profile']);
Route::get('reset', [PagesController::class, 'reset']);
Route::get('settings', [PagesController::class, 'settings']);
Route::get('signin', [PagesController::class, 'signin']);
Route::get('signup', [PagesController::class, 'signup']);
Route::get('todotask', [PagesController::class, 'todotask']);
Route::get('underconstruction', [PagesController::class, 'underconstruction']);
Route::get('wish-list', [PagesController::class, 'wish_list']);

// Forms //
Route::get('floating-labels', [FormsController::class, 'floating_labels']);
Route::get('form-check-radios', [FormsController::class, 'form_check_radios']);
Route::get('form-color-pickers', [FormsController::class, 'form_color_pickers']);
Route::get('form-datetime-pickers', [FormsController::class, 'form_datetime_pickers']);
Route::get('form-file-uploads', [FormsController::class, 'form_file_uploads']);
Route::get('form-input-group', [FormsController::class, 'form_input_group']);
Route::get('form-input-masks', [FormsController::class, 'form_input_masks']);
Route::get('form-inputs', [FormsController::class, 'form_inputs']);
Route::get('form-layout', [FormsController::class, 'form_layout']);
Route::get('form-range', [FormsController::class, 'form_range']);
Route::get('form-select', [FormsController::class, 'form_select']);
Route::get('form-select2', [FormsController::class, 'form_select2']);
Route::get('form-validation', [FormsController::class, 'form_validation']);
Route::get('quill-editor', [FormsController::class, 'quill_editor']);

// Tables //
Route::get('data-tables', [TablesController::class, 'data_tables']);
Route::get('grid-tables', [TablesController::class, 'grid_tables']);
Route::get('tables', [TablesController::class, 'tables']);

// Landing Page //
Route::get('landing-page', [LandingpageController::class, 'landing_page']);

// Maps //
Route::get('google-maps', [MapsController::class, 'google_maps']);
Route::get('leaflet-maps', [MapsController::class, 'leaflet_maps']);
Route::get('vector-maps', [MapsController::class, 'vector_maps']);

// Utilities //
Route::get('borders', [UtilitiesController::class, 'borders']);
Route::get('breakpoints', [UtilitiesController::class, 'breakpoints']);
Route::get('colors', [UtilitiesController::class, 'colors']);
Route::get('columns', [UtilitiesController::class, 'columns']);
Route::get('flex', [UtilitiesController::class, 'flex']);
Route::get('gutters', [UtilitiesController::class, 'gutters']);
Route::get('helpers', [UtilitiesController::class, 'helpers']);
Route::get('more', [UtilitiesController::class, 'more']);
Route::get('position', [UtilitiesController::class, 'position']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
