<?php
    include("connection.php");

    if(isset($_POST['submit'])){
    
        $number = $_POST['number'];
        $check="SELECT * FROM users WHERE number='$number'";
        $mydata=mysqli_query($conn, $check);
        $total=mysqli_num_rows($mydata);
        $result = mysqli_fetch_assoc($mydata);
       
    
    }
    
    
    if($total){
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="details.css">
    <title>LogIn</title>
</head>
<body>
        <div class="card">
        <div class="container">
            <h4>Phoenix Telcom</h4>
            <h5>Summary</h5>
          <p>Name:  <?php echo $result['name']; ?></p>
          <p>Number:  <?php echo $result['number']; ?></p>
          <p>Email:  <?php echo $result['email']; ?></p>
          <p>Address:  <?php echo $result['address']; ?></p>
          <p>Plan Selected(Rs.):  <?php echo $result['bill']; ?></p>
          <div class="return">
            <a href="index.php">Back</a>
          </div>
        </div>
      </div>
      <?php
   // echo $result['name']. " ".$result['number']. " ".$result['email']. " ".$result['address']. " ".$result['bill'] ;
    }else{
        echo "login failed";
     }
?>
</body>
</html>