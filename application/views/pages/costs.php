<body id="cost-analysis">
	<div id="cost-container">
		<header id="header">
			<?php $this->load->view("menus/main-menu.html");?>
		</header>
		<aside class="cost-form clay">
			<h3 class="center-align">Costs Form</h3>
			<fieldset>
				<legend>Costs</legend>
				<form action="">
					<p><input type="date" name="date" id="date"></p>
					<p><input type="text" name="purchase" id="purchase" placeholder="Purchase"></p>
					<p><input type="number" name="cost" id="cost" placeholder="Cost"></p>
					<button type="submit" id="submit">Submit</button> --
					<button type="reset" id="reset">Reset</button>
				</form>
			</fieldset>
		</aside>
		<main role="main" id="cost-main" class="clay">
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
					</tbody>
				</table>
				<article class="chat padding-1">
					<h4 class="center-align">Chat</h4>
					<P>Above is one normal week at Profile. I left there because the cost was going much to high. Feb 25</P>

					<p>Feb 23 - March 2. - $41.21 First purchase. Over lap to March 15</p>
					<p>Mar 2 $31.91 2nd purchase </p>
					<p>Mar 12 $33.24 Tastes pretty good</p>
				</article>
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
						</tr>
					</thead>
					<tbody class="current-items">

					</table>
				</section>
			</main>
			<aside class="cost-notes clay">
				<h4 class="center-align">Totals</h4>
				<p><span>Profile Weekly -- </span><span class="over-all bold-8"></span></p>
				<p><span> Purchases Total -- </span><span class="buying bold-8"></span></p>
			</aside>
			<footer id="main-footer">
				<p>footer</p>
				<div class="copy"></div>
				<div id="datey"></div>
				<div class="origin">Project start 2 / 23 / 2022</div>
				<div class="locate"></div>
				<div class="color"></div>
				<p>Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
			</footer>
		</div>
		<script type="module" src="<?php echo base_url('assets/js/script-dist.js');?>"></script>
		<script src="<?php echo base_url('assets/js/costs.js');?>"></script>
	</body>
</html>