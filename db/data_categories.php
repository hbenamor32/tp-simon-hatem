<?php
/**
 * Fichier de déclaration des données de categories de GUIT
 */

/**
 * Déclaration des clefs des champs des items de catégorie
 */
define('CAT_NAME', 'cat_name'); // Nom de catégorie (string)
define('CAT_IMG', 'cat_img'); // Fichier image de catégorie (string)
define('CAT_DESC', 'cat_desc'); // Description de catégorie (string - HTML)

$categories = array(
    '1' => array(
        CAT_NAME => 'Bass Guitars',
        CAT_IMG => 'bassist.jpg',
        CAT_DESC => 'We understand that bass is arguably the most important instrument in modern music, and that building great basses takes a specific level of expertise you donʼt find everywhere. Fortunately, We spent over 35 years creating extraordinary basses for every kind of music. Today, youʼll find our basses being used in studios and on stages around the world.',
    ),
    '2' => array(
        CAT_NAME => 'Electric Guitars',
        CAT_IMG => 'guitarist.jpg',
        CAT_DESC => 'Guitars are our passion. Since 1975, we created numerous iconic instruments for legendary players spanning every genre of music. Our decades of experience in the design and manufacture of guitars and basses has allowed us to provide the very best options for you as a player. Every guitar that bears our name undergoes a careful and rigorous process of quality control and craftsmanship that culminates in some of the finest instruments on the planet.',
    ),
    '3' => array(
        CAT_NAME => 'Acoustic Guitars',
        CAT_IMG => 'acoustic.jpg',
        CAT_DESC => 'LTD acoustic-electric guitars represent a step up in quality and playability compared to any other guitar or bass in their price range. All models incorporate a dovetail set-neck joint for solid and reliable performance with a classic look and feel, solid spruce or red cedar tops for rich, balanced tone and high-quality components like a GraphTech nut and saddle and B-band or Fishman electronics for optimal performance. Which ever model you chose, you\'ll be getting a great instrument at an exceptional value.',
    ),
);
