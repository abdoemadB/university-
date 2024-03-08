<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
  </head>
  <body>
    <h2>Regrsetr A New Student</h2>
    <form method="post"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
       Name : <input type="text" value="" name="name"><br><br>
      password : <input type="password" value="" name="pass"><br><br>
     
      
      <select name="courses[]" size="3" multiple>
        <option>Comp102</option>
        <option>Comp104</option>
        <option>Comp206</option>
      </select><br><br>
      <input type="submit" value="Regestier" name="submit">
      <a href="ADDSTUDENT.php">Cancel</a>
    </form>
    <?php 
    require_once('connect.php');
    if(isset($_POST['submit'])){
      $Q1='insert into  student(name,,pass) values(:n,,:p)';
      $Stat=$con->prepare($Q1);
      $Stat ->execute(array(
        ':n' => $_POST['name'],
        ':p' => $_POST['pass']
        
      )
      );
      $ID=$con->lastInsertId();
      $course = $_POST['courses'];
      
     
      foreach($course as $c)
      {
        $Q2 = 'insert into  student_courses (id_s,id_c) Values (:id , :c)';
        $Stamtment2 = $conn->prepare($Q2);
        $Stamtment2->execute(array(
          ':id' => $ID,
          ':c' =>$c
        )
        );
      }


    }

    
    
    ?>