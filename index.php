


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="webpage.css"  rel="stylesheet">
</head>
<body class="index1_signin">
    <form action="index.php" method="post">
    <div class="index1_signin1" >
    <h1>username: </h1>
    <input type="text" name="username1" >
    <h1>password: </h1>
    <input type="password" name="password1" ><br>
    <input  type="submit" value="login">
    </div>

    </form>
</body>
</html>

<?php
  $hostname = "localhost";  // Replace with your database hostname
  $username = "root";  // Replace with your database username
  $password = "";  // Replace with your database password
  $dbname = "connect";  // Replace with your database name
  
  $conn = new mysqli($hostname, $username, $password, $dbname);

    $usernametest =$_POST["username1"];
    $passwordtest =$_POST["password1"];

  $sqle ="SELECT * FROM user ";
  $result =mysqli_query($conn,$sqle);
           while ($row =mysqli_fetch_assoc($result)){
             if($row["username"]==$usernametest && $row["password"]== $passwordtest)  {
             header("location:https://sathiskumarssf.github.io/ecommerce/");
             }    
}
?>