<?php
require_once('../back/poo/Manager.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Gestion voyage</title>
    <link rel="stylesheet" href="./styles.css">
</head>

<body class="admin-page">

    <section id="nav-admin">
        <?php include("./navbar.php") ?>
    </section>

    <!-- Aventura Tours
    Horizon Voyages
    Escapades Exotiques
    Echappées Belle
    Oasis Tours -->

    <form action="" method="POST" class="d-flex justify-content-center">

        <div>
            <div class="m-5">
                <label class="fs-5">Nouveau Tour Opérator</label><br>
                <input type="text" class="form-control" name="tourOperator" style="width: 800px;">
            </div>

            <div class="m-5">
                <label class="fs-5">Image Tour Opérator</label><br>
                <input type="file" class="form-control m-1" id="inputGroupFile02" style="width: 800px;">
            </div>


            <div class="m-5">
                <label class="fs-5">Associer une destination</label>
                <select class="form-select" aria-label="Default select example" style="width: 800px;">
                    <option selected>Choisissez une destination</option>
                    <option value="1">Ibiza</option>
                    <option value="2">Miami</option>
                    <option value="3">New York</option>
                    <option value="4">Rome</option>
                    <option value="5">Tokyo</option>
                    <option value="6">Séoul</option>
                    <option value="7">Paris</option>
                    <option value="8">Mexique</option>
                    <option value="8">Perou</option>
                    <option value="8">Madrid</option>
                </select>
            </div>

            <button type="submit" class="btn btn-info mt-2 mb-5 ms-5 me-5 text-white">Ajouter...</button>
        </div>
    </form>


    <section id="footer-admin">
        <?php include("./footer.php") ?>
    </section>

</body>

</html>