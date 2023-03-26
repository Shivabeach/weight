<body id="cost-analysis">
  <div id="cost-container">
    <header id="header">
      <?php $this->load->view("menus/main-menu.html");?>
    </header>
    <aside class="cost-form clay">
      <h2 class="center-align">Stats</h2>
      <h3 class="cal">Calories > 100</h3>
      <ul class="topCals"></ul>
      <h3>Fiber > 6</h3>
      <ul class="topFiber"></ul>
      <h3>Carbs > 16</h3>
      <ul class="carb16"></ul>

    </aside>
    <main role="main" id="cost-main" class="clay">
      <section class="fiber-container">
        <h1 class="center-align ul">Fiber & Sugar</h1>
        <table class="fiber-table">
          <tr>
            <th>Name</th>
            <th>Size</th>
            <th>Calories</th>
            <th>Carbs</th>
            <th>Fiber</th>
            <th>Sugars</th>
          </tr>
          <tbody class="showFiber">
          </tbody>
        </table>
      </section>
    </main>

    <aside class="cost-notes clay">
      <h4 class="center-align">Stats</h4>
      <p><span> Fiber Average -- </span><span class="fiber-average bold-8"></span></p>
      <p><span> Carb Average -- </span><span class="carb-average bold-8"></span></p>
      <p><span> Sugar Average -- </span><span class="sugar-average bold-8"></span></p>
      <p>Number of Veggies: <span class="lengthOfFile bold-8" ></span></p>
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
  <script type="module" src="<?php echo base_url('assets/js/fiber-page-dist.js');?>"></script>
  <script type="module" src="<?php echo base_url('assets/js/script-dist.js');?>"></script>

</body>

</html>