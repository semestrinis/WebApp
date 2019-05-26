<header class="masthead bg-primary text-white text-center">
    <div class="container">
      <img class="img-fluid mb-5 d-block mx-auto" src="img/Email.png" alt="" style="width:256px;height:256px;">
      <h1 class="text-uppercase mb-0">Registracijos patvirtinimas</h1>
	  <p></p>
      <h2 class="font-weight-light mb-0">Iveskite kodą gauta registracijos laiške kad patvirtumintumėte savo registraciją APLINKOS ORO STEBĖJIMAS svetainėje</h2>
    </div>
  </header>
    <!-- Portfolio Grid Section -->
  <section class="portfolio" id="portfolio">
  <center>
  <form action="" method="post">
		<fieldset>
    <div class="container"></div>
		<p>
			<label class="field" for="Confirmation_ID">Patvirtinimo kodas<?php echo in_array('Confirmation_ID', $required) ? '<span> *</span>' : ''; ?></label>
			<input type="text" id="Confirmation_ID" name="Confirmation_ID" class="textbox textbox-150" value="<?php echo isset($data['Confirmation_ID']) ? $data['Confirmation_ID'] : ''; ?>" />
			<?php if(key_exists('Confirmation_ID', $maxLengths)) echo "<span class='max-len'>(iki {$maxLengths['Confirmation_ID']} simb.)</span>"; ?>
		</p>
		</fieldset>
		<!--
			<p class="required-note">* pažymėtus laukus užpildyti privaloma</p>
		-->			
		<p>
			<input type="submit" class="submit button" name="submit" value="Patvirtinti">
		</p>
	</form>
	</center>
</section>
 


<?php
	// įtraukiame puslapių šabloną
	include 'templates/paging.tpl.php';
?>