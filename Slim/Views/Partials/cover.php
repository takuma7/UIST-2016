
<section id="top-cover">
  <img id="top-cover-img" src="<?php echo BASE_PATH; ?>/lib/img/top-1.png" alt="">

  <div class="ui two column centered grid">
    <div class="column centered row">
      <div class="ui secondary pointing fluid seven item menu">
        <?php $app->render("Partials/menu.php"); ?>
      </div>
      <button id="menu-button" class="ui basic black button">
        <i class="fa fa-bars"></i>
        Menu
      </button>
    </div>
    <!--
    <div id="main-banner" class="column centered row" >
      <h1 class="logo">UIST 2016</h1>
      <p class="sub-logo text text-medium">29th ACM User Interface Software and Technology Symposium</p>
    </div>
    <div class="four column centered stackable row">
      <div class="column center aligned">
        <h3 class="text text-spaced"><i class="fa fa-map-marker"></i> Location</h3>
        <p class="text text-medium text-bold">Tokyo, Japan</p>
      </div>
      <div class="column center aligned">
        <h3 class="text text-spaced"><i class="fa fa-calendar-o"></i> Date</h3>
        <p class="text text-medium text-bold">October 16-19, 2016</p>
      </div>
    </div>
    -->
  </div>
</section>
