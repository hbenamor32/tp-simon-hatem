<?php
require_once 'defines.php';
$page_title = 'Contact';
require_once ('functions/cart.php'); // Gestion du panier
require_once 'views/header.php';


// Les types de donneés reccueillies
define('K_IS_VALID','k_is_valid');
define('K_VALUE','k_value');
define('K_FORMAT','k_format');
define('K_ERR_MSG','k_err_msg');

// Les noms des champs du formulaire
define('FN_NOM','fn_nom');
define('FN_PRENOM','fn_prenom');
define('FN_TELEPHONE','fn_telephone');
define('FN_EMAIL','fn_email');
define('FN_LESSONS','fn_lessons');
define('FN_INSTRUMENT','fn_instrument');
define('FN_COMMENTAIRE','fn_commentaire');

// Des classes et attributs qui servent souvent
define('ATTR_CHECKED',' checked="checked"');
define('ATTR_SELECTED',' selected="selected"');
define('CLASS_INVALID',' invalid');

/**
 * La variable de validation (un tableau PHP)
 * Chaque élément a pour clef le nom (name) du champ à valider
 * Chaque valeur est un tableau qui contient les clefs suivantes :
 * - K_IS_VALID : si le champ est valide ou non
 * - K_VALUE : la valeur du champ récupérée par le code de validation
 * - K_ERR_MSG : un message à mettre dans le document en réception quand le champ n'est pas valide
 * - K_FORMAT : au besoin, une expression rationnelle (FN_NOM, FN_COMMENTAIRE) ou un format (FN_DATE_ARRIVEE) pour valider le champ selon une règle fixe
 *
 */
$vld = array(
    FN_NOM => array(
        K_IS_VALID => false,
        K_VALUE => null,
        K_FORMAT => '/\w{2,}/',
        K_ERR_MSG => 'The name must be at least 2 letters.',
    ),
    FN_PRENOM => array(
        K_IS_VALID => false,
        K_VALUE => null,
        K_FORMAT => '/\w{2,}/',
        K_ERR_MSG => 'The first name must be at least 2 letters.',
    ),
    FN_TELEPHONE => array(
        K_IS_VALID => false,
        K_VALUE => null,
        K_FORMAT => '/\w{2,}/', // Format téléphone
        K_ERR_MSG => 'The phone number must be like this 514-555-5555',
    ),
    FN_EMAIL => array(
        K_IS_VALID => false,
        K_VALUE => null,
        K_FORMAT => '/\w{2,}/',
        K_ERR_MSG => 'The email must be in this format example@email.com.',
    ),
    FN_INSTRUMENT => array(
        K_IS_VALID => false,
        K_VALUE => null,
        K_FORMAT => null,
        K_ERR_MSG => 'One instrument must be checked.',
    ),
    FN_LESSONS => array(
        K_IS_VALID => false,
        K_VALUE => null,
        K_FORMAT => null,
        K_ERR_MSG => 'One lesson must be picked.',
    ),
    FN_COMMENTAIRE => array(
        K_IS_VALID => false,
        K_VALUE => null,
        K_FORMAT => '/\w{10,}/',
        K_ERR_MSG => 'The comment must be at least 10 characters.',
    ),
);


/**
 * Indique qu'on est en POST et que les données POST présentes (celles qui doivent l'être)
 */
//var_dump($_POST);
$en_reception =
    'POST' === $_SERVER['REQUEST_METHOD'] // on est en POST
    && array_key_exists(FN_NOM, $_POST)
    && array_key_exists(FN_PRENOM, $_POST)
    && array_key_exists(FN_TELEPHONE, $_POST)
    && array_key_exists(FN_EMAIL, $_POST)
    && array_key_exists(FN_LESSONS, $_POST)
    && array_key_exists(FN_COMMENTAIRE, $_POST);
//var_dump('$en_reception:', $en_reception);

/**
 * Renvoie true si un champ donnée est invalide (en réception)
 * Renvoie false si on est pas en réception (GET) ou si le champ est valide
 * @param $fieldname : le nom du champ comme par exemple FN_NOM
 * @return bool : vrai si le champ est invalide (en réception seulement)
 */
