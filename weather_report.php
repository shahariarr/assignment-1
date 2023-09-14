<!DOCTYPE html>
<html>
<head>
    <title>Weather Report</title>
    <style>
         div{
            width: 80%;
            margin: 0 auto;
            font-size: 1.2rem;
            line-height: 1.5;
              background-color: #f4f4f4;
             padding: 20;
              margin: 100;
              margin-top: 100px;
              font-family: Arial, Helvetica, sans-serif;
                
              
        }
    </style>
</head>
<body>
    <div>
    <h1>Weather Report</h1>

<?php

$temperature = 25; 

$weatherMessage = '';

if ($temperature <= 0) {
    $weatherMessage = "It's freezing!";
} elseif ($temperature > 0 && $temperature <= 15) {
    $weatherMessage = "It's cool.";
} elseif ($temperature > 15) {
    $weatherMessage = "It's warm.";
}

echo "<p>$weatherMessage</p>";
?>

    </div>
</body>
</html>
