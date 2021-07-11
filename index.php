<?php
 
$firstNameErr = $ageErr = "";
$firstName = $lastName = $age = "";
$lastName = test_input($_POST["lastName"]);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["firstName"])) {
    $firstNameErr = "First name is required";
  } else {
    $firstName = ($_POST["firstName"]);
  }

  if (empty($_POST["age"])) {
    $ageErr = "Age is required";
  } else {
    $age = test_input($_POST["age"]);
  }
}
 
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
 
<form method="post">
    <div class="mb-3">
        <label for="firstName" class="form-label">Fist Name</label>
        <input type="text" name="firstName" class="form-control" id="firstName" required="required">
    </div>
    <div class="mb-3">
        <label for="lastName" class="form-label">Last Name</label>
        <input type="text" name="lastName" class="form-control" id="lastName">
    </div>
    <div class="mb-3">
        <label for="age" class="form-label">Age</label>
        <input type="text" name="age" class="form-control" id="age" required="required">
    </div>
    <button type="submit" class="btn btn-primary">нажми меня нежно</button>
</form>
 
</body>
</html>

<?php
echo "<h2>Приятно познакомиться:</h2>";
echo $firstName;
echo "<br>";
echo $lastName;
echo "<br>";
echo $age;
?>
