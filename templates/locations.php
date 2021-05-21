<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Stuliday 2021</title>
</head>
<body>
    <header id="home">
        <nav>
            <div id="menuNav" class="container">
                <div id="logo">
                    <a href="index.php">Stuliday</a> 
                </div>
                <div id="burger">
                    <a href=""><i class="fas fa-bars"></i></a>
                </div>
                <ul>
                    <li><a href="products.php">Annonces</a></li>
                    <!-- //? Affichage conditionnel du bouton se connecter/ page de profil -->
                    <?php
                    if (empty($_SESSION['name'])) {
                        ?>
                        <li><a href="login.php">Se connecter</a></li>
                    <?php
                    } else {
                        ?>
                        <li><a href="profile.php"><?php echo $_SESSION['name']; ?></a></li>
                        <li><a href="?logout">Se déconnecter</a></li>
                    <?php
                    }
                    ?>
                    
                </ul>
            </div>
        </nav>
    </header>


<?php
//! Affichage de tous les produits. Il faudra une requête SQL qui récupère tous les produits, et qui les affiche dans des cartes séparées.

?>

<h1>Recherche annonces</h3>

<section id="products">
    <div class="container">
        <div class="columns is-centered">
            <div class="column is-flex is-flex-wrap-wrap">
                <!-- <div class=""> -->
                    <?php
                        foreach ($locations as $location) {
                            ?>
                    <div class="card content">
                        <a href="location/<?php echo $location->getId(); ?>">
                            <div class="card-content">
                                <h5><?php echo $location->getTitle(); ?></h5>
                                <img class="block" src="<?php echo !empty($location->getPhoto()) ? './public/uploads/'.$location->getPhoto() : 'assets/img/pasdephoto.jpg'; ?>" alt="photo de la maison">
                                <p>Catégorie du bien : <?php echo $location->getCategory_id(); ?></p>
                                <p>Nombre de chambres : <?php echo $location->getBedroom_number(); ?></p>
                                <p>Surface en m2 : <?php echo $location->getSurface(); ?>m2</p>
                                <p>Prix de la location à la semaine : <?php echo $location->getPrice(); ?>€</p>
                            </div>
                        </a>
                    </div>

                    <?php
                        }
                    ?>
                    
                <!-- </div> -->
            </div>
        </div>
    </div>
</section>


<footer>
        <p>2021 Tout droits réservés | Thierry del Castillo</p>
    </footer>

    <script src="./assets/lib/jquery-3.6.0.min.js"></script>
    <script src="./assets/js/script.js"></script>
</body>
</html>