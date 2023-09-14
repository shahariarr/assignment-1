<!DOCTYPE html>
<html>
<head>
    <title>Comparison Tool</title>
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
 <h1>Comparison Tool</h1>

<?php
$number1 = 20;
$number2 = 30;

$largerNumber = ($number1 > $number2) ? $number1 : $number2;
echo "<p>The larger number between $number1 and $number2 is $largerNumber.</p>";
?>
 </div>

</body>
</html>
