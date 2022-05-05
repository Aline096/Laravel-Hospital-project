<x-app-layout>
{{--    <h1>This is Admin dashboard</h1>--}}
</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
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
            <form action="{{url('upload_doctor')}}" method="post" enctype="multipart/form-data">

                @csrf

                <div style="padding-top: 15px;alignment:center !important"  >
                    <label>Doctor Name</label>
                    <input type="text" style="color:black" name="name" placeholder="Write doctor's name" required="">
                </div>

                <div style="padding-top: 15px;alignment:center !important"  >
                    <label>Phone number</label>
                    <input type="text" style="color:black" name="number" placeholder="Write phone number" required="">
                </div>

                <div style="padding-top: 15px;alignment:center !important"  >
                    <label>Speciality</label>
                    <select name="speciality" style="color:black; width: 200px" required="">
                        <option >--Select--</option>
                        <option value="skin">Skin</option>
                        <option value="heart">Heart</option>
                        <option value="eyes">Eyes</option>
                        <option value="teeth">Teeth</option>
                    </select>
                </div>

                <div style="padding-top: 15px;alignment:center!important"  >
                    <label>Room no</label>
                    <input type="number" style="color:black" name="room" placeholder="Write room number" required="">
                </div>

                <div style="padding-top: 15px;alignment:center !important" >
                    <label>Doctor Image</label>
                    <input type="file" name="file" required="" >
                </div>

                <div style="padding-top: 15px;alignment:center " >

                    <input type="submit" class="btn btn-success" style="alignment: center !important" >
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
