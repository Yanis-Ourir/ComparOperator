<?php
require("../back/poo/Manager.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Destinations</title>
    <link rel="stylesheet" href="./styles.css">
</head>

<body class="destination-page">

    <section id="nav" class="nav">
        <?php include("./navbar.php") ?>
    </section>

    <section id="choosen-destination" class="choosen-destination">

        <h2>Vol en destination de <?php echo $actualDestination ?></h2>


    </section>

    <section id="op-list" class="op-list">

        <div class="tour-operator">
            <img src="../assets/logo-test1.png" alt="logo-operator">
            <p>Ventrata</p>
            <p>Note <?php echo "5" ?>/5</p>
        </div>

        <div class="tour-operator">
            <img src="../assets/logo-test1.png" alt="logo-operator">
            <p>Ventrata</p>
            <p>Note <?php echo "5" ?>/5</p>
        </div>

    </section>



    <section id="footer">
        <?php include("./footer.php"); ?>
    </section>

</body>

</html>