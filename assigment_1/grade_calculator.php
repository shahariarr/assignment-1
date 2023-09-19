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
       <h1 for="exampleInputEmail1" class="form-label">Check your result</h1>   
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="exampleInputEmail1" class="form-label">Enter your first Number: </label>
    <input type="number" name="first" step="0.01" class="form-control"  placeholder="Frist Number" required  min="0"  max="100">
     <br>
    <label for="exampleInputEmail1" class="form-label">Enter your second Number: </label>
    <input type="number" name="second" step="0.01" class="form-control" placeholder="Second Number" required min="0"  max="100"><br>
    <label for="exampleInputEmail1" class="form-label">Enter your therd Number: </label>
    <input type="number" name="therd" step="0.01" class="form-control"  placeholder="Therd Number" required min="0"  max="100"><br>
   
     <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
      </div>
    <div id="ans">
    <?php 
     if(isset($_REQUEST['submit'])){
     $first=$_REQUEST['first'];
        $second=$_REQUEST['second'];
        $therd=$_REQUEST['therd'];
        
        $average = ($first + $second +  $therd) / 3;
        $average = round($average, 2);
        //echo "The average of $first, $second and $therd is $average";
        if($average>=90&&$average<=100){
            
           
            echo "Your Grade is A"."<br>"."Your Average is". $average;
        }
        elseif($average>=80&&$average<=90){
           
           
            echo "Your Grade is B"."<br>"."Your Average is ". $average;
        }
        elseif($average>=70&&$average<=80){
            
           
            echo "Your Grade is C"."<br>"."Your Average is ". $average;
        }
        elseif($average>=60&&$average<=70){
            
           
            echo "Your Grade is D"."<br>"."Your Average is ". $average;
        }
        elseif($average>=0&&$average<=60){
            
           
            echo "Your Grade is F"."<br>"."Your Average is ". $average;
        }
        else{
            
           
            echo "wrong input answer please try again";
        }
        
     }  
        
    ?>
    </div>

</body>
</html>