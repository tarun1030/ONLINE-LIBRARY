<!DOCTYPE html>
<html>

<head>
  <title>LOGIN PAGE</title>
  <link rel="stylesheet" href="styles.css" />
</head>

<body>

  <script>
    function validate() {
      var email = document.getElementById('email').value;
      var password = document.getElementById('password').value;
      var validationResult = document.getElementById('validationResult');
      var validationpassword = document.getElementById('validationpassword');
      var validationmail = document.getElementById('validationmail');

      validationmail.innerText = '';
      validationpassword.innerText = '';
      validationResult.innerText = ''

      // Email validation using a simple regular expression
      var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(email)) {
        validationmail.innerText = 'Invalid email address';
        return;
      }
      // Password validation (minimum 8 characters)
      if (password.length < 8) {
        validationpassword.innerText = 'Password must be at least 8 characters long';
        return;
      }

      // If both email and password are valid
      validationResult.innerText = 'Validation successful!';
      window.location.href = 'index-2.html'; // Replace 'new_page.html' with the URL of the page you want to redirect to
    }
  </script>


  <div class="container">
    <form action="con12.php" method="post">
      <h2>Login page</h2>
      <div class="input-field">
        <input type="text" id="email" required />
        <label>Enter email</label>
      </div>
      <p id="validationmail"></p>
      <div class="input-field">
        <input type="password" id="password" required />
        <label>Enter password</label>
      </div>
      <p id="validationpassword"></p>
      <button type="submit" onclick="validate()">Log In</a></button>
      <div class="Create-account">
        <p>Don't have an account? <a href="create_acc.php">Create account</a></p>
      </div>
      <p id="validationResult"></p>
    </form>
  </div>
</body>

</html>