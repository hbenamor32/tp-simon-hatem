<div class="cart"  data-role="collapsible">

        <?php foreach ($card as $id => $qty) {
            if (array_key_exists($id, $products)) {
            ?>
                <form method="post">
                    <input type="hidden" name="card_item_id" value="<?= $id ?>" />
                    <div data-role="fieldcontain">
                        <label for="card_item_qty"><?= $products[$id][PROD_NAME].' '.$products[$id][PROD_MODEL].' '.$products[$id][PROD_PRICE] ?></label>
                        <input type="number" min="0" max="99" name="card_item_qty"
                           data-mini="true"
                           value="<?= (array_key_exists($id, $card) ) ?  $card[$id] :  '0' ?>" />
                    </div>
                </form>
        <?php
            }
        }
        ?>
    <div class="shoppingcart"><i class="fa fa-shopping-cart" aria-hidden="true"><?=' '.count($card)?></i></div>
    <form method="post">
        <div id="cartbtn">
        <input type="submit" name="card_empty" value="empty" />
        </div>
    </form>
</div>
