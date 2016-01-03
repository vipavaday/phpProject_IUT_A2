<?php
	require('./header.php');
?>

	<section style="text-align: center;">
	<div class="wizard-steps">
		<div class="completed-step"><a href="#step-one"><span>1 Enregistrement</span></a></div>
		<div class="active-step"><a href="#step-two"><span>2 Information</span></a></div>
		<div><a href="#"><span>3 Finalisation</span></a></div>
	</div>
	
	
	<div>
		<div class="categ" >
			<form style="line-height: 2.5em">
				<label class="labelOne" for="nom">Nom: </label>
				<input id="nom" type="text" placeholder="Nom" /><br/>
				<label class="labelOne" for="prenom">Prenom : </label>
				<input id="prenom" type="text" placeholder="Prenom" /><br/>
				<label class="labelOne" for="age">Age : </label>
				<input id="age" type="text" placeholder="Age" /><br/>
				<label class="labelOne" for="email">Email : </label>
				<input id="email" type="text" placeholder="Email" /><br/>
				<label class="labelOne" for="ville">Ville: </label>
				<input id="ville" type="text" placeholder="Ville" /><br/>
				<label class="labelOne" for="rue">Rue: </label>
				<input id="rue" type="text" placeholder="Rue" /><br/>
				<label class="labelOne" for="cp">Code postal: </label>
				<input id="cp" type="text" placeholder="Cp" /><br/>
				<input class ="boutonEnr" type="submit" value="Continuez l'enregistrement" /><br/>
			</form>
		</div>
	</div>
	
	</section>
<?php
	require('./footer.php');
?>
