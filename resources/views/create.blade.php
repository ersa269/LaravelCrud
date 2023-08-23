<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="jumbotron bg-warning text-white text-center" >
    <h1>Crud Project</h1>
  </div>
<form action="{{'store'}}" method="post">
    @csrf
  <div  class="mb-3 col-4">
    <label>Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter Name">
  </div>
  <div  class="mb-3 col-4">
    <label>Contact</label>
    <input type="text" class="form-control" name="contact" placeholder="Enter Contact">
  </div>
  <div  class="mb-3 col-4">
    <label>Address</label>
    <input type="text" class="form-control" name="address" placeholder="Enter Address">
  </div>
  <br>
  <input type="submit" class="btn btn-primary">
</form>
</body>
</html>