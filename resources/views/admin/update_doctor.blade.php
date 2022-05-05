<x-app-layout>
    <h1>This is Admin dashboard</h1>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <base href="/public">

    <style type="text/css">
        label{
            /*display: inline-block;*/
            /*width: 200px;*/
        }

    </style>

    @include('admin.css')
</head>


<body>
<div class="container-scroller">

    <!-- partial:partials/_sidebar.html -->

@include('admin.sidebar')
<!-- partial -->
@include('admin.navbar')

    <div class="container-fluid page-body-wrapper" >
        <div class="container" align="center" style="padding: 100px">

            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{session()->get('message')}}
                    <button type="button" class="close" data-dismiss="alert">X</button>

                </div>
            @endif

            <form action="{{url('editdoctor',$data->id)}}" method="post" enctype="multipart/form-data" >
                @csrf

                <div style="padding: 15px">
                    <label>Doctor Name</label>
                    <input style="color: black" type="text" name="name" value="{{$data->name}}" >

                </div>

                <div style="padding: 15px">
                    <label>Phone number</label>
                    <input style="color: black" type="text" name="number" value="{{$data->phoneno}}">
                </div>

                <div style="padding: 15px">
                    <label>Speciality</label>
                    <input style="color: black" type="text" name="speciality" value="{{$data->speciality}}">
{{--                    <select name="speciality" style="color:black; width: 200px"   required="">--}}
{{--                        <option >--Select--</option>--}}
{{--                        <option value="skin">Skin</option>--}}
{{--                        <option value="heart">Heart</option>--}}
{{--                        <option value="eyes">Eyes</option>--}}
{{--                        <option value="teeth">Teeth</option>--}}
{{--                    </select>--}}
                </div>

                <div style="padding: 15px">
                    <label>Room no</label>
                    <input style="color: black" type="number" name="room" value="{{$data->room}}">
                </div>

                <div style="padding-top: 15px">
                    <label>Old Image</label>
                    <img height="200" width="200" src="doctorimage/{{$data->image}}" >
                </div>

                <div style="padding-top: 15px">
                    <label>Change Image</label>
                    <input type="file" name="file">
                </div>
                <div style="padding-top: 15px">
                    <input type="submit" class="btn btn-primary" >
                </div>




            </form>

        </div>


    </div>
    <!-- plugins:js -->
@include('admin.script ')
<!-- End custom js for this page -->
</div>
</body>
</html>
