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
        margin-top: 20%;
    }

    </style>
</head>
<body>

<?php 

/*BA01*/

$me = "Ivan Zivanovic";

echo "<h1>$me</h1>";

/*BA02*/

$d = date("D");

if ($d == "Mon")
    echo "Happy Monday!";
else
    echo "Have a nice day!";

/*BA03*/

if ($d == "Mon")
    echo "<br>Today is Monday!";
elseif ($d == "Tue")
    echo "<br>Today is Tuesday!";
elseif ($d == "Wed")
    echo "<br>Today is Wednesday!";
elseif ($d == "Thu")
    echo "<br>Today is Thursday!";
elseif ($d == "Fri")
    echo "<br>Today is Friday!";
elseif ($d == "Sat")
    echo "<br>Today is Saturday!";
elseif ($d == "Sun")
    echo "<br>Today is Sunday!";

/*BA04*/

for ($i = 1; $i<=5; $i++)
echo "<br><h5>for $me</h5>";

$e = 1;
while ($e <= 5) {
echo "<br><h4>while $me</h4>";
$e++;}

$r = 1;
do {
echo "<br><h3>while $me</h3>";
$r++;
}while ($r <=5); 

/*BA05*/

$b = array( 1, 2, 3, 4, 5,6,7,8,9,10);
foreach( $b as  $v )
{
echo "<br>$v";
};

/*BA06*/

$fun = array(
    "cartoon" => "Mickey Mouse",
    "anime"  => "Goku",
    "game" =>  "Super Mario",
    );
echo "<br>I hate ". $fun['cartoon'];
echo "<br>Super Sayjin " . $fun['anime'];
echo "<br>Best Plumber in den World ". $fun['game'];

$fun2 = array(
    "Mickey Mouse" => array
    (
    "a" => " loves Money",
    ),
    "Goku" =>  array
    (
    "b" => " loves to eat",
    ),
    "Super Mario" =>  array
    (
    "c" => " loves Princess Peach" ,
    )
    );
   
    echo "<br>Mickey Mouse ".$fun2['Mickey Mouse']['a'];
    echo "<br>Goku ".$fun2['Goku']['b'];
    echo "<br>Super Mario ".$fun2['Super Mario']['c'];


?>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    
</body>
</html>