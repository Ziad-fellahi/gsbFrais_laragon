<h3>Fiche de frais du mois <?php echo $numMois."-".$numAnnee?> :</h3>
<div class="encadre">
    <p>
        Etat : <?php echo $libEtat?> depuis le <?php echo $dateModif?> <br> Montant validé : <?php echo $montantValide?>

    </p>

    <table class="listeLegere">
        <caption>Descriptif des éléments hors forfait -<?php echo $nbJustificatifs ?> justificatifs reçus -
        </caption>
        <tr>
            <th class="Numéro du visiteur">Numéro du visiteur</th>
            <th class='montant'>Montant</th>
        </tr>
        <?php
        foreach ( $lesFraisHorsForfait as $unFraisHorsForfait )
        {
            $numvisiteur = $unFraisHorsForfait['date'];
            $montant = $unFraisHorsForfait['montant'];
            ?>
            <tr>
                <td><?php echo $numvisiteur ?></td>
                <td><?php echo $montant ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>