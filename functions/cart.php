<?php

const CARD_NAME = 'cart';

function get_cart_total($card) {
    global $products;
    $result = 0;
    foreach ($card as $item_id => $item_qty) {
        $result += $products[$item_id][PROD_PRICE] * $item_qty;
    }
    return $result;
}

if ( session_status() === PHP_SESSION_NONE ) { // Regarde si la session a été démarré ou pas
    session_start();
}

// Est-ce que j'ai une variable de session nommée 'cart' ?
// Non ? On la créée (initialisation avec tableau vide)
if ( ! array_key_exists(CARD_NAME, $_SESSION)) {
    $_SESSION[CARD_NAME] = array();
}
// Ici $_SESSION['cart'] existe TOUJOURS
$card =& $_SESSION[CARD_NAME]; // $panier est une référence (alias) sur $_SESSION['panier']

//var_dump($_SESSION); // Voir les données post
//var_dump($_POST); // Voir les données post

if (array_key_exists('card_item_id', $_POST)
    && array_key_exists($_POST['card_item_id'], $products)
    && array_key_exists('card_item_qty', $_POST)
    && ((0 <= $_POST['card_item_qty']) && ($_POST['card_item_qty'] <= 99))) {
    $item_id = $_POST['card_item_id'];
    $item_qty = $_POST['card_item_qty'];
    if ($item_qty > 0) {
        $card[$item_id] = $item_qty;
    } else {
        unset($card[$item_id]);
    }
} else if (array_key_exists('card_empty', $_POST)) {
    $card = array(); // Vider le panier en entier
}

//var_dump($card); // Voir le panier après la mise-a-jour


