<x-app-layout>
    {{--    <h1>This is Admin dashboard</h1>--}}
</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    <style type="text/css">


        label{
            display: inline-block;
            width: 200px;
        }

    </style>
    <!-- Required meta tags -->
    @include('admin.css')
</head>


<body>
<div class="container-scroller">

    @include('admin.sidebar')

    @include('admin.navbar')

    <div class="container-fluid page-body-wrapper" style="alignment: center">


        <div class="container" style=" padding-top: 100px">
            @if(session()->has('message'))
                <div class="alert alert-success">

                    {{session()->get('message')}}
                    <button type="button" class="close" data-dismiss="alert">X</button>

                </div>
            @endif
            <form action="{{url('sendemail',$data->id)}}" method="get " enctype="multipart/form-data">

                @csrf

                <div style="padding-top: 15px">
                    <label>Greeting</label>
                    <input type="text" style="color:black" name="greeting" required="">
                </div>

                <div style="padding-top: 15px">
                    <label>Body</label>
                    <input type="text" style="color:black" name="body"  required="">
                </div>

                <div style="padding-top: 15px">
                    <label>Action Text </label>
                    <input type="text" style="color:black" name="actiontext" required="">
                </div>

                <div style="padding-top: 15px">
                    <label>Action URL</label>
                    <input type="text" style="color:black" name="actionurl" required="">
                </div>

                <div style="padding-top: 15px">
                    <label>End part</label>
                    <input type="text" style="color:black" name="endpart" required="">
                </div>


                <div style="padding-top: 15px">
                    <input type="submit" class="btn btn-success" >
                </div>




            </form>

        </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
@include('admin.script ')
<!-- End custom js for this page -->

</div>
</body>
</html>

