<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form id="adminform" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="Password">Password:</label>
            <input type="text"  name="password" required>
            
            <input type="submit" id="bu" name="submit"  required>
        </form>
        <?php 
    session_start();
    require_once('connect.php');
    require_once('config.php');
    if(isset($_POST['submit'])){
        $u=$_POST['name'];
        $p=$_POST['password'];
 
        $sql="select * from admins where nameD='$u' and password='$p' ";
        $result=$con->query($sql);
        $result->execute();
        if($result->num_rows>0){
              
            header("Location:admin.php");
            
        
        }else{
            echo"failed try again";
        }

    }
    
    ?>
    
</body>
</html>
