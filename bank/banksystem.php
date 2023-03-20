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
<title>Home Page</title>
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
      <button id="defaultOpen" class="tablink" onclick="openPage('AboutUs', this, '#FEF3DC')">About Us</button>
<button class="tablink" onclick="location.href = 'customers_list.php';">Customers</button>
<button class="tablink" onclick="location.href = 'transactions.php';" >Transactions</button>
<button class="tablink" onclick="location.href = 'history.php';">History</button>
</div>

<div id="AboutUs" class="tabcontent">
<div style="overflow-x:auto;">
<div class="browser1"  style="margin: 0 auto;">
<h2> GRIP|The Sparks Foundation</h2>
<h3> Eman Ahmed Bellahwal</h3>
  
  <h3>Web Development Internship</h3>
  <h4>#GRIPMARCH2023</h4>
  <h4>Task1:Basic Banking System</h4>
<img src="sparks_logo.png" width="200" height="200"><br><br>
<button Style="width:100px; height:40px; font-size:20px; font-family:Garamondn; "><a href="https://www.thesparksfoundationsingapore.org/"> About Us</a></button>
  </div>
</div>
</div>


<footer>
        <p>© 2023 Eman Bellahwal</p>
    </footer>
    </body>
</html>

