<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            height: 100VH;
            background-color: #333;
            display: flex;
            justify-content: center;
            padding-top: 20vh;
        }

        .card {
            height: fit-content;
            max-width: 80%;
            width: 340px;
            padding-top: 10px;
            padding-bottom: 10px;
            padding: 20px;
            border-radius: 10px;
            background: #ffffff;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
            text-align: center;
            font-family: Arial, sans-serif;
            transition: all 300ms;
            border: #c93e3eff solid 4px;

        }

        .card:hover {
            scale: 1.1;
        }


        .card-title {
            margin: 8px 0;
            font-size: 20px;
        }

        .card-text {
            font-size: 14px;
            color: #444;
            margin-bottom: 15px;
        }

        .card-btn {
            padding: 8px 14px;
            border: none;
            border-radius: 6px;
            background: #c93e3eff;
            color: white;

            cursor: pointer;
        }

        .card-btn:hover {
            background: #ea5252ff;
        }

        .card-btn:active {
            background: #333;

        }
    </style>

</head>

<body>
    <div class="card">

        <h3 class="card-title">Simple PHP projict </h3>
        <p class="card-text">
            a simple php projict learning how to make a btn downloud a pdf
        </p>

        <form action="downlod.php" method="post">
            <button name="btn" value="cv" class="card-btn">Download My CV </button>
        </form>
    </div>

</body>

</html>


<?php



?>