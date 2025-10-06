<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Login Page</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        background: #f4f4f4;
      }
      .login-container {
        width: 300px;
        margin: 100px auto;
        padding: 20px;
        background: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px #ccc;
      }
      input[type="text"],
      input[type="password"] {
        width: 100%;
        padding: 10px;
        margin: 8px 0;
        box-sizing: border-box;
      }
      input[type="submit"] {
        width: 100%;
        padding: 10px;
        background: #007bff;
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
      }
      input[type="submit"]:hover {
        background: #0056b3;
      }
    </style>
  </head>
  <body>
    <div class="login-container">
      <h2>Login</h2>
      <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = isset($_POST['username']) ? htmlspecialchars($_POST['username']) : '';
        $password = isset($_POST['password']) ? htmlspecialchars($_POST['password']) : '';
        if ($username && $password) {
          if ($username === 'admin' && $password === 'password') {
            echo '<p style="color:green;">Login successful!</p>';
          } else {
            echo '<p style="color:red;">Invalid username or password.</p>';
          }
        }
      } ?>
      <form action="index.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required />
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required />
        <input type="submit" value="Login" />
      </form>
    </div>
  </body>
</html>
