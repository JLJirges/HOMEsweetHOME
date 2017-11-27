<section>
    <div class="container">

        <?php

        $error = false;
        $error_msg = array();
        $agb = true;
        $angaben = true;
        $newsletter = false;
        $show_form = true;

        if(isset($_POST['mitglied_werden'])){

            //Vorname

            if(strlen($_POST['vname']) > 2){
                $error = true;
                $error_msg['vname'] = 'Ihr Name ist zu kurz!';
            }

        }

        ?>

        <?php if(($show_form) === true){ ?>

        <div class="content">
            <div class="content_box_one">
                <h3>Nutzerregistrierung</h3>
                <div  class="text_content">Willkommen bei der Nutzerregistrierung! <br>
                    <br>
                    Bitte füllen Sie die Formulare wahrheitsgemäß und korrekt aus, um als neuer Kunde registriert werden zu können.
                    <br><br> Mit einem * versehene Felder sind Pflichtangaben.</div>
            </div>

            <form>

                <div class="content_box_two form_box">
                    <form action="" method="post">

                        <div>
                            <h4>Allgemeine Angaben</div>

                            <div class="anrede_gender">

                                <label class="Anrede" for="anrede">Anrede*</label>
                                <div class="gender_radios">

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="radio" id="Gender" name="Gender" value="Frau">
                                            <label for="lname">Frau</label>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="radio" id="Gender" name="Gender" value="Herr">
                                            <label for="lname">Herr</label>
                                        </div>
                                    </div>
                                </div>

                            </div>



                            <div class="col-sm-6 titel">
                                <div class="form-group">
                                    <label for="Titel">Titel</label>
                                    <input type="text" placeholder="Titel" class="form-control" name="titel" id="titel" value="Titel">
                                </div>
                            </div>

                        </div>
                </div>
        </div>


        <div class="content_box_three">
            <div class="col-sm-6">
                <div class="form-group group_three_left_float">
                    <label for="vname">Vorname*</label>
                    <input type="text" placeholder="Vorname" class="form-control" name="vname" id="vname" value="<?php
                    if(isset($_POST['mitglied_werden'])) echo $_POST['vname'];
                    ?>">
                </div>
            </div>


            <div class="col-sm-6">
                <div class="form-group">
                    <label for="lname">Nachname*</label>
                    <input type="text" placeholder="Nachname" class="form-control" name="lname" id="lname" value="Nachname">
                </div>
            </div>


            <div class="col-sm-6">
                <div class="form-group group_three_left_float">
                    <label for="email">E-Mail*</label>
                    <input type="text" placeholder="deine.email@adresse.at" class="form-control" name="email" id="email" value="Email">
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label for="date">Geburtsdatum*</label>
                    <input type="date"  class="form-control" name="date" id="date" value="Geburtstag">
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group group_three_left_float">
                    <label for="adress">Adresse*</label>
                    <input type="text" placeholder="Adresse" class="form-control" name="adress" id="adress" value="Adresse">
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label for="adresszusatz">Adresszusatz</label>
                    <input type="text" placeholder="Adresszusatz" class="form-control" name="adresszusatz" id="adresszusatz" value="Adresszusatz">
                </div>
            </div>

            <div class="country_section group_three_left_float">
                <div class="col-sm-6">
                    <div class="form-group">
                        <div>
                            <label for="country">Land*</label>
                        </div>
                        <div>
                            <select class="Landauswahl">
                                <option value="Auswahl">Land auswählen</option>
                                <option value="AT">Österreich</option>
                                <option value="DE">Deutschland</option>
                                <option value="CH">Schweiz</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="genauerOrt">
                <div class="col-sm-6 group_three_left_float">
                    <div class="form-group">
                        <div>
                            <label for="ort">Ort*</label>
                        </div>
                        <div>
                            <select class="Ort">
                                <option value="Auswahl">Ort auswählen</option>
                                <option value="Wien">Wien</option>
                                <option value="Berlin">Berlin</option>
                                <option value="Salzburg">Salzburg</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <div>
                            <label for="ort">PLZ*</label>
                        </div>
                        <input type="text" placeholder="Postleitzahl" class="PLZ" name="plz" id="plz" value="PLZ">

                    </div>
                </div>
            </div>

        </div>

        </form>

        <!-- FORMULAR 2 -->


        <div class="Formular_zwei">
            <div class="content">
                <div class="content_box_one">
                    <h3>Zusätzliche Angaben</h3>
                    <div  class="text_content">Dieses Formular ist kein Pflichtformular!<br>

                        <br><br>Es wird empfohlen mindestens eine Telefonnummer anzugeben, um bei Komplikationen der Warenbestellung den Kontakt leichter herstellen zu können.</div>
                </div>

                <form>

                    <div class="content_box_five form_box">
                        <form action="" method="post">

                            <div>
                                <h4>Alternative Adresse</h4>

                                <div class="col-sm-6 telnr">
                                    <div class="form-group">
                                        <label for="tel">Telefonnummer 1</label>
                                        <input type="tel" placeholder="+43 69911339473" class="form-control" name="tel" id="tel" value="tel_1">
                                    </div>
                                </div>

                            </div>

                            <div class="col-sm-6 telnr">
                                <div class="form-group">
                                    <label for="tel_two">Telefonnummer 2</label>
                                    <input type="tel" placeholder="+43 69911339473" class="form-control" name="tel_two" id="tel_two" value="tel_2">
                                </div>
                            </div>

                    </div>
            </div>


            <div class="content_box_six">

                <div class="col-sm-6">
                    <div class="form-group group_three_left_float">
                        <label for="adress2">Adresse 2</label>
                        <input type="text" placeholder="Adresse2" class="form-control" name="adress2" id="adress2" value="Adresse_2">
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="adresszusatz2">Adresszusatz 2</label>
                        <input type="text" placeholder="Adresszusatz2" class="form-control" name="adresszusatz2" id="adresszusatz2" value="Adresszusatz_2">
                    </div>
                </div>

                <div class="country_section group_three_left_float">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div>
                                <label for="country">Land 2</label>
                            </div>
                            <div>
                                <select class="Landauswahl">
                                    <option value="Auswahl">Land auswählen</option>
                                    <option value="AT">Österreich</option>
                                    <option value="DE">Deutschland</option>
                                    <option value="CH">Schweiz</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="genauerOrt">
                    <div class="col-sm-6 group_three_left_float">
                        <div class="form-group">
                            <div>
                                <label for="ort">Ort 2</label>
                            </div>
                            <div>
                                <select class="Ort">
                                    <option value="Auswahl">Ort auswählen</option>
                                    <option value="Wien">Wien</option>
                                    <option value="Berlin">Berlin</option>
                                    <option value="Salzburg">Salzburg</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <div>
                                <label for="ort">PLZ 2</label>
                            </div>
                            <input type="text" placeholder="Postleitzahl" class="PLZ" name="plz" id="plz" value="PLZ_2">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </form>

        <!-- FORMULAR 2 ENDE -->

        <!-- FORMULAR 3 -->

        <div class="Formular_zwei">
            <div class="content">
                <div class="content_box_one">
                    <h3>Nutzerdaten</h3>
                    <div  class="text_content">Dies sind Ihre persönlichen Registrierungsdaten!<br>
                        <br>
                        Es wird empfohlen Ihre Daten nicht an dritte Personen weiter zu geben.
                        <br>
                        <br>Mit einem * versehene Felder sind Pflichtangaben.<br></div>
                </div>

                <form>

                    <div class="content_box_eight form_box">
                        <form action="" method="post">
                            <h4>Persönliche Kundenangaben</h4>

                            <div class="col-sm-6 name_pw">
                                <div class="form-group">
                                    <label for="nutzername">Nutzername*</label>
                                    <input type="text" placeholder="Nutzername" class="form-control" name="nutzername" id="nutzername" value="Nutzername">
                                </div>
                                <p class="registrierung_information">*Darf keine Umlaute oder Sonderzeichen enthalten!</p>
                            </div>


                            <div class="col-sm-6 name_pw">
                                <div class="form-group group_three_left_float">
                                    <label for="email">ODER E-Mail</label>
                                    <input type="text" placeholder="deine.email@adresse.at" class="form-control" name="email" id="email" value="Email">
                                </div>
                            </div>
                    </div>
            </div>


            <div class="content_box_nine">


                <div class="col-sm-6">
                    <div class="form-group group_three_left_float">
                        <label for="password">Passwort*</label>
                        <input type="text" placeholder=" ********** " class="form-control" name="password" id="password" value="Passwort">
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="password">Passwort wiederholen*</label>
                        <input type="text" placeholder=" ********** " class="form-control" name="password" id="password_wiederholen" value="Passwort_wiederholen">
                    </div>
                </div>

                <div class="country_section group_three_left_float">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="Woher_erfahren_float">
                                <label for="country">Wie haben Sie von HOMEsweetHOME erfahren?*</label>
                            </div>
                            <div>
                                <select class="Woher_erfahren">
                                    <option value="Auswahl">Option auswählen</option>
                                    <option value="Internet">Internet</option>
                                    <option value="Kunde">andere Kunden</option>
                                    <option value="Werbung">Werbung</option>
                                    <option value="Anders">Anders</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="Pflichtboxen">
                    <div class="col-sm-6 radio_angaben">
                        <div class="form-group">
                            <input type="radio" id="AGB" name="AGB" value="AGB">
                            <label for="lname">Ich habe die AGB's gelesen und zur Kenntnis genommen.*</label>
                        </div>
                    </div>

                    <div class="col-sm-6 radio_angaben">
                        <div class="form-group">
                            <input type="radio" id="Richtigkeit" name="Richtigkeit" value="Richtigkeit">
                            <label for="lname">Ich bestätige hiermit die Richtigkeit meiner Angaben.*</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>

    <div class="col-sm-6 newsletter_radio">
        <div class="form-group">
            <input type="radio" id="Newsletter" name="Newsletter" value="Newsletter">
            <label class="newsletter_label" for="Newsletter">Für den Newsletter anmelden und tolle Prämien erhalten!</label>
        </div>

    </div>

    <div class="send_and_arrow">
        <div class="send_div">
            <div class="col-sm-12">
                <a href="#" type="submit" value="mitglied_werden" name="mitglied_werden" class="btn"> Mitglied werden</a>
            </div>
        </div>

        <div class="arrow_div">
            <img src="imgs/arrow_down.png" alt="arrow" width="250">
        </div>
    </div>
    <p class="Vorteile_genießen">Und viele tolle Mitgliedsvorteile genießen!</p>
    </form>

    <!--Formular 3 ENDE -->
    <?php }else{ ?>

        <p> Vielen Dank! <br> Bitte kontrollieren Sie Ihre Emails!</p>

    <?php  } ?>

    </div>
</section>