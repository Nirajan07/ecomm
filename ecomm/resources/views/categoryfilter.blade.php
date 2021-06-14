<body>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>


  
  <!-- Start Shop Blog  -->
  <section class="shop-blog section">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title">
            




            <h2>Filterd by category</h2>
          </div>
        </div>
      </div>
      @foreach($product as $i)
      <div class="row">
        <div class="col-lg-4 col-md-6 col-12">
          <!-- Start Single Blog  -->
          <div class="shop-single-blog">
            <img src="https://via.placeholder.com/370x300" alt="#">
            <div class="content">
              <p class="name">{{$i->name}}
              <p class="description">{{$i->description}}</p>
              <p class="price">{{$i->price}}</p>
            </div>
          </div>
          <!-- End Single Blog  -->
        @endforeach
        
      </div>
    </div>
  </section>
  <!-- End Shop Blog  -->
  
 
