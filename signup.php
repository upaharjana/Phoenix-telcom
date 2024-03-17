
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta number="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <title>Register</title>
</head>
<body>

    <div class="main">
        <h1>Phoenix Telcom.</h1>
        
        <form action="signup.php" method="POST">
            <label for="name">
                  Name:
              </label>
            <input type="text"
                   id="name"
                   name="name"
                   placeholder="Enter your name" required>
            
                   <label for="first">
                    Telephone Number:
                </label>
              <input type="tel"
                     id="number"
                     name="number"
                     placeholder="Enter your number" required>
                   
                     <label for="email">
                        Email:
                    </label>
                  <input type="email"
                         id="email"
                         name="email"
                         placeholder="Enter your email" required>
                  
                         <label for="address">
                            Address:
                        </label>
                      <input type="text"
                             id="address"
                             name="address"
                             placeholder="Enter your address" required>

             <label for="bill">
                  Plan:
              </label>
            <input type="tel"
                   id="bill"
                   name="bill"
                   placeholder="Enter Plan Amount" required>
                       

            <div class="wrap">
            <input type="submit" value="submit" class="button" name="submit">
            </div>
            <div class="new">
                Already registered? <a href="login.php">Log In</a>
            </div>
            <div class="new">
                 <a href="index.php">Back</a>
            </div>

        </form>
    </div>

        <?php
        if(isset($_POST["submit"])){
            include "connection.php";
            $name= $_POST["name"];
            $number = $_POST["number"];
            $email= $_POST["email"];
            $address= $_POST["address"];
            $bill=$_POST["bill"];
        
            $query = "INSERT INTO users VALUES ('$name','$number','$email','$address','$bill')";
            $data = mysqli_query($conn, $query);
        
    if($data){
        ?>
        <div class="dataRecord">
            
           <h3>  Thank You For Choosing Phoenix!</h3>
           
          </div>
        <?php
    }else{
        echo "failed";
         }
      }
    ?>
    
</body>
</html>
</body>
</html>