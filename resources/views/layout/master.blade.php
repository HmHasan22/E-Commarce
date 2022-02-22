<!DOCTYPE html>
<html lang="en">
@include("includes.head")
<body>
{{--navbar start--}}
@include("includes.navbar")
{{--navbar end--}}
<div class="container py-4 body-layout">
    @yield("content")
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js">
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@include("includes.footer")
</body>
</html>
