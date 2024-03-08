<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>University Management System</title>
</head>
<body>
    <div class="container">
        <h1>Student Registration</h1>
        
        <form id="registrationForm" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="Password">Password:</label>
            <input type="text"  name="password" required>
            
            <input type="submit" id="bu" name="submit"  required>
        </form>
  <h2>Registered Students</h2>
        <ul id="studentList"></ul>
        <br><br>
        <a href="http:loginadmin.php">admin?</a>
    </div>
    <?php 
    session_start();
    require_once('connect.php');
    require_once('config.php');
    if(isset($_POST['submit'])){
        $u=$_POST['name'];
        $p=$_POST['password'];
 
        $sql="select * from student where name='$u' and pass='$p' ";
        $ID="select idS from student where name='$u' and pass='$p' ";
        $result=$con->query($sql);
        $result->execute();
        if($result->num_rows>0){
              
            header("Location:welcom.php");
            $_SESSION['ids']=$ID;
            
        
        }else{
            echo"failed try again";
        }

    }
    
    ?>
 

    
</body>
</html>
