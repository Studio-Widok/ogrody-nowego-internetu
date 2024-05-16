<?php
$showLogo = $showLogo ?? true;
$current  = $current ?? '';
?>

<nav>
  <div id="nav-wrap">
    <div id="nav-logo" class="text-logo accent">
      <?php if ($showLogo) { ?>
        <a href="<?= BASE_URL ?>">
          ogrody<br>now<span class="alt">e</span>go<br>int<span
            class="alt">e</span>rn<span class="alt">e</span>tu
        </a>
      <?php } ?>
    </div>
    <div id="nav-links">
      <a href="<?= BASE_URL ?>/program"
        class="nav-link <?= $current === 'program' ? 'nav-link--current' : '' ?>">program</a>
      <a href="<?= BASE_URL ?>/goscie"
        class="nav-link <?= $current === 'goscie' ? 'nav-link--current' : '' ?>">goście</a>
      <a href="<?= BASE_URL ?>/kontakt"
        class="nav-link <?= $current === 'kontakt' ? 'nav-link--current' : '' ?>">kontakt</a>
    </div>
  </div>
</nav>
