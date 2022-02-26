<body>
  <div id="plan-container">
    <header id="header">
      <?php $this->load->view("menus/main-menu.html");?>
    </header>
    <!-- begin grid body -->
    <aside id="left">
      <h4 class="center-align">Goals</h4>
      <p><input type="checkbox" name="goal1" id="goal1" checked=true> Goal One</p>
      <p><input type="checkbox" name="goal1" id="goal1"> Goal One</p>
      <p><input type="checkbox" name="goal1" id="goal1" checked=true> Goal One</p>
      <input type="checkbox" name="goal1" id="goal1" checked=true> Goal One

    </aside>
    <!-- main section -->
    <section id="plan">
      <p>Content</p>
      <div class="goals">
        <dl>
          <dt>The Goal</dt>
          <dd>-The goal explantion</dd>
          <dt>Goal 2</dt>
          <dd>-Goal two</dd>
        </dl>
      </div>
    </section>
    <!-- footer -->
    <footer id="main-footer">
      <p>footer</p>
      <div class="copy"></div>
      <div id="datey"></div>
      <div class="origin">Project start 2 / 23 / 2022</div>
      <div class="color"></div>
    </footer>
  </div>
  <!--end container-->
  <script src="<?php echo base_url('assets/js/script-dist.js');?>" defer></script>

</body>

</html>