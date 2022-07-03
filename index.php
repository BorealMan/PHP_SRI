<?php
include_once 'SRI_Generator.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Stuff</title>

    <script type="text/javascript" <?php SRI_Gen('buttons.js') ?>></script>
    <script type="text/javascript" <?php SRI_Gen('clock.js') ?>></script>

    <link rel="stylesheet" href="style.css" <?php SRI_Gen('style.css') ?>>
</head>

<body id="document">
    <p class="clock heading">00:00:00</p>

    <section class="counter">
        <ul>
            <?php
            $message = 'Button ';
            for ($i = 1; $i < 10; $i++) {
                echo '<li>' . $message . $i . '</li>';
            }
            ?>
        </ul>
    </section>

    <section class="quarters">
        <p class="clock">00:00:00</p>
        <p class="clock">00:00:00</p>
        <p class="clock">00:00:00</p>
        <p class="clock">00:00:00</p>
    </section>
</body>

</html>