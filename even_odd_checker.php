<!DOCTYPE html>
<html>
<head>
    <title>Even Odd Checker</title>
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
              margin-top: 100px;
                
              
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
<div>
    <h1 for="exampleInputEmail1" class="form-label">Even Odd Checker</h1>
    <form method="POST">
        <label for="exampleInputEmail1" class="form-label">Enter a number:</label>
        <input type="number" id="number" name="number" class="form-control" required><br>
        
        <button class="btn btn-primary" type="submit">Check</button>
    </form>

    </div>
    <div id="ans">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        $message = ($number % 2 == 0) ? "Even" : "Odd";
        echo "<p>The number $number is $message.</p>";
    }
    ?>
    </div>

</body>
</html>
