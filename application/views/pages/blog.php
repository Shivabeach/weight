<body id="blog">
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
					<h5 class="headline fs-3 bold-6">Keys</h5>
					<?php foreach($keys as $row):?>
						<p><?=$row->primeKeys;?> </p>

					<?php endforeach;?>

				</div>
			</div>
		</div>
		<div class="container--main">
			<!-- <div class="blog--head"><h2>The Head</h2></div> -->
			<div class="blog--container">
				<?php foreach($blog as $row): ?>
				<?php $output = $row->date;
				$final = date('M d, Y', strtotime($output));?>
				<div class="blog">
					<div class="blog--insider">
						<div class="blog--title fs-4"><?php echo anchor("pages/single/$row->id", $row->title);?></div>
						<div class="blog--date fs-2"><?php echo $final;?></div>
						<div class="blog--content">
							<?php echo word_limiter($row->content, 70);?>
						</div>
						<div class="blog--tags bold-8 fs-3"><?=$row->tags;?></div>
					</div>
				</div>
				<?php endforeach;?>
			</div>
		</div>
		<!-- <div class="container--right">
				<div class="card">
						<div class="card--inside">
								<div class="card--inside-header"><h3>The Problem</h3></div>
								<h4 class="headline fs-3 bold-6">Taste</h5>
								<p>Taste is defined as that thing that piques the desire to have more.</p>
								<p>Most foods have taste, and taste good. However some foods go the extra mile. Ice cream, chocolate, nachos, anything that can be eaten that <strong>DOES NOT SATISFY</strong> with just a small portion</p>
						</div>
				</div>
		</div> -->
	</main>
	<script src="<?php echo base_url('assets/js/forms.js');?>" defer></script>