function invalid($fieldname) {
    global $vld;
    global $en_reception;
    return $en_reception && ! $vld[$fieldname][K_IS_VALID];
}

/**
 * Validation des données de formulaire qui est faite si on est en réception
 */
if ($en_reception) {
//   Validation du champ FN_NOM
    if (array_key_exists(FN_NOM , $_POST)){
        $vld[FN_NOM][K_VALUE] = filter_input(INPUT_POST, FN_NOM, FILTER_SANITIZE_STRING);
        // filter_input renvoie false si le champ n'est pas valide
        $vld[FN_NOM][K_IS_VALID] = (false !== $vld[FN_NOM][K_VALUE])
            && (1 === preg_match($vld[FN_NOM][K_FORMAT], $vld[FN_NOM][K_VALUE]));
    }
//   Validation du champ FN_PRENOM
    if (array_key_exists(FN_PRENOM , $_POST)){
        $vld[FN_PRENOM][K_VALUE] = filter_input(INPUT_POST, FN_PRENOM, FILTER_SANITIZE_STRING);
        // filter_input renvoie false si le champ n'est pas valide
        $vld[FN_PRENOM][K_IS_VALID] = (false !== $vld[FN_PRENOM][K_VALUE])
            && (1 === preg_match($vld[FN_PRENOM][K_FORMAT], $vld[FN_PRENOM][K_VALUE]));
    }
//   Validation du champ FN_TELEPHONE
    if (array_key_exists(FN_TELEPHONE , $_POST)){
        $vld[FN_TELEPHONE][K_VALUE] = filter_input(INPUT_POST, FN_TELEPHONE, FILTER_SANITIZE_STRING);
        // filter_input renvoie false si le champ n'est pas valide
        $vld[FN_TELEPHONE][K_IS_VALID] = (false !== $vld[FN_TELEPHONE][K_VALUE])
            && (1 === preg_match($vld[FN_TELEPHONE][K_FORMAT], $vld[FN_TELEPHONE][K_VALUE]));
    }
//   Validation du champ FN_EMAIL
    if (array_key_exists(FN_EMAIL , $_POST)){
        $vld[FN_EMAIL][K_VALUE] = filter_input(INPUT_POST, FN_EMAIL, FILTER_SANITIZE_STRING);
        // filter_input renvoie false si le champ n'est pas valide
        $vld[FN_EMAIL][K_IS_VALID] = (false !== $vld[FN_EMAIL][K_VALUE])
            && (1 === preg_match($vld[FN_EMAIL][K_FORMAT], $vld[FN_EMAIL][K_VALUE]));
    }    
//  Validation des boutons radio FN_INSTRUMENT
    if (array_key_exists(FN_INSTRUMENT , $_POST)) {
        $vld[FN_INSTRUMENT][K_VALUE] = $_POST[FN_INSTRUMENT];
        $vld[FN_INSTRUMENT][K_IS_VALID] = in_array($_POST[FN_INSTRUMENT], array('bass', 'guitar', 'acoustic'));
    }
//  VALIDATION DU SELECT FN_LESSONS
    if (array_key_exists(FN_LESSONS , $_POST)) {
        $vld[FN_LESSONS][K_VALUE] = $_POST[FN_LESSONS];
        $vld[FN_LESSONS][K_IS_VALID] = in_array($_POST[FN_LESSONS], array('nolessons','bassguitar','electricguitar','acousticguitar'));
    }
//  VALIDATION DES CHECKBOXES  FN_DATE_ARRIVEE
    if (array_key_exists(FN_COMMENTAIRE , $_POST)){
        $vld[FN_COMMENTAIRE][K_VALUE] = filter_input(INPUT_POST, FN_COMMENTAIRE, FILTER_SANITIZE_STRING);
        $vld[FN_COMMENTAIRE][K_IS_VALID] = (false !== $vld[FN_COMMENTAIRE][K_VALUE])
            && (strlen($vld[FN_COMMENTAIRE][K_VALUE]) >= 10);
    }
// Validité totale du questionnaire : On passe en revue les valeurs 'is_valid' de tous les champs
    $formulaire_valide = true;
    foreach ($vld as $field) {
        if ( ! $field[K_IS_VALID]) {
            $formulaire_valide = false;
            break;
        }
    }

    //Si le questionnaire est valide, on affiche un résumé (ou une redirection vers une autre page)
    if ($formulaire_valide) {
        echo '<p><a href="', basename($_SERVER["SCRIPT_FILENAME"]),'">Relancer la page</a></p>';
        echo '<ul>';
        echo '<li>', $vld[FN_NOM][K_VALUE], '</li>';
        echo '<li>', $vld[FN_PRENOM][K_VALUE], '</li>';
        echo '<li>',$vld[FN_TELEPHONE][K_VALUE], '</li>';
        echo '<li>',$vld[FN_EMAIL][K_VALUE], '</li>';
        echo '<li>',$vld[FN_INSTRUMENT][K_VALUE], '</li>';
        echo '<li>',$vld[FN_LESSONS][K_VALUE], '</li>';
        echo '<li>',$vld[FN_COMMENTAIRE][K_VALUE], '</li>';
       echo '</ul>';
        exit ('Formulaire valide');
    }
    $formulaire_valide = false;

}


