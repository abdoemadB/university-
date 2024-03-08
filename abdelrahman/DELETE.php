<?php
  require_once 'connect.php';
  echo "<h2>Delete The ID Of Student</h2>";
  echo "<form method='post'>";
  echo "ID Delete: <input type='text' name='iddelete'value=''><br><br>";
  echo "<input type='submit' name='submitdelete'value='Delete'>";
  echo "</form>";

  if(isset($_POST['submitdelete']))
  {
    $Q3 = 'delete from student where  idS  = :i';
    $sta = $con->prepare($Q3);
    $sta ->execute(array(
      ':i' =>$_POST['iddelete']
    )
    );
  }
?>