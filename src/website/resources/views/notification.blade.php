@push('styles')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">
@endpush
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>

<script>
  @if(Session::has('success'))
  	toastr.success("{{ Session::get('success') }}");
  @endif

  @if(Session::has('info'))
  	toastr.info("{{ Session::get('info') }}");
  @endif

  @if(Session::has('warning'))
  	toastr.warning("{{ Session::get('warning') }}");
  @endif

  @if(Session::has('error'))
  	toastr.error("{{ Session::get('error') }}");
  @endif
</script>
@endpush

