<x-app-layout>
<h1>This is Admin dashboard</h1>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('admin.css')
</head>


<body>
<div class="container-scroller">

    <!-- partial:partials/_sidebar.html -->

  @include('admin.sidebar')
    <!-- partial -->
  @include('admin.navbar')
{{--    <x-app-layout></x-app-layout>--}}
        <!-- partial -->
@include('admin.bodybar')
<!-- container-scroller -->
<!-- plugins:js -->
@include('admin.script ')
<!-- End custom js for this page -->
</div>
</body>
</html>
