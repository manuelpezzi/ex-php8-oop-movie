<?php
$movies = require_once __DIR__ . '/db.php';

require_once __DIR__ . '/Partials/header.php';
?>

<div class="movie-list">
    <?php foreach ($movies as $movie): ?>
        <?php require __DIR__ . '/Partials/movie-card.php'; ?>
    <?php endforeach; ?>
</div>

<?php require_once __DIR__ . '/Partials/footer.php'; ?>