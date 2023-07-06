<body id="vinegar">
  <div id="cost-container">
    <header id="header">
      <?php $this->load->view("menus/main-menu.html");?>
    </header>
    <aside class="clay">
      <h2 class="center-align">Stats</h2>
      <p class="projects"></p>
      <p class="ave projects"></p>
      <h2 class="center-align">Comments</h2>
      <p>New Meter 5/15/2023. Basically useless</p>
      <h2>Procedure</h2>
      <ul class="listStyle">
        <li>#1 Put medium in jar, add sugar and water</li>
          <ul>
            <li class="odd">Stir & cover with coffee filter</li>
          </ul>
        <li>#2 Stir daily until bubbling stops</li>
        <li>#3 When bubbling is stopped:</li>
          <ul>
            <li class="odd">Strain medium out</li>
            <li class="odd">Or, strain and then add new fruit, start second fermentation</li>
          </ul>
        <li>#4 If strained, cover with coffee filter or lose cover </li>
          <ul>
            <li class="odd">After 15-30 days, strain & bottle</li>
          </ul>
        <li>#5 If fruit added & fermentation continues, go to #3</li>
      </ul>
    </aside>
    <main role="main" id="vin-main" class="clay">
      <section class="fiber-container">
        <h1 class="center-align ul light">Vinegar Record</h1>
        <table class="vinegar-table">
          <tr class="table-header">
            <th>Batch</th>
            <th>Contents</th>
            <th>Started</th>
            <th>End</th>
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
      <div class="footer-skeleton">
        <div class="comment-holder">
          <ul>
            <li class="copy"></li>
            <li id="datey"></li>
            <li class="origin">This page start 1/7/2023</li>
            <li class="locate"></li>
            <li class="color"></li>
            <li><?php echo 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' ;?></li>
          </ul>
        </div>
        <div class="comment-holder">
          <ul>
            <li>Allow the bottle to set for 30 days before straining, maximizing ferment time</li>
            <li>White distilled vinegar typically has a pH of around 2.5.</li>
            <li>Do not over stir, especially after fermentation is done</li>
          </ul>
        </div>
        <div class="comment-holder">
          <ul>
            <li>Bottle 4,5,6,7,8,13 Dumped. Poor taste and/or Kalm yeast</li>
            <li>Strawberry doesnt seem to be a good fit for vinegar</li>
            <li>{elapsed_time}</li>
          </ul>
        </div>
        <div class="comment-holder">
          <p>It occurs that I may be stirring the mix too much. This may be producing the mash that is hard to strain out. Bottle 9 will be the experiemnt to disprove that. I am going for one stir per day</p></div>
        </div>



      </footer>
    </div>
    <script type="module" src="<?php echo base_url('assets/js/vinegar.js');?>"></script>
    <script type="module" src="<?php echo base_url('assets/js/script-dist.js');?>"></script>
  </body>
</html>