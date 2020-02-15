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
        .container{margin-left: 33%; width: 300px; border: 2px solid black;}
        button{margin-bottom: 10px;}
        .error{border: 2px solid black; border-color: red;}
        err{color: red; font-size: 120%;}        
        .telErr{background-color: black; width: 25px; height: 25px; float: right;margin-right: 150px;}
        .field{border: 0px;}
        .errorField{border: 2px solid black; border-color: red; padding-left: 10px;width: 180px;}
    </style>  
</head> 
<?php
require_once "function.php";
$data = require_once "data.php";

$options = $data["option"];
$languages = $data["languages"];
$radio = $data["radio"];
//$name = $data["name"];
$mySelect = $data["mySelect"];  



    $name =  $_POST['name']??"";
    $number =  $_POST['number']??"";
    $email = $_POST['email']??"";
    $item_list =  $_POST['item_list']??"";
    $lang = $_POST['lang']??[];
    $edu = $_POST['edu']??"";

  
?>
<div class='container'> 
<form method="post">
<?php   
//Имя
$n = preg_match_all('/\\d/',$name); 
    $error = 'name';   
    $nn = preg_match('/^[А-ЯЁA-Z][а-яa-z]{1,15}/u',$name);
    if($nn == 'false'){$error = 'error';}
    else{$error = 'name';}

//Телефон
$num[0] = preg_match_all('/\\d/',$number);  
$pattern='/\\+?[78]{1}\([0-9]{3}\)[0-9]{3}-[0-9]{2}-[0-9]{2}/';
$num[1] = preg_match($pattern, $number);
$errorNum = 'name';  
if($num[0] != 11 || $num[1] != 1){$errorNum = 'error';}
else{$errorNum = 'name';}   
//E-mail
$e = filter_var(filter_var(trim($email), FILTER_SANITIZE_EMAIL),FILTER_VALIDATE_EMAIL);
if(!$e ){$errorEMail = 'error';}
else{$errorEmail = 'name';}

//Язык
if($lang == []){$langErr = 'errorField';}else{$langErr = "field";}
//Образование
if($edu == ""){$eduErr = 'errorField';}else{$eduErr = "field";}
//Запись в файл
$send = [];
$fN = $name;
$fEm = $email;
$fP = $number;
if($error == 'name' && $errorNum == 'name' && $errorEmail == 'name' && 
$langErr == "field" && $eduErr = "field"){
    $ll = dumpArrayR($lang);    
    
    array_push($send, "$name\r\n$email\r\n$number\r\n$ll\r\n$edu\r\n_________________________________\r\n");
    
}
$kes = dumpArrayR($send);
///Запись в файл
file_put_contents("1.txt", $kes,FILE_APPEND);

?><err <?=($num[0] != 11 || $num[1] != 1 || $nn == 'false' || $lang == [])?"":"hidden"?>>Ошибка! Неверно введены данные!</err>
    <h4>Имя:</h4>   
    <input type='text' class='<?= $error ?>' name='name' value='<?= $name ?>'>  
    
    <h4>Телефон:<h6>(В формате: +7(9**)***-**-**)</h6></h4>   
    <input type='phone' class='<?= $errorNum ?>' name='number' 
    value='<?= $number ?>'>

    <h4>E-mail:</h4>   
    <input type='text' class='<?= $errorEMail ?>' name='email' value='<?= $email ?>'>

    <h4>Страна:</h4>
    <select name='item_list'>
        <?php foreach($mySelect as $item):?>
        <option value="<?=$item?>" <?=($item==$item_list)?"selected":""?>
        <?=($item==$item_list)?$fC=$item:""?>>
        <?=$item?>
        </option>
        <?php endforeach; ?>
    </select>

    <div class='<?=$langErr?>'>
    <h4>Язык:</h4>
    <?php foreach ($languages as $item): ?>
    <input type='checkbox' name="lang[]" value='<?=$item?>' id='<?=$item?>'
    <?=$ss = in_array($item,$lang)?"checked":"";?>
    <?=$sss = in_array($item,$lang)?$fL = $item:"";
   
    ?>>
    <label for='<?=$item?>'>
    <?=$item?></label><br>
    <?php endforeach; ?> 
    </div>

    <div class='<?=$eduErr?>'>
    <h4>Образование:</h4>
    <?php foreach ($radio as $item): ?>
    <input type='radio' name="edu" value='<?=$item?>' id='<?=$item?>'
    <?=($item==$edu)?"checked":""?>
    <?=($item==$edu)?$fE = $item:""?>>
    <?=$item?><br>
    <?php endforeach; ?><br>
    </div>


    <button onclick='ok()'>Отправить</button>
    <input type="button" value="Посмотреть" onClick='location.href="index1.php"'>
     
</form>
</div>           
</body>
</html> 
























