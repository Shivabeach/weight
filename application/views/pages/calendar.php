<!DOCTYPE html>
<body>
  <div id="calendar-container">
  <header id="cal-header">
    <?php $this->load->view("menus/main-menu.html");?>
  </header>

  <main id="cal-container">

      <?php echo $calendar; ?>
  </main>
  <footer id="cal-footer">
    <div class="box">
      <h3>2025 Plants</h3>
      <ul>
        <li>6 - Serranno</li>
        <li>1 - Jedi Jalapeno</li>
        <li>1 - Aji Charapita pepper</li>
        <li>2 - Tulsi Kapoor</li>
        <li>1 - Hot Cayenne</li>
        <li><code>$this->load->file(APPPATH . "/views/pages/includes/side.php");</code></li>
      </ul>

    </div>

    <div class="box">
      <h3>Event Form</h3>
      <?php
			$con = [
				'id' => 'ajax'
			];
			echo form_open('form/entry', $con);

			$arg1 = [
				'id'          => 'date',
				'name'        => 'date',
				'type'        => "date",
				'placeholder' => "Date"
			];
			echo form_input($arg1);
			echo "<br>";
			$arg2 = [
				'id'          => "data",
				'name'        => "data",
				'placeholder' => "Data"
			];
			echo form_textarea($arg2);
			echo "<br>";
			$arg3 = [
				'type' => "submit",
				'value' => "Submit"
			];
			echo
			form_submit($arg3);

			$arg4 = [
				'value' => "Reset",
				'type' => "reset"
			];
			echo
			form_submit($arg4);
			?>
    </div>
    <div class="box">
      <div id="display"></div>
      <p>Box 3</p>
      <p><?php echo 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' ; ?></p>
    </div>
    <div class="box">
      <p>footer</p>
      <div class="copy"></div>
      <div id="datey"></div>
      <div class="origin">Project start 2 / 23 / 2022</div>
      <div class="color"></div>
      <div class="locate"></div>
    </div>

  </footer>
</div>
<script type="module" src="<?php echo base_url('assets/js/script-dist.js');?>"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="<?php echo base_url('assets/js/calendar.js');?>"></script>

</body>

</html>
