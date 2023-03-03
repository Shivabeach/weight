<body id="cost-analysis">
  <div id="cost-container">
    <header id="header">
      <?php $this->load->view("menus/main-menu.html");?>
    </header>
    <aside class="cost-form clay">
      <h1 class="center-align">Vitamin C</h1>
      <h4>Highest Rated</h4>
      <ul class="vitamins"></ul>
      <h2 class="center-align">Potassium</h2>
      <ul class="potass"></ul>
    </aside>
    <main role="main" id="cost-main" class="clay">
      <section class="fruit-container">
        <h3 class="center-align ul">Fruits</h3>
        <table class="fruit-table">
          <tr>
            <th>Name</th>
            <th>Size</th>
            <th>Calories</th>
            <th>Carbs</th>
            <th>Sugars</th>
            <th>Potassium</th>
            <th>Vitamin C <br>% USDA</th>
          </tr>
          <tbody class="showFruit"></tbody>
        </table>
      </section>
    </main>

    <aside class="cost-notes clay">
      <h4 class="center-align">Fruit Averages</h4>
      <p><span> Potassium -- </span><span class="pot-average bold-8"></span></p>
      <p><span> Calories -- </span><span class="cal-average bold-8"></span></p>
      <p><span> Sugar -- </span><span class="sugar-average bold-8"></span></p>
    </aside>
    <footer id="main-footer">
      <p>footer</p>
      <div class="copy"></div>
      <div id="datey"></div>
      <div class="origin">This page start 1/7/2023</div>
      <div class="locate"></div>
      <div class="color"></div>
      <p>Page rendered in <strong>{elapsed_time}</strong> seconds.
        <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?>
      </p>
    </footer>
  </div>
  <script type="module" src="<?php echo base_url('assets/js/fruity-dist.js');?>"></script>
  <script type="module" src="<?php echo base_url('assets/js/script-dist.js');?>"></script>

</body>

</html>