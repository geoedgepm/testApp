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
  <h2>Dr {{ $data->first_name }} {{ $data->first_name }} Edit form</h2>
  <form class="form-horizontal" action="{{ url('doctor/doctor_update') }}/{{ $data->id }}" method='post'>
@csrf
    <div class="form-group">
      <label class="control-label col-sm-2" for="firstname">First Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="firstname" placeholder="Lex" name="firstname" value="{{ $data->first_name }}"  >
      </div>
      @error('firstname')
            <div class="alert" style="color:rgb(209, 35, 229)">{{ $message }}</div>
        @enderror



    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="lastname">Last Name:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="lastname" placeholder="Luther" name="lastname" value="{{ $data->last_name }}">
        </div>
    </div>
    @error('lastname')
            <div class="alert" style="color:rgb(209, 35, 229)">{{ $message }}</div>
        @enderror



    <div class="form-group">
        <label class="control-label col-sm-2" for="mobile">Mobile</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="mobile" placeholder="Enter mobile" name="mobile" value="{{ $data->mobile }}">
        </div>
      </div>

      @error('mobile')
            <div class="alert" style="color:rgb(209, 35, 229)">{{ $message }}</div>
        @enderror


    <div class="form-group">
        <label class="control-label col-sm-2" for="email">Email:</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{ $data->email }}">
        </div>
      </div>
    <div class="form-group">
        @error('email')
        <div class="alert" style="color:rgb(209, 35, 229)">{{ $message }}</div>
    @enderror

    <div class="form-group">
        <label class="control-label col-sm-2" for="status">Status:</label>
        <select name='status' class="form-select form-select-lg">
            <div class="col-sm-10">
            <option value="">Click here</option>
            <option value="1" {{ $data->status == 1? 'selected':'' }}>Active</option>
            <option value="0" {{ $data->status == 0? 'selected':''}}>In-Active</option>
            </div>
        </select>
    </div>
    @error('status')
    <div class="alert" style="color:rgb(209, 35, 229)">{{ $message }}</div>
@enderror

        <label class="control-label col-sm-2" for="address">Address</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address" value="{{ $data->address }}">
        </div>
      </div>
      @error('address')
      <div class="alert" style="color:rgb(209, 35, 229)">{{ $message }}</div>
  @enderror


    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-info">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
