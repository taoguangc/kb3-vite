<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title><?= $site->title() ?> | <?= $page->title() ?></title>

  <?= vite()->client() ?>
  <?= vite()->css() ?>
  <?= vite()->js() ?>
  <link rel="shortcut icon" type="image/x-icon" href="<?= url('favicon.ico') ?>">
</head>
<body>

  <header class="mx-auto container">
    <a class="logo" href="<?= $site->url() ?>">
      <?= $site->title()->html() ?>
    </a>

    <nav class="menu">
      <?php foreach ($site->children()->listed() as $item): ?>
      <a <?php e($item->isOpen(), 'aria-current ') ?> href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
      <?php endforeach ?>
      <?php snippet('social') ?>
    </nav>
  </header>

  <main class="mx-auto container">
