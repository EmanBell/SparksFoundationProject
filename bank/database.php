<?php
$servername = "localhost";
// Enter your MySQL username below(default=root)
$username = "root";
// Enter your MySQL password below
$password = "";
$dbname = "bank";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    header("location:connection_error.php?error=$conn->connect_error");
    die($conn->connect_error);
}

if(isset($_POST['submit'])) {
 
$from_cust = $_POST['from_cust'];
$to_cust = $_POST['to_cust'];
$amount = intval($_POST['amount']);



if($from_cust != $to_cust){
$sql0="SELECT Balance from customers WHERE First_Name='$from_cust'";
$result = mysqli_query($conn,$sql0);

$sql = "INSERT INTO transactions (from_cust, to_cust, amount) 
VALUES (  '$from_cust','$to_cust','$amount' )";

$sql2="UPDATE customers
SET Balance=Balance-$amount
WHERE First_Name='$from_cust'";

$sql3="UPDATE customers
SET Balance=Balance+$amount
WHERE First_Name='$to_cust'";


if(mysqli_num_rows($result) > 0)
{
     while($fetch = mysqli_fetch_assoc($result))
     {
           if($fetch['Balance'] <$amount)
           {
            echo '<script>alert("Not Enough Balance!")</script>';
           }
           else 
           { 
            if(mysqli_query($conn, $sql)){

                mysqli_query($conn, $sql2);
                
                mysqli_query($conn, $sql3);
            echo '<script>alert("Transaction Complete! ")</script>';

        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
        
           }

     }
}

}
else if($from_cust == $to_cust)
{
    echo '<script>alert("You Cannot Send to the Same Customer! ")</script>';
    
} 

 
     

}





