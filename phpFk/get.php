<?php
include 'header.php';
include 'nav.php';
?>

<html>
<link rel="stylesheet" type="text/css" href="StilizimiCss.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
</head>
<style>
    html, body, h1, h2, h3, h4, h5, h6 {
        font-family: "Comic Sans MS", cursive, sans-serif;
    }
</style>
<body>
<?php
error_reporting(0);
$get = json_decode(file_get_contents('http://ip-api.com/json/'),true);

date_default_timezone_set($get['timezone']);
$city = $_GET['q'];
$string = "http://api.openweathermap.org/data/2.5/weather?q=".$city."&units=metric&appid=ebcf5230b3446f334fe3fa2fd2d4ce24";
$data = json_decode(file_get_contents($string),true);

$temp = $data['main']['temp'];

$icon = $data['weather'][0]['icon'];


$visibility = $data['visibility'];
$visibilitykm = $visibility / 1000;
$country =  "<h1 style='margin-left: 8.5em'><b>".$data['name'].",".$data['sys']['country']."</h1></b>";

$logo = "<div style=\"text-align: center;\"><img src='http://openweathermap.org/img/w/" .$icon. ".png'></div>";
$desc = "<b style='font-size: 25px;'><p>".$data['weather'][0]['description']."</p></b>";

$temperature =  "<b>Temp:".$temp."°C</b><br>";
$clouds = "<b>Clouds:".$data['clouds']['all']."%</b><br>";
$humidity = "<b>Humidity:".$data['main']['humidity']."%</b><br>";
$windspeed = "<b>Wind Speed:".$data['wind']['speed']."m/s</b><br>";
$pressure = "<b>Pressure:".$data['main']['pressure']."hpa</b><br>";
$visibility =  "<b>Visibility:".$visibilitykm."Km</b><br>";
$sunrise = "<b>Sunrise:".date('h:i A', $data['sys']['sunrise'])."</b><br>";
$sunset = "<b>Sunset:".date('h:i A', $data['sys']['sunset'])."</b>";
?>

<div style="text-align: center">
    <div >

        <?php
        echo $country;
        echo $logo;
        echo "<div style=\"text-align: center;\"><h2>" .$desc. "</h1></div>";
        ?>

    </div>
            <h1 style="margin-left: 8.5em" >

                <?php echo $temperature; ?>
                <?php echo $clouds; ?>
                <?php echo $humidity; ?>
                <?php echo $windspeed; ?>
                <?php echo $pressure; ?>
                <?php echo $visibility; ?>
                <?php echo $sunrise; ?>
                <?php echo $sunset; ?>
                </h1>
    <a href="karriera.php" style="color: #1A1A1C; font-size: 30px;">Go back ?</a>

</div>

<?php
include 'includes/footer.php'
?>
</body>
</html>