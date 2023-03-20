<?php
include("database.php");
$db= $conn;
$tableName="customers";
$columns= ['ID', 'First_Name','Email','Balance'];
$fetchData = fetch_data($db, $tableName, $columns);
function fetch_data($db, $tableName, $columns){
   if(empty($db)){
    $msg= "Database connection error";
   }elseif (empty($columns) || !is_array($columns)) {
    $msg="columns Name must be defined in an indexed array";
   }elseif(empty($tableName)){
     $msg= "Table Name is empty";
  }else{
  $columnName = implode(", ", $columns);
  $query = "SELECT ".$columnName." FROM $tableName"." ";
  $result = $db->query($query);
  if($result== true){ 
   if ($result->num_rows > 0) {
      $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
      $msg= $row;
   } else {
      $msg= "No Data Found"; 
   }}else{
      $msg= mysqli_error($db);
    }
    }
    return $msg;
    }
    
    
    
    $tableName1="transactions";
$columns1= ['from_cust', 'to_cust','amount'];
$fetchData1 = fetch_data1($db, $tableName1, $columns1);
function fetch_data1($db, $tableName1, $columns1){
   if(empty($db)){
    $msg= "Database connection error";
   }elseif (empty($columns1) || !is_array($columns1)) {
    $msg="columns Name must be defined in an indexed array";
   }elseif(empty($tableName1)){
     $msg= "Table Name is empty";
  }else{
  $columnName = implode(", ", $columns1);
  $query = "SELECT ".$columnName." FROM $tableName1"." ";
  $result = $db->query($query);
  if($result== true){ 
   if ($result->num_rows > 0) {
      $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
      $msg= $row;
   } else {
      $msg= "No Data Found"; 
   }}else{
      $msg= mysqli_error($db);
    }
    }
    return $msg;
    }
    ?>
   