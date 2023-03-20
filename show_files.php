<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>show files</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
<div id="user" style="padding-top:50px;margin:auto; width:50%;" class="table rounded table-bordered border-primary">
<table  class="table rounded table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">file name</th>
      <th scope="col">pic </th>
      <th scope="col">edit</th>
      <th scope="col">delete</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <?php
    require 'connect.php';
    $select= "SELECT * FROM uploads";
    $query = mysqli_query($conn,$select);
    if (mysqli_num_rows($query)>0) {
    while($row= mysqli_fetch_array($query)){
        echo "<tr>";
        echo "<td>".$row["id"]."</td>";
        echo "<td>".$row["file_name"]."</td>";
        echo "<td><img src='Attachments/"
        .$row["file_name"]."' width=200 height=100></td>";
        echo "<td><a href='edit_pic.php?pid=".$row["id"]."' class='btn btn-outline-success' role='button' aria-pressed ='true'>Edit</a></td>";
        echo "<td><a  href='delete_files.php?pid=".$row["id"]."' class='btn btn-outline-danger' role='button' aria-pressed ='true'>Delete</a></td>";
    
        echo "</tr>";
    }
    } else {
    echo"no data";
    }


  ?>
 
  </tbody>
</table>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>