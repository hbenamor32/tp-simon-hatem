<?php
require_once 'defines.php';
$page_title = 'Contact';
require_once ('functions/cart.php'); // Gestion du panier
require_once 'views/header.php';
?>
    <!-- start main -->
    <main id="background">
        <div id="wrapper">
            <form id="contact" action="process.php" method="post">
                <div id="contacttab">
                    <fieldset>
                        <!-- nom de famille -->
                        <div class="form">
                            <label for="nom">LAST NAME</label>
                            <input type="text" name="nom" id="nom" required pattern="[a-zA-Z]+" autofocus placeholder="Last Name" />
                        </div>
                        <!-- prénom -->
                        <div class="form">
                            <label for="prenom">FIRST NAME</label>
                            <input type="text" name="prenom" id="prenom" required pattern="[a-zA-Z]+" placeholder="First Name"/>
                        </div>
                        <!-- téléphone -->
                        <div class="form">
                            <label for="tel">PHONE</label>
                            <input type="tel" name="tel" id="tel" placeholder="514-555-5555" maxlength="12" pattern="^\(?\d{3}\)?(-| )?\d{3}(-| )?\d{4}$" />
                        </div>
                        <!-- courriel -->
                        <div class="form">
                            <label for="email">EMAIL</label>
                            <input type="email" name="email" id="email" placeholder="example@email.com" required />
                        </div>
                        <!-- nombre de photos -->
                        <div class="form">
                            <!-- liste d'options prédéfinies -->
                            <label for="lessons">LESSONS</label>
                            <select name="music" id="lessons">
                                <option value="no">No Lessons</option>
                                <option value="bass">Bass Guitar Lessons</option>
                                <option value="guitar" selected>Electric Guitar Lessons</option>
                                <option value="acoustic">Acoustic Guitar Lessons</option>
                            </select>
                        </div>
                        <div class="form instrument"><h2>INSTRUMENT</h2></div>

                        <!-- radios boutons -->
                        <div class="radio">
                            <input type="radio" checked name="instrument" id="bassguitar" value="bass" />
                            <label for="bassguitar">Bass Guitar</label>
                        </div>
                        <!-- radios boutons -->
                        <div class="radio">
                            <input type="radio" name="instrument" id="guitar" value="guit" />
                            <label for="guitar">Electric Guitar</label>
                        </div>
                        <!-- radios boutons -->
                        <div class="radio">
                            <input type="radio" name="instrument" id="acoustic" value="acoust" />
                            <label for="acoustic">Acoustic Guitar</label>
                        </div>

                        <div class="form">
                            <!-- boîte de texte multilignes -->
                            <textarea name="comments" id="comments" placeholder="COMMENTS"></textarea>
                        </div>
                    </fieldset>
                    <div id="contactbtn">
                        <!-- bouton de soumission -->
                        <input type="submit" value="SEND" />
                        <!-- bouton de réinitialisation -->
                        <input type="reset" value="RESET" />
                    </div>

                </div>
            </form>
        </div>
    </main>
    <!-- end main -->
<?php
    require_once 'views/footer.php';
