
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="login.css">
    <title>LogIn</title>
</head>
<body>

    <div class="main">
        <h1>Phoenix Telcom.</h1>
        <h3>Enter your Number</h3>
        <form action="details.php" method="POST">
            <label for="first">
                  Telephone Number:
              </label>
            <input type="tel";
                   id="first"
                   name="number"
                   placeholder="Enter your number" required>
            <div class="wrap">
            <input type="submit" value="submit" class="button" name="submit">
            </div>
            <div class="new">
                Not registered? <a href="signup.php">Sign Up</a>
            </div>
            <div class="new">
                 <a href="index.php">Back</a>
            </div>
        </form>
    </div>

</body>
</html>