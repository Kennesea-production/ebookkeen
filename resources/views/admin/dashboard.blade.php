@extends('layout.admin')
@section('content')

<head>
    <title>Data User</title>
</head>

<div class="headimg">
    <img src="{{ asset('assets/img/winter.jpg') }}" alt="">
        <div class="profile">
            <img src="{{ asset('assets/img/profile.jpg') }}" alt="">
            <h4>
               Welcome, {{ Auth::user()->name }}!
            </h4>
        </div>
 </div>
<section class="home_content" id="home">

    <div class="content">
        <table class="table table-striped table-bordered table-paginate" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>No. HP</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
     
     
            <tbody>
                @foreach ($users as $number => $user)
                <tr>
                    <td>{{ $number +1 }}</td>
                    <td>{{ $user['name'] }}</td>
                    <td>{{ $user['address'] }}</td>
                    <td>{{ $user['phone_number'] }}</td>
                    <td>{{ $user['email'] }}</td>
                    <td>
                        <a href="{{ route('destroyBook', $user->id) }}"><div class="btn btn-danger">Delete</div></a>
                    </td>   
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>


<script>

$(document).ready(function() {
	$('.table-paginate').dataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
 } );

</script>

@endsection