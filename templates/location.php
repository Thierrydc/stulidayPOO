<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="/stulidayPOO/public/assets/css/style.css">
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
    var_dump($location);

?>
<!-- //? Ici pas besoin de boucle, puisque je ne récupère qu'un seul produit. -->
<section id="product">
    <div class="container">
        <div class="columns is-centered">
            <div class="column is-8">
                <div class="content">
                    <h1 class="block"><?php echo $annonce->getTitle(); ?></h1>
                    <img class="block" src="<?php echo !empty($annonce['photo']) ? './public/uploads/'.$annonce['photo'] : 'assets/img/pasdephoto.jpg'; ?>" alt="photo de la maison">
                    <p>A propos : <?php echo $annonce['description']; ?></p>
                    <p>Nombre de chambres : <?php echo $annonce['bedroom_number']; ?></p>
                    <p>Surface en m2 : <?php echo $annonce['surface']; ?></p>
                    <p>Prix de la location à la semaine : <?php echo $annonce['price']; ?></p>
                    <p>Catégorie du bien : <?php echo $annonce['category']; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>


<footer>
        <p>2021 Tout droits réservés | Thierry del Castillo</p>
    </footer>

    <script src="/stulidayPOO/public/assets/lib/jquery-3.6.0.min.js"></script>
    <script src="/stulidayPOO/public/assets/js/script.js"></script>
</body>
</html>