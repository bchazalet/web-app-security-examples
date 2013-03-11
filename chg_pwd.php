<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php echo '<p>SQL injection demo 1</p>'; ?>
    <?php
      $con = mysql_connect("localhost","sqli","sqli");
      if (!$con) {
        die('Could not connect: ' . mysql_error());
      }
      mysql_select_db("sqliexample", $con);
      $id = $_GET['id']; // No input validation!!
      $pwd = $_GET['pwd'];
      $result = mysql_query("UPDATE user SET password = $pwd WHERE id=$id", $con);
    
      mysql_close($con);

      if($result) echo "Done";

    ?>

  </body>
</html>

