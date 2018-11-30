<?php snippet('header') ?>
<?php $rand = $page->children()->visible()->shuffle()->first()->num() - 1 ?>

<div id="hero">

  <?php foreach ($page->children()->visible() as $key => $event): ?>
    <?php if ($event->featured()->toFile()): ?>
    <div class="hero" data-id="<?= $event->uid() ?>" style="background-image: url('<?= $event->featured()->toFile()->width(2000)->url() ?>')" data-current="<?php e($event->num() - 1 == $rand, 'true', 'false') ?>">
    <?php else: ?>
    <div class="hero" data-id="<?= $event->uid() ?>" data-current="<?php e($event->num() - 1 == $rand, 'true', 'false') ?>">
    <?php endif ?>
      <div class="bottom">
        <div class="tags">
          <?php foreach ($event->tags()->split() as $key => $tag): ?>
            <div class="tag"><?= $tag ?></div>
          <?php endforeach ?>
        </div>
        <div><!-- <div class="tag accent">Réserver</div> --></div>
      </div>
    </div>
  <?php endforeach ?>

</div>

<div id="events">
  <?php foreach ($page->children()->visible() as $key => $event): ?>
    <div class="event" data-id="<?= $event->uid() ?>" data-current="<?php e($event->num() - 1 == $rand, 'true', 'false') ?>">
      <div class="title">
        <div class="date"><?= $event->date('d') ?></div>
        <div class="title"><?= $event->title()->upper().'    '.$event->subtitle() ?></div>
      </div>
      <div class="message">
        <?php for ($i = 1; $i <= 10; $i++): ?>
          <p><?= $event->title()->upper().'    '.$event->subtitle() ?></p><p>    </p><?=$event->text()->kt().'    ' ?>
        <?php endfor ?>
      </div>
      <div class="buy"><div>Réserver</div></div>
    </div>
  <?php endforeach ?>

</div>
<div id="explore">Explore</div>
<footer>
  <div>
    <img src="<?= url('assets/images/footer1.png') ?>" alt="" height="100%">
  </div>
  <div>
    <img src="<?= url('assets/images/footer2.png') ?>" alt="" height="100%">
  </div>
  <div>
    <img src="<?= url('assets/images/footer3.png') ?>" alt="" height="100%">
  </div>
  <div>
    <img src="<?= url('assets/images/footer4.png') ?>" alt="" height="100%">
  </div>
</footer>

<?php snippet('footer') ?>
