<body id="plan">
  <div id="plan-container">
    <header id="header" class="header">
      <?php $this->load->view("menus/main-menu.html");?>
    </header>
    <!-- begin grid body -->
    <aside id="left">
      <h4 class="center-align">Calorie Calculator</h4>
      <form action="" id="calorie" class="pure-form">
        <fieldset>
          <p>Proteins <span><input id="proteinCount"></span></p>
          <p>Calories <span><input id="calorieCount"></span></p>


        </fieldset>
      </form>
    </aside>
    <!-- main section -->
    <section id="plan">

      <div id="goals-container">
        <div id="goals">
          <h4>Calories</h4>
          <div id="totalCalories"></div>

          <button id="butt">Modal</button>

          <dialog id="dialog">
            <div class="right-align closer" id="close">X</div>
            <h3>This is a modal</h3>
            <p>Learning to use a modal from Jeffery Way</p>
            <!-- <button id="close">Close</button> -->
          </dialog>

        </div>
      </div>
    </section>
    <!-- footer -->
    <footer id="main-footer">
      <p>footer</p>
      <div class="copy"></div>
      <div id="datey"></div>
      <div class="origin">Project start 2 / 23 / 2022</div>
      <div class="locate"></div>
      <div class="color"></div>
    </footer>
  </div>
  <!--end container-->
  <script type="module" src="<?php echo base_url('assets/js/script-dist.js');?>"></script>
  <script type="module" src="<?php echo base_url('assets/js/plan.js');?>"></script>
  <script src="<?php echo base_url('assets/js/blank.js');?>"></script>
</body>
</html>