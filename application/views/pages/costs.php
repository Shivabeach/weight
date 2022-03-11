<body id="cost-analysis">
	<div id="cost-container">
		<header id="header">
			<?php $this->load->view("menus/main-menu.html");?>
		</header>
		<aside class="cost-form">
			<h3 class="center-align">Costs Form</h3>
			<fieldset>
				<legend>Costs</legend>
				<form action="">
					<p><input type="date" name="date" id="date"></p>
					<p><input type="text" name="purchase" id="purchase" placeholder="Purchase"></p>
					<p><input type="number" name="cost" id="cost" placeholder="Cost"></p>
					<button type="submit" id="sender">Submit</button> --
					<button type="reset">Reset</button>
				</form>
			</fieldset>
		</aside>
		<main role="main" id="cost-main">
			<section class="former">
				<h4 class="center-align">One Week Costs at Profile</h4>
				<table>
					<thead>
						<tr>
							<th>Item</th>
							<th class="quantity">Quantity</th>
							<th class="cost-origin">Cost</th>
							<th>Total</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Mint Chip Shake</td>
							<td class="quantity">4</td>
							<td class="cost-origin">20.99</td>
							<td class="totals">83.96</td>
						</tr>
						<tr>
							<td>Cinnamon Cereal</td>
							<td class="quantity">1</td>
							<td class="cost-origin">17.99</td>
							<td class="totals">17.99</td>
						</tr>
						<tr>
							<td>Oatmeal</td>
							<td class="quantity">2</td>
							<td class="cost-origin">12.99</td>
							<td class="totals">25.98</td>
						</tr>
						<tr>
							<td>Cherry Fiber Drink</td>
							<td class="quantity">1</td>
							<td class="cost-origin">11.99</td>
							<td class="totals">11.99</td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td>Total</td>
							<td class="over-all bold-8"></td>
						</tr>
					</tbody>
				</table>
				<!-- <div>Total <span class="over-all"></span></div> -->
			</section>
			<section class="now">
				<h4 class="center-align">Current Costs</h4>
				<table>
					<thead>
						<tr>
							<th>Date</th>
							<th>Purchase</th>
							<th>Cost</th>
							<th>Total</th>
						</tr>
					</thead>
					<tbody class="current-items">
						<tr>
							<td>1</td>
							<td>2</td>
							<td class="item-total">3</td>
							<td class="total-now">4</td>
						</tr>
					</table>
				</section>
			</main>
			<aside class="cost-notes">
				Aside notes
			</aside>
			<footer id="main-footer">
				<p>footer</p>
				<div class="copy"></div>
				<div id="datey"></div>
				<div class="origin">Project start 2 / 23 / 2022</div>
				<div class="color"></div>
			</footer>
		</div>
		<script src="<?php echo base_url('assets/js/script-dist.js');?>"></script>
		<script src="<?php echo base_url('assets/js/costs-dist.js');?>"></script>
	</body>
</html>