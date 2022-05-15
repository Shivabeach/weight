<?php $this->benchmark->mark('code_start');?>
<body id="purch">
	<div id="purchase-container">
		<header id="header">
			<?php $this->load->view("menus/main-menu.html");?>

		</header>

		<aside class="purch-form clay">
			<h3 class="center-align">Costs Form</h3>
			<legend>Costs</legend>
			<?php
			$args = [
				"id" => "bought"
			];
			echo form_open("form/purchase", $args);?>
			<p><input type="date" name="date" class="date" id="date"></p>
			<p><input type="text" name="item" id="item" class="purchase" placeholder="Purchase"></p>
			<p><input type="text" name="cost" id="cost" class="cost" placeholder="Cost"></p>
			<p><select name="cat" id="">
				<optgroup label="Categories">
					<option value="">Choose One</option>
					<option value="protein">Protein</option>
					<option value="veg">Vegtables</option>
					<option value="accessory">Accessorys</option>
					<option value="profile">Profile</option></optgroup>
				</select></p>
				<button type="submit" id="submit">Submit</button> --
				<button type="reset" id="reset">Reset</button>
			</form>
			<?php echo validation_errors(); ?>
			<div id="shows"></div>
		</aside>
		<main role="main" id="purch-main" class="clay">
			<section class="purch1">
			<header id="items" class="fs-4">Purchased Items - <span class="purchased"></span> </header>
			<div id="items-container">
				<article id="protein">
					<div class="title1 fs-3">Protein - &nbsp; <span class="show-protein added"> </span></div>
					<table border="1" cellpadding="10" cellspacing="15">
						<tr>
							<th>Date</th>
							<th>Item</th>
							<th>Cost</th>
						</tr>
						<?php foreach ($protein as $list) : ?>
						<tr>
							<td><?php echo $list->date;?></td>
							<td><?php echo $list->item;?></td>
							<td class="pro"><?php echo $list->cost;?></td>
						</tr>
						<?php endforeach;?>
					</table>
				</article>
				<article id="veg">
					<div class="title1 fs-3">Vegtable - &nbsp; <span class="show-veg added"></span></div>
					<table border="1" cellspacing="5">
						<tr>
							<th>Date</th>
							<th>Item</th>
							<th>Cost</th>
						</tr>
						<?php foreach ($veggy as $list) : ?>
						<tr>
							<td><?php echo $list->date;?></td>
							<td><?php echo $list->item;?></td>
							<td class="veg"><?php echo $list->cost;?></td>
						</tr>
						<?php endforeach;?>
					</table>
				</article>
				<article id="accessory">
					<div class="title1 fs-3">Accessory - &nbsp; <span class="show-acc added"> </span></div>
					<table border="1" cellspacing="5">
						<tr>
							<th>Date</th>
							<th>Item</th>
							<th>Cost</th>
						</tr>
						<?php foreach ($acc as $list) : ?>
						<tr>
							<td><?php echo $list->date;?></td>
							<td><?php echo $list->item;?></td>
							<td class="accc"><?php echo $list->cost;?></td>
						</tr>
						<?php endforeach;?>
					</table>
				</article>
				<article id="profile">
					<div class="title1 fs-3">Profile - &nbsp; <span class="show-profile added"></span></div>
					<table border="1" cellspacing="15">
						<tr>
							<th>Date</th>
							<th>Item</th>
							<th>Cost</th>
						</tr>
						<?php foreach ($profile as $list) : ?>
						<tr>
							<td><?php echo $list->date;?></td>
							<td><?php echo $list->item;?></td>
							<td class="prof"><?php echo $list->cost;?></td>
						</tr>
						<?php endforeach;?>
					</table>
				</article>
			</div>
		</section>
	</main>
	<footer id="main-footer">
		<h5>Starting 2/23/2022</h5>
		<div class="copy"></div>
		<div id="datey"></div>
		<div class="origin">Project start 2 / 23 / 2022</div>
		<div class="locate"></div>
		<div class="color"></div>
		<?php $this->benchmark->mark('code_end');
			echo $this->benchmark->elapsed_time('code_start', 'code_end');
		?>
	</footer>
</div>
<script type="module" src="<?php echo base_url('assets/js/script-dist.js');?>"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="<?php echo base_url('assets/js/purchase-dist.js');?>"></script>
</body>
</html>