<!DOCTYPE html>
  
<head>
    <title>Резюме</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive HTML5 Resume/CV Template for Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    
	<link rel="shortcut icon" href="favicon.ico">  
    
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,500,400italic,300italic,300,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    
	<!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    
	<!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">  
    <style>
        .c{margin-left: 5%; width: 300px; border: 2px solid black;padding-left: 10px;}
        button{margin-bottom: 10px;}
        .error{border: 2px solid black; border-color: red;}
        err{color: red; font-size: 120%;}        
        .telErr{background-color: black; width: 25px; height: 25px; float: right;margin-right: 150px;}
        .field{border: 0px;}
        .errorField{border: 2px solid black; border-color: red; padding-left: 10px;width: 180px;}
        .btn{float: left;font-size:120%;border: 2px solid black; background-color: lightgreen}
    </style>  
</head> 
<?php
require_once "function.php";
$data = require_once "data.php";
  
?>
<input class='btn' type="button" value="Назад" onClick='location.href="index.php"'>
  
  
<form method="post">
<div class='c col-sm-3'>  
<?php  

$txt = file_get_contents("1.txt");
echo nl2br($txt);

?>
</div>

<div class='c col-sm-3'>
<?php  

$s4 = file_get_contents("1.json");
$ar1 = json_decode($s4, true); 
echo nl2br($s4);

?>
</div>
<div class='c col-sm-3'>
<?php  

$s4 = file_get_contents("1.csv");
echo nl2br($s4);
?>
</div>


    </form>      
</body>
</html> 
























