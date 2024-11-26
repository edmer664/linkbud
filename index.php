<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LinkBud</title>

    <!-- include components.deps -->
    <?php include 'components/deps.php'; ?>
</head>

<body>

    <!-- navbar -->
    <header class="container">
        <nav class="navbar navbar-expand-lg py-4">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">LinkBud</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end"
                    id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
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

    <!-- Hero Section -->
    <section class="hero-section py-5" style="min-height: 100vh;">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-md-6 text-center text-lg-start">
                    <h1 class="display-4">Welcome to LinkBud</h1>
                    <p class="lead">Your ultimate link management tool. Organize, share, and track your links effortlessly.</p>
                    <a href="signup.php" class="btn btn-primary btn-lg rounded-pill mt-3">Get Started</a>
                </div>
                <div class="col-md-6 mx-auto">
                    <img src="assets/landing/assets/hero.svg" alt="Hero Image" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-5">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col">
                    <h2 class="display-5">Features</h2>
                    <p class="lead">Discover what makes LinkBud the best link management tool.</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 card-hover">
                        <img src="assets/landing/assets/analytics.svg" class="card-img-top" alt="Analytics" style="max-height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title">Analytics</h5>
                            <p class="card-text">Track your link performance with detailed analytics and insights.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 card-hover">
                        <img src="assets/landing/assets/sharing.svg" class="card-img-top" alt="Sharing" style="max-height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title">Sharing</h5>
                            <p class="card-text">Easily share your links with others and collaborate seamlessly.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 card-hover">
                        <img src="assets/landing/assets/free.svg" class="card-img-top" alt="Free" style="max-height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title">Free</h5>
                            <p class="card-text">Enjoy all the core features of LinkBud for free, with no hidden costs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="assets/landing/js/scripts.js"></script>

</body>

</html>