<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title></title>

    <style>


        h1 {

            text-align: center;
            margin-top: 3rem;
            margin-bottom: 3rem;
        };

        .weather{
            margin-left: 50%;
            margin-top: 4rem;
        };





    </style>
</head>
<body>

<div class="container-fluid weather">



<h1>Celsius in Farenheit</h1>

<?php 

error_reporting( ~E_DEPRECATED & ~E_NOTICE);

$c = ($_GET['Celsius']);
$f = ($_GET['Farenheit']);

function cel ($c, $f) {
    $a = ($c * (9/5)) + 32;
    echo "<p>$a</p>";
    
};

if(isset($_GET['run1'])){
    cel($c, $f);
}

function far ($c, $f) {
    $b = ($f - 32) * (5/9);

    if (($b > 6 && $b < 10))
    echo "<div class='box'><img src='https://w7.pngwing.com/pngs/524/259/png-transparent-cold-temperature-computer-icons-snowflake-winter-weather-thermometer.png'><p>$b</p></div>";
    elseif ($b > 11)
    echo "<div class='box'><img src='https://cdn.icon-icons.com/icons2/1370/PNG/512/if-weather-3-2682848_90785.png'><p>$b</p></div>";
    };

if(isset($_GET['run2'])){
        far($c, $f);
}

?>

<div class="form-group row ">
  <div class="col-2 mr-4">
  <form name="form" action="" method="get">
    <p>Celsius</p>
    <input class="form-control form-control-lg widht" type="text" name="Celsius">
    <button class="btn btn-primary" type="submit" name="run1">OK</button>
    <p>Farenheit</p>
    <input class="form-control form-control-lg widht" type="text" name="Farenheit">
    <button class="btn btn-primary" type="submit" name="run2">OK</button>
    </form>
</div>
</div>

</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>