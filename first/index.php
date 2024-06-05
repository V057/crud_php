
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <title>index</title>
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
              <a type="button" class="btn btn-primary nav-link active" href="create.php">Add New</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container my-4">
    <table class="table">
    <thead>
      <tr>
        <th>ID1</th>
        <th>ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>STATUS</th>
        <th>ASELECT</th>
        <th>TIME</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include "conn.php";
        $sql = "select * from crud_php";
        $result = $conn->query($sql);
        if(!$result){
          die("Invalid query!");
        }
        while($row=$result->fetch_assoc()){
          echo "
      <tr>
        <th>$row[id1]</th>
        <th>$row[id]</th>
        <td>$row[name]</td>
        <td>$row[email]</td>
        <td>$row[status]</td>
        <td>$row[aselect]</td>
        <td>$row[time]</td>
        <td>
                  <a class='btn btn-success' href='edit.php?id=$row[id1]'>Edit</a>
                  <a class='btn btn-danger' href='delete.php?id=$row[id1]'>Delete</a>
                </td>
      </tr>
      ";
        }
      ?>
    </tbody>
  </table>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
  </body>
</html>
