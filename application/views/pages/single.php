<body id="single">
	<nav>
		<?php	$this->load->view("includes/menu.html");?>
	</nav>
	<header>
		<h1 id="head"><?=ucwords($header);?></h1>
	</header>
	<main class="container">
		<div class="container--left">
			<div class="card">
				<div class="card--inside">
					<div class="card--inside-header"><h5>Links</h5></div>
					<input type="button" onclick="printer('blog')" value="Print Post">
				</div>
			</div>
		</div>
		<div class="container--main">
			<div class="blog--container">
				<?php foreach($single as $row): ?>
					<?php $output = $row->date;
					$final = date('M d, Y', strtotime($output));?>
				<div class="blogs">
					<div class="blog--insider">
						<div class="blog--title fs-4"><?=$row->title?></div>
						<div class="blog--date fs-3"><?php echo $final;?></div>
						<div class="blog--content">
							<?php echo auto_typography($row->content);?>
						</div>

						<div class="blog--keys"><span class="hidden"><?php echo $row->primeKeys;?></span> </div>
						<div class="blogs--tags bold-8 fs-3"><?=$row->tags;?></div>
					</div>
			</div>
			<?php endforeach;?>
			</div>
			<script src="<?php echo base_url('assets/js/forms-dist.js');?>" defer></script>
		</div>