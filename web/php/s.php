<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Submission form</title>
    <style>
        body
{
    display:flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
            justify-content: center;
            background-color: bisque;
            width: 30%;
            height: 70vh;
            border-radius: 20px;
}    </style>
</head>

<body>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name=$_POST["name"];
        $email=$_POST["email"];
        $phone=$_POST["phone"];
    echo  "collected data";
    echo "NAME:".$name."<br>";
    echo "EMAIL".$email. "<br>";
    echo "CONTACT:".$phone. "<br>";

    }
    ?>
</body>
</html>