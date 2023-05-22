<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Doctor Table</h2>
  <p></p>
  <a href="{{ url('/doctor/doctor_create') }}" class="btn btn-primary">Add Doctor </a><br><br>

  <table class="table table-striped">
    <thead>



      <tr>
        <th>First name</th>
        <th>Last name</th>
        <th>Mobile</th>
        <th>Email</th>
        <th>Address</th>
        <th>Status</th>
        <th>Action</th>
      </tr>

    </thead>
    <tbody>
    @foreach ($data as $val )
    <tr>
        <td>{{ $val->first_name }}</td>
        <td>{{ $val->last_name }}</td>
        <td>{{ $val->mobile }}</td>
        <td>{{ $val->email }}</td>
        <td>{{ $val->address }}</td>

            @if( $val->status == 1 )
                <td><label for="" style="color:green">In Service</label></td>
            @else
                <td><label for="" style="color:rgb(201, 10, 71)">Retired</label></td>
            @endif

        <td>
            <a href="{{ url('doctor/doctor_view') }}/{{ $val->id }}" class="btn btn-info">View </a>
            <a href="{{ url('doctor/doctor_edit') }}/{{ $val->id }}" class="btn btn-warning">Edit </a>
            <a href="{{ url('doctor/doctor_delete') }}/{{ $val->id }}" class="btn btn-danger">Delete </a>
        </td>
    </tr>
    @endforeach

    </tbody>
  </table>
</div>

</body>
</html>
