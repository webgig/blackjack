<?php
error_reporting(E_ALL && ~ E_NOTICE);

require 'vendor/autoload.php';

use BlackJack\Card;

if(isset($_POST)):


    try{

        // Some basic validations
        if(!$_POST['card1'])
            throw new \Exception("Please provide value Card1");
        else if(!$_POST['card2'])
            throw new \Exception("Please provide value Card2");

        $c  = new Card(trim($_POST['card1'])); // Card1
        $c1 = new Card(trim($_POST['card2'])); // Card2


        //Add the total values to get the total results
        $result =  $c->getFaceValue()+ $c1->getFaceValue();

    } catch(\Exception $e){
        //Catch any exceptions
        $error =  $e->getMessage();
    }

endif;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>BlackJack</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="http://getbootstrap.com/examples/jumbotron-narrow/jumbotron-narrow.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>


    </head>
    <body>
    <div class="container">
        <div class="header">
            <h3 class="text-muted">BlackJack</h3>
        </div>
        <div class="jumbotron">
        <?php if($error):?>
            <div class="alert alert-danger" role="alert">
              <?php echo $error;?>
            </div>
            <a  onclick="javascript:history.go(-1)" class="btn btn-default dropdown-toggle">Back</a>
        <?php elseif($result):?>
            <div class="alert alert-success" role="alert">
              <h2>The score is</h2> <h1><?php echo $result;?></h1>
            </div>
            <a  href="index.php" class="btn btn-green dropdown-toggle">Play Again</a>
        <?php endif;?>
      </div>
    </div>

    </body>

</html>