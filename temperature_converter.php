<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <style>
        div{
            width: 80%;
            margin: 0 auto;
            font-size: 1.2rem;
            line-height: 1.5;
            
              background-color: #f4f4f4;
             padding: 20;
              margin: 100;
              margin-top: 200px;
                
              
        }
        #ans{
            width: 80%;
            margin: 0 auto;
            font-size: 1.2rem;
            line-height: 1.5;
            
              background-color: #f4f4f4;
             padding: 20;
              margin: 100;
              margin-top: 20px;
                
              
        }
      

    </style>

</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $temperature = $_POST["temperature"];
    $conversion = $_POST["conversion"];

    if ($conversion == "celsius_to_fahrenheit") {
        $converted_temperature = ($temperature * 9 / 5) + 32;
        $conversion_text = "Celsius to Fahrenheit";
    } elseif ($conversion == "fahrenheit_to_celsius") {
        $converted_temperature = ($temperature - 32) * 5 / 9;
        $conversion_text = "Fahrenheit to Celsius";
    }
}
?>
    <div>
    <h1>Temperature Converter</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="exampleInputEmail1" class="form-label">Enter your  temperature: </label>
        <input type="number" name="temperature" step="0.01" class="form-control" id="exampleInputEmail1" placeholder="temperature" required><br>
        <label for="exampleInputEmail1" class="form-label">conversion temperature: </label>
        <select name="conversion" class="form-select" aria-label="Default select example" required>
            <option value="celsius_to_fahrenheit">Celsius to Fahrenheit</option>
            <option value="fahrenheit_to_celsius">Fahrenheit to Celsius</option>
        </select><br>

        <input type="submit" value="Convert" class="btn btn-warning">
    </form>
    </div>
     <div id="ans">
     <?php
if (isset($converted_temperature)) {
    echo "<p>Your Ans is: $temperature &deg; $conversion_text is $converted_temperature &deg;</p>";
}
?>
     </div>
 
</body>
</html>