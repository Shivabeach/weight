<body>
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
					<div class="card--inside-header"><h5>Alternate</h5></div>
						<!-- <div id="display"></div>
						<div id="response"></div> -->
						<h5 class="headline fs-3 bold-6">Pple In Space</h5>

						<ul id="space">

						</ul>
				</div>
			</div>
		</div>
		<div class="container--main">
			<div class="card">
				<div class="card--inside">
					<div class="card--inside-header"><h5>Calendar Form</h5></div>
					<fieldset>
						<legend>For Calendar</legend>

						<?php
						$form = [
						"class" => "weight",
						"id" => "weight"
						];
						echo form_open('forms/cal',$form);
						$date = [
							"id"          => "date",
							"class"       => "date",
							"name"        => "date",
							"placeholder" => "Date"
						];
						echo "<div>";
							echo form_input($date);
						echo "</div>";
						$data = [
								"name"        => "data",
								"placeholder" => "Data"
						];
						echo "<div>";
							echo form_textarea($data);
						echo "</div>";
						echo "<button type='submit' value='Submit'>Submit</button>";
						echo "<button type='reset' value='Reset'>Reset</button>";
						echo form_close();
						?>
					</fieldset>
				</div>
			</div>
			<div class="card">
				<div class="card--inside">
					<div class="card--inside-header"><h5>Comment Form</h5></div>
					<fieldset>
						<legend>Things</legend>
						<?php
						$thingy = [
							"id" => "weight"
						];
						echo form_open('forms/thingers',$thingy);
						$rcontent = [
							"id" => "rcontent",
							"name" => "rcontent",
							"placeholder" => "Things Gone Right Content",
						];
						echo form_textarea($rcontent);
						echo "<br>";
						echo "<button type='submit' id='submit' value='Submit'>Submit</button>";
						echo "<button type='reset' value='Reset'>Reset</button>";
						echo form_close();
						?>
						<?php
						$things = [
							"id" => "weight"
						];
						echo form_open('forms/wronged',$things);
						$wrongs = [
							"id" => "wrong",
							"name" => "wrong",
							"placeholder" => "Things Gone Wrong Content",
						];
						echo form_textarea($wrongs);
						echo "<br>";
						echo "<button type='submit' id='submit1' value='Submit'>Submit</button>";
						echo "<button type='reset' value='Reset'>Reset</button>";
						echo form_close();
						?>
					</fieldset>
				</div>
			</div>
			<div class="card">
				<div class="card--inside">
					<div class="card--inside-header"><h5>Exercise Form</h5></div>
					<fieldset>
						<legend>Walking Record</legend>
						<!-- date time place -->
						<?php
							$form1 = [
								"id" => "weight"
							];
							echo form_open('forms/walk', $form1);
							$date1 = [
								"id"          => "date1",
								"class"       => "input-med",
								"name"        => "date",
								"placeholder" => "Date"
							];
							echo form_input($date1);
							$distance = [
								"id"          => "distance",
								"class"       => "input-med",
								"name"        => "distance",
								"placeholder" => "distance"
							];
							echo form_input($distance);

							$place = [
								"id"          => "place",
								"class"       => "input-med",
								"name"        => "place",
								"placeholder" => "place"
							];
							echo form_input($place);
							echo "<br>";
							echo "<button type='submit' value='Submit'>Submit</button>";
						echo "<button type='reset' value='Reset'>Reset</button>";
							echo form_close();
						?>
					</fieldset>
				</div>
			</div>
			<div class="card">
				<div class="card--inside">
					<div class="card--inside-header"><h5>Blog Form</h5></div>

					<fieldset>
						<legend>Blog</legend>
						<div id="display"></div>
						<!-- date time place -->
						<?php
							$form2 = [
								"id" => "weight"
							];
							echo form_open('forms/blogs', $form2);
							$date1 = [
								"id"          => "date2",
								"class"       => "input-med",
								"name"        => "date",
								"placeholder" => "Date"
							];
							echo form_input($date1);
							echo "<br>";
							$title = [
								"id"          => "title",
								"class"       => "input-med",
								"name"        => "title",
								"placeholder" => "Title"
							];
							echo form_input($title);
							echo "<br>";
							$content = [
								"id"          => "content",
								"name"        => "content",
								"placeholder" => "Content",
								"cols"				=> 80,
								"rows"				=> 15
							];
							echo form_textarea($content);
							echo "<br>";
							$tags = [
								"id"          => "tags",
								"name"        => "tags",
								"class"       => "input-small"
							];
							$drop = [
								"" => "Pick One",
								"Negative" => "Negative",
								"Positive" => "Positive "
							];
							echo form_dropdown($tags, $drop);
							echo "<br>";
							$keys = [
								"name" => "primeKeys",
								"id" => "primeKeys",
								"class" => "input-med"
							];
							echo form_input($keys);
							echo "<br>";

							echo "<button type='submit' value='Submit'>Submit</button>";
						echo "<button type='reset' value='Reset'>Reset</button>";
							echo form_close();
						?>
					</fieldset>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- <div class="container--right">
	<div class="card">
		<div class="card--inside">
			<div class="card--inside-header"><h5>Epic Links</h5></div>

			<div id="display"></div>
			<div id="response"></div>
		</div>
	</div>
</div> -->
</main>
</body>
