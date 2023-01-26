<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Password generator</title>
</head>

<body>

    <?php
    $password = $_GET["password"];
    ?>

    <main>
        <h1>Password Generator</h1>

        <form action="index.php" method="get">
            <input type="text" name="password">
            <button type="submit">genera</button>
        </form>

        <span>
            <?php
            echo $_GET["password"];
            ?>
        </span>
    </main>
</body>

</html>