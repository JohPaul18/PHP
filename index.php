<?php
include "NewSystem.php";
?>

<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<style>
    body {
      background-image: url('pexels-elia-clerici-912110.jpg');
 
    }
	</style>

</head>
<body>

<div class="col-lg-4">
<div class="container">
  <h2><font color="black">Database System</h2>
  <form action="" name="Paul" method="post">
    <div class="form-group">
      <label for="email">First Name:</label>
      <input type="text" class="form-control" id="FirstName" placeholder="Enter FirstName" name="FirstName">
    </div>
    <div class="form-group">
      <label for="pwd">Last Name:</label>
      <input type="text" class="form-control" id="LastName" placeholder="Enter LastName" name="LastName">
    </div>
    <div class="form-group">
      <label for="pwd">Email:</label>
      <input type="text" class="form-control" id="Email" placeholder="Enter Email" name="Email">
    </div>
    <div class="form-group">
      <label for="pwd">Phone Number:</label>
      <input type="text" class="form-control" id="PhoneNumber" placeholder="Enter PhoneNumber" name="PhoneNumber">
    </div>
    <button type="submit" name="Insert" class="btn btn-default">Insert</button>
    <button type="submit" name="Delete" class="btn btn-default">Delete</button>
    <button type="submit" name="Update" class="btn btn-default">Update</button>
  </form>
</div>
</div>

<div class="col-lg-12">
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>PhoneNumber</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $res = mysqli_query($link, "SELECT * FROM table1");
      while ($row = mysqli_fetch_array($res)) {
        echo "<tr>";
        echo "<td>" . $row["Id"] . "</td>";
        echo "<td>" . $row["FirstName"] . "</td>";
        echo "<td>" . $row["LastName"] . "</td>";
        echo "<td>" . $row["Email"] . "</td>";
        echo "<td>" . $row["PhoneNumber"] . "</td>";
        echo "</tr>";
      }
      ?>
    </tbody>
  </table>
</div>

</body>
</html>

<?php
if (isset($_POST["Insert"])) {
    mysqli_query($link, " insert into table1 values (NULL,'$_POST[FirstName]', '$_POST[LastName]', '$_POST[Email]', '$_POST[PhoneNumber]')");
}
?>