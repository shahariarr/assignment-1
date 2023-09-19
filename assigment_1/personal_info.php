<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 1.2rem;
    line-height: 1.5;
    color: #222;
    background-color: #f4f4f4;
    padding: 0;
    margin: 0;
    text-align: center;
}
div {
    width: 80%;
    margin: 0 auto;
    background-color: #fff;
    padding: 2rem;
    border-radius: 0.5rem;
    box-shadow: 0 0 10px rgba(0,0,0,0.2);
    margin-top: 2rem;
   
}

    </style>
</head>
<body>
    <?php 
    $name = "Shahariar Rahman";
    $age = 22;
    $country = "Bangladesh";
    $introduction = "Hello, I'm $name. I'm $age years old, and I'm from $country. Nice to meet you!";
    ?>
    <div>
      <?php 
       echo "<h1> My Personal Information:</h1>";
       echo "<p>Name: $name</p>";
       echo "<p>Age: $age</p>";
       echo "<p>Country: $country</p>";
       echo "<p>Introduction: $introduction</p>";
      ?>
    </div>
   
  
</body>
</html>