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
      <h3>2022 Plants</h3>
      <ul>
        <li>Lemon Grass</li>
        <li>4 - Serranno</li>
        <li>1 - Jalapeno</li>
        <li>1 - Kalugeritsa pepper</li>
        <li>3 - Thai pepper</li>
        <li>Thyme</li>
        <li>2 - Oregano</li>
        <li>Chives</li>
        <li>Anise Hyssop</li>
        <li>Melon Sage</li>

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
