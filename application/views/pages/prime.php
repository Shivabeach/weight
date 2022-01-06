
<body id="prime">
	<div id="prime-container">
		<header id="header">
			<?php $this->load->view("menus/main-menu.html");?>
		</header>
		<div class="col-1 col" >
			<h3 class="center-align">Food Choices</h3>

			<h4>Meats</h4>
			<form action="" id="grocery" class="pure-form pure-form-stacked">
				<fieldset>
					<legend>List of food names</legend>
			<select name="meats" id="meat-choice">
				<option value="">Pick One</option>
				<option value="turkey">Turkey</option>
				<option value="Chicken Breast">Chicken Breast</option>
				<option value="Pork Tenderloin">Pork Tenderloin</option>
				<option value="Pork Chops">Pork Chops</option>
				<option value="Steak">Steak</option>
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
				<option value="Eggs">Eggs</option>
			</select>
			<h4>Vegtables</h4>
			<select name="veggies" id="veg-choice">
				<option value="">Pick one</option>
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
				<option value="Eggplant">Eggplant</option>
				<option value="Green Onions">Green Onions</option>
				<option value="Butternut Squash">Butternut Squash</option>
				<option value="Acorn Squash">Acorn Squash</option>
				<option value="Sweet Potato">Sweet Potato</option>
				<option value="Onion">Onion</option>
			</select>
			<h4>Oils</h4>
			<select name="oil" id="oil">
				<option value="">Pick an Oil</option>
				<option value="Coconut oil">Coconut oil</option>
				<option value="Olive oil">Olive oil</option>
				<option value="Macadamia Oil">Macadamia Oil</option>
				<option value="Avocado Oil">Avocado Oil</option>
				<option value="Grass fed Butter">Grass fed Butter</option>
			</select>
			<h4>Nuts & Seeds</h4>
			<select name="nuts" id="nuts">
				<option value="">Pick a Nut</option>
				<option value="Almonds">Almonds</option>
				<option value="Cashews">Cashews</option>
				<option value="Hazelnuts">Hazelnuts</option>
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
		<div class="col-2 col" >Column 2

		</div>
		<div class="col-3 col" >
			<h4>Items with over 600 Potassium levels </h4>
		<ul class="list"></ul></div>
		<div class="col-4 col" >Column 4</div>
		<div class="col-5 col" >Column 5</div>
		<div class="col-6 col">Column 6
			<div class="copy"></div>
			<div id="datey"></div>
			<div class="origin">Project start 1 / 2 / 2022</div>
		</div>
	</div>
	<script src="<?php echo base_url('assets/js/script-dist.js');?>" defer></script>
	<script type="module" src="<?php echo base_url('assets/js/food-dist.js');?>" defer></script>
</body>
</html>
<?php ob_end_flush(); ?>