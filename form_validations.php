<!DOCTYPE html>

<?php
$nameErr=$emailErr=$websiteErr=$genderErr=$commentErr=$passwordErr='';
$name=$email=$website=$gender=$comment=$password='';

if (isset($_POST['submit'])) {
 

if (empty($_POST['name'])) {
    $nameErr ="من فضلك ادخل الاسم";
} else {
    $name = $_POST['name'];
}
if (empty($_POST['email'])) {
   $emailErr ="من فضلك ادخل الايميل";
} else {
    $email = $_POST['email'];
}
if (empty($_POST['website'])) {
    $websiteErr ="من فضلك ادخل الموقع الالكترونى";
} else {
    $website =$_POST['website'];
}
if (empty($_POST['gender'])) {
   $genderErr ="من فضل اختر الجنس";
} else {
    $gender =$_POST['gender'];

}
if (empty($_POST['password'])) {
    $passwordErr ="من فضلك ادخل كلمه المرور";

} else {
    $password =$_POST['password'];

}
if (empty($_POST['comment'])) {
    $commentErr ="من فضلك اكتب الملاحظه";

} else {
    $comment =$_POST['comment'];

}
  
}

?>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Form control validation: input</h2>
  <p>The form below contains two input elements; one of type text and one of type password:</p>
  <form action="<?php echo ($_SERVER["PHP_SELF"]);?>" method="post">
                <div class="form-group">
                <label for="usr">Name:</label>
                <input type="text" name="name" class="form-control" id="usr">
                <div style="color:red">
                <?php echo $nameErr;?>
                </div>
                </div>
                <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" name="password" class="form-control" id="pwd">*
                <div style="color:red">
                <?php echo $passwordErr;?>
                </div>
                </div>
                <div class="form-group">
                <label for="Website">Website:</label>
                <input type="text" class="form-control" name="website" id="Website">*
                <div style="color:red">
                <?php echo $websiteErr;?>
                </div>
                </div>
                <div class="form-group">
            <label for="comment">Comment:</label>
            <textarea name="comment" class="form-control" rows="5" id="comment"></textarea>
            <div style="color:red">
                <?php echo $commentErr;?>
                </div>
            </div>
        <div class="form-group mt-2">
            <label for="gender">Geneder:</label>

            <label class="radio-inline" id="gender">
                <input type="radio" name="gender" value="mal">mal 
                </label>
                <label class="radio-inline">
                <input type="radio" name="gender" value="femal">femal 
                </label>
                <label class="radio-inline">
                <input type="radio" name="gender" value="other">other
                </label>
                <div style="color:red">
                <?php echo $genderErr;?>
                </div>
        </div>
        <div class="form-group mt-2">
    <button class="btn btn-primary" name="submit" type="submit">Submit form</button>
        </div>
  </form>

<!-- <form class="row g-3 needs-validation" novalidate>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">First name</label>
    <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Last name</label>
    <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Username</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">City</label>
    <input type="text" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
      Please provide a valid city.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom04" class="form-label">State</label>
    <select class="form-select" id="validationCustom04" required>
      <option selected disabled value="">Choose...</option>
      <option>...</option>
    </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom05" class="form-label">Zip</label>
    <input type="text" class="form-control" id="validationCustom05" required>
    <div class="invalid-feedback">
      Please provide a valid zip.
    </div>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form> -->

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
echo "<br>";
echo $password;
?>
</div>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>
</body>
</html>

<?php 
?>
