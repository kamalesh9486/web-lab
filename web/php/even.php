<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even Number</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
            
            background-color: aqua;
            color: red;
            
        }
        h1{
            text-align: center;
            color: blue;
        }
        li{
            border-radius: 5px;
            padding: 10px;
            margin: 5px;
            border: 1px solid;
        }


    </style>
</head>
<body>
    <div>
        <h1>EvenNumber between 1 to 100</h1>
        <ul>
       <?php
      
        for($i=1;$i<=100;$i++){
            if($i%2== 0){
                echo "<li type=none>".$i."</li>";           
                
        }
       
    }


    ?></ul></div>
</body>
</html>