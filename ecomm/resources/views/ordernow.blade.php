
<table class="table">
   
    <tbody><h3>Your Order information:</h3><br><br>
      <tr>
        <td>Amount:   </td>
        <td>Rs.{{$total}}</td>
              </tr>
      <tr>
        <td>Tax:  </td>
        <td>Rs.0</td>
      </tr>
<tr>
        <td>Delivery:  </td>
        <td>Rs.10</td>
      </tr>

      <tr>
        <td>Total Amount:   </td>
        <td>Rs.{{$total+10}}</td>
        </tr>
       
    </tbody>

  </table>
</div>
<form action="/orderplace" method="POST">
  @csrf

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="form-group">
    <label for="pwd">Payment Method</label><br><br>
    <input type="radio" value="cash" name="payment"> <span>Online payment</span><br><br>
    <input type="radio" value="cash" name="payment"> <span>EMI payment</span><br><br>
    <input type="radio" value="cash" name="payment"> <span>Cash on Delivery</span><br><br>

  <textarea name="address" placeholder="Enter your Address" class="form-control"></textarea>
<td><button type="submit" class="btn btn-default">Order Confirm</button>
  </body>
  </td></form>