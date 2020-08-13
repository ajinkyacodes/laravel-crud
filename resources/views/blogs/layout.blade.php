<!DOCTYPE html>
<html>
<head>
<title>Laravel CRUD</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="jumbotron text-center">
  <h1>Laravel CRUD </h1>
  <p>By: ajinkyacodes</p>
  <div>
    <a class="btn btn-primary" href="{{ '/' }}">
      Home
    </a>
    <a class="btn btn-primary" href="" onclick="location.reload()">
      Refresh
    </a>
  </div> 
</div>
  
<div class="container mb-5">
    @yield('content')
</div>
<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Footer</p>
</div>
</body>
</html>