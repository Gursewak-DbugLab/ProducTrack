<html>
<head>
    <title>Clients</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
     Client Page
    </div>
    <div class="card-body">
      <form name="client" id="client" method="post" action="{{url('client-store')}}">
       @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Product Name</label>
          <input type="text" id="product_name" name="product_name" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Client Name</label>
          <input type="text" id="client_name" name="client_name" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">TL Name</label>
          <input type="text" id="team_leader_name" name="team_leader_name" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Employee Name</label>
          <input type="text" id="employee_name" name="employee_name" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Status</label>
          <input type="text" id="status" name="status" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Estimated Time</label>
          <input type="text" id="estimated_time" name="estimated_time" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Spent Time</label>
          <input type="text" id="spent_time" name="spent_time" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Contract Start Date</label>
          <input type="date" name="contract_start_date"/>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Contract End Date</label>
          <input type="date" name="contract_end_date"/>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>  
</body>
</html>

