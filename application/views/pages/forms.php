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
          <div class="card--inside-header">
            <h5>Alternate</h5>
          </div>
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
          <div class="card--inside-header">
            <h5>Calendar Form</h5>
          </div>
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
          <div class="card--inside-header">
            <h5>Exercise Form</h5>
          </div>
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
          <div class="card--inside-header">
            <h5>Blog Form</h5>
          </div>

          <fieldset>
            <legend>Blog</legend>
            <div id="display"></div>
            <p id="error"></p>

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
							echo "<p>";
							echo form_input($date1);
							echo "</p>";
							$title = [
								"id"          => "title",
								"class"       => "input-med-lg",
								"name"        => "title",
								"placeholder" => "Title",
								"pattern"     => "[A-Za-z]",
								"title" => "Letters Only"
							];
							echo "<p>";
							echo form_input($title);
							echo "</p>";
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
								"id"       => "tags",
								"name"     => "tags",
								"class"    => "input-med"
							];
							$drop = [
								"" => "",
								"Negative" => "Negative",
								"Positive" => "Positive "
							];
							echo "<p>";
							echo form_dropdown($tags, $drop);
							echo "</p>";
							$keys = [
								"name"        => "primeKeys",
								"id"          => "primeKeys",
								"class"       => "input-large",
								"placeholder" => "Prime Keys"
							];
							echo form_input($keys);
							echo "<br>";

							echo "<button id='blogger' type='submit' value='Submit'>Submit</button>";
						echo "<button type='reset' value='Reset'>Reset</button>";
							echo form_close();
						?>
          </fieldset>
        </div>
      </div>
    </div>
  </main>
  <script src="<?php echo base_url('assets/js/form-page.js');?>" defer></script>
</body>
