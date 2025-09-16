<div id="contenu">
    <h2>Etat de tout les frais par mois</h2>
    <form action="index.php?uc=etatFrais&action=voirEtatFrais" method="post">
        <div class="corpsForm">

            <p>
            <h1>Période</h1>

            <label for="lstMois" accesskey="n">Mois / Année : </label>
                <select id="lstMois" name="lstMois">
                    <?php
                    foreach ($lesMois as $unMois)
                    {
                        $mois = $unMois['mois'];
                        $numAnnee =  $unMois['numAnnee'];
                        $numMois =  $unMois['numMois'];
                        if($mois == $moisASelectionner){
                            ?>
                            <option selected value="<?php echo $mois ?>"><?php echo  $numMois."/".$numAnnee ?> </option>
                            <?php
                        }
                        else{ ?>
                            <option value="<?php echo $mois ?>"><?php echo  $numMois."/".$numAnnee ?> </option>
                            <?php
                        }

                    }

                    ?>
                </select>

            <label for="typedefrais" accesskey="n">Type de frais </label>
            <select id="typedefrais" name="typedefrais">
                <?php
                foreach ($lesTypeDeFrais as $unTypeDeFrais)
                {
                    $lesTypeDeFrais = $unTypeDeFrais['TypeDeFrais'];
                    if($mois == $moisASelectionner){
                        ?>
                        <option selected value="<?php echo $mois ?>"><?php echo  $numMois."/".$numAnnee ?> </option>
                        <?php
                    }
                    else{ ?>
                        <option value="<?php echo $mois ?>"><?php echo  $numMois."/".$numAnnee ?> </option>
                        <?php
                    }

                }

                ?>

            </select>



            </p>





        </div>
        <div class="piedForm">
            <p>
                <input id="ok" type="submit" value="Valider" size="20" />
                <input id="annuler" type="reset" value="Effacer" size="20" />
            </p>
        </div>

    </form>