<?php
require_once('db/data_products.php'); // Les articles
require_once ('functions/cart.php'); // Gestion du panier
require_once 'views/header.php';
?>



    <?php require('views/cart.php'); // Affichage ?>
</header>
<main>

           <div class="row shopcart">
            <?php foreach ($products as $id => $item) { ?>

<div class="col-12 scart">
                <form method="post">

                    <label class="item_name"><?=$item[PROD_NAME]. ' '. $item[PROD_MODEL]?></label>

                    <input type="hidden" name="card_item_id" value="<?= $id ?>" />
                    <input type="number" min="0" max="99" name="card_item_qty"
                           data-mini="true"
                           value="<?= (array_key_exists($id, $card) ) ?  $card[$id] :  '0' ?>" />
                    <span class="pricetag"><?=$item[PROD_PRICE]?></span>
                    <img src="images/small/<?=$item[PROD_IMG3]?>" alt="<?=$item[PROD_IMG3]?>" />
                </form>
</div>
            <?php } ?>
           </div>

</main>


<?php require_once 'views/footer.php';?>

