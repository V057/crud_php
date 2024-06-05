<?php
    include "conn.php";
    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $status=$_POST["status"];
        $aselect=$_POST["aselect"];
        $time=$_POST["time"];
        $q = " INSERT INTO `first`('id',`name`, `email`, `status`,'aselect','time') VALUES (''$id, '$name', '$email', '$status','$aselect','$time')";

        $query = 'mysqli_query($conn,$q)';
    }
?>
<!DOCTYPE html>
<html>
<head>
 <title>create</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">PHP CRUD OPERATION</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="create.php"><span style="font-size:larger;">Add New</span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
 <div class="col-lg-6 m-auto">
 
 <form action="conn.php" method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-primary">
 <h1 class="text-white text-center">  Create New Member </h1>
 </div><br>

 <label> ID: </label>
 <input type="text" name="id" class="form-control"> <br>

 <label> NAME: </label>
 <input type="text" name="name" class="form-control"> <br>

 <label> EMAIL: </label>
 <input type="text" name="email" class="form-control"> <br>

 <label> STATUS: </label>
 <input type="text" name="status" class="form-control"> <br>

 <label> ASELECT: </label>
 <input type="text" name="aselect" class="form-control"> <br>

 <label> TIME: </label>
 <input type="text" name="time" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>

 </div>
 </form>
 </div>
</body>
</html>