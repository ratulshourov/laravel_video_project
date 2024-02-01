<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Video Chat</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB ESSENTIAL -->
    <link rel="stylesheet" href="{{ asset('mdbootstrap/css/mdb.min.css') }}" />
    <!-- MDB PLUGINS -->
    <link rel="stylesheet" href="{{ asset('mdbootstrap/plugins/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('mdbootstrap/plugins/css/calendar.min.css') }}" />
    <!-- Custom styles -->
    <style></style>
</head>

<body>
    <!-- Start your project here-->
    <div class="container">
        <header>
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg bg-body">
                <div class="container-fluid">
                    <button data-mdb-collapse-init class="navbar-toggler" type="button" data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarExample01">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Pricing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Navbar -->

            <!-- Jumbotron -->
            <div class="row">
                <div style="margin-left: 50px;" class="col-md-8">
                <div class="calendar" data-mdb-calendar-init id="calendar"></div>
                </div>
     
    </div>
            <!-- Jumbotron -->
        </header>
        <h3 style="text-align: center; color:blue">HOW IT WORKS</h3>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
                        <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/111.webp" class="img-fluid" />
                        <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#!" class="btn btn-primary" data-mdb-ripple-init>Button</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
                        <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/111.webp" class="img-fluid" />
                        <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#!" class="btn btn-primary" data-mdb-ripple-init>Button</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
                        <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/111.webp" class="img-fluid" />
                        <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#!" class="btn btn-primary" data-mdb-ripple-init>Button</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End your project here-->
        <!-- Footer -->
        <footer class="bg-body-tertiary text-center">
            <!-- Grid container -->
            <div class="container p-4">
                <!-- Section: Social media -->
                <section class="mb-4">
                    <!-- Facebook -->
                    <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

                    <!-- Twitter -->
                    <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>

                    <!-- Google -->
                    <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"><i class="fab fa-google"></i></a>

                    <!-- Instagram -->
                    <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>

                    <!-- Linkedin -->
                    <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>

                    <!-- Github -->
                    <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"><i class="fab fa-github"></i></a>
                </section>
                <!-- Section: Social media -->

                <!-- Section: Form -->
                <section class="">
                    <form action="">
                        <!--Grid row-->
                        <div class="row d-flex justify-content-center">
                            <!--Grid column-->
                            <div class="col-auto">
                                <p class="pt-2">
                                    <strong>Sign up for our newsletter</strong>
                                </p>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-5 col-12">
                                <!-- Email input -->
                                <div data-mdb-input-init class="form-outline mb-4">
                                    <input type="email" id="form5Example24" class="form-control" />
                                    <label class="form-label" for="form5Example24">Email address</label>
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-auto">
                                <!-- Submit button -->
                                <button data-mdb-ripple-init type="submit" class="btn btn-outline mb-4">
                                    Subscribe
                                </button>
                            </div>
                            <!--Grid column-->
                        </div>
                        <!--Grid row-->
                    </form>
                </section>
                <!-- Section: Form -->

                <!-- Section: Text -->
                <section class="mb-4">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
                        repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam eum
                        harum corrupti dicta, aliquam sequi voluptate quas.
                    </p>
                </section>
                <!-- Section: Text -->

                <!-- Section: Links -->
                <section class="">
                    <!--Grid row-->
                    <div class="row">
                        <!--Grid column-->
                        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase">Links</h5>

                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a class="text-body" href="#!">Link 1</a>
                                </li>
                                <li>
                                    <a class="text-body" href="#!">Link 2</a>
                                </li>
                                <li>
                                    <a class="text-body" href="#!">Link 3</a>
                                </li>
                                <li>
                                    <a class="text-body" href="#!">Link 4</a>
                                </li>
                            </ul>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase">Links</h5>

                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a class="text-body" href="#!">Link 1</a>
                                </li>
                                <li>
                                    <a class="text-body" href="#!">Link 2</a>
                                </li>
                                <li>
                                    <a class="text-body" href="#!">Link 3</a>
                                </li>
                                <li>
                                    <a class="text-body" href="#!">Link 4</a>
                                </li>
                            </ul>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase">Links</h5>

                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a class="text-body" href="#!">Link 1</a>
                                </li>
                                <li>
                                    <a class="text-body" href="#!">Link 2</a>
                                </li>
                                <li>
                                    <a class="text-body" href="#!">Link 3</a>
                                </li>
                                <li>
                                    <a class="text-body" href="#!">Link 4</a>
                                </li>
                            </ul>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase">Links</h5>

                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a class="text-body" href="#!">Link 1</a>
                                </li>
                                <li>
                                    <a class="text-body" href="#!">Link 2</a>
                                </li>
                                <li>
                                    <a class="text-body" href="#!">Link 3</a>
                                </li>
                                <li>
                                    <a class="text-body" href="#!">Link 4</a>
                                </li>
                            </ul>
                        </div>
                        <!--Grid column-->
                    </div>
                    <!--Grid row-->
                </section>
                <!-- Section: Links -->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
                © 2020 Copyright:
                <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
            </div>
            <!-- Copyright -->
        </footer>
    </div>
    <!-- Footer -->
