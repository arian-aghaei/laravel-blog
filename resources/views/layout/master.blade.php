<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-dark">
<!-- START main-wrapper -->
<section class="d-flex">

    <!-- start of sidenav -->
    <aside><div class="sidenav position-sticky d-flex flex-column justify-content-between">
            <a class="navbar-brand" href="index.html" class="logo">
                <img src="images/logo.png" alt="">
            </a>
            <!-- end of navbar-brand -->

            <div class="navbar navbar-dark my-4 p-0 font-primary">
                <ul class="navbar-nav w-100">
                    <li class="nav-item active">
                        <a class="nav-link text-white px-0 pt-0" href="index.html">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-white px-0" href="about.html">About</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-white px-0" href="contact.html">Contact</a>
                    </li>
                    <li class="nav-item  accordion">
                        <div id="drop-menu" class="drop-menu collapse">
                            <a class="d-block " href="index-2.html">Home 2</a>
                            <a class="d-block " href="category.html">Category</a>
                            <a class="d-block " href="post-details.html">Post Details</a>
                            <a class="d-block " href="privacy.html">Privacy &amp; Policy</a>
                        </div>
                        <a class="nav-link text-white" href="#!" role="button" data-toggle="collapse" data-target="#drop-menu" aria-expanded="false" aria-controls="drop-menu">Pages</a>
                    </li>
                    <li class="nav-item mt-3">
                        <select class="custom-select bg-transparent rounded-0 text-white shadow-none" id="pick-lang">
                            <option selected value="en">English</option>
                            <option value="fr">French</option>
                        </select>
                    </li>
                </ul>
            </div>
            <!-- end of navbar -->

            <ul class="list-inline nml-2">
                <li class="list-inline-item">
                    <a href="#!" class="text-white text-red-onHover pr-2">
                        <span class="fab fa-twitter"></span>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="#!" class="text-white text-red-onHover p-2">
                        <span class="fab fa-facebook-f"></span>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="#!" class="text-white text-red-onHover p-2">
                        <span class="fab fa-instagram"></span>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="#!" class="text-white text-red-onHover p-2">
                        <span class="fab fa-linkedin-in"></span>
                    </a>
                </li>
            </ul>
            <!-- end of social-links -->
        </div></aside>
    <!-- end of sidenav -->
    <div class="main-content">

        <div class="nav-toggle-overlay"></div>
        <!-- end of mobile-nav -->

        <div class="container pt-4 mt-5">
            <div class="row justify-content-between">
                <div class="col-lg-7">

                @yield('content')


                </div>
                <div class="col-lg-4 col-md-5">
                    <div class="widget text-center">
                        <img class="author-thumb-sm rounded-circle d-block mx-auto" src="images/author-sm.png" alt="">
                        <h2 class="widget-title text-white d-inline-block mt-4">About Me</h2>
                        <p class="mt-4">Lorem ipsum dolor sit coectetur adiing elit. Tincidunfywjt leo mi, viearra urna. Arcu ve isus, condimentum ut vulpate cursus por turpis.</p>
                        <ul class="list-inline mt-3">
                            <li class="list-inline-item">
                                <a href="#!" class="text-white text-primary-onHover p-2">
                                    <span class="fab fa-twitter"></span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!" class="text-white text-primary-onHover p-2">
                                    <span class="fab fa-facebook-f"></span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!" class="text-white text-primary-onHover p-2">
                                    <span class="fab fa-instagram"></span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!" class="text-white text-primary-onHover p-2">
                                    <span class="fab fa-linkedin-in"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- end of author-widget -->

                    <div class="widget bg-dark p-4 text-center">
                        <h2 class="widget-title text-white d-inline-block mt-4">Subscribe Blog</h2>
                        <p class="mt-4">Lorem ipsum dolor sit coectetur elit. Tincidu nfywjt leo mi, urna. Arcu ve isus, condimentum ut vulpate cursus por.</p>
                        <form action="#">
                            <div class="form-group">
                                <input type="email" class="form-control bg-transparent rounded-0 my-4" placeholder="Your Email Address">
                                <button class="btn btn-primary">Subscribe Now <img src="images/arrow-right.png" alt=""></button>
                            </div>
                        </form>
                    </div>
                    <!-- end of subscription-widget -->

                    <div class="widget">
                        <div class="mb-5 text-center">
                            <h2 class="widget-title text-white d-inline-block">Featured Posts</h2>
                        </div>
                        <div class="card post-item bg-transparent border-0 mb-5">
                            <a href="post-details.html">
                                <img class="card-img-top rounded-0" src="images/post/post-sm/01.png" alt="">
                            </a>
                            <div class="card-body px-0">
                                <h2 class="card-title">
                                    <a class="text-white opacity-75-onHover" href="post-details.html">Excepteur ado Do minimal duis laborum Fugiat ea</a>
                                </h2>
                                <ul class="post-meta mt-3 mb-4">
                                    <li class="d-inline-block mr-3">
                                        <span class="fas fa-clock text-primary"></span>
                                        <a class="ml-1" href="#">24 April, 2016</a>
                                    </li>
                                    <li class="d-inline-block">
                                        <span class="fas fa-list-alt text-primary"></span>
                                        <a class="ml-1" href="#">Photography</a>
                                    </li>
                                </ul>
                                <a href="post-details.html" class="btn btn-primary">Read More <img src="images/arrow-right.png" alt=""></a>
                            </div>
                        </div>
                        <!-- end of widget-post-item -->
                        <div class="card post-item bg-transparent border-0 mb-5">
                            <a href="post-details.html">
                                <img class="card-img-top rounded-0" src="images/post/post-sm/02.png" alt="">
                            </a>
                            <div class="card-body px-0">
                                <h2 class="card-title">
                                    <a class="text-white opacity-75-onHover" href="post-details.html">Excepteur ado Do minimal duis laborum Fugiat ea</a>
                                </h2>
                                <ul class="post-meta mt-3 mb-4">
                                    <li class="d-inline-block mr-3">
                                        <span class="fas fa-clock text-primary"></span>
                                        <a class="ml-1" href="#">24 April, 2016</a>
                                    </li>
                                    <li class="d-inline-block">
                                        <span class="fas fa-list-alt text-primary"></span>
                                        <a class="ml-1" href="#">Photography</a>
                                    </li>
                                </ul>
                                <a href="post-details.html" class="btn btn-primary">Read More <img src="images/arrow-right.png" alt=""></a>
                            </div>
                        </div>
                        <!-- end of widget-post-item -->
                    </div>
                    <!-- end of post-items widget -->
                </div>
            </div>
        </div>

        <!-- start of footer -->
        <footer class="bg-dark">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-3 col-sm-6 mb-5">
                        <h5 class="font-primary text-white mb-4">Inspirations</h5>
                        <ul class="list-unstyled">
                            <li><a href="#!">Privacy State</a></li>
                            <li><a href="#!">Privacy</a></li>
                            <li><a href="#!">State</a></li>
                            <li><a href="#!">Privacy</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-5">
                        <h5 class="font-primary text-white mb-4">Templates</h5>
                        <ul class="list-unstyled">
                            <li><a href="#!">Privacy State</a></li>
                            <li><a href="#!">Privacy</a></li>
                            <li><a href="#!">State</a></li>
                            <li><a href="#!">Privacy</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-5">
                        <h5 class="font-primary text-white mb-4">Resource</h5>
                        <ul class="list-unstyled">
                            <li><a href="#!">Privacy State</a></li>
                            <li><a href="#!">Privacy</a></li>
                            <li><a href="#!">State</a></li>
                            <li><a href="#!">Privacy</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-5">
                        <h5 class="font-primary text-white mb-4">Company</h5>
                        <ul class="list-unstyled">
                            <li><a href="#!">Privacy State</a></li>
                            <li><a href="#!">Privacy</a></li>
                            <li><a href="#!">State</a></li>
                            <li><a href="#!">Privacy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end of footer -->
    </div>

</section>
<!-- END main-wrapper -->


</body>
</html>
