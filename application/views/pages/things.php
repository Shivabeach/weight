<body id="things">
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
					<h5 class="headline fs-3 bold-6">Pple In Space</h5>

					<ul id="space">

					</ul>
				</div>
			</div>
		</div>
		<div class="container--main">
			<div class="card">
				<div class="card--inside">
					<div class="card--inside-header"><h5></h5></div>
					<h4 class="headline fs-3 bold-6">Things Gone Right</h5>
					<ul>
						<?php foreach($right as $row):?>
							<li class="tgr"><?php echo auto_typography($row->rcontent);?></li>
						<?php endforeach;?>
					</ul>

				</div>
			</div>
			<div class="card">
				<div class="card--inside">
					<div class="card--inside-header"><h5></h5></div>
					<h4 class="headline fs-3 bold-6">Things Gone Wrong</h5>
					<ul>
						<?php foreach($wrong as $row):?>
							<li class="tgw"><?php echo auto_typography($row->wrong);?></li>
						<?php endforeach;?>
					</ul>


				</div>
			</div>


		</div>
		<div class="container--right">
			<div class="card">
				<div class="card--inside">
					<div class="card--inside-header"><h5>Epic Links</h5></div>

				</div>
			</div>
		</div>
	</main>
