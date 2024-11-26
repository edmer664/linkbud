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

    <!-- Hero Section -->
    <section class="hero-section py-5 d-flex align-items-center"
        style="min-height: 600px;">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-md-6 text-center text-lg-start">
                    <h1 class="display-4">Welcome to LinkBud</h1>
                    <p class="lead">Your ultimate link management tool. Organize, share, and track your links effortlessly.</p>
                    <a href="signup.php" class="btn btn-primary btn-lg rounded-pill mt-3">Get Started</a>
                </div>
                <div class="col-md-6 mx-auto">
                    <img src="assets/landing/assets/hero.svg" alt="Hero Image" class="img-fluid" style="object-fit: contain;">
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
                        <img src="assets/landing/assets/analytics.svg" class="card-img-top" alt="Analytics" style="max-height: 200px; object-fit: contain;">
                        <div class="card-body">
                            <h5 class="card-title">Analytics</h5>
                            <p class="card-text">Track your link performance with detailed analytics and insights.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 card-hover">
                        <img src="assets/landing/assets/sharing.svg" class="card-img-top" alt="Sharing" style="max-height: 200px; object-fit: contain;">
                        <div class="card-body">
                            <h5 class="card-title">Sharing</h5>
                            <p class="card-text">Easily share your links with others and collaborate seamlessly.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 card-hover">
                        <img src="assets/landing/assets/free.svg" class="card-img-top" alt="Free" style="max-height: 200px; object-fit: contain;">
                        <div class="card-body">
                            <h5 class="card-title">Free</h5>
                            <p class="card-text">Enjoy all the core features of LinkBud for free, with no hidden costs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ABOUT -->
    <aside class="text-center bg-gradient-primary-to-secondary">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-xl-8">
                    <div class="h2 fs-1 text-white">"Streamline your link management with LinkBud."</div>
                    <!-- <img src="assets/img/tnw-logo.svg" alt="..." style="height: 3rem"> -->
                </div>
            </div>
        </div>
    </aside>



    <!-- Team Section-->
    <section id="team" class="py-5 bg-light">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col">
                    <h2 class="display-5">Our Team</h2>
                    <p class="lead">Meet the amazing team behind LinkBud.</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="card h-100 card-hover">
                        <img src="assets/landing/assets/team/edmer.png" class="card-img-top" alt="Team Member 1" style="max-height: 200px; object-fit: contain;">
                        <div class="card-body text-center">
                            <h5 class="card-title">John Edmerson Pizarra</h5>
                            <p class="card-text">Lead Dev</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card h-100 card-hover">
                        <img src="assets/landing/assets/team/kevern.png" class="card-img-top" alt="Team Member 2" style="max-height: 200px; object-fit: contain;">
                        <div class="card-body text-center">
                            <h5 class="card-title">Kevern Joebert Angeles</h5>
                            <p class="card-text">Frontend Dev</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card h-100 card-hover">
                        <img src="assets/landing/assets/team/jian.png" class="card-img-top" alt="Team Member 3" style="max-height: 200px; object-fit: contain;">
                        <div class="card-body text-center">
                            <h5 class="card-title">Jian Ross Dela Rosa</h5>
                            <p class="card-text">Backend Dev</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card h-100 card-hover">
                        <img src="assets/landing/assets/team/florence.png" class="card-img-top" alt="Team Member 4" style="max-height: 200px; object-fit: contain;">
                        <div class="card-body text-center">
                            <h5 class="card-title">Florence Gayle Magpoc</h5>
                            <p class="card-text">Quality Assurance</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call To Action -->
    <section class="cta">
        <div class="cta-content">
            <div class="container">
                <h2 class="text-white display-1 lh-1 mb-4">Ready to Get Started?</h2>
                <a href="signup.php" class="btn btn-outline-light py-3 px-4 rounded-pill">Sign Up Now</a>
            </div>
        </div>
    </section>

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