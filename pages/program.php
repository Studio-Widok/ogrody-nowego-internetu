<?php include '../header.php'; ?>
<div id="program-top">
  <?php get_part('nav', ['current' => 'program']); ?>
  <div class="rsep"></div>
  <div class="rsep"></div>
  <div class="content column">
    <div id="program-top-title">
      <div class="r"></div>
      <div class="title accent">program</div>
    </div>
    <img src="./media/apteka.jpg" alt="" id="program-top-img">
  </div>
  <div class="r"></div>
  <?php get_part('program-plan') ?>
  <div class="rsep"></div>
  <div class="rsep"></div>
  <?php get_part('footer'); ?>
</div>
<?php include '../footer.php'; ?>
