<?php
require_once 'defines.php';
require_once 'db/data_categories.php';
require_once 'db/data_products.php';
$page_title = 'Categories';
require_once ('functions/cart.php'); // Gestion du panier
require_once 'views/header.php';
?>
    <main>
    <div id="wrapper" class="categories">

<section>
        <?php foreach ($categories as $cat_id => $cat) { ?>
            <div class="div-content">
                <a href="instruments.php?cat_id=<?=$cat_id?>">
                    <h3><?=$cat[CAT_NAME]?></h3>
                    <img src="images/<?=$cat[CAT_IMG]?>" alt="<?=$cat[CAT_IMG]?>" />
                    <p><?=$cat[CAT_DESC]?></p>
                </a>
            </div>
        <?php } ?>

</section>
    </div>
    </main>
    <?php
    require_once 'views/footer.php';