?>
    <!-- start main -->
    <main id="background">
        <div id="wrapper">
            <form id="contact" method="post">
                <div id="contacttab">
                    <fieldset>
                        <!-- nom de famille -->
                        <div class="form <?= invalid(FN_NOM) ? CLASS_INVALID : '' ?>">
                            <label for="<?= FN_NOM ?>">LAST NAME</label>
                            <input type="text" name="<?= FN_NOM ?>" id="<?= FN_NOM ?>" placeholder="Last Name" value="<?= array_key_exists(FN_NOM, $_POST) ? $_POST[FN_NOM] : '' ?>" />

                        </div>
                        <?php if (invalid(FN_NOM)) {
                            echo "<p class='msg_validation'>{$vld[FN_NOM][K_ERR_MSG]}</p>";
                        } ?>
                        <!-- prénom -->
                        <div class="form <?= invalid(FN_PRENOM) ? CLASS_INVALID : '' ?>">
                            <label for="<?= FN_PRENOM ?> ">FIRST NAME</label>
                            <input type="text" name="<?= FN_PRENOM ?>" id="<?= FN_PRENOM ?>" placeholder="First Name" value="<?= array_key_exists(FN_PRENOM, $_POST) ? $_POST[FN_PRENOM] : '' ?>"/>

                        </div>
                        <?php if (invalid(FN_PRENOM)) {
                            echo "<p class='msg_validation'>{$vld[FN_PRENOM][K_ERR_MSG]}</p>";
                        } ?>
                        <!-- téléphone -->
                        <div class="form <?= invalid(FN_TELEPHONE) ? CLASS_INVALID : '' ?>">
                            <label for="<?= FN_TELEPHONE ?>">PHONE</label>
                            <input type="tel" name="<?= FN_TELEPHONE ?>" id="<?= FN_TELEPHONE ?>" placeholder="514-555-5555" maxlength="12"  value="<?= array_key_exists(FN_TELEPHONE, $_POST) ? $_POST[FN_TELEPHONE] : '' ?>"/>

                        </div>
                        <?php if (invalid(FN_TELEPHONE)) {
                            echo "<p class='msg_validation'>{$vld[FN_TELEPHONE][K_ERR_MSG]}</p>";
                        } ?>
                        <!-- courriel -->
                        <div class="form <?= invalid(FN_EMAIL) ? CLASS_INVALID : '' ?>">
                            <label for="<?= FN_EMAIL ?>">EMAIL</label>
                            <input type="email" name="<?= FN_EMAIL ?>" id="<?= FN_EMAIL ?>" placeholder="example@email.com" value="<?= array_key_exists(FN_EMAIL, $_POST) ? $_POST[FN_EMAIL] : '' ?>"/>

                        </div>
                        <?php if (invalid(FN_EMAIL)) {
                            echo "<p class='msg_validation'>{$vld[FN_EMAIL][K_ERR_MSG]}</p>";
                        } ?>
                        <!-- LESSONS -->
                        <div class="form <?= invalid(FN_LESSONS) ? CLASS_INVALID : '' ?>">
                            <!-- liste d'options -->
                            <label for="<?=FN_LESSONS?>">LESSONS</label>
                            <select name="<?=FN_LESSONS?>" id="<?=FN_LESSONS?>">
                                <option value="-1"
                                    <?= $vld[FN_LESSONS][K_VALUE] === '-1' ? ATTR_SELECTED : '' ?>
                                >Choose...</option>
                                <option value="nolessons"
                                    <?= $vld[FN_LESSONS][K_VALUE] === 'nolessons' ? ATTR_SELECTED : '' ?>
                                >No Lessons</option>
                                <option value="bassguitar"
                                    <?= $vld[FN_LESSONS][K_VALUE] === 'bassguitar' ? ATTR_SELECTED : '' ?>
                                >Bass Guitar Lessons</option>
                                <option value="electricguitar"
                                    <?= $vld[FN_LESSONS][K_VALUE] === 'electricguitar' ? ATTR_SELECTED : '' ?>
                                >Electric Guitar Lessons</option>
                                <option value="acousticguitar"
                                    <?= $vld[FN_LESSONS][K_VALUE] === 'acousticguitar' ? ATTR_SELECTED : '' ?>
                                >Acoustic Guitar Lessons</option>
                            </select>

                        </div>
                        <?php if (invalid(FN_LESSONS)) {
                            echo "<p class='msg_validation'>{$vld[FN_LESSONS][K_ERR_MSG]}</p>";
                        } ?>
                        <div class="form instrument"><h2>INSTRUMENT</h2></div>

                        <!-- radios boutons -->
                        <div class="radio <?= invalid(FN_INSTRUMENT) ? CLASS_INVALID : '' ?>">
                            <input type="radio" name="<?=FN_INSTRUMENT?>" id="bass" value="bass"
                                <?= $vld[FN_INSTRUMENT][K_VALUE] === 'bass' ? ATTR_CHECKED : '' ?> />
                            <label for="bass">Bass Guitar</label>
                        </div>
                        <!-- radios boutons -->
                        <div class="radio <?= invalid(FN_INSTRUMENT) ? CLASS_INVALID : '' ?>">
                            <input type="radio" name="<?=FN_INSTRUMENT?>" id="guitar" value="guitar"
                                <?= $vld[FN_INSTRUMENT][K_VALUE] === 'guitar' ? ATTR_CHECKED : '' ?> />
                            <label for="guitar">Electric Guitar</label>
                        </div>
                        <!-- radios boutons -->
                        <div class="radio <?= invalid(FN_INSTRUMENT) ? CLASS_INVALID : '' ?>">
                            <input type="radio" name="<?=FN_INSTRUMENT?>" id="acoustic" value="acoustic"
                                <?= $vld[FN_INSTRUMENT][K_VALUE] === 'acoustic' ? ATTR_CHECKED : '' ?> />
                            <label for="acoustic">Acoustic Guitar</label>

                        </div>
                        <?php if (invalid(FN_INSTRUMENT)) {
                            echo "<p class='msg_validation'>{$vld[FN_INSTRUMENT][K_ERR_MSG]}</p>";
                        } ?>

                        <div class="form <?= invalid(FN_COMMENTAIRE) ? CLASS_INVALID : '' ?>">
                            <!-- boîte de texte multilignes -->
                            <textarea name="<?=FN_COMMENTAIRE?>" id="<?=FN_COMMENTAIRE?>" placeholder="COMMENTS"><?= array_key_exists(FN_COMMENTAIRE, $_POST) ? $_POST[FN_COMMENTAIRE] : '' ?></textarea>

                        </div>
                        <?php if (invalid(FN_COMMENTAIRE)) {
                            echo "<p class='msg_validation'>{$vld[FN_COMMENTAIRE][K_ERR_MSG]}</p>";
                        } ?>
                    </fieldset>
                    <div id="contactbtn">
                        <!-- bouton de soumission -->
                        <input type="submit" value="SEND" />
                        <span><a href="<?= basename($_SERVER["SCRIPT_FILENAME"]) ?>">RESET</a></span>
                    </div>

                </div>
            </form>
        </div>
    </main>
    <!-- end main -->
<?php
    require_once 'views/footer.php';
