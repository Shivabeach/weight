<body id="timeline">
  <div id="time-container">
    <header id="header">
      <?php $this->load->view("menus/main-menu.html");?>
    </header>
    <h1 class="center-align ul light full">Site Sources</h1>
    <main role="main" id="time-main" class="clay">


    </main>
    <footer id="main-footer">
      <hr>
      <div class="copy"></div>
      <div id="datey"></div>
      <div class="origin">This page start 4/28/2023</div>
      <div class="locate"></div>
      <div class="color"></div>
      <p><?php echo 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' ;?></p>
    </footer>
  </div>
  <script type="module" src="<?php echo base_url('assets/js/script-dist.js');?>"></script>
  <script type="module" src="<?php echo base_url('assets/js/sources-dist.js');?>"></script>
</body>

</html>