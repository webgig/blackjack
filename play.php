<?php
require 'vendor/autoload.php';

//error_reporting(E_ALL && ~ E_NOTICE);
use BlackJack\Card;

if(isset($_POST)):


    try{
        $c  = new Card(trim($_POST['card1']));
        $c1 = new Card(trim($_POST['card2']));

        echo $c->getFaceValue()+ $c1->getFaceValue();

    } catch(\Exception $e){
        echo $e->getMessage();
    }

endif;

?>