</body>

<!-- MDB ESSENTIAL -->
<script type="text/javascript" src="{{ asset('mdbootstrap/js/mdb.umd.min.js') }}"></script>
<!-- MDB PLUGINS -->
<script type="text/javascript" src="{{ asset('mdbootstrap/plugins/js/all.min.js') }}"></script>
<!-- Custom scripts -->
<script type="text/javascript">
    // Initialization for ES Users
    import {
        Input,
        initMDB
    } from "mdb-ui-kit";

    initMDB({
        Input
    });
    import { Ripple, initMDB } from "mdb-ui-kit";

initMDB({ Ripple });
    const events = [{
            summary: 'JS Conference',
            start: {
                date: Calendar.dayjs().format('DD/MM/YYYY'),
            },
            end: {
                date: Calendar.dayjs().format('DD/MM/YYYY'),
            },
            color: {
                background: '#cfe0fc',
                foreground: '#0a47a9',
            },
        },
        {
            summary: 'Vue Meetup',
            start: {
                date: Calendar.dayjs().add(1, 'day').format('DD/MM/YYYY'),
            },
            end: {
                date: Calendar.dayjs().add(5, 'day').format('DD/MM/YYYY'),
            },
            color: {
                background: '#ebcdfe',
                foreground: '#6e02b1',
            },
        },
        {
            summary: 'Angular Meetup',
            description: 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur',
            start: {
                date: Calendar.dayjs().subtract(3, 'day').format('DD/MM/YYYY'),
                dateTime: Calendar.dayjs().subtract(3, 'day').format('DD/MM/YYYY') + ' 10:00',
            },
            end: {
                date: Calendar.dayjs().add(3, 'day').format('DD/MM/YYYY'),
                dateTime: Calendar.dayjs().add(3, 'day').format('DD/MM/YYYY') + ' 14:00',
            },
            color: {
                background: '#c7f5d9',
                foreground: '#0b4121',
            },
        },
        {
            summary: 'React Meetup',
            start: {
                date: Calendar.dayjs().add(5, 'day').format('DD/MM/YYYY'),
            },
            end: {
                date: Calendar.dayjs().add(8, 'day').format('DD/MM/YYYY'),
            },
            color: {
                background: '#fdd8de',
                foreground: '#790619',
            },
        },
        {
            summary: 'Meeting',
            start: {
                date: Calendar.dayjs().add(1, 'day').format('DD/MM/YYYY'),
                dateTime: Calendar.dayjs().add(1, 'day').format('DD/MM/YYYY') + ' 8:00',
            },
            end: {
                date: Calendar.dayjs().add(1, 'day').format('DD/MM/YYYY'),
                dateTime: Calendar.dayjs().add(1, 'day').format('DD/MM/YYYY') + ' 12:00',
            },
            color: {
                background: '#cfe0fc',
                foreground: '#0a47a9',
            },
        },
        {
            summary: 'Call',
            start: {
                date: Calendar.dayjs().add(2, 'day').format('DD/MM/YYYY'),
                dateTime: Calendar.dayjs().add(2, 'day').format('DD/MM/YYYY') + ' 11:00',
            },
            end: {
                date: Calendar.dayjs().add(2, 'day').format('DD/MM/YYYY'),
                dateTime: Calendar.dayjs().add(2, 'day').format('DD/MM/YYYY') + ' 14:00',
            },
            color: {
                background: '#292929',
                foreground: '#f5f5f5',
            },
        }
    ];

    const calendarElement = document.getElementById('calendar');
    const calendarInstance = Calendar.getInstance(calendarElement);
    calendarInstance.addEvents(events);
console.log($('.calendar-summary-input').val());
</script>

</html>