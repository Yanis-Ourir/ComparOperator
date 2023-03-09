<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles.css">
    <title>ComparOpérator</title>
</head>
<body>
    <?php include('navbar.php') ?>
    <div class="tourlogo">
        <?php echo "<img class='tourimg' src='../assets/' . $tour_operator(name) . '.png'"?>
    </div>
    <div>
        <h1 style="text-align:center;"><?php echo $tourop ?></h1>
    </div>
    <p>Description :</p>
    <p style="text-align:center;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet consequuntur voluptatem recusandae velit sequi ducimus assumenda sed nemo aliquid! Dolore facere harum praesentium possimus facilis. Maxime sapiente harum reiciendis corporis.</p>
    <p>Avis des Utilisateurs :</p>
    <div>
        <div class="cardtour">
            <p>Utilisateur : <?php echo $review['author'] ?> </p>
            <p>Note : <?php echo $tour_operator['grade_total'] ?> /5</p>
            <p><?php echo $review['message'] ?></p>
        </div>
    </div>
</body>
</html>