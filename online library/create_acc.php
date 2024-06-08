<!DOCTYPE html>
<html>

<head>
    <title>register</title>
    <link rel="stylesheet" href="styles.css" />
</head>

<body>

    <script>
        function validate() {
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;
            var Repassword = document.getElementById('Repassword').value;
            var validationResult = document.getElementById('validationResult');
            var validationpassword = document.getElementById('validationpassword');
            var validationrepassword = document.getElementById('validationrepassword');
            var validationmail = document.getElementById('validationmail');


            // Clear previous error messages
            validationmail.innerText = '';
            validationpassword.innerText = '';
            validationrepassword.innerText = '';
            validationResult.innerText = '';

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

            if (password === Repassword) {
                validationResult.innerText = 'Account Created ';
            }
            else {
                // If both email and password are valid
                validationrepassword.innerText = 'password doesnot match';
            }
        }
    </script>


    <div class="container">
        <form action="con13.php" method="post">
            <h2>Create Account</h2>
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
            <div class="input-field">
                <input type="password" id="Repassword" required />
                <label>Re-Enter password</label>
            </div>
            <p id="validationrepassword"></p>
            <button type="submit" onclick="validate()">CREATE</button>
            <div class="Create-account">
                <p>For login? <a href="login.html">LOGIN</a></p>
            </div>
            <p id="validationResult"></p>
        </form>
    </div>
</body>

</html>