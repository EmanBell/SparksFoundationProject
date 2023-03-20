<?php

include("customers.php");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-1.12.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="Style.css" />
<script src="Style.JS"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Transactions</title>
</head>
<body>
<div class="header">
         <img src="transaction_pink1.png" width="200" height="200">
         <h1 style="color:#FBA90A; font-family:Copperplate,fantasy; font-size:50px;">
         SparkBank
        </h1>
        <p style="font-size:30px; font-family:Copperplate,fantasy; color:#9C6902;">
        Make Your Transactions at Ease
      </p>
      </div>
      <div>
      <button class="tablink" onclick="location.href = 'banksystem.php';">About Us</button>
<button class="tablink" onclick="location.href = 'customers_list.php';">Customers</button>
<button id="defaultOpen" class="tablink" onclick="openPage('Transactions', this, '#FEF3DC')">Transactions</button>
<button class="tablink" onclick="location.href = 'history.php';">History</button>
</div>

<div id="Transactions" class="tabcontent">
<div style="overflow-x:auto;">
    <div class="browser1"  style="margin: 0 auto;">

 
  <p style="font-weight: bold;">Notes:</p><p>
    1.Transfer To and From CANNOT have the same Values
    <br>
    2.You Cannot Transfer If Customer's Balance Isn't Enough</p>
    <br><br>
  <form method="post" action="transactions.php">
    
<label for="from_cust">Transfer From:</label>

<select class="Select" name="from_cust" id="from_cust" required >
<option value="">Please Select A Customer</option>
<?php
    if(is_array($fetchData)){      
    
    foreach($fetchData as $data){
  ?>
<option>
  <?php echo $data['First_Name']??''; ?></option>
  <?php
    }}else{ ?>
    <?php echo $fetchData; ?>
    <?php
  }?>
</select>
<br><br>


<label for="to_cust" >Transfer To:  </label>
<select class="Select" name="to_cust" id="to_cust" required>
<option value="">Please Select A Customer</option>

<?php
    if(is_array($fetchData)){      
    $sn=1;
    foreach($fetchData as $data){
  ?>
<option>
  <?php echo $data['First_Name']??''; ?></option>
  <?php
    $sn++;}}else{ ?>
    <?php echo $fetchData; ?>
    <?php
  }?>
</select>
<br><br>


<label for="amount">Amount:   </label>
<input class="amount" type="text" id="amount" name="amount" Value="" required >
<br><br>
<input Style="Color:Black;" name = "submit" type = "submit"  id = "submit" value = "Transfer" >
</form>
  </div>
  </div>
</div>
  <footer>
        <p>© 2023 Eman Bellahwal</p>
    </footer>
  </body>
</html>