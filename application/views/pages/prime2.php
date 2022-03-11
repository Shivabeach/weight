
<body id="prime2">
	<div id="prime-container">
		<header id="header">
			<?php $this->load->view("menus/main-menu.html");?>
		</header>
		<div class="col-1 clay card" >
			<h3 class="center-align">Food Choices</h3>
			<form id="grocery">
				<fieldset>
					<legend>List of food names</legend>
				<h4 class="center-align">Meats</h4>
			<select name="meats" id="meat-choice" class="padding-1">
				<option value="">Pick One</option>
				<option value="Garden Of Life Fit">Garden Of Life Fit</option>
				<option value="Garden Of Life Greens">Garden Of Life Greens</option>
				<option value="Pink Salmon">Pink Salmon</option>
				<option value="Chicken Breast">Chicken Breast</option>
				<option value="Turkey">Turkey</option>
				<option value="Pork Tenderloin">Pork Tenderloin</option>
				<option value="Pork Chops">Pork Chops</option>
				<option value="Sirloin Steak">Sirloin Steak</option>
				<option value="Bacon">Bacon</option>
				<option value="Pork">Pork</option>
				<option value="Ground Beef">Ground Beef</option>
				<option value="Chicken Thigh">Chicken Thigh</option>
				<option value="Chicken Leg">Chicken Leg</option>
				<option value="Lamb Ribs">Lamb Ribs</option>
				<option value="Shrimp">Shrimp</option>
				<option value="Lobster">Lobster</option>
				<option value="Clams">Clams</option>
				<option value="Salmon">Salmon</option>
				<option value="Venison">Venison</option>
				<option value="Lamb Chops">Lamb Chops</option>
				<option value="Rabbit">Rabbit</option>
				<option value="Chorizo Sausage">Chorizo Sausage</option>
				<option value="Eggs">Eggs</option>
			</select>
			<h4 class="center-align">Vegtables</h4>
			<select name="veggies" id="veg-choice" class="padding-1">
				<option value="">Pick one</option>
				<option value="Swiss Chard">Swiss Chard</option>
				<option value="Kohlrabi">Kohlrabi</option>
				<option value="Bean Sprouts">Bean Sprouts</option>
				<option value="White Rice">White Rice</option>
				<option value="Green Beans">Green Beans</option>
				<option value="Asparagus">Asparagus</option>
				<option value="Avocado">Avocado</option>
				<option value="Artichoke">Artichoke</option>
				<option value="Brussels sprouts">Brussels sprouts</option>
				<option value="Carrots">Carrots</option>
				<option value="Spinach">Spinach</option>
				<option value="Celery">Celery</option>
				<option value="Broccoli">Broccoli</option>
				<option value="Zucchini">Zucchini</option>
				<option value="Cabbage">Cabbage</option>
				<option value="Peppers">Peppers</option>
				<option value="Cauliflower">Cauliflower</option>
				<option value="Parsnip">Parsnip</option>
				<option value="Eggplant">Eggplant</option>
				<option value="Green Onions">Green Onions</option>
				<option value="Butternut Squash">Butternut Squash</option>
				<option value="Acorn Squash">Acorn Squash</option>
				<option value="Sweet Potato">Sweet Potato</option>
				<option value="Onion">Onion</option>
			</select>
			<h4 class="center-align">Oils</h4>
			<select name="oil" id="oil" class="padding-1">
				<option value="">Pick an Oil</option>
				<option value="Coconut oil">Coconut oil</option>
				<option value="Olive oil">Olive oil</option>
				<option value="Macadamia Oil">Macadamia Oil</option>
				<option value="Avocado Oil">Avocado Oil</option>
				<option value="Grass fed Butter">Grass fed Butter</option>
			</select>
			<h4 class="center-align">Nuts & Seeds</h4>
			<select name="nuts" id="nuts" class="padding-1">
				<option value="">Pick a Nut</option>
				<option value="Almonds">Almonds</option>
				<option value="Cashews">Cashews</option>
				<option value="Hazelnuts">Hazelnuts</option>
				<option value="Peanuts">Peanuts</option>
				<option value="Pecans">Pecans</option>
				<option value="Pine Nuts">Pine Nuts</option>
				<option value="Pumpkin Seeds">Pumpkin Seeds</option>
				<option value="Sunflower Seeds">Sunflower Seeds</option>
				<option value="Macadamia Nut">Macadamia Nut</option>
				<option value="Walnuts">Walnuts</option>
			</select>
			<h4>Submit</h4>
			<div><button type="submit" id="submit">Submit</button> -- <button type="reset">Reset</div>
				</fieldset>
		</form>
		</div>
		<div class="col-2 clay corn" >
			<h3 class="center-align">Meats</h3>
			<table>
				<tr class="fs-2">
					<th>Name</th>
					<th>Size</th>
					<th>Calories</th>
					<th>Fat</th>
					<th>Carbs</th>
					<th>Protein</th>
					<th>Potassium</th>
				</tr>
				<tbody class="display">
			</table>

			<h3 class="center-align">Vegetables</h3>
			<table>
				<tr class="fs-2">
					<th>Name</th>
					<th>Size</th>
					<th>Calories</th>
					<th>Fat</th>
					<th>Carbs</th>
					<th>Protein</th>
					<th>Potassium</th>
				</tr>
				<tbody class="vegDisplay">
			</table>

			<h3 class="center-align">Nuts</h3>
			<table>
				<tr class="fs-2">
					<th>Name</th>
					<th>Size</th>
					<th>Calories</th>
					<th>Fat</th>
					<th>Carbs</th>
					<th>Protein</th>
					<th>Potassium</th>
				</tr>
				<tbody class="nutDisplay">
			</table>

			<h3 class="center-align">Oils</h3>
			<table>
				<tr class="fs-2">
					<th>Name</th>
					<th>Calories</th>
					<th>Fat</th>
					<th>Carbs</th>
					<th>Protein</th>
					<th>Potassium</th>
				</tr>
				<tbody class="oilDisplay">
			</table>
		</div>
		<div class="col-3 clay card" >
			<h4 class="center-align">This meals Value</h4>
			<!-- <button type="submit" class="calc">Calc</button> -->
			<table class="pad-bottom">
				<tr class="fs-2">
					<th>Calories</th>
					<th>Fat</th>
					<th>Carbs</th>
					<th>Protein</th>
					<th>Potassium</th>
				</tr>
				<tbody class="cumulate">
					<tr class="show-values">
						<td class="showCals fs-3"></td>
						<td class="showFat fs-3"></td>
						<td class="showCarbs fs-3"></td>
						<td class="showProtein fs-3"></td>
						<td class="showPotass fs-3"></td>

			</table>
		</div>
		<div class="col-4 clay" >
			<h4 class="center-align">Recommended Daily Requirements</h4>
			<ul class="pure-list">
			<li class="post"></li>
			<li class="cal"></li>
			<li class="prot"></li>
			<li>Potassium: 3,400 mg</li>
			<li>Protein: <span class="pro"></span> </li>
			<li>Carbs: 130 gr</li>
			<li>Calories: 1664 - 2164</li>
			<li>BMR: 1803 Calories</li>
		</ul>
		</div>

		<div class="col-5 clay corn" >
			<h4 class="center-align">Values from Protein Drinks</h4>
			<ul>
				<li>Calories - 100 drinks 120 cereal = <span class="ca"></span></li>
				<li>Protein - 15g - 30% = <span class="p"></span></li>
				<li>Carbs - 6g - 2% = <span class="c"></span> </li>
				<li>Fat - 2g -3% = <span class="f"></span></li>
				<li>Postassium - 380mg 8% = <span class="po"></span></li>
				<li>Cholesterol - 10mg - 3% = <span class="ch"></span></li>
				<li>Sodium - 10mg - 10% = <span class="s"></span></li>
			</ul>
		</div>
		<div class="col-6 clay card padding-1">
			<div class="copy"></div>
			<div id="datey"></div>
			<div class="origin">Project start 1 / 2 / 2022
				<div class="diff"></div>
				<div class="color"></div>

			</div>
		</div>
	</div>
	<script src="<?php echo base_url('assets/js/script-dist.js');?>" defer></script>
	<script type="module" src="<?php echo base_url('assets/js/calculator-dist.js');?>" defer></script>
</body>
</html>
<?php ob_end_flush(); ?>