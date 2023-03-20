<?php
include("customers.php");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-1.12.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="Style.JS"></script>
<link rel="stylesheet" href="Style.css" />
    <script src="Style.JS"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title>History</title>
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
<button class="tablink" onclick="location.href = 'transactions.php';">Transactions</button>
<button id="defaultOpen" class="tablink" onclick="openPage('history', this, '#FEF3DC')">History</button>
</div>

<div id="history" class="tabcontent">
<div style="overflow-x:auto;">
<div class="browser1"  style="margin: 0 auto;">
  <div>
            <select  name="state" id="maxRows">
                <option value="5000">Show ALL Rows</option>
                <option value="1">1</option>
                <option value="3">3</option>
                <option value="5">5</option>
            </select>
        </div>
        <br>
    
    
        
        <div class="table-responsive">
    <table  id="Tabla">
       <thead>
        <tr class="info">
        <th>Sent From:<span class="hidden-xs"></span></th>
         <th>Sent to:<span class="hidden-xs"></span></th>
         <th>Amount:<span class="hidden-xs"></span></th>
         </tr>
       
    </thead>
    <tbody id="TablaFamilias">
  <?php
      if(is_array($fetchData1)){      
      foreach($fetchData1 as $data1){
    ?>
      <tr>
      <td ><?php echo $data1['from_cust']??''; ?></td>
      <td><?php echo $data1['to_cust']??''; ?></td>
      <td ><?php echo $data1['amount']??''; ?></td>
     </tr>
     <?php
      }}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData1; ?>
  </td>
      </tr>
    <?php
    }?>
    </tbody>
    <tfoot></tfoot>
     </table>
     <div>
                <nav>
                    <ul class="pagination"></ul>
                </nav>
                </div>
        </div>
    </div>
</div>
   </div>
   <footer>
        <p>© 2023 Eman Bellahwal</p>
    </footer>
  </body>
</html>
