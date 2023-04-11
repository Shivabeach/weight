<body id="vinegar">
  <div id="cost-container">
    <header id="header">
      <?php $this->load->view("menus/main-menu.html");?>
    </header>
    <aside class="cost-form clay">
      <h2 class="center-align">Stats</h2>
    </aside>
    <main role="main" id="cost-main" class="clay">
      <section class="fiber-container">
        <h1 class="center-align ul light">Vinegar Record</h1>
        <table class="vinegar-table">
          <tr>
            <th>ID</th>
            <th>Contents</th>
            <th>Started</th>
            <th>Finished</th>
            <th>PH</th>
            <th>Comments</th>
          </tr>
          <tbody class="showVinegar">
          </tbody>
        </table>
      </section>
    </main>
    <aside class="cost-notes clay">
      <h4 class="center-align">Stats</h4>
    </aside>
    <footer id="main-footer">
      <p>footer</p>
      <div class="copy"></div>
      <div id="datey"></div>
      <div class="origin">This page start 1/7/2023</div>
      <div class="locate"></div>
      <div class="color"></div>
      <p>Page rendered in <strong>{ elapsed_time }</strong> seconds. <?php echo 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' ;?></p>
    </p>
  </footer>
</div>
<script type="module" src="<?php echo base_url('assets/js/vinegar.js');?>"></script>
<script type="module" src="<?php echo base_url('assets/js/script-dist.js');?>"></script>
</body>
</html>