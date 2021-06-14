	<head>
  <title>Bootstrap Example</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
	

<div class="container">
  <h2>View by:</h2>
  
  <div class="dropdown dropright">
    <button type="button" class="btn btn-success" data-toggle="dropdown">
      category
    </button>
    <div class="dropdown-menu">
    	@foreach($products as $i)
      <a class="dropdown-item" href="categoryfilter/{{$i->id}}"> {{$i->name}}</a>
     @endforeach
    </div>
    <button type="button" class="btn btn-success" data-toggle="dropdown">
     Product
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Link 1</a>
     
    </div>
    <button type="button" class="btn btn-success" data-toggle="dropdown">
      Price
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Link 1</a>
      
    </div>
  </div>
</div>