<script>
    @if (session('success'))
        toastr.success("{{ session('success') }}")
    @endif
</script>