<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>{{ $data->first_name }} Details</h2>
  <p></p>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>First name</th>
        <td>{{ $data->first_name }}</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th>Last name</th>
        <td>{{ $data->last_name }}</td>
      </tr>
      <tr>
        <th>Mobile</th>
        <td>{{ $data->mobile }}</td>
      </tr>
      <tr>
        <th>E-Mail</th>
        <td>{{ $data->email }}</td>
      </tr>
      <tr>
        <th>City</th>
        <td>{{ $data->address }}</td>
      </tr>

      <tr>
        <th>Status</th>
            @if ($data->status == 1)
                <td style="color: rgb(33, 150, 33)">Active</td>
            @else
                <td style="color: rgb(239, 9, 9)">Retired</td>
            @endif
      </tr>
      <tr>
        <th>Created At </th>
        <td>{{ $data->created_at }}</td>
      </tr>
      <tr>
        <th>Updated At </th>
        <td>{{ $data->updated_at }}</td>
      </tr>


      <tr>
        <th> <a href="{{ url('/') }}" class="btn btn-info"> Go Back </a> </th>
      </tr>


    </tbody>
  </table>
</div>

</body>
</html>


