<?php
$title = 'Tech';
$posts = [
    [
        'title' => 'Some Tech title 1',
        'date' => 'january 1, 2021',
        'author' => 'ivy',
        'body' => 'Some World content 1',
    ],
    [
        'title' => 'Some Tech title 2',
        'date' => 'january 9, 2021',
        'author' => 'paige',
        'body' => 'Some World content 2',
    ],
    [
        'title' => 'Some Tech title 3',
        'date' => 'january 18, 2021',
        'author' => 'mina',
        'body' => 'Some World content 3',
    ],
    [
        'title' => 'Some Tech title 4',
        'date' => 'january 23, 2021',
        'author' => 'celeste',
        'body' => 'Some World content 4',
    ],
]



?>


<?php include __DIR__ . '/partials/header.php'; ?>
<main class="container">
  <?php include __DIR__ . '/partials/hero.php'; ?>
  <?php include __DIR__ . '/partials/featured.php'; ?>
    <div class="row g-5">
    <div class="col-md-8">
      <?php include __DIR__ . '/partials/posts.php'; ?>
    </div>
    <div class="col-md-4">
      <?php include __DIR__ . '/partials/sidebar.php'; ?>
    </div>
  </div>
</main>
<?php include __DIR__ . '/partials/footer.php'; ?>