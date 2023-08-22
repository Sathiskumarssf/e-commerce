<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>web desine</title>
  <link rel="stylesheet" href="webpage.css">
</head>
<body>
    <form action="index1.php" method="post" >
  <div class="main">
    <div class="navbar">
      <div id="logo">
      <img  style="width: 200px;height: 80px;padding: 30px;" src="https://tse2.mm.bing.net/th?id=OIP.ucnOd4coGtVdRBljPYGJCgHaEK&pid=Api&P=0&h=180" alt="">
      </div>
      <div class="manu">
        <ul>
          <li><a href="#">HOME</a></li>
          <li><a href="#">ABOUT</a></li>
          <li><a href="#">SERVICE</a></li>
          <li><a href="#">DESING</a></li>
          <li><a href="#">CONTECT</a></li>
        </ul>
      </div>
      
      <div class="contect">
            <p class="vv">wel come to &<br><span>foodies</span><br>website</p>
            <p class="par">As a family-owned restaurant, we pride ourselves on giving our customers nothing but the absolute best. Choosing Foodies is like having holiday dinner with family: all the entrées, appetizers, and sweet treats you could imagine</p>
              </div>
             <div class="from">
              <h2>Login Here</h2>
              <input type="text" name="id" placeholder="Enter your id"><br>
              <input type="text" name="username" placeholder="Enter username here"><br>
              <input type="password" name="password" placeholder="Enter password" >
              <button class="btn" name="submit">login</a></button>
             </div>
     

    </div>
    
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

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    
}


if(isset($_POST["submit"])){
    echo "hai";
    try{
        $id =$_POST["id"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        if(!empty($id)&& !empty($username)&&  !empty($password)){
        $sql = "INSERT INTO user (id,username, password) VALUES ('$id','$username' ,'$password')";
        mysqli_query($conn,$sql);
        header("location: index.php");

    }else{
        
      
    }
    } catch(error){
        echo"error occur";
    }
}


   
mysqli_close($conn);
?>
