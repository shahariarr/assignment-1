<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    
</head>
<body>
    <h1 for="exampleInputEmail1" class="form-label">Simple Calculator</h1>

    <form method="POST">
        <label for="num1" for="exampleInputEmail1" class="form-label">Enter the first number:</label>
        <input type="number" id="num1" name="num1" class="form-control" required><br>

        <label for="num2" for="exampleInputEmail1" class="form-label">Enter the second number:</label>
        <input type="number" id="num2" name="num2" class="form-control" required><br>

        <label for="operation">Select an operation:</label>
        <select id="operation" name="operation" class="form-select" aria-label="Default select example">
            <option value="addition">Addition</option>
            <option value="subtraction">Subtraction</option>
            <option value="multiplication">Multiplication</option>
            <option value="division">Division</option>
        </select><br>

        <button type="submit" class="btn btn-primary">Calculate</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operation = $_POST["operation"];
        $result = 0;

        switch ($operation) {
            case "addition":
                $result = $num1 + $num2;
                $result = round($result, 2);
                break;
            case "subtraction":
                $result = $num1 - $num2;
                $result = round($result, 2);
                break;
            case "multiplication":
                $result = $num1 * $num2;
                $result = round($result, 2);
                break;
            case "division":
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                    $result = round($result, 2);
                } else {
                    echo "<p>Error: Division by zero is not allowed.</p>";
                }
                break;
        }

        echo "<p>Result: $result</p>";
    }
    ?>

</body>
</html>
