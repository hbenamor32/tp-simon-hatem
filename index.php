<?php
require_once 'defines.php';
$page_title = 'Accueil';
require_once ('functions/cart.php'); // Gestion du panier
$icons = array('bass' => 'Bass', 'guitar' => 'Electric', 'acoustic' => 'Acoustic');
$bands = array('metallica', 'primus', 'foofighters');
require_once 'views/header.php';
?>
    <!-- Start Main (Index) -->
    <main id="home">
        <!-- conteneur du slider au complet -->
        <div id="slider">
            <!-- on va cacher ces inputs -->
            <input checked type="radio" name="slider" id="slide1" />
            <input type="radio" name="slider" id="slide2" />
            <input type="radio" name="slider" id="slide3" />
            <!-- le diaporama -->
            <div id="slides">
                <!-- div qui délimite l'espace que verra l'utilisateur -->
                <div id="overflow">
                    <!-- div qui contient les photos et les textes -->
                    <div class="inner">
                        <!-- diapositive méduses -->
                    <?php foreach ($bands as $band) { ?>
                        <div class="photo">
                            <img src="images/<?=$band?>.jpg" alt="Photo <?=$band?>" />
                        </div>
                    <?php } ?>
                    </div>
                    <!-- end .inner -->
                </div>
                <!-- end #overflow -->
            </div>
            <!-- end #slides -->
            <!-- div qui contient les boutons de contrôle -->
            <div id="active">
                <label for="slide1"></label>
                <label for="slide2"></label>
                <label for="slide3"></label>
            </div>
        </div>
        <!-- end #slider -->
        <section id="wrapper">
            <div class="row">
        <?php foreach ($icons as $icon => $title) { ?>

            <div class="col-4 div-content">
                <a href="categories.php"><img src = "images/<?=$icon?>icon.png" alt = "<?=$title?> Guitar Icon" /></a>
                <div class="main-content">
                    <h2><?=$title?> Guitars</h2>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua . Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat .</p>
                </div>
            </div>
        <?php } ?>

            </div>
        </section>

    </main>


    <!-- end main -->
<?php
    require_once 'views/footer.php';
