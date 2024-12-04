<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/styles.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-white py-4">
        <div class="container w-100 d-flex align-content-between justify-content-center">
            <div class="container d-flex justify-content-start">
                <a class="navbar-brand" href="#">
                    <img src="./assets/images/navbar logo.png" alt="Bootstrap" height="24">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active pink" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/service">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/price">Price</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/testimonial">Testimonial</a>
                    </li>
                </ul>
            </div>
            <div class="container d-flex justify-content-end">
                <a class="nav-link" href="#footer">
                    <button type="button" class="btn btn-outline-primary outline-pink pink">Contact</button>
                </a>
            </div>
        </div>
    </nav>


    @yield('content')
    
    <section id="footer">
            <div class="subscription-section p-5">
                <h2 class="mt-5">Subscribe to get notified about updates</h2>
                <p class="mb-5">By subscribing with your email, you will accept our privacy policy</p>
                <form class="d-flex justify-content-center mb-5">
                    <input type="email" class="form-control me-3 rounded-2" placeholder="Enter your email">
                    <button type="submit" class="btn subscription-btn rounded-2">Subscribe us</button>
                </form>
                <div class="mt-3 row">
                    <div class="d-flex justify-content-start col-6">
                        <img src="./assets/images/footer logo.png" alt="">
                    </div>
                    <div class="footer-nav mt-4 col-6 d-flex justify-content-end">
                                <a class="nav-link active pink" aria-current="page" href="/">Home</a>
                                <a class="nav-link" href="/about">About</a>
                                <a class="nav-link" href="/service">Service</a>
                                <a class="nav-link" href="/price">Price</a>
                                <a class="nav-link" href="/testimonials">Testimonial</a>
                        </ul>
                    </div>
                </div>
            </div>
            </div>
        </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>