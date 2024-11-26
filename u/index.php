<?php
require_once '../models/Link.php';

$slug = $_GET['slug'] ?? null;
$links = [];

if ($slug) {
    $linkModel = new Link();
    $links = $linkModel->read(['alias' => $slug]);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LinkBud</title>

    <!-- include components.deps -->
    <?php include '../components/deps.php'; ?>
</head>

<body>



    <!-- navbar -->
    <div class="shadow-sm">


        <header class="container">
            <nav class="navbar navbar-expand-lg py-4">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/">LinkBud</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end"
                        id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#features">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#team">Team</a>
                            </li>
                            <li class="nav-item">

                                <a href="login.php" class="btn btn-primary rounded-pill">Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    </div>


    <!-- Display links -->
    <div class="container d-flex align-items-center justify-content-center flex-column"
        style="min-height: 80vh;">
        <?php if (!empty($links)): ?>
            <h2>Links for: <?php echo htmlspecialchars($slug); ?></h2>
            <ul>
                <?php foreach ($links as $link): ?>
                    <li><a href="<?php echo htmlspecialchars($link['url']); ?>"><?php echo htmlspecialchars($link['url']); ?></a></li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <!-- display  assets\404.svg -->
            <img src="/assets/404.svg" alt="404" class="img-fluid" style="margin:0 auto;max-width: 500px;">
            <p class="text-center h1 mt-4">No links found for this slug.</p>
        <?php endif; ?>
    </div>

    <!-- Footer Section -->
    <footer class="py-4 bg-dark text-white">
        <div class="container text-center">

            <p class="mb-0">&copy; <?php echo date("Y"); ?> LinkBud. All rights reserved.</p>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="assets/landing/js/scripts.js"></script>

</body>

</html>