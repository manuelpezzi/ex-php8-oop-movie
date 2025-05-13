<?php
/** @var Movie $movie */
?>
<div class="movie-card">
    <h2><?php echo htmlspecialchars($movie->title); ?></h2>
    <p><strong>Regista:</strong> <?php echo htmlspecialchars($movie->director); ?></p>
    <p><strong>Anno:</strong> <?php echo $movie->year; ?></p>
    <p><strong>Generi:</strong> 
        <?php
        $genreNames = array_map(function($genre) {
            return htmlspecialchars($genre->name);
        }, $movie->genres);
        echo implode(", ", $genreNames);
        ?>
    </p>
    <p><strong>Descrizioni generi:</strong> 
        <?php
        $genreDescriptions = array_map(function($genre) {
            return htmlspecialchars($genre->description);
        }, $movie->genres);
        echo implode("; ", $genreDescriptions);
        ?>
    </p>
    <p><strong>Visualizzazioni:</strong> <?php echo $movie->views; ?></p>
</div>