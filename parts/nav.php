<?php
$showLogo = $showLogo ?? true;
$current  = $current ?? '';
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
      <a
        class="nav-link <?= $current === 'program' ? 'nav-link--current' : '' ?>">program</a>
      <a
        class="nav-link <?= $current === 'prelegenci' ? 'nav-link--current' : '' ?>">prelegenci</a>
      <a
        class="nav-link <?= $current === 'kontakt' ? 'nav-link--current' : '' ?>">kontakt</a>
    </div>
  </div>
</nav>
