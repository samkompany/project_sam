<?php

session_start();

try{

$base1 = new PDO("mysql:host=localhost;dbname=test","root","");

if(isset($_POST['en'])){

$_requette1 = $base1 ->prepare("SELECT * FROM information");
$_requette1 ->execute();
$t = [];

while($a = $_requette1 -> fetch()){
    array_push($tab,$t);
}


}





}catch(Exception $e ){
    $_SESSION['update_base'] = 1;

}