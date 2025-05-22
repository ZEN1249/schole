<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            box-sizing:border-box;
        }
        body{
            width: 500px;
            height: 500px;
            border: 1px solid black;
            background-color: grey;
        }
        div{
            width: 250px;
            height: 250px;
            border: solid 1px yellow;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div id="1">
        <form method="post">
            <textarea name="textarea"></textarea><br>
            <input type="submit" name="submit">
        </form>
    </div>
    <div id="2"><?php
    if(isset($_POST["submit"])){echo $_POST["textarea"];};
    ?></div>
    <div id="3">
        <?php
            if(isset($_POST["submit"])){
                $text =  $_POST["textarea"];
                $text = str_replace(" ", "<br>", $text);
                echo $text;
            };?>
    </div>
    <div id="4"></div>
</body>
</html>