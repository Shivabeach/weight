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
          <p class="head1">Proteins: <span id="proteinCount"></span></p>
          <p class="head1">Calories: <span id="calorieCount"></span></p>
          <p class="head1">Carbs: <span id="carbCount"></span></p>
          <p class="head1">Fiber: <span id="fiberCount"></span></p>
        </fieldset>
      </form>
      <p>
        <button type="submit" class="submit">Submit</button>
      </p>
      <p>
        <button type="reset" class="reset">Reset</button>
      </p>
    </aside>
    <!-- main section -->
    <section id="plan">
      <div class="box-header"><h3>Calculate Daily Intake</h3></div>
      <div id="goals-container">
        <div class="box-name">
          <span>Name: </span><input type="text" class="name">
        </div>
        <div class="box-calories">
          <span>Calories: </span><input type="number" class="calories">
        </div>
        <div class="box-carbs">
          <span>Carbs: </span><input type="number" class="carbs">
        </div>
        <div class="box-protein">
          <span>Protein: </span><input type="number" class="protein">
        </div>
        <div class="box-fiber">
          <span>Fiberourus: </span><span><input type="number" class="fiber"></span>
        </div>

        <div class="box-name">
          <span>Name: </span><input type="text" class="name">
        </div>
        <div class="box-calories">
          <span>Calories: </span><input value=0 type="number" class="calories">
        </div>
        <div class="box-carbs">
          <span>Carbs: </span><input value=0 type="number" class="carbs">
        </div>
        <div class="box-protein">
          <span>Protein: </span><input value=0 type="number" class="protein">
        </div>
        <div class="box-fiber">
          <span>Fiberourus: </span><input value=0 type="number" class="fiber">
        </div>

        <div class="box-name">
          <span>Name: </span><input type="text" class="name">
        </div>
        <div class="box-calories">
          <span>Calories: </span><input value=0 type="number" class="calories">
        </div>
        <div class="box-carbs">
          <span>Carbs: </span><input value=0 type="number" class="carbs">
        </div>
        <div class="box-protein">
          <span>Protein: </span><input value=0 type="number" class="protein">
        </div>
        <div class="box-fiber">
          <span>Fiberourus: </span><input value=0 type="number" class="fiber">
        </div>
        <div class="box-name">

          <span>Name: </span><input type="text" class="name">
        </div>
        <div class="box-calories">
          <span>Calories: </span><input value=0 type="number" class="calories">
        </div>
        <div class="box-carbs">
          <span>Carbs: </span><input value=0 type="number" class="carbs">
        </div>
        <div class="box-protein">
          <span>Protein: </span><input value=0 type="number" class="protein">
        </div>
        <div class="box-fiber">
          <span>Fiberourus: </span><input value=0 type="number" class="fiber">
        </div>
      </div>
      <p class="addition">+</p>
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
</body>
</html>