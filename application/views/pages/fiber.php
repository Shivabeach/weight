<body id="cost-analysis">
  <div id="cost-container">
    <header id="header">
      <?php $this->load->view("menus/main-menu.html");?>
    </header>
    <aside class="cost-form clay">
      <h3 class="center-align">Costs Form</h3>
      <p>Open</p>
    </aside>
    <main role="main" id="cost-main" class="clay">
      <section class="former">

        <p>Open</p>
      </section>

    </main>
    <aside class="cost-notes clay">
      <h4 class="center-align">Totals</h4>
      <p><span>Profile Weekly -- </span><span class="over-all bold-8"></span></p>
      <p><span> Purchases Total -- </span><span class="buying bold-8"></span></p>
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
  <script type="module" src="<?php echo base_url('assets/js/script-dist.js');?>"></script>
  <script src="<?php echo base_url('assets/js/fiberous-dist.js');?>"></script>
</body>

</html>