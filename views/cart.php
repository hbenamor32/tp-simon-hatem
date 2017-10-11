<?php
$total = get_cart_total($card);
?>

<div class="cart"  data-role="collapsible">
    <h3>Your Shopping Cart</h3>
        <?php foreach ($card as $id => $qty) {
            if (array_key_exists($id, $products)) {
            ?>
                <form method="post">
                    <input type="hidden" name="card_item_id" value="<?= $id ?>" />
                    <div class="shoppingcart" data-role="fieldcontain">
                        <label class="labelcart" for="card_item_qty"><?= $products[$id][PROD_NAME].' '.$products[$id][PROD_MODEL]  ?></label>

                        <input type="number" min="0" max="99" name="card_item_qty"
                           data-mini="true"
                           value="<?= (array_key_exists($id, $card) ) ?  $card[$id] :  '0' ?>" />
                        <span class="pricetag"><?=$products[$id][PROD_PRICE]?></span>
                        <span class="imgcart"><img src="images/small/<?=$products[$id][PROD_IMG3]?>" alt="<?=$products[$id][PROD_IMG3]?>" /></span>
                    </div>
                </form>
        <?php
            }
        }
        ?>

    <div class="shop"><strong>Total : </strong><mark><?= $total ?> $</mark></div>
    <div class="shop"><a href="shopping_cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"><?=' '.count($card)?></i></a></div>

    <form method="post">
        <div id="cartbtn">
        <input type="submit" name="card_empty" value="EMPTY" />
        </div>
    </form>
</div>
