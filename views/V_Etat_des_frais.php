<h2> Etat de tout les frais par mois <?php echo $numMois "-" $numAnnee; ?> :</h2>

<div class="encadre">
    <p>
        Etat : <?php echo $libEtat?> depuis le <?php echo $dateModif ?> <br> Montant validé <?php echo $montantValide?>
    </p>

        <table class="listeLegere">
            <h3>période </h3>
            <table>
                <tr>
                    <th class="numéro">Numéro de visiteur</th>
                    <th class = "montant">Montant</th>
                </tr>

            <?php
                foreach ( $lesFraisForfait as $unFraisForfait )
                {
                 $numvisiteur = $unfraisForfait['numéro visiteur'];
                 $montant = $unfraisForfait['montant'];

                 ?>
                    <tr>
                        <td><?php echo $numvisiteur ?></td>
                        <td><?php echo $montant ?></td>
                    </tr>
                <?php
                }
                ?>
                </table>
