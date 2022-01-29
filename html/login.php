<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Login</title>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>

<body>
  <center>
    <h1>Welcome to the matrix!</h1>
    <hr>

    <?php 
      for($i = 0; $i < 2; $i++) {
        echo '<br />';
      }
    ?>
    
    <form method="POST" action="login_validate.php">
      <table width="500px">
        <tr>
          <td>Username</td>
          <td><input type="text" name="username" /> </td>
        </tr>

        <tr>
          <td>Password</td>
          <td><input type="password" name="password" /> </td>
        </tr>

        <tr>
          <td colspan="2"> <input value="Login!" type="submit"> </td>
        </tr>
      </table>

    </form>
  </center>
</body>
</html>