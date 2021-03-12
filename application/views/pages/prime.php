<body id="prime">
  <nav>
    <?php	$this->load->view("includes/menu.html");?>
  </nav>
  <header>
    <h1 id="head"><?=ucwords($header);?></h1>
  </header>
  <main class="container">
    <div class="container--left">
      <div class="card">
        <div class="card--inside">
          <div class="card--inside-header">
            <h5>Links</h5>
          </div>
          <p id="mess"></p>
          <!-- Javascript from script.js -->
          <h5 class="headline fs-3 bold-6">Pple In Space</h5>

          <ul id="space">

          </ul>

        </div>
      </div>
    </div>
    <div class="container--main">
      <div class="card">
        <div class="card--inside">
          <div class="card--inside-header">
            <h5>Starches</h5>
          </div>
          <div class="line"></div>
          <div class="headline fs-3 bold-6">Starches made easy</div>
          <p>8/24/2020</p>
          <p>Bagels, oatmeal, Whole grain crackers</p>
          <p>Can make oatmeal in the Instant Pot</p>
          <p>Share bagels with Kim</p>
          <p>Whole grain bread - 1 slice</p>
          <p>Peas are a possibility, but hate frozen foods</p>
          <details>
            <summary>Winter squash</summary>
            <p>Winter squash is slightly restricted. Comparable to sweet potato. </p>
          </details>
          <p>Ask About Winter squash</p>

        </div>
      </div>
      <div class="card">
        <div class="card--inside">
          <div class="card--inside-header">
            <h5>Notes</h5>
          </div>
          <div class="line2"></div>
          <h5 class="headline fs-3 bold-6">Sugar</h5>
          <p class="pstate">
            Sugar is the inverse of the stock market. The market goes down, it takes forever to go back up. Sugar goes
            up, it takes forever to get it back down. I am sure Ketosis is the same.
          </p>


        </div>
      </div>

      <div class="card">
        <div class="card--inside">
          <div class="card--inside-header">
            <h5>Weakness</h5>
          </div>
          <p class="pstate">Courage is defined as getting out of the boat when the guy in front of you has been shot</p>
          <ul class="weakness">
            <li>Poor documentation</li>
            <li>Allowing myself to eat the wrong foods</li>
            <li>Thinking I can only take one bite or piece of something</li>
            <li>Missing or skipping meals meals</li>
            <li></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container--right">
      <div class="card">
        <div class="card--inside">
          <div class="card--inside-header">
            <h5>Exercise</h5>
          </div>
          <h4 class="headline fs-3 bold-6">Walking</h5>
            <?php	foreach($waled as $row):?>
            <?php
								$now = time();
								$date = date("m-Y", $now);
								$distance = round($row->distance, 2);
								if($date == "01-2021"):
									echo "<p>I have walked " . $distance . " miles from August to January </p>";
								elseif($date == "02-2021"):
									echo "<p>I have walked " . $distance . " miles from August to February </p>";
								elseif($date == "03-2021"):
									echo "<p>I have walked " . $distance . " miles from August to March </p>";
								else:
									echo "No Date";
								endif;

						?>
            <?php endforeach;?>
            <?php foreach ($last as $list):?>
            <p>Last time I walked was <?=nice_date($list->date, "D  M d, Y");?></p>
            <?php endforeach;?>


        </div>
      </div>
    </div>
  </main>