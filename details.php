<?php
require_once 'defines.php';
$page_title = 'Details';
require_once 'db/data_categories.php';
require_once 'db/data_products.php';
require_once ('functions/cart.php'); // Gestion du panier

$prod_id = '';
//var_dump($_GET);
if(array_key_exists('prod_id', $_GET) && array_key_exists($_GET['prod_id'], $products)) {
    $prod_id = $_GET['prod_id'];
    $prod = $products[$prod_id];
} else {

    header('Location:categories.php');
    exit('VALEUR DE PROD_ID REJETÉ -> EXIT');

}
//var_dump($products[$prod_id]);

require_once 'views/header.php';
?>
    <main>
    <div id="wrapper" class="details">
    <section>
    <div class="div-content">
    <h3><?=$prod[PROD_NAME]?></h3>
        <h4><?=$prod[PROD_MODEL]?></h4>
        <h4><?=$prod[PROD_COLOR]?></h4>
        <img src="images/<?= $prod[PROD_IMG2] ?>" alt="<?= $prod[PROD_IMG2] ?>"/>
        <p><?= $prod[PROD_DESC_D] ?></p>
        <form class="detailscart" method="post">
            <label><span class="pricetag"><?=$prod[PROD_PRICE]?></span></label>
            <div class="addtocart"><span>Add to cart</span>
            <input type="hidden" name="card_item_id" value="<?= $prod_id ?>" />
            <input type="number" min="0" max="99" name="card_item_qty"
            data-mini="true" value="<?= (array_key_exists($prod_id, $card) ) ?  $card[$prod_id] :  '0' ?>" />
            </div>


        </form>
    </div>
    </section>
    </div>
    </main>

<?php
    require_once 'views/footer.php';
