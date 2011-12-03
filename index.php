<?php include('header.php'); ?>

  <!-- Main hero unit for a primary marketing message or call to action -->
  <div class="hero-unit">
    <h1>Hello, Reader!</h1>
    <p>OpenReader is a recommendation engine for the web, enabling any active reader to subscribe to, manage and discover new things to read.</p>
    <p><a class="btn primary large">Learn more &raquo;</a></p>
  </div>
  
  <div class="span5">
    <?php if(isset($personMarkup)): ?>
    <div class="me"><?php print $personMarkup ?></div>
    <?php endif ?>

    <?php if(isset($activityMarkup)): ?>
    <div class="activities">Your Activities: <?php print $activityMarkup ?></div>
    <?php endif ?>
    
    <?php
      if(isset($authUrl)) {
        print "<a class='login' href='$authUrl'>Connect Me!</a>";
      } else {
       print "<a class='logout' href='?logout'>Logout</a>";
      }
    ?>
  </div>
  
  <hr />
  <!-- Example row of columns -->
  <div class="row">
    <div class="span5">
      <h3>Feeds</h3>
      <ul class="unstyled">
        <li>Feed Name</li>
        <li>Feed Name</li>
        <li>Feed Name</li>
        <li>Feed Name</li>
        <li>Feed Name</li>
        <li>Feed Name</li>
        <li>Feed Name</li>
        <li>Feed Name</li>
        <li>Feed Name</li>
        <li>Feed Name</li>
      </ul>
    </div>
    <div class="span8">
      <h2>Feed Name</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </div>

<?php include('footer.php'); ?>