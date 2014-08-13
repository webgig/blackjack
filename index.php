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
        <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </head>
    <body>
    <div class="container">
        <div class="header">
            <h3 class="text-muted">BlackJack</h3>
        </div>
        <div class="jumbotron">
            <form class="bs-example bs-example-form" role="form" method="post" action="play.php">
                <div class="input-group input-group-lg">
                  <span class="input-group-addon">Card 1</span>
                  <input type="text" class="form-control" placeholder="Enter Card 1" name="card1" >
                </div>
                <br>
                <div class="input-group input-group-lg">
                  <span class="input-group-addon">Card 2</span>
                  <input type="text" class="form-control" placeholder="Enter Card 2" name="card2" >
                </div>
                <br/>
                <div class="input-group input-group-lg" >
                    <button type="submit" class="btn btn-default dropdown-toggle">
                        Play
                    </button>
                </div>
            </form>
        </div>
    </div>

    </body>

</html>