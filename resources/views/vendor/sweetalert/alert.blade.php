@if (Session::has('errors'))
  @if (config('sweetalert.animation.enable'))
    <link rel="stylesheet" href="{{ config('sweetalert.animatecss') }}">
  @endif
  <script src="{{ asset('assets/js/sweetalert.all.js') }}"></script>
  <script>
    const Toast = Swal.mixin({
      toast: true,
      position: 'bottom-end',
      showConfirmButton: false,
      timer: 5000,
      timerProgressBar: true,
      didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
      }
    })

    Toast.fire({
      icon: 'error',
      title: "{!! Session::get('errors')->first() !!}",
      background: '#ECEDEF',
    })
  </script>
@endif

@if (Session::has('success'))
  @if (config('sweetalert.animation.enable'))
    <link rel="stylesheet" href="{{ config('sweetalert.animatecss') }}">
  @endif
  <script src="{{ asset('assets/js/sweetalert.all.js') }}"></script>
  <script>
    const Toast = Swal.mixin({
      toast: true,
      position: 'bottom-end',
      showConfirmButton: false,
      timer: 5000,
      timerProgressBar: true,
      didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
      }
    })

    Toast.fire({
      icon: 'success',
      title: "{!! Session::get('success') !!}",
      background: '#ECEDEF',
    })
  </script>
@endif
