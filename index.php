<?php require_once "./db.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous">
    <title>Movies</title>
</head>

<body class="bg-dark">
    <div class="container mt-5">
        <h1 class="text-center mb-4 text-white fw-bold">Movies</h1>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
            <?php foreach ($movies as $movie) { ?>
                <div class="col">
                    <ul class="h-100 list-unstyled border rounded-4 bg-light p-4">
                        <li class="fw-bold fs-5"><?php echo $movie->title ?></li>
                        <li>Year: <?php echo $movie->year ?></li>
                        <li>Director: <?php echo $movie->director ?></li>
                        <li><?php echo $movie->getGenres() ?></li>
                        <li><?php echo $movie->getScore() ?></li>
                    </ul>
                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>