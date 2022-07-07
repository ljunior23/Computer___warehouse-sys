<?php
  $page_title = 'Home Page';
  require_once('includes/load.php');
  if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}
?>
<?php include_once('layouts/header.php'); ?>
<div class="row">
  <div class="col-md-12">
    <?php echo display_msg($msg); ?>
  </div>
 <div class="col-md-12">
    <div class="panel">
      <div class="jumbotron text-center">
         <h1>Hope I can use it for my final project!</h1>
         <p>We became Rasta just to blend in.</p>
      </div>
    </div>
 </div>
</div>
<?php include_once('layouts/footer.php'); ?>
