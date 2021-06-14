<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>


<div class="container custom-login">
  <div class="row">

    <div class="col-sm-4 col-sm-offset-4">
      <form action="register" method="POST">
        @csrf

        <div class="form-group">
   
          <label for="exampleinputemail">Username</label>
          <input type="name" name="name" class="form-control" id="exampleinputemail" required>
        </div>        


        <div class="form-group">
   
          <label for="exampleinputemail">Email address</label>
          <input type="email" name="email" class="form-control" id="exampleinputemail" required>
        </div>

        <div class="form-group">
          <label for="exampleinputpassword">Password</label>
          <input type="password" name="password" class="form-control" id="exampleinputpassword" required>
        </div>

        
        <button type="submit" class="btn btn-default">Register</button>
      </form>
    </div>
  </div>
</div>