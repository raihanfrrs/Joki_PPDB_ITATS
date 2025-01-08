@if (session('flash-type') == 'sweetalert')
    @if (session('case') == 'default')
        <script>
            Swal.fire({
                position: `{{ session('position') }}`,
                icon: `{{ session('type') }}`,
                title: `{{ session('message') }}`,
                showConfirmButton: false,
                timer: 2500
            })
        </script>
    @endif
@endif
