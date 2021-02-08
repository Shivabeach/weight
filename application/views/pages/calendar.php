<body>
  <nav>
    <?php $this->load->view("includes/menu.html");?>
  </nav>
  <header>
    <h1 id="head"><?=ucwords($header);?></h1>
  </header>
  <main class="container">
    <div class="container--main" id="left">
      <?php
      echo $calendar;
      ?>
      <!-- calendar -->
      </div>  <!-- end of main -->
    </main>
    <footer>
    </footer>