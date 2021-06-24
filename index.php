<?php

include('db_connect.php');

$sql = "SELECT * FROM profile WHERE id='1'";
$result = mysqli_query($conn, $sql);
$name = mysqli_fetch_assoc($result);
mysqli_free_result($result);
mysqli_close($conn);

?>
<html>

<head>
    <meta charset="utf-8">
    <title>my blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <header>
        <div class="main">
            <div class="logo">
                <a href="#">.Snayga.</a>
            </div>
            <ul>
                <li><a href="#">Blog</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>

    </header>
    <div class="center">
        <span>Hello from <?php echo $name["profile_name"]; ?>!</span>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src='script.js'></script>
</body>

</html>