<body id="vinegar">
  <div id="cost-container">
    <header id="header">
      <?php $this->load->view("menus/main-menu.html");?>
    </header>
    <aside class="cost-form clay">
      <h2 class="center-align">Comments</h2>
      <p>It occurs that I may be stirring the mix too much. This may be producing the mash that is hard to strain out. Bottle 9 will be the experiemnt to disprove that. I am going for one stir per day</p>
      <p>Bottle 4,5,6,7 Dumped. Poor taste</p>
    </aside>
    <main role="main" id="vin-main" class="clay">
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
   <!--  <aside class="cost-notes clay">
      <h4 class="center-align">Stats</h4>
    </aside> -->
    <footer id="main-footer">

      <p>footer</p>
      <div class="copy"></div>
      <div id="datey"></div>
      <div class="origin">This page start 1/7/2023</div>
      <div class="locate"></div>
      <div class="color"></div>
      <p><?php echo 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' ;?></p>


      <ul>
        <li>Allow the bottle to set for 30 days before straining, maximizing ferment time</li>
        <li></li>
        <li></li>
      </ul>
  </footer>
</div>
<script type="module" src="<?php echo base_url('assets/js/vinegar.js');?>"></script>
<script type="module" src="<?php echo base_url('assets/js/script-dist.js');?>"></script>
</body>
</html>