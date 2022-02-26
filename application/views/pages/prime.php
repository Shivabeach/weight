<body id="prime">
  <div id="prime-container">
    <header id="header">
      <?php $this->load->view("menus/main-menu.html");?>
    </header>
    <div class="col-1 clay corn">
      <h3 class="center-align ul">Veggies</h3>
      <table>
        <tr class="fs-2">
          <th>Name</th>
          <th>Size</th>
          <th>Calories</th>
          <th>Carbs</th>
          <th>Potassium</th>
        </tr>
        <tbody class="veg-display"></tbody>
      </table>

    </div>
    <div class="col-2 clay corn">
      <h3 class="center-align ul">Meats</h3>
      <table>
        <tr class="fs-2">
          <th>Name</th>
          <th>Size</th>
          <th>Calories</th>
          <th>Fat</th>
          <th>Protein</th>
          <th>Potassium</th>
        </tr>
        <tbody class="display"></tbody>
      </table>

    </div>
    <div class="col-3 clay corn">
      <h3 class="center-align ul bold-8">Items with over 500 Potassium levels </h3>
      <table>
        <tr class="fs-2">
          <th>Name</th>
          <th>Size</th>
          <th>Calories</th>
          <th>Potassium</th>
          <th>Protein</th>
        </tr>
        <tbody class="list">

        </tbody>
      </table>

      <!-- <ul class="list"></ul> -->
    </div>
    <div class="col-4 clay corn">
      <h3 class="center-align ul">Nuts</h3>
      <table>
        <tr class="fs-2">
          <th>Name</th>
          <th>Calories</th>
          <th>Fat</th>
          <th>Protein</th>
          <th>Potassium</th>
        </tr>
        <tbody class="nutty-display"></tbody>

      </table>

    </div>

    <div class="col-5 clay corn">
      <h3 class="center-align ul">Oil</h3>
      <table>
        <tr class="fs-2">
          <th>Name</th>
          <th>Size</th>
          <th>Calories</th>
          <th>Fat</th>
          <th>Potassium</th>
        </tr>
        <tbody class="oilDisplay"></tbody>

      </table>

    </div>
    <div class="col-6 clay card padding-1">
      <div class="copy"></div>
      <div id="datey"></div>
      <div class="origin">Project start 1 / 2 / 2022</div>
      <div class="color"></div>
    </div>
  </div>
  <script src="<?php echo base_url('assets/js/script-dist.js');?>" defer></script>
  <script type="module" src="<?php echo base_url('assets/js/food-dist.js');?>" defer></script>
</body>

</html>
<?php ob_end_flush(); ?>