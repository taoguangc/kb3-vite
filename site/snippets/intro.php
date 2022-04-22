<header class="h1">
  <h1><?= $page->headline()->or($page->title())->html() ?></h1>
  <?php if ($page->subheadline()->isNotEmpty()): ?>
  <p class="color-grey"><?= $page->subheadline()->html() ?></p>
  <?php endif ?>
</header>
