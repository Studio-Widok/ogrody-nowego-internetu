<?php include '../header.php'; ?>
<div id="program-top">
  <?php get_part('nav', ['current' => 'program']); ?>
  <div class="rsep"></div>
  <div class="rsep"></div>
  <div class="content">
    <div id="program-top-title" class="column">
      <div class="r"></div>
      <div class="title accent">program</div>
    </div>
    <img src="./media/image6.jpg" alt="" id="program-top-img">
  </div>
  <div class="r"></div>
  <?php get_part('program-plan') ?>
  <div class="rsep"></div>
  <div class="rsep"></div>
  <?php get_part('footer'); ?>
</div>
<?php include '../footer.php'; ?>
