<header class="masthead bg-primary text-white text-center">
    <div class="container">
		<h1>Naudotojo informacija</h1>
    </div>
</header>
    <!-- Portfolio Grid Section -->
<section class="portfolio" id="portfolio">
	<center>
		<form action="" method="post">
			<fieldset>
				<!--<legend>Automobilio informacija</legend>-->

				<p>
					<label class="field" for="Uname">Vartotojo vardas<?php echo in_array('Uname', $required) ? '<span> *</span>' : ''; ?></label>
					<input type="text" id="Uname" name="Uname" class="textbox textbox-70" value="<?php echo isset($data['Uname']) ? $data['Uname'] : ''; ?>">
					<?php if(key_exists('Uname', $maxLengths)) echo "<span class='max-len'>(iki {$maxLengths['Uname']} simb.)</span>"; ?>
				</p>
				
				<p>
					<label class="field" for="name">Vardas<?php echo in_array('name', $required) ? '<span> *</span>' : ''; ?></label>
					<input type="text" id="name" name="name" class="textbox textbox-70" value="<?php echo isset($data['name']) ? $data['name'] : ''; ?>">
					<?php if(key_exists('name', $maxLengths)) echo "<span class='max-len'>(iki {$maxLengths['name']} simb.)</span>"; ?>
				</p>

				<p>
					<label class="field" for="Lname">Pavardė <?php echo in_array('Lname', $required) ? '<span> *</span>' : ''; ?></label>
					<input type="text" id="Lname" name="Lname" class="textbox textbox-70" value="<?php echo isset($data['Lname']) ? $data['Lname'] : ''; ?>">
					<?php if(key_exists('Lname', $maxLengths)) echo "<span class='max-len'>(iki {$maxLengths['Lname']} simb.)</span>"; ?>
				</p>

				<p>
					<label class="field" for="SID">Registruotos stoteles ID<?php echo in_array('SID', $required) ? '<span> *</span>' : ''; ?></label>
					<input type="text" id="SID" name="SID" class="textbox textbox-70" value="<?php echo isset($data['SID']) ? $data['SID'] : ''; ?>">
					<?php if(key_exists('SID', $maxLengths)) echo "<span class='max-len'>(iki {$maxLengths['SID']} simb.)</span>"; ?>
				</p>
			</fieldset>
		<p class="required-note">* pažymėtus laukus užpildyti privaloma</p>
		<p>
			<input type="submit" class="submit button" name="submit" value="Išsaugoti">
		</p>
		<?php if(isset($data['id'])) { ?>
			<input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
		<?php } ?>
		</form>

	</center>
</section>
<?php
	// įtraukiame puslapių šabloną
	include 'templates/paging.tpl.php';
?>