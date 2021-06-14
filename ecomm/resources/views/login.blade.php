
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
<div class="container custom-login">
  <div class="row">

    <div class="col-sm-4 col-sm-offset-4">
      <form action="login" method="POST">
        @csrf

        <div class="form-group">
   
          <label for="exampleinputemail">Email address</label>
          <input type="email" name="email" class="form-control" id="exampleinputemail">
        </div>

        <div class="form-group">
          <label for="exampleinputpassword">Password</label>
          <input type="password" name="password" class="form-control" id="exampleinputpassword">
        </div>
        <button type="submit" class="btn btn-default">Login</button>
      </form>
    </div>
  </div>
</div>
</body>
</html>


