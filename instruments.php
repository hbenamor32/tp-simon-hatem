<?php
require_once 'defines.php';
$page_title = 'Instruments';
require_once 'db/data_categories.php';
require_once 'db/data_products.php';
require_once ('functions/cart.php'); // Gestion du panier

$cat_id = '';
//var_dump($_GET);
if(array_key_exists('cat_id', $_GET) && array_key_exists($_GET['cat_id'], $categories)) {
    $cat_id = $_GET['cat_id'];
} else {
    header('Location:index.php');
    exit('VALEUR DE CAT_ID REJETÉ -> EXIT');
}

require_once 'views/header.php';
?>
<main id="instruments">
    <div id="wrapper">
        <section>
        <div class="row">
            <?php foreach ($products as $prod_id => $prod) {
                if ($prod[PROD_CAT] === $cat_id) { ?>

            <a href="details.php?prod_id=<?=$prod_id?>">
                <div class="col-4 div-content">
                    <img src="images/<?=$prod[PROD_IMG1]?>" alt="<?=$prod[PROD_IMG1]?>" />
                        <div class="main-content">
                            <h3><?=$prod[PROD_NAME]?></h3>
                            <h4><?=$prod[PROD_MODEL]?></h4>
                            <p><?=$prod[PROD_DESC_C]?></p>
                        </div>
                </div>
            </a>
            <?php }
        } ?>
        </div>
        </section>
    </div>
</main>


   <?php
    require_once 'views/footer.php';
