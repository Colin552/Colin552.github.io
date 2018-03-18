<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Classword 3</title>
    <link rel="stylesheet" type="text/css" href="styles.css" media="screen"/>
  </head>
  <body>
    <header>
      <h1>Welcome</h1>
    </header>
    <form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <table align="center">
        <tr>
          <td>User Name:</td>
          <td><input type="text" name="user"> <br/></td>
        </tr>
        <tr>
          <td>Password:</td>
          <td><input type="password" name="password"> <br/></td>
        </tr>
        <tr>
          <td><input type="submit" value="Submit"></td>
          <td align="right"><input type="reset" value="Reset"></td>
        </tr>
        <tr>
          <td colspan="2" align="center"><?php echo $error?></td>
        </tr>
      </table>
    </form>

  </body>
</html>
<?php
  ob_start();
  $userName = "test";
  $password = "test";
  $error = "";

  if ($_SERVER['REQUEST_METHOD'] == "POST")
  {
    if ($_POST['user'] == $userName)
    {
      if ($_POST['password'] == $password)
      {
        header("Location: cw3info.html");
      }
      else
      {
        $error.= "Password does not match";
      }
    }
    else
    {
      $error .= "User name does not match";
    }
  }
?>
