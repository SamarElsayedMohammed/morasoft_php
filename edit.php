<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>edit user </title>
</head>
<body>
<?php
if (isset($_GET['pid'])) {
    $id =$_GET['pid'];
    require 'connect.php';

    $select =mysqli_query($conn,"SELECT * FROM users WHERE id='$id'");
    $row = mysqli_fetch_array($select);

 
?>

<div class="container" style="margin: auto;">

<!-- Credit card form -->
<section>
  <div class="row">
    <div class="col-md-8 mb-4">
      <div class="card mb-4">
        <div class="card-header py-3">
          <h5 class="mb-0">user details</h5>
        </div>
        <div class="card-body">
          <form method="POST" action="update.php">
          
            <!-- Text input -->
            <div class="form-outline mb-4">
              <input type="text" id="form6Example3" class="form-control" name="username" value="<?php echo $row["username"] ;?>"/>
              <label class="form-label" for="form6Example3">user name</label>
            </div>

            <!-- Text input -->
            <div class="form-outline mb-4">
              <input type="text" id="form6Example4" class="form-control" name="password" value="<?php echo $row["password"] ;?>" />
              <label class="form-label" for="form6Example4">password</label>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="form6Example5" class="form-control" name="email" value="<?php echo $row["email"] ;?>"/>
              <label class="form-label" for="form6Example5">Email</label>
            </div>

         <input type="hidden" name="id" value="<?php echo $row["id"] ;?>">

            <hr class="my-4" />

            <button class="btn btn-primary btn-lg btn-block" type="submit">
              Continue to save
            </button>
          </form>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-4">
      <div class="card mb-4">
        <div class="card-header py-3">
          <h5 class="mb-0">Summary</h5>
        </div>
        <div class="card-body">
          <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
              user name
              <span><?php echo $row["username"] ;?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
              Email
              <span><?php echo $row["email"] ;?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
              password
              <span><?php echo $row["password"] ;?></span>
            </li>
            
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Credit card form -->
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
<?php
}else{
    echo "no data";
}
?>