<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Operation</title>
    <style>

.container{
            display:flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
            justify-content: center;
            background-color: bisque;
            width: 30%;
            height: 70vh;
            margin:20px auto;
            border-radius: 20px;
        }
        form{
            display:flex;
            flex-direction: column;
            align-items: flex-start;
            padding-right: 10px;
            gap: 10px;
            justify-content: center;

        }
        .form{
            display:flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
            justify-content: center;
        }
      
    </style>
</head>
<body>
    <div class="container">
        <div class="form">
            <h2>Calculation</h2>
            <form action="" method="post">
                <label for="num1">Input 1</label>
                <input type="number" name="num1" id="num1" required>
                <label for="num2">Input 2</label>
                <input type="number" name="num2" id="num2" required><br><br>
                
                <label for="operation">Select Operation:</label>
                <select id="operation" name="option" required>
                    <option value="add">Addition</option>
                    <option value="sub">Subtraction</option>
                    <option value="multi">Multiplication</option>
                    <option value="div">Division</option>
                </select><br><br>
                
                <input type="submit" name="submit" value="Calculate">
            </form>
        </div>
        
        <?php
      if($_SERVER["REQUEST_METHOD"]=="POST"){
            $a = $_POST['num1'];
            $b = $_POST['num2'];
            $c = $_POST['option'];
        
            switch($c){
                case 'add':
                    $res = $a + $b;
                    break;
                case 'sub':
                    $res = $a - $b;
                    break;
                case 'multi':
                    $res = $a * $b;
                    break;
                case 'div':
                        $res = $a / $b;
                    
                    break;
                default:
                    $res = "Invalid operation.";
            }

            echo "<h3>Result: $res</h3>";
        }
        ?>
    </div>
</body>
</html>
