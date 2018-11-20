<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Quiz Game</title>
    <meta name="description" content="Game section.">
    <meta name="keywords" content="Homework3, EPL425, Quiz">
    <meta name="author" content="George Achilleos">
    <link rel="shortcut icon" type="image/png" href="images\favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="common.css">
</head>

<?php
$xmlstring = file_get_contents("questionsX.xml")
?>

<?phpif(!isset($_SESSION["flag"])){
    $_SESSION["flag"]="false";
}    ?>

<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="help.php">Help</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="scores.php">High Scores</a>
      </li>
    </ul>
  </div>
</nav>

<div class="text">
    <h1>Quiz Game</h1>
  </div>
</div>

<?php
 if(isset($_POST["start"])){
    $_SESSION["questionNumber"]=1;
    $_SESSION["stage"]=1;
    $_SESSION["flag"]="true";
    $_SESSION["answers"]=array();
    $_SESSION["difficulty"]=array();
 }
 $_SESSION["totalQuestions"]=6;
?>

<form action="index.php" method="post">
    <?php 
        if ($_SESSION["flag"]=="false"){ ?>
            <h2>Quiz time!</h2>
                <div class = "container">
                    <div class="row">
                        <div class="texta">
                        <input id="start" class="btn" type="submit" value="start" name="start"/>
                        </div>
                    </div>
                </div>
       <?php }?>
</form>       

<div class="footer">
    <button id="myButton"><a href="#top" style="color: white">Top</a></button>
</div>

</body>
</html>