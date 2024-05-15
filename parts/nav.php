<?php
$showLogo = $showLogo ?? true;
?>

<nav>
  <div id="nav-wrap">
    <div id="nav-logo" class="text-logo accent">
      <?php if ($showLogo) { ?>
        ogrody<br>now<span class="alt">e</span>go<br>int<span
          class="alt">e</span>rn<span class="alt">e</span>tu
      <?php } ?>
    </div>
    <div id="nav-links">
      <div class="nav-link">program</div>
      <div class="nav-link">goście</div>
      <div class="nav-link">kontakt</div>
    </div>
  </div>
</nav>
