<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('admin.css')
</head>


<body>
<div class="container-scroller" >

    <!-- partial:partials/_sidebar.html -->

@include('admin.sidebar')
<!-- partial -->
    @include('admin.navbar')

    <div class="container-fluid page-body-wrapper" >
        <div style="padding: 70px;">
            <table align="center"!i >
                <tr align="center" style="background-color: black">
                    <th style="padding: 10px ">Doctor Name</th>
                    <th style="padding: 10px ">Phone</th>
                    <th style="padding: 10px ">Speciality</th>
                    <th style="padding: 10px ">Room number</th>
                    <th style="padding: 10px ">Image</th>
                    <th style="padding: 10px ">Update</th>
                    <th style="padding: 10px ">Delete</th>
                </tr>

                @foreach($data as $doctor)

                    <tr align="center" style="background-color: #80d691">
                        <td>{{$doctor->name}}</td>
                        <td>{{$doctor->phoneno}}</td>
                        <td>{{$doctor->speciality}}</td>
                        <td>{{$doctor->room }}</td>
                        <td><img height="100" width="100" src="doctorimage/{{$doctor->image}}"></td>
                        <td><a class="btn btn-primary" href="{{url('updatedoctor',$doctor->id)}}">Update</a></td>
                        <td><a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete Doctor')" href="{{url('deletedoctor',$doctor->id)}}">Delete</a></td>
                    </tr>
                @endforeach

            </table>
        </div>

    </div>

@include('admin.script ')
<!-- End custom js for this page -->
</div>
</body>
</html>
