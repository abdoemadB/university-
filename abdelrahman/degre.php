<?php
  require_once 'connect.php';
  echo('<form method="POST">');
  echo'studentid : <input type="number" name="id" >';
  echo('<br>') ; 
  echo('<br>') ; 
  echo'studentidcourse : <input type="number" name="course" >';
  echo('<br>') ; 
  echo('<br>') ; 
  echo('<br>') ; 
  echo( 'Mark : <input type="number" name="mark" >') ; 
  echo('<br><br>') ; 
  echo('<input type="submit" name="submit" value="Update" >');
  echo('<a href="degre.php"> Cancel</a>') ; 
  echo('</form>') ; 
  if(isset($_POST['submit']))
  {
    $updatemark = 'update student_courses 
                  set mark = :M
                  where id_s = :id and id_c=:course';
    $stat5 = $con->prepare($updatemark);
    $stat5->execute(array(
      ':M' => $_POST['mark'],
      ':id' => htmlentities($_GET["id"]),
      ':course' => htmlentities($_GET["course"])
  )
  );
  if($stat5->execute()){
    echo "Student mark have been updated successfully" ; 
  }
  }
?>