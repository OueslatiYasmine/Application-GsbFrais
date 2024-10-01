<div id="contenu">
      <h2>État de tous les frais par visiteur</h2>
      <h3>Informations à sélectionner :  </h3>
      <form action="index.php?uc=etatTousFrais&action=voirEtatTousFrais" method="post">
      <div class="corpsForm">
      <h3>Visiteur</h3>
      <p>
	 
        <label for="lstVisiteurs" accesskey="v">Numéro : </label>
        <select id="lstVisiteurs" name="lstVisiteurs">
		<?php foreach ($lesVisiteurs as $unVisiteur) {
        $visiteur = $unVisiteur['id']; 
        ?>
        <option value="<?php echo $visiteur; ?>"><?php echo $visiteur; ?></option>
        <?php
    }
    ?>
        </select>

		<label for="lstFrais" accesskey="f">Type de frais : </label>
        <select id="lstFrais" name="lstFrais">
            <?php foreach ($lesTypesForfaits as $unTypeForfait) {
			$forfait = $unTypeForfait['id']; 
			?>
			<option value="<?php echo $forfait; ?>"><?php echo $forfait; ?></option>
			<?php 
			}
			
			
           
		   ?>  

      </p>
      </div>
      <div class="piedForm">
      <p>
        <input id="ok" type="submit" value="Valider" size="20" />
        <input id="annuler" type="reset" value="Effacer" size="20" />
      </p> 
      </div>
        
      </form>







    