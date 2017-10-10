<?php
require_once('db/data_products.php'); // Les articles
require_once ('functions/cart.php'); // Gestion du panier
require_once 'views/header.php';
?>



    <?php require('views/cart.php'); // Affichage ?>
</header>
<main>
    <nav id="catalog">
            <?php foreach ($products as $id => $item) { ?>
                    <span class="item_name"><?=$item[PROD_NAME]. ' '. $item[PROD_MODEL]. ' '. $item[PROD_PRICE] ?></span>
                <form method="post">
                    <input type="hidden" name="card_item_id" value="<?= $id ?>" />
                    <input type="number" min="0" max="99" name="card_item_qty"
                           data-mini="true"
                           value="<?= (array_key_exists($id, $card) ) ?  $card[$id] :  '0' ?>" />
                </form>
            </span>
            <?php } ?>
    </nav>
</main>


<?php require_once 'views/footer.php';?>

