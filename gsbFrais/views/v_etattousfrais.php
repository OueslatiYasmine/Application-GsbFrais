<div class="corpsForm">
<h3>Frais au forfait
<?php echo isset($_POST['lstVisiteurs']) && isset($_POST['lstFrais']) ? "de " . $_POST['lstVisiteurs'] . " - " . $_POST['lstFrais'] : ""; ?>
</h3>



    </h3>
    <div class="encadre">
  	
  	<table class="listeLegere">
             <tr>
                <th class="mois">Mois</th>
                <th class="montant">Montant</th>                
             </tr>
             
        <?php foreach ( $lesFraisForfaitVisiteur as $FraisVisiteur ) 
		  {
			$mois = $FraisVisiteur['mois'];
      $moisMieux = substr($mois, 4, 2) . "/" . substr($mois, 0, 4);
			$montant = $FraisVisiteur['montant'];
		?>
             <tr>
                <td><?php echo $moisMieux ?></td>
                <td><?php echo $montant ?></td>
             </tr>
        <?php 
          }
		?>
    </table>
    </div>
</div>

    