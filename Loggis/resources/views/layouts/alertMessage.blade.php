{{-- @if ($errors)
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger text-center alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong class="text-dark">{{ $error }}</strong>
        </div>
    @endforeach
@endif

@foreach (['success', 'danger', 'warning', 'info'] as $alert)
    @if ($message = Session::get($alert))
        <div class="alert alert-{{ $alert }} text-center alert-block">
            <button type="button" class="close text-dark" data-dismiss="alert">×</button>
            <strong class="text-dark">{{ $message }}</strong>
        </div>
    @endif
@endforeach --}}

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // ✅ Success alert
        @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: @json(session('success')),
                timer: 2000,
                showConfirmButton: false
            });
        @endif

        // ❌ Error alert
        @if (session('error'))
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: @json(session('error')),
                confirmButtonText: 'OK'
            });
        @endif

        // ⚠️ Validation errors
        @if ($errors->any())
            Swal.fire({
                icon: 'warning',
                title: 'Validation Error',
                html: `{!! implode('<br>', $errors->all()) !!}`,
                confirmButtonText: 'OK'
            });
        @endif

        // Status change
        $('.status-toggle').change(function() {
            let model = $(this).data('model');
            let field = 'status';
            let id = $(this).data('id');
			let isChecked = $(this).is(':checked'); // check new state

            $.ajax({
                type: "GET",
                dataType: "json",
                url: '{{ route('status') }}',
                data: {
                    model,
                    field,
                    id
                },
                success: function(data) {
					// update label immediately
                    let newText = isChecked ? 'Active' : 'Inactive';
                    $('#status-text-' + id).text(newText);

                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: data.message,
                        timer: 1500,
                        showConfirmButton: false
                    });
                },
                error: function(xhr) {
                    let message = xhr.responseJSON?.message || 'Something went wrong';
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: message,
                        confirmButtonText: 'OK'
                    });
                }
            });
        });
    });
</script>