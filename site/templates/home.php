<?php snippet('header') ?>
  <?php snippet('intro') ?>
  <?php if ($photographyPage = page('photography')): ?>
    <h2 class="text-2xl text-green-500">测试一下梵蒂冈dfg2ss</h2>
  <ul class="home-grid">
    <?php foreach ($photographyPage->children()->listed() as $album): ?>
    <li>
      <a href="<?= $album->url() ?>">
        <figure>
          <?php if ($cover = $album->cover()): ?>
          <?= $cover->resize(1024, 1024) ?>
          <?php endif ?>
          <figcaption>
            <span>
              <span class="example-name"><?= $album->title()->html() ?></span>
            </span>
          </figcaption>
        </figure>
      </a>
    </li>
    <?php endforeach ?>
  </ul>
  <?php endif ?>
<?php snippet('footer') ?>
