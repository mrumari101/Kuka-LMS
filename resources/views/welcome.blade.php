<!DOCTYPE html>
<html data-bs-theme="light" lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================--><!--    Document Title--><!-- ===============================================-->
    <title>Falcon | Dashboard &amp; Web App Template</title>

    <!-- ===============================================--><!--    Favicons--><!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="manifest" href="images/manifest.json">
    <meta name="msapplication-TileImage" content="images/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="assets/js/config.js"></script>
    <script src="assets/js/simplebar.min.js"></script>

    <!-- ===============================================--><!--    Stylesheets--><!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="assets/css/simplebar.min.css" rel="stylesheet">
    <link href="assets/css/theme-rtl.min.css" rel="stylesheet" id="style-rtl">
    <link href="assets/css/theme.min.css" rel="stylesheet" id="style-default">
    <link href="assets/css/user-rtl.min.css" rel="stylesheet" id="user-style-rtl">
    <link href="assets/css/user.min.css" rel="stylesheet" id="user-style-default">
    <script>
        var isRTL = JSON.parse(localStorage.getItem('isRTL'));
        if (isRTL) {
            var linkDefault = document.getElementById('style-default');
            var userLinkDefault = document.getElementById('user-style-default');
            linkDefault.setAttribute('disabled', true);
            userLinkDefault.setAttribute('disabled', true);
            document.querySelector('html').setAttribute('dir', 'rtl');
        } else {
            var linkRTL = document.getElementById('style-rtl');
            var userLinkRTL = document.getElementById('user-style-rtl');
            linkRTL.setAttribute('disabled', true);
            userLinkRTL.setAttribute('disabled', true);
        }
    </script>
</head>

<body>
<!-- ===============================================--><!--    Main Content--><!-- ===============================================-->
<main class="main" id="top">
    <div class="container-fluid" data-layout="container">
        <script>
            var isFluid = JSON.parse(localStorage.getItem('isFluid'));
            if (isFluid) {
                var container = document.querySelector('[data-layout]');
                container.classList.remove('container');
                container.classList.add('container-fluid');
            }
        </script>
        <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg" data-double-top-nav="data-double-top-nav" style="display: none;">
            <div class="w-100">
                <div class="d-flex flex-between-center">
                    <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDoubleTop" aria-controls="navbarDoubleTop" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
                    <a class="navbar-brand me-1 me-sm-3" href="index.html">
                        <div class="d-flex align-items-center"><img class="me-2" src="images/falcon.png" alt="" width="40" /><span class="font-sans-serif text-primary">falcon</span></div>
                    </a>
                    <ul class="navbar-nav align-items-center d-none d-lg-block">
                        <li class="nav-item">
                            <div class="search-box" data-list='{"valueNames":["title"]}'>
                                <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input fuzzy-search" type="search" placeholder="Search..." aria-label="Search" />
                                    <span class="fas fa-search search-box-icon"></span>
                                </form>
                                <div class="btn-close-falcon-container position-absolute end-0 top-50 translate-middle shadow-none" data-bs-dismiss="search"><button class="btn btn-link btn-close-falcon p-0" aria-label="Close"></button></div>
                                <div class="dropdown-menu border font-base start-0 mt-2 py-0 overflow-hidden w-100">
                                    <div class="scrollbar list py-3" style="max-height: 24rem;">
                                        <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs-11 pt-0 pb-2">Recently Browsed</h6><a class="dropdown-item fs-10 px-x1 py-1 hover-primary" href="app/events/event-detail.html">
                                            <div class="d-flex align-items-center">
                                                <span class="fas fa-circle me-2 text-300 fs-11"></span>
                                                <div class="fw-normal title">Pages <span class="fas fa-chevron-right mx-1 text-500 fs-11" data-fa-transform="shrink-2"></span> Events</div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item fs-10 px-x1 py-1 hover-primary" href="app/e-commerce/customers.html">
                                            <div class="d-flex align-items-center">
                                                <span class="fas fa-circle me-2 text-300 fs-11"></span>
                                                <div class="fw-normal title">E-commerce <span class="fas fa-chevron-right mx-1 text-500 fs-11" data-fa-transform="shrink-2"></span> Customers</div>
                                            </div>
                                        </a>
                                        <hr class="text-200 dark__text-900" />
                                        <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs-11 pt-0 pb-2">Suggested Filter</h6><a class="dropdown-item px-x1 py-1 fs-9" href="app/e-commerce/customers.html">
                                            <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-subtle-warning">customers:</span>
                                                <div class="flex-1 fs-10 title">All customers list</div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item px-x1 py-1 fs-9" href="app/events/event-detail.html">
                                            <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-subtle-success">events:</span>
                                                <div class="flex-1 fs-10 title">Latest events in current month</div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item px-x1 py-1 fs-9" href="app/e-commerce/product/product-grid.html">
                                            <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-subtle-info">products:</span>
                                                <div class="flex-1 fs-10 title">Most popular products</div>
                                            </div>
                                        </a>
                                        <hr class="text-200 dark__text-900" />
                                        <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs-11 pt-0 pb-2">Files</h6><a class="dropdown-item px-x1 py-2" href="#!">
                                            <div class="d-flex align-items-center">
                                                <div class="file-thumbnail me-2"><img class="border h-100 w-100 object-fit-cover rounded-3" src="images/3-thumb.png" alt="" /></div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 title">iPhone</h6>
                                                    <p class="fs-11 mb-0 d-flex"><span class="fw-semi-bold">Antony</span><span class="fw-medium text-600 ms-2">27 Sep at 10:30 AM</span></p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item px-x1 py-2" href="#!">
                                            <div class="d-flex align-items-center">
                                                <div class="file-thumbnail me-2"><img class="img-fluid" src="images/zip.png" alt="" /></div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 title">Falcon v1.8.2</h6>
                                                    <p class="fs-11 mb-0 d-flex"><span class="fw-semi-bold">John</span><span class="fw-medium text-600 ms-2">30 Sep at 12:30 PM</span></p>
                                                </div>
                                            </div>
                                        </a>
                                        <hr class="text-200 dark__text-900" />
                                        <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs-11 pt-0 pb-2">Members</h6><a class="dropdown-item px-x1 py-2" href="pages/user/profile.html">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-l status-online me-2">
                                                    <img class="rounded-circle" src="images/1.jpg" alt="" />
                                                </div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 title">Anna Karinina</h6>
                                                    <p class="fs-11 mb-0 d-flex">Technext Limited</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item px-x1 py-2" href="pages/user/profile.html">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-l me-2">
                                                    <img class="rounded-circle" src="images/2.jpg" alt="" />
                                                </div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 title">Antony Hopkins</h6>
                                                    <p class="fs-11 mb-0 d-flex">Brain Trust</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item px-x1 py-2" href="pages/user/profile.html">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-l me-2">
                                                    <img class="rounded-circle" src="images/3.jpg" alt="" />
                                                </div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 title">Emma Watson</h6>
                                                    <p class="fs-11 mb-0 d-flex">Google</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="text-center mt-n3">
                                        <p class="fallback fw-bold fs-8 d-none">No Result Found.</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
                        <li class="nav-item ps-2 pe-0">
                            <div class="dropdown theme-control-dropdown"><a class="nav-link d-flex align-items-center dropdown-toggle fa-icon-wait fs-9 pe-1 py-0" href="#" role="button" id="themeSwitchDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-sun fs-7" data-fa-transform="shrink-2" data-theme-dropdown-toggle-icon="light"></span><span class="fas fa-moon fs-7" data-fa-transform="shrink-3" data-theme-dropdown-toggle-icon="dark"></span><span class="fas fa-adjust fs-7" data-fa-transform="shrink-2" data-theme-dropdown-toggle-icon="auto"></span></a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-caret border py-0 mt-3" aria-labelledby="themeSwitchDropdown">
                                    <div class="bg-white dark__bg-1000 rounded-2 py-2"><button class="dropdown-item d-flex align-items-center gap-2" type="button" value="light" data-theme-control="theme"><span class="fas fa-sun"></span>Light<span class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button><button class="dropdown-item d-flex align-items-center gap-2" type="button" value="dark" data-theme-control="theme"><span class="fas fa-moon" data-fa-transform=""></span>Dark<span class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button><button class="dropdown-item d-flex align-items-center gap-2" type="button" value="auto" data-theme-control="theme"><span class="fas fa-adjust" data-fa-transform=""></span>Auto<span class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button></div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item d-none d-sm-block">
                            <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait" href="app/e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart" data-fa-transform="shrink-7" style="font-size: 33px;"></span><span class="notification-indicator-number">1</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait" id="navbarDropdownNotification" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-hide-on-body-scroll="data-hide-on-body-scroll"><span class="fas fa-bell" data-fa-transform="shrink-6" style="font-size: 33px;"></span></a>
                            <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-menu-notification dropdown-caret-bg" aria-labelledby="navbarDropdownNotification">
                                <div class="card card-notification shadow-none">
                                    <div class="card-header">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-auto">
                                                <h6 class="card-header-title mb-0">Notifications</h6>
                                            </div>
                                            <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal" href="#">Mark all as read</a></div>
                                        </div>
                                    </div>
                                    <div class="scrollbar-overlay" style="max-height:19rem">
                                        <div class="list-group list-group-flush fw-normal fs-10">
                                            <div class="list-group-title border-bottom">NEW</div>
                                            <div class="list-group-item">
                                                <a class="notification notification-flush notification-unread" href="#!">
                                                    <div class="notification-avatar">
                                                        <div class="avatar avatar-2xl me-3">
                                                            <img class="rounded-circle" src="images/1-thumb.png" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="notification-body">
                                                        <p class="mb-1"><strong>Emma Watson</strong> replied to your comment : "Hello world ????"</p>
                                                        <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">????</span>Just now</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="list-group-item">
                                                <a class="notification notification-flush notification-unread" href="#!">
                                                    <div class="notification-avatar">
                                                        <div class="avatar avatar-2xl me-3">
                                                            <div class="avatar-name rounded-circle"><span>AB</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="notification-body">
                                                        <p class="mb-1"><strong>Albert Brooks</strong> reacted to <strong>Mia Khalifa's</strong> status</p>
                                                        <span class="notification-time"><span class="me-2 fab fa-gratipay text-danger"></span>9hr</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="list-group-title border-bottom">EARLIER</div>
                                            <div class="list-group-item">
                                                <a class="notification notification-flush" href="#!">
                                                    <div class="notification-avatar">
                                                        <div class="avatar avatar-2xl me-3">
                                                            <img class="rounded-circle" src="images/weather-sm.jpg" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="notification-body">
                                                        <p class="mb-1">The forecast today shows a low of 20&#8451; in California. See today's weather.</p>
                                                        <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">????️</span>1d</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="list-group-item">
                                                <a class="border-bottom-0 notification-unread  notification notification-flush" href="#!">
                                                    <div class="notification-avatar">
                                                        <div class="avatar avatar-xl me-3">
                                                            <img class="rounded-circle" src="images/oxford.png" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="notification-body">
                                                        <p class="mb-1"><strong>University of Oxford</strong> created an event : "Causal Inference Hilary 2019"</p>
                                                        <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">✌️</span>1w</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="list-group-item">
                                                <a class="border-bottom-0 notification notification-flush" href="#!">
                                                    <div class="notification-avatar">
                                                        <div class="avatar avatar-xl me-3">
                                                            <img class="rounded-circle" src="images/10.jpg" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="notification-body">
                                                        <p class="mb-1"><strong>James Cameron</strong> invited to join the group: United Nations International Children's Fund</p>
                                                        <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">????‍</span>2d</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-center border-top"><a class="card-link d-block" href="app/social/notifications.html">View all</a></div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown px-1">
                            <a class="nav-link fa-icon-wait nine-dots p-1" id="navbarDropdownMenu" role="button" data-hide-on-body-scroll="data-hide-on-body-scroll" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="43" viewBox="0 0 16 16" fill="none">
                                    <circle cx="2" cy="2" r="2" fill="#6C6E71"></circle>
                                    <circle cx="2" cy="8" r="2" fill="#6C6E71"></circle>
                                    <circle cx="2" cy="14" r="2" fill="#6C6E71"></circle>
                                    <circle cx="8" cy="8" r="2" fill="#6C6E71"></circle>
                                    <circle cx="8" cy="14" r="2" fill="#6C6E71"></circle>
                                    <circle cx="14" cy="8" r="2" fill="#6C6E71"></circle>
                                    <circle cx="14" cy="14" r="2" fill="#6C6E71"></circle>
                                    <circle cx="8" cy="2" r="2" fill="#6C6E71"></circle>
                                    <circle cx="14" cy="2" r="2" fill="#6C6E71"></circle>
                                </svg></a>
                            <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-caret-bg" aria-labelledby="navbarDropdownMenu">
                                <div class="card shadow-none">
                                    <div class="scrollbar-overlay nine-dots-dropdown">
                                        <div class="card-body px-3">
                                            <div class="row text-center gx-0 gy-0">
                                                <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="pages/user/profile.html" target="_blank">
                                                        <div class="avatar avatar-2xl"> <img class="rounded-circle" src="images/3.jpg" alt="" /></div>
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs-11">Account</p>
                                                    </a></div>

                                                <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/google.png" alt="" width="40" height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Google</p>
                                                    </a></div>
                                                <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/spotify.png" alt="" width="40" height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Spotify</p>
                                                    </a></div>
                                                <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/steam.png" alt="" width="40" height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Steam</p>
                                                    </a></div>
                                                <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/github-light.png" alt="" width="40" height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Github</p>
                                                    </a></div>
                                                <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/discord.png" alt="" width="40" height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Discord</p>
                                                    </a></div>
                                                <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/xbox.png" alt="" width="40" height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">xbox</p>
                                                    </a></div>
                                                <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/trello.png" alt="" width="40" height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Kanban</p>
                                                    </a></div>
                                                <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/hp.png" alt="" width="40" height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Hp</p>
                                                    </a></div>
                                                <div class="col-12">
                                                    <hr class="my-3 mx-n3 bg-200" />
                                                </div>
                                                <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/linkedin.png" alt="" width="40" height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Linkedin</p>
                                                    </a></div>
                                                <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/twitter.png" alt="" width="40" height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Twitter</p>
                                                    </a></div>
                                                <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/facebook.png" alt="" width="40" height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Facebook</p>
                                                    </a></div>
                                                <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/instagram.png" alt="" width="40" height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Instagram</p>
                                                    </a></div>
                                                <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/pinterest.png" alt="" width="40" height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Pinterest</p>
                                                    </a></div>
                                                <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/slack.png" alt="" width="40" height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Slack</p>
                                                    </a></div>
                                                <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/deviantart.png" alt="" width="40" height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Deviantart</p>
                                                    </a></div>
                                                <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="app/events/event-detail.html" target="_blank">
                                                        <div class="avatar avatar-2xl">
                                                            <div class="avatar-name rounded-circle bg-primary-subtle text-primary"><span class="fs-7">E</span></div>
                                                        </div>
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs-11">Events</p>
                                                    </a></div>
                                                <div class="col-12"><a class="btn btn-outline-primary btn-sm mt-4" href="#!">Show more</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="avatar avatar-xl">
                                    <img class="rounded-circle" src="images/3-thumb.png" alt="" />
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                                <div class="bg-white dark__bg-1000 rounded-2 py-2">
                                    <a class="dropdown-item fw-bold text-warning" href="#!"><span class="fas fa-crown me-1"></span><span>Go Pro</span></a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#!">Set status</a>
                                    <a class="dropdown-item" href="pages/user/profile.html">Profile &amp; account</a>
                                    <a class="dropdown-item" href="#!">Feedback</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="pages/user/settings.html">Settings</a>
                                    <a class="dropdown-item" href="pages/authentication/card/logout.html">Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <hr class="my-2 d-none d-lg-block" />
                <div class="collapse navbar-collapse scrollbar py-lg-2" id="navbarDoubleTop">
                    <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dashboards">Dashboard</a>
                            <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="dashboards">
                                <div class="bg-white dark__bg-1000 rounded-3 py-2"><a class="dropdown-item link-600 fw-medium" href="index.html">Default</a><a class="dropdown-item link-600 fw-medium" href="dashboard/analytics.html">Analytics</a><a class="dropdown-item link-600 fw-medium" href="dashboard/crm.html">CRM</a><a class="dropdown-item link-600 fw-medium" href="dashboard/e-commerce.html">E commerce</a><a class="dropdown-item link-600 fw-medium" href="dashboard/lms.html">LMS<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="dropdown-item link-600 fw-medium" href="dashboard/project-management.html">Management</a><a class="dropdown-item link-600 fw-medium" href="dashboard/saas.html">SaaS</a><a class="dropdown-item link-600 fw-medium" href="dashboard/support-desk.html">Support desk<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a></div>
                            </div>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="apps">App</a>
                            <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="apps">
                                <div class="card navbar-card-app shadow-none dark__bg-1000">
                                    <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="images/authentication-corner.png" width="130" alt="" />
                                        <div class="row">
                                            <div class="col-6 col-md-4">
                                                <div class="nav flex-column"><a class="nav-link py-1 link-600 fw-medium" href="app/calendar.html">Calendar</a><a class="nav-link py-1 link-600 fw-medium" href="app/chat.html">Chat</a><a class="nav-link py-1 link-600 fw-medium" href="app/kanban.html">Kanban</a>
                                                    <p class="nav-link text-700 mb-0 fw-bold">Social</p><a class="nav-link py-1 link-600 fw-medium" href="app/social/feed.html">Feed</a><a class="nav-link py-1 link-600 fw-medium" href="app/social/activity-log.html">Activity log</a><a class="nav-link py-1 link-600 fw-medium" href="app/social/notifications.html">Notifications</a><a class="nav-link py-1 link-600 fw-medium" href="app/social/followers.html">Followers</a>
                                                    <p class="nav-link text-700 mb-0 fw-bold">Support Desk</p><a class="nav-link py-1 link-600 fw-medium" href="app/support-desk/table-view.html">Table view</a><a class="nav-link py-1 link-600 fw-medium" href="app/support-desk/card-view.html">Card view</a><a class="nav-link py-1 link-600 fw-medium" href="app/support-desk/contacts.html">Contacts</a><a class="nav-link py-1 link-600 fw-medium" href="app/support-desk/contact-details.html">Contact details</a><a class="nav-link py-1 link-600 fw-medium" href="app/support-desk/tickets-preview.html">Tickets preview</a><a class="nav-link py-1 link-600 fw-medium" href="app/support-desk/quick-links.html">Quick links</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-4">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">E-Learning</p><a class="nav-link py-1 link-600 fw-medium" href="app/e-learning/course/course-list.html">Course list</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-learning/course/course-grid.html">Course grid</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-learning/course/course-details.html">Course details</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-learning/course/create-a-course.html">Create a course</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-learning/student-overview.html">Student overview</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-learning/trainer-profile.html">Trainer profile</a>
                                                    <p class="nav-link text-700 mb-0 fw-bold">Events</p><a class="nav-link py-1 link-600 fw-medium" href="app/events/create-an-event.html">Create an event</a><a class="nav-link py-1 link-600 fw-medium" href="app/events/event-detail.html">Event detail</a><a class="nav-link py-1 link-600 fw-medium" href="app/events/event-list.html">Event list</a>
                                                    <p class="nav-link text-700 mb-0 fw-bold">Email</p><a class="nav-link py-1 link-600 fw-medium" href="app/email/inbox.html">Inbox</a><a class="nav-link py-1 link-600 fw-medium" href="app/email/email-detail.html">Email detail</a><a class="nav-link py-1 link-600 fw-medium" href="app/email/compose.html">Compose</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-4">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">E-Commerce</p><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/product/product-list.html">Product list</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/product/product-grid.html">Product grid</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/product/product-details.html">Product details</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/product/add-product.html">Add product</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/orders/order-list.html">Order list</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/orders/order-details.html">Order details</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/customers.html">Customers</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/customer-details.html">Customer details</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/shopping-cart.html">Shopping cart</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/checkout.html">Checkout</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/billing.html">Billing</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/invoice.html">Invoice</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="pagess">Pages</a>
                            <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="pagess">
                                <div class="card navbar-card-pages shadow-none dark__bg-1000">
                                    <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="images/authentication-corner.png" width="130" alt="" />
                                        <div class="row">
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">Simple Auth</p><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/simple/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/simple/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/simple/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/simple/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/simple/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/simple/reset-password.html">Reset password</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/simple/lock-screen.html">Lock screen</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">Card Auth</p><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/card/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/card/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/card/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/card/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/card/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/card/reset-password.html">Reset password</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/card/lock-screen.html">Lock screen</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">Split Auth</p><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/split/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/split/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/split/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/split/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/split/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/split/reset-password.html">Reset password</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/split/lock-screen.html">Lock screen</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">Layouts</p><a class="nav-link py-1 link-600 fw-medium" href="demo/navbar-vertical.html">Navbar vertical</a><a class="nav-link py-1 link-600 fw-medium" href="demo/navbar-top.html">Top nav</a><a class="nav-link py-1 link-600 fw-medium" href="demo/navbar-double-top.html">Double top<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="demo/combo-nav.html">Combo nav</a>
                                                    <p class="nav-link text-700 mb-0 fw-bold">Others</p><a class="nav-link py-1 link-600 fw-medium" href="pages/starter.html">Starter</a><a class="nav-link py-1 link-600 fw-medium" href="pages/landing.html">Landing</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">User</p><a class="nav-link py-1 link-600 fw-medium" href="pages/user/profile.html">Profile</a><a class="nav-link py-1 link-600 fw-medium" href="pages/user/settings.html">Settings</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">Pricing</p><a class="nav-link py-1 link-600 fw-medium" href="pages/pricing/pricing-default.html">Pricing default</a><a class="nav-link py-1 link-600 fw-medium" href="pages/pricing/pricing-alt.html">Pricing alt</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">Errors</p><a class="nav-link py-1 link-600 fw-medium" href="pages/errors/404.html">404</a><a class="nav-link py-1 link-600 fw-medium" href="pages/errors/500.html">500</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">Miscellaneous</p><a class="nav-link py-1 link-600 fw-medium" href="pages/miscellaneous/associations.html">Associations</a><a class="nav-link py-1 link-600 fw-medium" href="pages/miscellaneous/invite-people.html">Invite people</a><a class="nav-link py-1 link-600 fw-medium" href="pages/miscellaneous/privacy-policy.html">Privacy policy</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">FAQ</p><a class="nav-link py-1 link-600 fw-medium" href="pages/faq/faq-basic.html">Faq basic</a><a class="nav-link py-1 link-600 fw-medium" href="pages/faq/faq-alt.html">Faq alt</a><a class="nav-link py-1 link-600 fw-medium" href="pages/faq/faq-accordion.html">Faq accordion</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">Other Auth</p><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/wizard.html">Wizard</a><a class="nav-link py-1 link-600 fw-medium" href="#authentication-modal" data-bs-toggle="modal">Modal</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="moduless">Modules</a>
                            <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="moduless">
                                <div class="card navbar-card-components shadow-none dark__bg-1000">
                                    <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="images/authentication-corner.png" width="130" alt="" />
                                        <div class="row">
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">Components</p><a class="nav-link py-1 link-600 fw-medium" href="modules/components/accordion.html">Accordion</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/alerts.html">Alerts</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/anchor.html">Anchor</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/animated-icons.html">Animated icons</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/background.html">Background</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/badges.html">Badges</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/bottom-bar.html">Bottom bar<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/breadcrumbs.html">Breadcrumbs</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/buttons.html">Buttons</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/calendar.html">Calendar</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/cards.html">Cards</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/carousel/bootstrap.html">Bootstrap carousel</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column mt-md-4 pt-md-1"><a class="nav-link py-1 link-600 fw-medium" href="modules/components/carousel/swiper.html">Swiper</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/collapse.html">Collapse</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/cookie-notice.html">Cookie notice</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/countup.html">Countup</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/draggable.html">Draggable</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/dropdowns.html">Dropdowns</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/jquery-components.html">Jquery<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/list-group.html">List group</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/modals.html">Modals</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/navs-and-tabs/navs.html">Navs</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/navs-and-tabs/navbar.html">Navbar</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/navs-and-tabs/vertical-navbar.html">Navbar vertical</a></div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column mt-xxl-4 pt-xxl-1"><a class="nav-link py-1 link-600 fw-medium" href="modules/components/navs-and-tabs/top-navbar.html">Top nav</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/navs-and-tabs/double-top-navbar.html">Double top<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/navs-and-tabs/combo-navbar.html">Combo nav</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/navs-and-tabs/tabs.html">Tabs</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/offcanvas.html">Offcanvas</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/pictures/avatar.html">Avatar</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/pictures/images.html">Images</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/pictures/figures.html">Figures</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/pictures/hoverbox.html">Hoverbox</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/pictures/lightbox.html">Lightbox</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/progress-bar.html">Progress bar</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/placeholder.html">Placeholder</a></div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column mt-xxl-4 pt-xxl-1"><a class="nav-link py-1 link-600 fw-medium" href="modules/components/pagination.html">Pagination</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/popovers.html">Popovers</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/scrollspy.html">Scrollspy</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/search.html">Search</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/spinners.html">Spinners</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/timeline.html">Timeline</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/toasts.html">Toasts</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/tooltips.html">Tooltips</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/treeview.html">Treeview</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/typed-text.html">Typed text</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/videos/embed.html">Embed</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/videos/plyr.html">Plyr</a></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">Utilities</p><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/background.html">Background</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/borders.html">Borders</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/clearfix.html">Clearfix</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/colors.html">Colors</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/colored-links.html">Colored links</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/display.html">Display</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/flex.html">Flex</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/float.html">Float</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/focus-ring.html">Focus ring</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/grid.html">Grid</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/icon-link.html">Icon link</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/overlayscrollbar.html">Overlay scrollbar</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/position.html">Position</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/ratio.html">Ratio</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/spacing.html">Spacing</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/sizing.html">Sizing</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/stretched-link.html">Stretched link</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/text-truncation.html">Text truncation</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/typography.html">Typography</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/vertical-align.html">Vertical align</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/vertical-rule.html">Vertical rule</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/visibility.html">Visibility</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">Tables</p><a class="nav-link py-1 link-600 fw-medium" href="modules/tables/basic-tables.html">Basic tables</a><a class="nav-link py-1 link-600 fw-medium" href="modules/tables/advance-tables.html">Advance tables</a><a class="nav-link py-1 link-600 fw-medium" href="modules/tables/bulk-select.html">Bulk select</a>
                                                    <p class="nav-link text-700 mb-0 fw-bold">Charts</p><a class="nav-link py-1 link-600 fw-medium" href="modules/charts/chartjs.html">Chartjs</a><a class="nav-link py-1 link-600 fw-medium" href="modules/charts/d3js.html">D3js<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a>
                                                    <p class="nav-link text-700 mb-0 fw-bold">ECharts</p><a class="nav-link py-1 link-600 fw-medium" href="modules/charts/echarts/line-charts.html">Line charts</a><a class="nav-link py-1 link-600 fw-medium" href="modules/charts/echarts/bar-charts.html">Bar charts</a><a class="nav-link py-1 link-600 fw-medium" href="modules/charts/echarts/candlestick-charts.html">Candlestick charts</a><a class="nav-link py-1 link-600 fw-medium" href="modules/charts/echarts/geo-map.html">Geo map</a><a class="nav-link py-1 link-600 fw-medium" href="modules/charts/echarts/scatter-charts.html">Scatter charts</a><a class="nav-link py-1 link-600 fw-medium" href="modules/charts/echarts/pie-charts.html">Pie charts</a><a class="nav-link py-1 link-600 fw-medium" href="modules/charts/echarts/gauge-charts.html">Gauge charts</a><a class="nav-link py-1 link-600 fw-medium" href="modules/charts/echarts/radar-charts.html">Radar charts</a><a class="nav-link py-1 link-600 fw-medium" href="modules/charts/echarts/heatmap-charts.html">Heatmap charts</a><a class="nav-link py-1 link-600 fw-medium" href="modules/charts/echarts/how-to-use.html">How to use</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">Forms</p><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/basic/form-control.html">Form control</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/basic/input-group.html">Input group</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/basic/select.html">Select</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/basic/checks.html">Checks</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/basic/range.html">Range</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/basic/layout.html">Layout</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/advance/advance-select.html">Advance select</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/advance/date-picker.html">Date picker</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/advance/editor.html">Editor</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/advance/emoji-button.html">Emoji button</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/advance/file-uploader.html">File uploader</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/advance/input-mask.html">Input mask</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/advance/range-slider.html">Range slider</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/advance/rating.html">Rating</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/floating-labels.html">Floating labels</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/wizard.html">Wizard</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/validation.html">Validation</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column pt-xxl-1">
                                                    <p class="nav-link text-700 mb-0 fw-bold">Icons</p><a class="nav-link py-1 link-600 fw-medium" href="modules/icons/font-awesome.html">Font awesome</a><a class="nav-link py-1 link-600 fw-medium" href="modules/icons/bootstrap-icons.html">Bootstrap icons</a><a class="nav-link py-1 link-600 fw-medium" href="modules/icons/feather.html">Feather</a><a class="nav-link py-1 link-600 fw-medium" href="modules/icons/material-icons.html">Material icons</a>
                                                    <p class="nav-link text-700 mb-0 fw-bold">Maps</p><a class="nav-link py-1 link-600 fw-medium" href="modules/maps/google-map.html">Google map</a><a class="nav-link py-1 link-600 fw-medium" href="modules/maps/leaflet-map.html">Leaflet map</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="documentations">Documentation</a>
                            <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="documentations">
                                <div class="bg-white dark__bg-1000 rounded-3 py-2"><a class="dropdown-item link-600 fw-medium" href="documentation/getting-started.html">Getting started</a><a class="dropdown-item link-600 fw-medium" href="documentation/customization/configuration.html">Configuration</a><a class="dropdown-item link-600 fw-medium" href="documentation/customization/styling.html">Styling<span class="badge rounded-pill ms-2 badge-subtle-success">Updated</span></a><a class="dropdown-item link-600 fw-medium" href="documentation/customization/dark-mode.html">Dark mode</a><a class="dropdown-item link-600 fw-medium" href="documentation/customization/plugin.html">Plugin</a><a class="dropdown-item link-600 fw-medium" href="documentation/faq.html">Faq</a><a class="dropdown-item link-600 fw-medium" href="documentation/gulp.html">Gulp</a><a class="dropdown-item link-600 fw-medium" href="documentation/design-file.html">Design file</a><a class="dropdown-item link-600 fw-medium" href="changelog.html">Changelog</a></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-light navbar-vertical navbar-expand-xl" style="display: none;">
            <script>
                var navbarStyle = localStorage.getItem("navbarStyle");
                if (navbarStyle && navbarStyle !== 'transparent') {
                    document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
                }
            </script>
            <div class="d-flex align-items-center">
                <div class="toggle-icon-wrapper">
                    <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
                </div><a class="navbar-brand" href="index.html">
                    <div class="d-flex align-items-center py-3"><img class="me-2" src="images/falcon.png" alt="" width="40" /><span class="font-sans-serif text-primary">falcon</span></div>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
                <div class="navbar-vertical-content scrollbar">
                    <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                        <li class="nav-item"><!-- parent pages--><a class="nav-link dropdown-indicator" href="#dashboard" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dashboard">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-chart-pie"></span></span><span class="nav-link-text ps-1">Dashboard</span></div>
                            </a>
                            <ul class="nav collapse show" id="dashboard">
                                <li class="nav-item"><a class="nav-link active" href="index.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Default</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="dashboard/analytics.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Analytics</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="dashboard/crm.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">CRM</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="dashboard/e-commerce.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">E commerce</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="dashboard/lms.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">LMS</span><span class="badge rounded-pill ms-2 badge-subtle-success">New</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="dashboard/project-management.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Management</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="dashboard/saas.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">SaaS</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="dashboard/support-desk.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Support desk</span><span class="badge rounded-pill ms-2 badge-subtle-success">New</span></div>
                                    </a><!-- more inner pages--></li>
                            </ul>
                        </li>
                        <li class="nav-item"><!-- label-->
                            <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                                <div class="col-auto navbar-vertical-label">App</div>
                                <div class="col ps-0">
                                    <hr class="mb-0 navbar-vertical-divider" />
                                </div>
                            </div><!-- parent pages--><a class="nav-link" href="app/calendar.html" role="button">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar-alt"></span></span><span class="nav-link-text ps-1">Calendar</span></div>
                            </a><!-- parent pages--><a class="nav-link" href="app/chat.html" role="button">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-comments"></span></span><span class="nav-link-text ps-1">Chat</span></div>
                            </a><!-- parent pages--><a class="nav-link dropdown-indicator" href="#email" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="email">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-envelope-open"></span></span><span class="nav-link-text ps-1">Email</span></div>
                            </a>
                            <ul class="nav collapse" id="email">
                                <li class="nav-item"><a class="nav-link" href="app/email/inbox.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Inbox</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="app/email/email-detail.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Email detail</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="app/email/compose.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Compose</span></div>
                                    </a><!-- more inner pages--></li>
                            </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#events" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="events">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar-day"></span></span><span class="nav-link-text ps-1">Events</span></div>
                            </a>
                            <ul class="nav collapse" id="events">
                                <li class="nav-item"><a class="nav-link" href="app/events/create-an-event.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Create an event</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="app/events/event-detail.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Event detail</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="app/events/event-list.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Event list</span></div>
                                    </a><!-- more inner pages--></li>
                            </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#e-commerce" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-commerce">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-shopping-cart"></span></span><span class="nav-link-text ps-1">E commerce</span></div>
                            </a>
                            <ul class="nav collapse" id="e-commerce">
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#product" data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-commerce">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Product</span></div>
                                    </a><!-- more inner pages-->
                                    <ul class="nav collapse" id="product">
                                        <li class="nav-item"><a class="nav-link" href="app/e-commerce/product/product-list.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Product list</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="app/e-commerce/product/product-grid.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Product grid</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="app/e-commerce/product/product-details.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Product details</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="app/e-commerce/product/add-product.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Add product</span></div>
                                            </a><!-- more inner pages--></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#orders" data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-commerce">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Orders</span></div>
                                    </a><!-- more inner pages-->
                                    <ul class="nav collapse" id="orders">
                                        <li class="nav-item"><a class="nav-link" href="app/e-commerce/orders/order-list.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Order list</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="app/e-commerce/orders/order-details.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Order details</span></div>
                                            </a><!-- more inner pages--></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="app/e-commerce/customers.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Customers</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="app/e-commerce/customer-details.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Customer details</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="app/e-commerce/shopping-cart.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Shopping cart</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="app/e-commerce/checkout.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Checkout</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="app/e-commerce/billing.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Billing</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="app/e-commerce/invoice.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Invoice</span></div>
                                    </a><!-- more inner pages--></li>
                            </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#e-learning" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-learning">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-graduation-cap"></span></span><span class="nav-link-text ps-1">E learning</span><span class="badge rounded-pill ms-2 badge-subtle-success">New</span></div>
                            </a>
                            <ul class="nav collapse" id="e-learning">
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#course" data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-learning">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Course</span></div>
                                    </a><!-- more inner pages-->
                                    <ul class="nav collapse" id="course">
                                        <li class="nav-item"><a class="nav-link" href="app/e-learning/course/course-list.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Course list</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="app/e-learning/course/course-grid.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Course grid</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="app/e-learning/course/course-details.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Course details</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="app/e-learning/course/create-a-course.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Create a course</span></div>
                                            </a><!-- more inner pages--></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="app/e-learning/student-overview.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Student overview</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="app/e-learning/trainer-profile.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Trainer profile</span></div>
                                    </a><!-- more inner pages--></li>
                            </ul><!-- parent pages--><a class="nav-link" href="app/kanban.html" role="button">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fab fa-trello"></span></span><span class="nav-link-text ps-1">Kanban</span></div>
                            </a><!-- parent pages--><a class="nav-link dropdown-indicator" href="#social" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="social">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-share-alt"></span></span><span class="nav-link-text ps-1">Social</span></div>
                            </a>
                            <ul class="nav collapse" id="social">
                                <li class="nav-item"><a class="nav-link" href="app/social/feed.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Feed</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="app/social/activity-log.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Activity log</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="app/social/notifications.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Notifications</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="app/social/followers.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Followers</span></div>
                                    </a><!-- more inner pages--></li>
                            </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#support-desk" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="support-desk">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-ticket-alt"></span></span><span class="nav-link-text ps-1">Support desk</span></div>
                            </a>
                            <ul class="nav collapse" id="support-desk">
                                <li class="nav-item"><a class="nav-link" href="app/support-desk/table-view.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Table view</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="app/support-desk/card-view.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Card view</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="app/support-desk/contacts.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Contacts</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="app/support-desk/contact-details.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Contact details</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="app/support-desk/tickets-preview.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Tickets preview</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="app/support-desk/quick-links.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Quick links</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="app/support-desk/reports.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Reports</span></div>
                                    </a><!-- more inner pages--></li>
                            </ul>
                        </li>
                        <li class="nav-item"><!-- label-->
                            <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                                <div class="col-auto navbar-vertical-label">Pages</div>
                                <div class="col ps-0">
                                    <hr class="mb-0 navbar-vertical-divider" />
                                </div>
                            </div><!-- parent pages--><a class="nav-link" href="pages/starter.html" role="button">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-flag"></span></span><span class="nav-link-text ps-1">Starter</span></div>
                            </a><!-- parent pages--><a class="nav-link" href="pages/landing.html" role="button">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-globe"></span></span><span class="nav-link-text ps-1">Landing</span></div>
                            </a><!-- parent pages--><a class="nav-link dropdown-indicator" href="#authentication" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="authentication">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-lock"></span></span><span class="nav-link-text ps-1">Authentication</span></div>
                            </a>
                            <ul class="nav collapse" id="authentication">
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#simple" data-bs-toggle="collapse" aria-expanded="false" aria-controls="authentication">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Simple</span></div>
                                    </a><!-- more inner pages-->
                                    <ul class="nav collapse" id="simple">
                                        <li class="nav-item"><a class="nav-link" href="pages/authentication/simple/login.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Login</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="pages/authentication/simple/logout.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Logout</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="pages/authentication/simple/register.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Register</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="pages/authentication/simple/forgot-password.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Forgot password</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="pages/authentication/simple/confirm-mail.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Confirm mail</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="pages/authentication/simple/reset-password.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Reset password</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="pages/authentication/simple/lock-screen.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Lock screen</span></div>
                                            </a><!-- more inner pages--></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#card" data-bs-toggle="collapse" aria-expanded="false" aria-controls="authentication">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Card</span></div>
                                    </a><!-- more inner pages-->
                                    <ul class="nav collapse" id="card">
                                        <li class="nav-item"><a class="nav-link" href="pages/authentication/card/login.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Login</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="pages/authentication/card/logout.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Logout</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="pages/authentication/card/register.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Register</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="pages/authentication/card/forgot-password.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Forgot password</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="pages/authentication/card/confirm-mail.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Confirm mail</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="pages/authentication/card/reset-password.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Reset password</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="pages/authentication/card/lock-screen.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Lock screen</span></div>
                                            </a><!-- more inner pages--></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#split" data-bs-toggle="collapse" aria-expanded="false" aria-controls="authentication">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Split</span></div>
                                    </a><!-- more inner pages-->
                                    <ul class="nav collapse" id="split">
                                        <li class="nav-item"><a class="nav-link" href="pages/authentication/split/login.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Login</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="pages/authentication/split/logout.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Logout</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="pages/authentication/split/register.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Register</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="pages/authentication/split/forgot-password.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Forgot password</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="pages/authentication/split/confirm-mail.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Confirm mail</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="pages/authentication/split/reset-password.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Reset password</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="pages/authentication/split/lock-screen.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Lock screen</span></div>
                                            </a><!-- more inner pages--></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="pages/authentication/wizard.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Wizard</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="#authentication-modal" data-bs-toggle="modal">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Modal</span></div>
                                    </a><!-- more inner pages--></li>
                            </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#user" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="user">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-user"></span></span><span class="nav-link-text ps-1">User</span></div>
                            </a>
                            <ul class="nav collapse" id="user">
                                <li class="nav-item"><a class="nav-link" href="pages/user/profile.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Profile</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="pages/user/settings.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Settings</span></div>
                                    </a><!-- more inner pages--></li>
                            </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#pricing" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="pricing">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-tags"></span></span><span class="nav-link-text ps-1">Pricing</span></div>
                            </a>
                            <ul class="nav collapse" id="pricing">
                                <li class="nav-item"><a class="nav-link" href="pages/pricing/pricing-default.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pricing default</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="pages/pricing/pricing-alt.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pricing alt</span></div>
                                    </a><!-- more inner pages--></li>
                            </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#faq" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="faq">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-question-circle"></span></span><span class="nav-link-text ps-1">Faq</span></div>
                            </a>
                            <ul class="nav collapse" id="faq">
                                <li class="nav-item"><a class="nav-link" href="pages/faq/faq-basic.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Faq basic</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="pages/faq/faq-alt.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Faq alt</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="pages/faq/faq-accordion.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Faq accordion</span></div>
                                    </a><!-- more inner pages--></li>
                            </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#errors" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="errors">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-exclamation-triangle"></span></span><span class="nav-link-text ps-1">Errors</span></div>
                            </a>
                            <ul class="nav collapse" id="errors">
                                <li class="nav-item"><a class="nav-link" href="pages/errors/404.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">404</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="pages/errors/500.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">500</span></div>
                                    </a><!-- more inner pages--></li>
                            </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#miscellaneous" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="miscellaneous">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-thumbtack"></span></span><span class="nav-link-text ps-1">Miscellaneous</span></div>
                            </a>
                            <ul class="nav collapse" id="miscellaneous">
                                <li class="nav-item"><a class="nav-link" href="pages/miscellaneous/associations.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Associations</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="pages/miscellaneous/invite-people.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Invite people</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="pages/miscellaneous/privacy-policy.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Privacy policy</span></div>
                                    </a><!-- more inner pages--></li>
                            </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#Layouts" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="Layouts">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="far fa-window-restore"></span></span><span class="nav-link-text ps-1">Layouts</span></div>
                            </a>
                            <ul class="nav collapse" id="Layouts">
                                <li class="nav-item"><a class="nav-link" href="demo/navbar-vertical.html" target="_blank">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Navbar vertical</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="demo/navbar-top.html" target="_blank">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Top nav</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="demo/navbar-double-top.html" target="_blank">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Double top</span><span class="badge rounded-pill ms-2 badge-subtle-success">New</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="demo/combo-nav.html" target="_blank">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Combo nav</span></div>
                                    </a><!-- more inner pages--></li>
                            </ul>
                        </li>
                        <li class="nav-item"><!-- label-->
                            <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                                <div class="col-auto navbar-vertical-label">Modules</div>
                                <div class="col ps-0">
                                    <hr class="mb-0 navbar-vertical-divider" />
                                </div>
                            </div><!-- parent pages--><a class="nav-link dropdown-indicator" href="#forms" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="forms">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-file-alt"></span></span><span class="nav-link-text ps-1">Forms</span></div>
                            </a>
                            <ul class="nav collapse" id="forms">
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#basic" data-bs-toggle="collapse" aria-expanded="false" aria-controls="forms">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Basic</span></div>
                                    </a><!-- more inner pages-->
                                    <ul class="nav collapse" id="basic">
                                        <li class="nav-item"><a class="nav-link" href="modules/forms/basic/form-control.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Form control</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="modules/forms/basic/input-group.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Input group</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="modules/forms/basic/select.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Select</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="modules/forms/basic/checks.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Checks</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="modules/forms/basic/range.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Range</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="modules/forms/basic/layout.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Layout</span></div>
                                            </a><!-- more inner pages--></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#advance" data-bs-toggle="collapse" aria-expanded="false" aria-controls="forms">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Advance</span></div>
                                    </a><!-- more inner pages-->
                                    <ul class="nav collapse" id="advance">
                                        <li class="nav-item"><a class="nav-link" href="modules/forms/advance/advance-select.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Advance select</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="modules/forms/advance/date-picker.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Date picker</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="modules/forms/advance/editor.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Editor</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="modules/forms/advance/emoji-button.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Emoji button</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="modules/forms/advance/file-uploader.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">File uploader</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="modules/forms/advance/input-mask.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Input mask</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="modules/forms/advance/range-slider.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Range slider</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="modules/forms/advance/rating.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Rating</span></div>
                                            </a><!-- more inner pages--></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/forms/floating-labels.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Floating labels</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/forms/wizard.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Wizard</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/forms/validation.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Validation</span></div>
                                    </a><!-- more inner pages--></li>
                            </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#tables" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="tables">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-table"></span></span><span class="nav-link-text ps-1">Tables</span></div>
                            </a>
                            <ul class="nav collapse" id="tables">
                                <li class="nav-item"><a class="nav-link" href="modules/tables/basic-tables.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Basic tables</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/tables/advance-tables.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Advance tables</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/tables/bulk-select.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Bulk select</span></div>
                                    </a><!-- more inner pages--></li>
                            </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#charts" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="charts">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-chart-line"></span></span><span class="nav-link-text ps-1">Charts</span></div>
                            </a>
                            <ul class="nav collapse" id="charts">
                                <li class="nav-item"><a class="nav-link" href="modules/charts/chartjs.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Chartjs</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/charts/d3js.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">D3js</span><span class="badge rounded-pill ms-2 badge-subtle-success">New</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#eCharts" data-bs-toggle="collapse" aria-expanded="false" aria-controls="charts">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">ECharts</span></div>
                                    </a><!-- more inner pages-->
                                    <ul class="nav collapse" id="eCharts">
                                        <li class="nav-item"><a class="nav-link" href="modules/charts/echarts/line-charts.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Line charts</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="modules/charts/echarts/bar-charts.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Bar charts</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="modules/charts/echarts/candlestick-charts.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Candlestick charts</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="modules/charts/echarts/geo-map.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Geo map</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="modules/charts/echarts/scatter-charts.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Scatter charts</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="modules/charts/echarts/pie-charts.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pie charts</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="modules/charts/echarts/gauge-charts.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Gauge charts</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="modules/charts/echarts/radar-charts.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Radar charts</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="modules/charts/echarts/heatmap-charts.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Heatmap charts</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="modules/charts/echarts/how-to-use.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">How to use</span></div>
                                            </a><!-- more inner pages--></li>
                                    </ul>
                                </li>
                            </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#icons" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="icons">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-shapes"></span></span><span class="nav-link-text ps-1">Icons</span></div>
                            </a>
                            <ul class="nav collapse" id="icons">
                                <li class="nav-item"><a class="nav-link" href="modules/icons/font-awesome.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Font awesome</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/icons/bootstrap-icons.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Bootstrap icons</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/icons/feather.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Feather</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/icons/material-icons.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Material icons</span></div>
                                    </a><!-- more inner pages--></li>
                            </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#maps" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="maps">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-map"></span></span><span class="nav-link-text ps-1">Maps</span></div>
                            </a>
                            <ul class="nav collapse" id="maps">
                                <li class="nav-item"><a class="nav-link" href="modules/maps/google-map.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Google map</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/maps/leaflet-map.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Leaflet map</span></div>
                                    </a><!-- more inner pages--></li>
                            </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#components" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-puzzle-piece"></span></span><span class="nav-link-text ps-1">Components</span></div>
                            </a>
                            <ul class="nav collapse" id="components">
                                <li class="nav-item"><a class="nav-link" href="modules/components/accordion.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Accordion</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/alerts.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Alerts</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/anchor.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Anchor</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/animated-icons.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Animated icons</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/background.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Background</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/badges.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Badges</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/bottom-bar.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Bottom bar</span><span class="badge rounded-pill ms-2 badge-subtle-success">New</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/breadcrumbs.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Breadcrumbs</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/buttons.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Buttons</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/calendar.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Calendar</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/cards.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Cards</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#carousel" data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Carousel</span></div>
                                    </a><!-- more inner pages-->
                                    <ul class="nav collapse" id="carousel">
                                        <li class="nav-item"><a class="nav-link" href="modules/components/carousel/bootstrap.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Bootstrap</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="modules/components/carousel/swiper.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Swiper</span></div>
                                            </a><!-- more inner pages--></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/collapse.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Collapse</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/cookie-notice.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Cookie notice</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/countup.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Countup</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/draggable.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Draggable</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/dropdowns.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Dropdowns</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/jquery-components.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Jquery</span><span class="badge rounded-pill ms-2 badge-subtle-success">New</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/list-group.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">List group</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/modals.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Modals</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#navs-_and_-Tabs" data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Navs &amp; Tabs</span></div>
                                    </a><!-- more inner pages-->
                                    <ul class="nav collapse" id="navs-_and_-Tabs">
                                        <li class="nav-item"><a class="nav-link" href="modules/components/navs-and-tabs/navs.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Navs</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="modules/components/navs-and-tabs/navbar.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Navbar</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="modules/components/navs-and-tabs/vertical-navbar.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Navbar vertical</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="modules/components/navs-and-tabs/top-navbar.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Top nav</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="modules/components/navs-and-tabs/double-top-navbar.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Double top</span><span class="badge rounded-pill ms-2 badge-subtle-success">New</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="modules/components/navs-and-tabs/combo-navbar.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Combo nav</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="modules/components/navs-and-tabs/tabs.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Tabs</span></div>
                                            </a><!-- more inner pages--></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/offcanvas.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Offcanvas</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#pictures" data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pictures</span></div>
                                    </a><!-- more inner pages-->
                                    <ul class="nav collapse" id="pictures">
                                        <li class="nav-item"><a class="nav-link" href="modules/components/pictures/avatar.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Avatar</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="modules/components/pictures/images.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Images</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="modules/components/pictures/figures.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Figures</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="modules/components/pictures/hoverbox.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Hoverbox</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="modules/components/pictures/lightbox.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Lightbox</span></div>
                                            </a><!-- more inner pages--></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/progress-bar.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Progress bar</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/placeholder.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Placeholder</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/pagination.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pagination</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/popovers.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Popovers</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/scrollspy.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Scrollspy</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/search.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Search</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/spinners.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Spinners</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/timeline.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Timeline</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/toasts.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Toasts</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/tooltips.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Tooltips</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/treeview.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Treeview</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/typed-text.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Typed text</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#videos" data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Videos</span></div>
                                    </a><!-- more inner pages-->
                                    <ul class="nav collapse" id="videos">
                                        <li class="nav-item"><a class="nav-link" href="modules/components/videos/embed.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Embed</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="modules/components/videos/plyr.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Plyr</span></div>
                                            </a><!-- more inner pages--></li>
                                    </ul>
                                </li>
                            </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#utilities" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="utilities">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-fire"></span></span><span class="nav-link-text ps-1">Utilities</span></div>
                            </a>
                            <ul class="nav collapse" id="utilities">
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/background.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Background</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/borders.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Borders</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/clearfix.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Clearfix</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/colors.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Colors</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/colored-links.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Colored links</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/display.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Display</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/flex.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Flex</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/float.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Float</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/focus-ring.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Focus ring</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/grid.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Grid</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/icon-link.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Icon link</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/overlayscrollbar.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Overlay scrollbar</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/position.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Position</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/ratio.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Ratio</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/spacing.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Spacing</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/sizing.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Sizing</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/stretched-link.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Stretched link</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/text-truncation.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Text truncation</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/typography.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Typography</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/vertical-align.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Vertical align</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/vertical-rule.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Vertical rule</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/visibility.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Visibility</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/visually-hidden.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Visually hidden</span></div>
                                    </a><!-- more inner pages--></li>
                            </ul><!-- parent pages--><a class="nav-link" href="widgets.html" role="button">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-poll"></span></span><span class="nav-link-text ps-1">Widgets</span></div>
                            </a><!-- parent pages--><a class="nav-link dropdown-indicator" href="#multi-level" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="multi-level">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-layer-group"></span></span><span class="nav-link-text ps-1">Multi level</span></div>
                            </a>
                            <ul class="nav collapse" id="multi-level">
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#level-two" data-bs-toggle="collapse" aria-expanded="false" aria-controls="multi-level">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Level two</span></div>
                                    </a><!-- more inner pages-->
                                    <ul class="nav collapse" id="level-two">
                                        <li class="nav-item"><a class="nav-link" href="#!.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 1</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link" href="#!.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 2</span></div>
                                            </a><!-- more inner pages--></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#level-three" data-bs-toggle="collapse" aria-expanded="false" aria-controls="multi-level">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Level three</span></div>
                                    </a><!-- more inner pages-->
                                    <ul class="nav collapse" id="level-three">
                                        <li class="nav-item"><a class="nav-link" href="#!.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 3</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#item-4" data-bs-toggle="collapse" aria-expanded="false" aria-controls="level-three">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 4</span></div>
                                            </a><!-- more inner pages-->
                                            <ul class="nav collapse" id="item-4">
                                                <li class="nav-item"><a class="nav-link" href="#!.html">
                                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 5</span></div>
                                                    </a><!-- more inner pages--></li>
                                                <li class="nav-item"><a class="nav-link" href="#!.html">
                                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 6</span></div>
                                                    </a><!-- more inner pages--></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#level-four" data-bs-toggle="collapse" aria-expanded="false" aria-controls="multi-level">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Level four</span></div>
                                    </a><!-- more inner pages-->
                                    <ul class="nav collapse" id="level-four">
                                        <li class="nav-item"><a class="nav-link" href="#!.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 6</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#item-7" data-bs-toggle="collapse" aria-expanded="false" aria-controls="level-four">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 7</span></div>
                                            </a><!-- more inner pages-->
                                            <ul class="nav collapse" id="item-7">
                                                <li class="nav-item"><a class="nav-link" href="#!.html">
                                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 8</span></div>
                                                    </a><!-- more inner pages--></li>
                                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#item-9" data-bs-toggle="collapse" aria-expanded="false" aria-controls="item-7">
                                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 9</span></div>
                                                    </a><!-- more inner pages-->
                                                    <ul class="nav collapse" id="item-9">
                                                        <li class="nav-item"><a class="nav-link" href="#!.html">
                                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 10</span></div>
                                                            </a><!-- more inner pages--></li>
                                                        <li class="nav-item"><a class="nav-link" href="#!.html">
                                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 11</span></div>
                                                            </a><!-- more inner pages--></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item"><!-- label-->
                            <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                                <div class="col-auto navbar-vertical-label">Documentation</div>
                                <div class="col ps-0">
                                    <hr class="mb-0 navbar-vertical-divider" />
                                </div>
                            </div><!-- parent pages--><a class="nav-link" href="documentation/getting-started.html" role="button">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-rocket"></span></span><span class="nav-link-text ps-1">Getting started</span></div>
                            </a><!-- parent pages--><a class="nav-link dropdown-indicator" href="#customization" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="customization">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-wrench"></span></span><span class="nav-link-text ps-1">Customization</span></div>
                            </a>
                            <ul class="nav collapse" id="customization">
                                <li class="nav-item"><a class="nav-link" href="documentation/customization/configuration.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Configuration</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="documentation/customization/styling.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Styling</span><span class="badge rounded-pill ms-2 badge-subtle-success">Updated</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="documentation/customization/dark-mode.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Dark mode</span></div>
                                    </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="documentation/customization/plugin.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Plugin</span></div>
                                    </a><!-- more inner pages--></li>
                            </ul><!-- parent pages--><a class="nav-link" href="documentation/faq.html" role="button">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-question-circle"></span></span><span class="nav-link-text ps-1">Faq</span></div>
                            </a><!-- parent pages--><a class="nav-link" href="documentation/gulp.html" role="button">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fab fa-gulp"></span></span><span class="nav-link-text ps-1">Gulp</span></div>
                            </a><!-- parent pages--><a class="nav-link" href="documentation/design-file.html" role="button">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-palette"></span></span><span class="nav-link-text ps-1">Design file</span></div>
                            </a><!-- parent pages--><a class="nav-link" href="changelog.html" role="button">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-code-branch"></span></span><span class="nav-link-text ps-1">Changelog</span></div>
                            </a>
                        </li>
                    </ul>
                    <div class="settings mb-3">
                        <div class="card shadow-none">
                            <div class="card-body alert mb-0" role="alert">
                                <div class="btn-close-falcon-container"><button class="btn btn-link btn-close-falcon p-0" aria-label="Close" data-bs-dismiss="alert"></button></div>
                                <div class="text-center"><img src="images/navbar-vertical.png" alt="" width="80" />
                                    <p class="fs-11 mt-2">Loving what you see? <br />Get your copy of <a href="#!">Falcon</a></p>
                                    <div class="d-grid"><a class="btn btn-sm btn-primary" href="https://therichpost.com" target="_blank">More Admins</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg" style="display: none;">
            <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarStandard" aria-controls="navbarStandard" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            <a class="navbar-brand me-1 me-sm-3" href="index.html">
                <div class="d-flex align-items-center"><img class="me-2" src="images/falcon.png" alt="" width="40" /><span class="font-sans-serif text-primary">falcon</span></div>
            </a>
            <div class="collapse navbar-collapse scrollbar" id="navbarStandard">
                <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dashboards">Dashboard</a>
                        <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="dashboards">
                            <div class="bg-white dark__bg-1000 rounded-3 py-2"><a class="dropdown-item link-600 fw-medium" href="index.html">Default</a><a class="dropdown-item link-600 fw-medium" href="dashboard/analytics.html">Analytics</a><a class="dropdown-item link-600 fw-medium" href="dashboard/crm.html">CRM</a><a class="dropdown-item link-600 fw-medium" href="dashboard/e-commerce.html">E commerce</a><a class="dropdown-item link-600 fw-medium" href="dashboard/lms.html">LMS<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="dropdown-item link-600 fw-medium" href="dashboard/project-management.html">Management</a><a class="dropdown-item link-600 fw-medium" href="dashboard/saas.html">SaaS</a><a class="dropdown-item link-600 fw-medium" href="dashboard/support-desk.html">Support desk<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a></div>
                        </div>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="apps">App</a>
                        <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="apps">
                            <div class="card navbar-card-app shadow-none dark__bg-1000">
                                <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="images/authentication-corner.png" width="130" alt="" />
                                    <div class="row">
                                        <div class="col-6 col-md-4">
                                            <div class="nav flex-column"><a class="nav-link py-1 link-600 fw-medium" href="app/calendar.html">Calendar</a><a class="nav-link py-1 link-600 fw-medium" href="app/chat.html">Chat</a><a class="nav-link py-1 link-600 fw-medium" href="app/kanban.html">Kanban</a>
                                                <p class="nav-link text-700 mb-0 fw-bold">Social</p><a class="nav-link py-1 link-600 fw-medium" href="app/social/feed.html">Feed</a><a class="nav-link py-1 link-600 fw-medium" href="app/social/activity-log.html">Activity log</a><a class="nav-link py-1 link-600 fw-medium" href="app/social/notifications.html">Notifications</a><a class="nav-link py-1 link-600 fw-medium" href="app/social/followers.html">Followers</a>
                                                <p class="nav-link text-700 mb-0 fw-bold">Support Desk</p><a class="nav-link py-1 link-600 fw-medium" href="app/support-desk/table-view.html">Table view</a><a class="nav-link py-1 link-600 fw-medium" href="app/support-desk/card-view.html">Card view</a><a class="nav-link py-1 link-600 fw-medium" href="app/support-desk/contacts.html">Contacts</a><a class="nav-link py-1 link-600 fw-medium" href="app/support-desk/contact-details.html">Contact details</a><a class="nav-link py-1 link-600 fw-medium" href="app/support-desk/tickets-preview.html">Tickets preview</a><a class="nav-link py-1 link-600 fw-medium" href="app/support-desk/quick-links.html">Quick links</a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="nav flex-column">
                                                <p class="nav-link text-700 mb-0 fw-bold">E-Learning</p><a class="nav-link py-1 link-600 fw-medium" href="app/e-learning/course/course-list.html">Course list</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-learning/course/course-grid.html">Course grid</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-learning/course/course-details.html">Course details</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-learning/course/create-a-course.html">Create a course</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-learning/student-overview.html">Student overview</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-learning/trainer-profile.html">Trainer profile</a>
                                                <p class="nav-link text-700 mb-0 fw-bold">Events</p><a class="nav-link py-1 link-600 fw-medium" href="app/events/create-an-event.html">Create an event</a><a class="nav-link py-1 link-600 fw-medium" href="app/events/event-detail.html">Event detail</a><a class="nav-link py-1 link-600 fw-medium" href="app/events/event-list.html">Event list</a>
                                                <p class="nav-link text-700 mb-0 fw-bold">Email</p><a class="nav-link py-1 link-600 fw-medium" href="app/email/inbox.html">Inbox</a><a class="nav-link py-1 link-600 fw-medium" href="app/email/email-detail.html">Email detail</a><a class="nav-link py-1 link-600 fw-medium" href="app/email/compose.html">Compose</a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="nav flex-column">
                                                <p class="nav-link text-700 mb-0 fw-bold">E-Commerce</p><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/product/product-list.html">Product list</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/product/product-grid.html">Product grid</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/product/product-details.html">Product details</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/product/add-product.html">Add product</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/orders/order-list.html">Order list</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/orders/order-details.html">Order details</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/customers.html">Customers</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/customer-details.html">Customer details</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/shopping-cart.html">Shopping cart</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/checkout.html">Checkout</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/billing.html">Billing</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/invoice.html">Invoice</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="pagess">Pages</a>
                        <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="pagess">
                            <div class="card navbar-card-pages shadow-none dark__bg-1000">
                                <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="images/authentication-corner.png" width="130" alt="" />
                                    <div class="row">
                                        <div class="col-6 col-xxl-3">
                                            <div class="nav flex-column">
                                                <p class="nav-link text-700 mb-0 fw-bold">Simple Auth</p><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/simple/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/simple/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/simple/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/simple/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/simple/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/simple/reset-password.html">Reset password</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/simple/lock-screen.html">Lock screen</a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-xxl-3">
                                            <div class="nav flex-column">
                                                <p class="nav-link text-700 mb-0 fw-bold">Card Auth</p><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/card/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/card/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/card/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/card/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/card/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/card/reset-password.html">Reset password</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/card/lock-screen.html">Lock screen</a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-xxl-3">
                                            <div class="nav flex-column">
                                                <p class="nav-link text-700 mb-0 fw-bold">Split Auth</p><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/split/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/split/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/split/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/split/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/split/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/split/reset-password.html">Reset password</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/split/lock-screen.html">Lock screen</a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-xxl-3">
                                            <div class="nav flex-column">
                                                <p class="nav-link text-700 mb-0 fw-bold">Layouts</p><a class="nav-link py-1 link-600 fw-medium" href="demo/navbar-vertical.html">Navbar vertical</a><a class="nav-link py-1 link-600 fw-medium" href="demo/navbar-top.html">Top nav</a><a class="nav-link py-1 link-600 fw-medium" href="demo/navbar-double-top.html">Double top<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="demo/combo-nav.html">Combo nav</a>
                                                <p class="nav-link text-700 mb-0 fw-bold">Others</p><a class="nav-link py-1 link-600 fw-medium" href="pages/starter.html">Starter</a><a class="nav-link py-1 link-600 fw-medium" href="pages/landing.html">Landing</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 col-xxl-3">
                                            <div class="nav flex-column">
                                                <p class="nav-link text-700 mb-0 fw-bold">User</p><a class="nav-link py-1 link-600 fw-medium" href="pages/user/profile.html">Profile</a><a class="nav-link py-1 link-600 fw-medium" href="pages/user/settings.html">Settings</a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-xxl-3">
                                            <div class="nav flex-column">
                                                <p class="nav-link text-700 mb-0 fw-bold">Pricing</p><a class="nav-link py-1 link-600 fw-medium" href="pages/pricing/pricing-default.html">Pricing default</a><a class="nav-link py-1 link-600 fw-medium" href="pages/pricing/pricing-alt.html">Pricing alt</a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-xxl-3">
                                            <div class="nav flex-column">
                                                <p class="nav-link text-700 mb-0 fw-bold">Errors</p><a class="nav-link py-1 link-600 fw-medium" href="pages/errors/404.html">404</a><a class="nav-link py-1 link-600 fw-medium" href="pages/errors/500.html">500</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 col-xxl-3">
                                            <div class="nav flex-column">
                                                <p class="nav-link text-700 mb-0 fw-bold">Miscellaneous</p><a class="nav-link py-1 link-600 fw-medium" href="pages/miscellaneous/associations.html">Associations</a><a class="nav-link py-1 link-600 fw-medium" href="pages/miscellaneous/invite-people.html">Invite people</a><a class="nav-link py-1 link-600 fw-medium" href="pages/miscellaneous/privacy-policy.html">Privacy policy</a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-xxl-3">
                                            <div class="nav flex-column">
                                                <p class="nav-link text-700 mb-0 fw-bold">FAQ</p><a class="nav-link py-1 link-600 fw-medium" href="pages/faq/faq-basic.html">Faq basic</a><a class="nav-link py-1 link-600 fw-medium" href="pages/faq/faq-alt.html">Faq alt</a><a class="nav-link py-1 link-600 fw-medium" href="pages/faq/faq-accordion.html">Faq accordion</a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-xxl-3">
                                            <div class="nav flex-column">
                                                <p class="nav-link text-700 mb-0 fw-bold">Other Auth</p><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/wizard.html">Wizard</a><a class="nav-link py-1 link-600 fw-medium" href="#authentication-modal" data-bs-toggle="modal">Modal</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="moduless">Modules</a>
                        <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="moduless">
                            <div class="card navbar-card-components shadow-none dark__bg-1000">
                                <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="images/authentication-corner.png" width="130" alt="" />
                                    <div class="row">
                                        <div class="col-6 col-xxl-3">
                                            <div class="nav flex-column">
                                                <p class="nav-link text-700 mb-0 fw-bold">Components</p><a class="nav-link py-1 link-600 fw-medium" href="modules/components/accordion.html">Accordion</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/alerts.html">Alerts</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/anchor.html">Anchor</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/animated-icons.html">Animated icons</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/background.html">Background</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/badges.html">Badges</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/bottom-bar.html">Bottom bar<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/breadcrumbs.html">Breadcrumbs</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/buttons.html">Buttons</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/calendar.html">Calendar</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/cards.html">Cards</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/carousel/bootstrap.html">Bootstrap carousel</a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-xxl-3">
                                            <div class="nav flex-column mt-md-4 pt-md-1"><a class="nav-link py-1 link-600 fw-medium" href="modules/components/carousel/swiper.html">Swiper</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/collapse.html">Collapse</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/cookie-notice.html">Cookie notice</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/countup.html">Countup</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/draggable.html">Draggable</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/dropdowns.html">Dropdowns</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/jquery-components.html">Jquery<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/list-group.html">List group</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/modals.html">Modals</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/navs-and-tabs/navs.html">Navs</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/navs-and-tabs/navbar.html">Navbar</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/navs-and-tabs/vertical-navbar.html">Navbar vertical</a></div>
                                        </div>
                                        <div class="col-6 col-xxl-3">
                                            <div class="nav flex-column mt-xxl-4 pt-xxl-1"><a class="nav-link py-1 link-600 fw-medium" href="modules/components/navs-and-tabs/top-navbar.html">Top nav</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/navs-and-tabs/double-top-navbar.html">Double top<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/navs-and-tabs/combo-navbar.html">Combo nav</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/navs-and-tabs/tabs.html">Tabs</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/offcanvas.html">Offcanvas</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/pictures/avatar.html">Avatar</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/pictures/images.html">Images</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/pictures/figures.html">Figures</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/pictures/hoverbox.html">Hoverbox</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/pictures/lightbox.html">Lightbox</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/progress-bar.html">Progress bar</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/placeholder.html">Placeholder</a></div>
                                        </div>
                                        <div class="col-6 col-xxl-3">
                                            <div class="nav flex-column mt-xxl-4 pt-xxl-1"><a class="nav-link py-1 link-600 fw-medium" href="modules/components/pagination.html">Pagination</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/popovers.html">Popovers</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/scrollspy.html">Scrollspy</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/search.html">Search</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/spinners.html">Spinners</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/timeline.html">Timeline</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/toasts.html">Toasts</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/tooltips.html">Tooltips</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/treeview.html">Treeview</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/typed-text.html">Typed text</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/videos/embed.html">Embed</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/videos/plyr.html">Plyr</a></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 col-xxl-3">
                                            <div class="nav flex-column">
                                                <p class="nav-link text-700 mb-0 fw-bold">Utilities</p><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/background.html">Background</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/borders.html">Borders</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/clearfix.html">Clearfix</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/colors.html">Colors</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/colored-links.html">Colored links</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/display.html">Display</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/flex.html">Flex</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/float.html">Float</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/focus-ring.html">Focus ring</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/grid.html">Grid</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/icon-link.html">Icon link</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/overlayscrollbar.html">Overlay scrollbar</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/position.html">Position</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/ratio.html">Ratio</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/spacing.html">Spacing</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/sizing.html">Sizing</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/stretched-link.html">Stretched link</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/text-truncation.html">Text truncation</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/typography.html">Typography</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/vertical-align.html">Vertical align</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/vertical-rule.html">Vertical rule</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/visibility.html">Visibility</a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-xxl-3">
                                            <div class="nav flex-column">
                                                <p class="nav-link text-700 mb-0 fw-bold">Tables</p><a class="nav-link py-1 link-600 fw-medium" href="modules/tables/basic-tables.html">Basic tables</a><a class="nav-link py-1 link-600 fw-medium" href="modules/tables/advance-tables.html">Advance tables</a><a class="nav-link py-1 link-600 fw-medium" href="modules/tables/bulk-select.html">Bulk select</a>
                                                <p class="nav-link text-700 mb-0 fw-bold">Charts</p><a class="nav-link py-1 link-600 fw-medium" href="modules/charts/chartjs.html">Chartjs</a><a class="nav-link py-1 link-600 fw-medium" href="modules/charts/d3js.html">D3js<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a>
                                                <p class="nav-link text-700 mb-0 fw-bold">ECharts</p><a class="nav-link py-1 link-600 fw-medium" href="modules/charts/echarts/line-charts.html">Line charts</a><a class="nav-link py-1 link-600 fw-medium" href="modules/charts/echarts/bar-charts.html">Bar charts</a><a class="nav-link py-1 link-600 fw-medium" href="modules/charts/echarts/candlestick-charts.html">Candlestick charts</a><a class="nav-link py-1 link-600 fw-medium" href="modules/charts/echarts/geo-map.html">Geo map</a><a class="nav-link py-1 link-600 fw-medium" href="modules/charts/echarts/scatter-charts.html">Scatter charts</a><a class="nav-link py-1 link-600 fw-medium" href="modules/charts/echarts/pie-charts.html">Pie charts</a><a class="nav-link py-1 link-600 fw-medium" href="modules/charts/echarts/gauge-charts.html">Gauge charts</a><a class="nav-link py-1 link-600 fw-medium" href="modules/charts/echarts/radar-charts.html">Radar charts</a><a class="nav-link py-1 link-600 fw-medium" href="modules/charts/echarts/heatmap-charts.html">Heatmap charts</a><a class="nav-link py-1 link-600 fw-medium" href="modules/charts/echarts/how-to-use.html">How to use</a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-xxl-3">
                                            <div class="nav flex-column">
                                                <p class="nav-link text-700 mb-0 fw-bold">Forms</p><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/basic/form-control.html">Form control</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/basic/input-group.html">Input group</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/basic/select.html">Select</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/basic/checks.html">Checks</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/basic/range.html">Range</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/basic/layout.html">Layout</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/advance/advance-select.html">Advance select</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/advance/date-picker.html">Date picker</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/advance/editor.html">Editor</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/advance/emoji-button.html">Emoji button</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/advance/file-uploader.html">File uploader</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/advance/input-mask.html">Input mask</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/advance/range-slider.html">Range slider</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/advance/rating.html">Rating</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/floating-labels.html">Floating labels</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/wizard.html">Wizard</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/validation.html">Validation</a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-xxl-3">
                                            <div class="nav flex-column pt-xxl-1">
                                                <p class="nav-link text-700 mb-0 fw-bold">Icons</p><a class="nav-link py-1 link-600 fw-medium" href="modules/icons/font-awesome.html">Font awesome</a><a class="nav-link py-1 link-600 fw-medium" href="modules/icons/bootstrap-icons.html">Bootstrap icons</a><a class="nav-link py-1 link-600 fw-medium" href="modules/icons/feather.html">Feather</a><a class="nav-link py-1 link-600 fw-medium" href="modules/icons/material-icons.html">Material icons</a>
                                                <p class="nav-link text-700 mb-0 fw-bold">Maps</p><a class="nav-link py-1 link-600 fw-medium" href="modules/maps/google-map.html">Google map</a><a class="nav-link py-1 link-600 fw-medium" href="modules/maps/leaflet-map.html">Leaflet map</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="documentations">Documentation</a>
                        <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="documentations">
                            <div class="bg-white dark__bg-1000 rounded-3 py-2"><a class="dropdown-item link-600 fw-medium" href="documentation/getting-started.html">Getting started</a><a class="dropdown-item link-600 fw-medium" href="documentation/customization/configuration.html">Configuration</a><a class="dropdown-item link-600 fw-medium" href="documentation/customization/styling.html">Styling<span class="badge rounded-pill ms-2 badge-subtle-success">Updated</span></a><a class="dropdown-item link-600 fw-medium" href="documentation/customization/dark-mode.html">Dark mode</a><a class="dropdown-item link-600 fw-medium" href="documentation/customization/plugin.html">Plugin</a><a class="dropdown-item link-600 fw-medium" href="documentation/faq.html">Faq</a><a class="dropdown-item link-600 fw-medium" href="documentation/gulp.html">Gulp</a><a class="dropdown-item link-600 fw-medium" href="documentation/design-file.html">Design file</a><a class="dropdown-item link-600 fw-medium" href="changelog.html">Changelog</a></div>
                        </div>
                    </li>
                </ul>
            </div>
            <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
                <li class="nav-item ps-2 pe-0">
                    <div class="dropdown theme-control-dropdown"><a class="nav-link d-flex align-items-center dropdown-toggle fa-icon-wait fs-9 pe-1 py-0" href="#" role="button" id="themeSwitchDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-sun fs-7" data-fa-transform="shrink-2" data-theme-dropdown-toggle-icon="light"></span><span class="fas fa-moon fs-7" data-fa-transform="shrink-3" data-theme-dropdown-toggle-icon="dark"></span><span class="fas fa-adjust fs-7" data-fa-transform="shrink-2" data-theme-dropdown-toggle-icon="auto"></span></a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-caret border py-0 mt-3" aria-labelledby="themeSwitchDropdown">
                            <div class="bg-white dark__bg-1000 rounded-2 py-2"><button class="dropdown-item d-flex align-items-center gap-2" type="button" value="light" data-theme-control="theme"><span class="fas fa-sun"></span>Light<span class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button><button class="dropdown-item d-flex align-items-center gap-2" type="button" value="dark" data-theme-control="theme"><span class="fas fa-moon" data-fa-transform=""></span>Dark<span class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button><button class="dropdown-item d-flex align-items-center gap-2" type="button" value="auto" data-theme-control="theme"><span class="fas fa-adjust" data-fa-transform=""></span>Auto<span class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button></div>
                        </div>
                    </div>
                </li>
                <li class="nav-item d-none d-sm-block">
                    <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait" href="app/e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart" data-fa-transform="shrink-7" style="font-size: 33px;"></span><span class="notification-indicator-number">1</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait" id="navbarDropdownNotification" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-hide-on-body-scroll="data-hide-on-body-scroll"><span class="fas fa-bell" data-fa-transform="shrink-6" style="font-size: 33px;"></span></a>
                    <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-menu-notification dropdown-caret-bg" aria-labelledby="navbarDropdownNotification">
                        <div class="card card-notification shadow-none">
                            <div class="card-header">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-auto">
                                        <h6 class="card-header-title mb-0">Notifications</h6>
                                    </div>
                                    <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal" href="#">Mark all as read</a></div>
                                </div>
                            </div>
                            <div class="scrollbar-overlay" style="max-height:19rem">
                                <div class="list-group list-group-flush fw-normal fs-10">
                                    <div class="list-group-title border-bottom">NEW</div>
                                    <div class="list-group-item">
                                        <a class="notification notification-flush notification-unread" href="#!">
                                            <div class="notification-avatar">
                                                <div class="avatar avatar-2xl me-3">
                                                    <img class="rounded-circle" src="images/1-thumb.png" alt="" />
                                                </div>
                                            </div>
                                            <div class="notification-body">
                                                <p class="mb-1"><strong>Emma Watson</strong> replied to your comment : "Hello world ????"</p>
                                                <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">????</span>Just now</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="list-group-item">
                                        <a class="notification notification-flush notification-unread" href="#!">
                                            <div class="notification-avatar">
                                                <div class="avatar avatar-2xl me-3">
                                                    <div class="avatar-name rounded-circle"><span>AB</span></div>
                                                </div>
                                            </div>
                                            <div class="notification-body">
                                                <p class="mb-1"><strong>Albert Brooks</strong> reacted to <strong>Mia Khalifa's</strong> status</p>
                                                <span class="notification-time"><span class="me-2 fab fa-gratipay text-danger"></span>9hr</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="list-group-title border-bottom">EARLIER</div>
                                    <div class="list-group-item">
                                        <a class="notification notification-flush" href="#!">
                                            <div class="notification-avatar">
                                                <div class="avatar avatar-2xl me-3">
                                                    <img class="rounded-circle" src="images/weather-sm.jpg" alt="" />
                                                </div>
                                            </div>
                                            <div class="notification-body">
                                                <p class="mb-1">The forecast today shows a low of 20&#8451; in California. See today's weather.</p>
                                                <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">????️</span>1d</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="list-group-item">
                                        <a class="border-bottom-0 notification-unread  notification notification-flush" href="#!">
                                            <div class="notification-avatar">
                                                <div class="avatar avatar-xl me-3">
                                                    <img class="rounded-circle" src="images/oxford.png" alt="" />
                                                </div>
                                            </div>
                                            <div class="notification-body">
                                                <p class="mb-1"><strong>University of Oxford</strong> created an event : "Causal Inference Hilary 2019"</p>
                                                <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">✌️</span>1w</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="list-group-item">
                                        <a class="border-bottom-0 notification notification-flush" href="#!">
                                            <div class="notification-avatar">
                                                <div class="avatar avatar-xl me-3">
                                                    <img class="rounded-circle" src="images/10.jpg" alt="" />
                                                </div>
                                            </div>
                                            <div class="notification-body">
                                                <p class="mb-1"><strong>James Cameron</strong> invited to join the group: United Nations International Children's Fund</p>
                                                <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">????‍</span>2d</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-center border-top"><a class="card-link d-block" href="app/social/notifications.html">View all</a></div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown px-1">
                    <a class="nav-link fa-icon-wait nine-dots p-1" id="navbarDropdownMenu" role="button" data-hide-on-body-scroll="data-hide-on-body-scroll" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="43" viewBox="0 0 16 16" fill="none">
                            <circle cx="2" cy="2" r="2" fill="#6C6E71"></circle>
                            <circle cx="2" cy="8" r="2" fill="#6C6E71"></circle>
                            <circle cx="2" cy="14" r="2" fill="#6C6E71"></circle>
                            <circle cx="8" cy="8" r="2" fill="#6C6E71"></circle>
                            <circle cx="8" cy="14" r="2" fill="#6C6E71"></circle>
                            <circle cx="14" cy="8" r="2" fill="#6C6E71"></circle>
                            <circle cx="14" cy="14" r="2" fill="#6C6E71"></circle>
                            <circle cx="8" cy="2" r="2" fill="#6C6E71"></circle>
                            <circle cx="14" cy="2" r="2" fill="#6C6E71"></circle>
                        </svg></a>
                    <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-caret-bg" aria-labelledby="navbarDropdownMenu">
                        <div class="card shadow-none">
                            <div class="scrollbar-overlay nine-dots-dropdown">
                                <div class="card-body px-3">
                                    <div class="row text-center gx-0 gy-0">
                                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="pages/user/profile.html" target="_blank">
                                                <div class="avatar avatar-2xl"> <img class="rounded-circle" src="images/3.jpg" alt="" /></div>
                                                <p class="mb-0 fw-medium text-800 text-truncate fs-11">Account</p>
                                            </a></div>

                                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/google.png" alt="" width="40" height="40" />
                                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Google</p>
                                            </a></div>
                                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/spotify.png" alt="" width="40" height="40" />
                                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Spotify</p>
                                            </a></div>
                                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/steam.png" alt="" width="40" height="40" />
                                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Steam</p>
                                            </a></div>
                                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/github-light.png" alt="" width="40" height="40" />
                                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Github</p>
                                            </a></div>
                                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/discord.png" alt="" width="40" height="40" />
                                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Discord</p>
                                            </a></div>
                                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/xbox.png" alt="" width="40" height="40" />
                                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">xbox</p>
                                            </a></div>
                                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/trello.png" alt="" width="40" height="40" />
                                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Kanban</p>
                                            </a></div>
                                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/hp.png" alt="" width="40" height="40" />
                                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Hp</p>
                                            </a></div>
                                        <div class="col-12">
                                            <hr class="my-3 mx-n3 bg-200" />
                                        </div>
                                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/linkedin.png" alt="" width="40" height="40" />
                                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Linkedin</p>
                                            </a></div>
                                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/twitter.png" alt="" width="40" height="40" />
                                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Twitter</p>
                                            </a></div>
                                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/facebook.png" alt="" width="40" height="40" />
                                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Facebook</p>
                                            </a></div>
                                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/instagram.png" alt="" width="40" height="40" />
                                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Instagram</p>
                                            </a></div>
                                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/pinterest.png" alt="" width="40" height="40" />
                                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Pinterest</p>
                                            </a></div>
                                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/slack.png" alt="" width="40" height="40" />
                                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Slack</p>
                                            </a></div>
                                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/deviantart.png" alt="" width="40" height="40" />
                                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Deviantart</p>
                                            </a></div>
                                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="app/events/event-detail.html" target="_blank">
                                                <div class="avatar avatar-2xl">
                                                    <div class="avatar-name rounded-circle bg-primary-subtle text-primary"><span class="fs-7">E</span></div>
                                                </div>
                                                <p class="mb-0 fw-medium text-800 text-truncate fs-11">Events</p>
                                            </a></div>
                                        <div class="col-12"><a class="btn btn-outline-primary btn-sm mt-4" href="#!">Show more</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="avatar avatar-xl">
                            <img class="rounded-circle" src="images/3-thumb.png" alt="" />
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                        <div class="bg-white dark__bg-1000 rounded-2 py-2">
                            <a class="dropdown-item fw-bold text-warning" href="#!"><span class="fas fa-crown me-1"></span><span>Go Pro</span></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#!">Set status</a>
                            <a class="dropdown-item" href="pages/user/profile.html">Profile &amp; account</a>
                            <a class="dropdown-item" href="#!">Feedback</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="pages/user/settings.html">Settings</a>
                            <a class="dropdown-item" href="pages/authentication/card/logout.html">Logout</a>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
        <div class="content">
            <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand" style="display: none;">
                <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
                <a class="navbar-brand me-1 me-sm-3" href="index.html">
                    <div class="d-flex align-items-center"><img class="me-2" src="images/falcon.png" alt="" width="40" /><span class="font-sans-serif text-primary">falcon</span></div>
                </a>
                <ul class="navbar-nav align-items-center d-none d-lg-block">
                    <li class="nav-item">
                        <div class="search-box" data-list='{"valueNames":["title"]}'>
                            <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input fuzzy-search" type="search" placeholder="Search..." aria-label="Search" />
                                <span class="fas fa-search search-box-icon"></span>
                            </form>
                            <div class="btn-close-falcon-container position-absolute end-0 top-50 translate-middle shadow-none" data-bs-dismiss="search"><button class="btn btn-link btn-close-falcon p-0" aria-label="Close"></button></div>
                            <div class="dropdown-menu border font-base start-0 mt-2 py-0 overflow-hidden w-100">
                                <div class="scrollbar list py-3" style="max-height: 24rem;">
                                    <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs-11 pt-0 pb-2">Recently Browsed</h6><a class="dropdown-item fs-10 px-x1 py-1 hover-primary" href="app/events/event-detail.html">
                                        <div class="d-flex align-items-center">
                                            <span class="fas fa-circle me-2 text-300 fs-11"></span>
                                            <div class="fw-normal title">Pages <span class="fas fa-chevron-right mx-1 text-500 fs-11" data-fa-transform="shrink-2"></span> Events</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item fs-10 px-x1 py-1 hover-primary" href="app/e-commerce/customers.html">
                                        <div class="d-flex align-items-center">
                                            <span class="fas fa-circle me-2 text-300 fs-11"></span>
                                            <div class="fw-normal title">E-commerce <span class="fas fa-chevron-right mx-1 text-500 fs-11" data-fa-transform="shrink-2"></span> Customers</div>
                                        </div>
                                    </a>
                                    <hr class="text-200 dark__text-900" />
                                    <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs-11 pt-0 pb-2">Suggested Filter</h6><a class="dropdown-item px-x1 py-1 fs-9" href="app/e-commerce/customers.html">
                                        <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-subtle-warning">customers:</span>
                                            <div class="flex-1 fs-10 title">All customers list</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item px-x1 py-1 fs-9" href="app/events/event-detail.html">
                                        <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-subtle-success">events:</span>
                                            <div class="flex-1 fs-10 title">Latest events in current month</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item px-x1 py-1 fs-9" href="app/e-commerce/product/product-grid.html">
                                        <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-subtle-info">products:</span>
                                            <div class="flex-1 fs-10 title">Most popular products</div>
                                        </div>
                                    </a>
                                    <hr class="text-200 dark__text-900" />
                                    <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs-11 pt-0 pb-2">Files</h6><a class="dropdown-item px-x1 py-2" href="#!">
                                        <div class="d-flex align-items-center">
                                            <div class="file-thumbnail me-2"><img class="border h-100 w-100 object-fit-cover rounded-3" src="images/3-thumb.png" alt="" /></div>
                                            <div class="flex-1">
                                                <h6 class="mb-0 title">iPhone</h6>
                                                <p class="fs-11 mb-0 d-flex"><span class="fw-semi-bold">Antony</span><span class="fw-medium text-600 ms-2">27 Sep at 10:30 AM</span></p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item px-x1 py-2" href="#!">
                                        <div class="d-flex align-items-center">
                                            <div class="file-thumbnail me-2"><img class="img-fluid" src="images/zip.png" alt="" /></div>
                                            <div class="flex-1">
                                                <h6 class="mb-0 title">Falcon v1.8.2</h6>
                                                <p class="fs-11 mb-0 d-flex"><span class="fw-semi-bold">John</span><span class="fw-medium text-600 ms-2">30 Sep at 12:30 PM</span></p>
                                            </div>
                                        </div>
                                    </a>
                                    <hr class="text-200 dark__text-900" />
                                    <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs-11 pt-0 pb-2">Members</h6><a class="dropdown-item px-x1 py-2" href="pages/user/profile.html">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-l status-online me-2">
                                                <img class="rounded-circle" src="images/1.jpg" alt="" />
                                            </div>
                                            <div class="flex-1">
                                                <h6 class="mb-0 title">Anna Karinina</h6>
                                                <p class="fs-11 mb-0 d-flex">Technext Limited</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item px-x1 py-2" href="pages/user/profile.html">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-l me-2">
                                                <img class="rounded-circle" src="images/2.jpg" alt="" />
                                            </div>
                                            <div class="flex-1">
                                                <h6 class="mb-0 title">Antony Hopkins</h6>
                                                <p class="fs-11 mb-0 d-flex">Brain Trust</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item px-x1 py-2" href="pages/user/profile.html">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-l me-2">
                                                <img class="rounded-circle" src="images/3.jpg" alt="" />
                                            </div>
                                            <div class="flex-1">
                                                <h6 class="mb-0 title">Emma Watson</h6>
                                                <p class="fs-11 mb-0 d-flex">Google</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="text-center mt-n3">
                                    <p class="fallback fw-bold fs-8 d-none">No Result Found.</p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
                    <li class="nav-item ps-2 pe-0">
                        <div class="dropdown theme-control-dropdown"><a class="nav-link d-flex align-items-center dropdown-toggle fa-icon-wait fs-9 pe-1 py-0" href="#" role="button" id="themeSwitchDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-sun fs-7" data-fa-transform="shrink-2" data-theme-dropdown-toggle-icon="light"></span><span class="fas fa-moon fs-7" data-fa-transform="shrink-3" data-theme-dropdown-toggle-icon="dark"></span><span class="fas fa-adjust fs-7" data-fa-transform="shrink-2" data-theme-dropdown-toggle-icon="auto"></span></a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-caret border py-0 mt-3" aria-labelledby="themeSwitchDropdown">
                                <div class="bg-white dark__bg-1000 rounded-2 py-2"><button class="dropdown-item d-flex align-items-center gap-2" type="button" value="light" data-theme-control="theme"><span class="fas fa-sun"></span>Light<span class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button><button class="dropdown-item d-flex align-items-center gap-2" type="button" value="dark" data-theme-control="theme"><span class="fas fa-moon" data-fa-transform=""></span>Dark<span class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button><button class="dropdown-item d-flex align-items-center gap-2" type="button" value="auto" data-theme-control="theme"><span class="fas fa-adjust" data-fa-transform=""></span>Auto<span class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button></div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item d-none d-sm-block">
                        <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait" href="app/e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart" data-fa-transform="shrink-7" style="font-size: 33px;"></span><span class="notification-indicator-number">1</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait" id="navbarDropdownNotification" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-hide-on-body-scroll="data-hide-on-body-scroll"><span class="fas fa-bell" data-fa-transform="shrink-6" style="font-size: 33px;"></span></a>
                        <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-menu-notification dropdown-caret-bg" aria-labelledby="navbarDropdownNotification">
                            <div class="card card-notification shadow-none">
                                <div class="card-header">
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-auto">
                                            <h6 class="card-header-title mb-0">Notifications</h6>
                                        </div>
                                        <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal" href="#">Mark all as read</a></div>
                                    </div>
                                </div>
                                <div class="scrollbar-overlay" style="max-height:19rem">
                                    <div class="list-group list-group-flush fw-normal fs-10">
                                        <div class="list-group-title border-bottom">NEW</div>
                                        <div class="list-group-item">
                                            <a class="notification notification-flush notification-unread" href="#!">
                                                <div class="notification-avatar">
                                                    <div class="avatar avatar-2xl me-3">
                                                        <img class="rounded-circle" src="images/1-thumb.png" alt="" />
                                                    </div>
                                                </div>
                                                <div class="notification-body">
                                                    <p class="mb-1"><strong>Emma Watson</strong> replied to your comment : "Hello world ????"</p>
                                                    <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">????</span>Just now</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="list-group-item">
                                            <a class="notification notification-flush notification-unread" href="#!">
                                                <div class="notification-avatar">
                                                    <div class="avatar avatar-2xl me-3">
                                                        <div class="avatar-name rounded-circle"><span>AB</span></div>
                                                    </div>
                                                </div>
                                                <div class="notification-body">
                                                    <p class="mb-1"><strong>Albert Brooks</strong> reacted to <strong>Mia Khalifa's</strong> status</p>
                                                    <span class="notification-time"><span class="me-2 fab fa-gratipay text-danger"></span>9hr</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="list-group-title border-bottom">EARLIER</div>
                                        <div class="list-group-item">
                                            <a class="notification notification-flush" href="#!">
                                                <div class="notification-avatar">
                                                    <div class="avatar avatar-2xl me-3">
                                                        <img class="rounded-circle" src="images/weather-sm.jpg" alt="" />
                                                    </div>
                                                </div>
                                                <div class="notification-body">
                                                    <p class="mb-1">The forecast today shows a low of 20&#8451; in California. See today's weather.</p>
                                                    <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">????️</span>1d</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="list-group-item">
                                            <a class="border-bottom-0 notification-unread  notification notification-flush" href="#!">
                                                <div class="notification-avatar">
                                                    <div class="avatar avatar-xl me-3">
                                                        <img class="rounded-circle" src="images/oxford.png" alt="" />
                                                    </div>
                                                </div>
                                                <div class="notification-body">
                                                    <p class="mb-1"><strong>University of Oxford</strong> created an event : "Causal Inference Hilary 2019"</p>
                                                    <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">✌️</span>1w</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="list-group-item">
                                            <a class="border-bottom-0 notification notification-flush" href="#!">
                                                <div class="notification-avatar">
                                                    <div class="avatar avatar-xl me-3">
                                                        <img class="rounded-circle" src="images/10.jpg" alt="" />
                                                    </div>
                                                </div>
                                                <div class="notification-body">
                                                    <p class="mb-1"><strong>James Cameron</strong> invited to join the group: United Nations International Children's Fund</p>
                                                    <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">????‍</span>2d</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-center border-top"><a class="card-link d-block" href="app/social/notifications.html">View all</a></div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown px-1">
                        <a class="nav-link fa-icon-wait nine-dots p-1" id="navbarDropdownMenu" role="button" data-hide-on-body-scroll="data-hide-on-body-scroll" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="43" viewBox="0 0 16 16" fill="none">
                                <circle cx="2" cy="2" r="2" fill="#6C6E71"></circle>
                                <circle cx="2" cy="8" r="2" fill="#6C6E71"></circle>
                                <circle cx="2" cy="14" r="2" fill="#6C6E71"></circle>
                                <circle cx="8" cy="8" r="2" fill="#6C6E71"></circle>
                                <circle cx="8" cy="14" r="2" fill="#6C6E71"></circle>
                                <circle cx="14" cy="8" r="2" fill="#6C6E71"></circle>
                                <circle cx="14" cy="14" r="2" fill="#6C6E71"></circle>
                                <circle cx="8" cy="2" r="2" fill="#6C6E71"></circle>
                                <circle cx="14" cy="2" r="2" fill="#6C6E71"></circle>
                            </svg></a>
                        <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-caret-bg" aria-labelledby="navbarDropdownMenu">
                            <div class="card shadow-none">
                                <div class="scrollbar-overlay nine-dots-dropdown">
                                    <div class="card-body px-3">
                                        <div class="row text-center gx-0 gy-0">
                                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="pages/user/profile.html" target="_blank">
                                                    <div class="avatar avatar-2xl"> <img class="rounded-circle" src="images/3.jpg" alt="" /></div>
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs-11">Account</p>
                                                </a></div>

                                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/google.png" alt="" width="40" height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Google</p>
                                                </a></div>
                                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/spotify.png" alt="" width="40" height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Spotify</p>
                                                </a></div>
                                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/steam.png" alt="" width="40" height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Steam</p>
                                                </a></div>
                                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/github-light.png" alt="" width="40" height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Github</p>
                                                </a></div>
                                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/discord.png" alt="" width="40" height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Discord</p>
                                                </a></div>
                                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/xbox.png" alt="" width="40" height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">xbox</p>
                                                </a></div>
                                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/trello.png" alt="" width="40" height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Kanban</p>
                                                </a></div>
                                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/hp.png" alt="" width="40" height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Hp</p>
                                                </a></div>
                                            <div class="col-12">
                                                <hr class="my-3 mx-n3 bg-200" />
                                            </div>
                                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/linkedin.png" alt="" width="40" height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Linkedin</p>
                                                </a></div>
                                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/twitter.png" alt="" width="40" height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Twitter</p>
                                                </a></div>
                                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/facebook.png" alt="" width="40" height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Facebook</p>
                                                </a></div>
                                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/instagram.png" alt="" width="40" height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Instagram</p>
                                                </a></div>
                                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/pinterest.png" alt="" width="40" height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Pinterest</p>
                                                </a></div>
                                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/slack.png" alt="" width="40" height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Slack</p>
                                                </a></div>
                                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/deviantart.png" alt="" width="40" height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Deviantart</p>
                                                </a></div>
                                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="app/events/event-detail.html" target="_blank">
                                                    <div class="avatar avatar-2xl">
                                                        <div class="avatar-name rounded-circle bg-primary-subtle text-primary"><span class="fs-7">E</span></div>
                                                    </div>
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs-11">Events</p>
                                                </a></div>
                                            <div class="col-12"><a class="btn btn-outline-primary btn-sm mt-4" href="#!">Show more</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="avatar avatar-xl">
                                <img class="rounded-circle" src="images/3-thumb.png" alt="" />
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                            <div class="bg-white dark__bg-1000 rounded-2 py-2">
                                <a class="dropdown-item fw-bold text-warning" href="#!"><span class="fas fa-crown me-1"></span><span>Go Pro</span></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#!">Set status</a>
                                <a class="dropdown-item" href="pages/user/profile.html">Profile &amp; account</a>
                                <a class="dropdown-item" href="#!">Feedback</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="pages/user/settings.html">Settings</a>
                                <a class="dropdown-item" href="pages/authentication/card/logout.html">Logout</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
            <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg" style="display: none;" data-move-target="#navbarVerticalNav" data-navbar-top="combo">
                <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
                <a class="navbar-brand me-1 me-sm-3" href="index.html">
                    <div class="d-flex align-items-center"><img class="me-2" src="images/falcon.png" alt="" width="40" /><span class="font-sans-serif text-primary">falcon</span></div>
                </a>
                <div class="collapse navbar-collapse scrollbar" id="navbarStandard">
                    <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dashboards">Dashboard</a>
                            <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="dashboards">
                                <div class="bg-white dark__bg-1000 rounded-3 py-2"><a class="dropdown-item link-600 fw-medium" href="index.html">Default</a><a class="dropdown-item link-600 fw-medium" href="dashboard/analytics.html">Analytics</a><a class="dropdown-item link-600 fw-medium" href="dashboard/crm.html">CRM</a><a class="dropdown-item link-600 fw-medium" href="dashboard/e-commerce.html">E commerce</a><a class="dropdown-item link-600 fw-medium" href="dashboard/lms.html">LMS<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="dropdown-item link-600 fw-medium" href="dashboard/project-management.html">Management</a><a class="dropdown-item link-600 fw-medium" href="dashboard/saas.html">SaaS</a><a class="dropdown-item link-600 fw-medium" href="dashboard/support-desk.html">Support desk<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a></div>
                            </div>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="apps">App</a>
                            <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="apps">
                                <div class="card navbar-card-app shadow-none dark__bg-1000">
                                    <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="images/authentication-corner.png" width="130" alt="" />
                                        <div class="row">
                                            <div class="col-6 col-md-4">
                                                <div class="nav flex-column"><a class="nav-link py-1 link-600 fw-medium" href="app/calendar.html">Calendar</a><a class="nav-link py-1 link-600 fw-medium" href="app/chat.html">Chat</a><a class="nav-link py-1 link-600 fw-medium" href="app/kanban.html">Kanban</a>
                                                    <p class="nav-link text-700 mb-0 fw-bold">Social</p><a class="nav-link py-1 link-600 fw-medium" href="app/social/feed.html">Feed</a><a class="nav-link py-1 link-600 fw-medium" href="app/social/activity-log.html">Activity log</a><a class="nav-link py-1 link-600 fw-medium" href="app/social/notifications.html">Notifications</a><a class="nav-link py-1 link-600 fw-medium" href="app/social/followers.html">Followers</a>
                                                    <p class="nav-link text-700 mb-0 fw-bold">Support Desk</p><a class="nav-link py-1 link-600 fw-medium" href="app/support-desk/table-view.html">Table view</a><a class="nav-link py-1 link-600 fw-medium" href="app/support-desk/card-view.html">Card view</a><a class="nav-link py-1 link-600 fw-medium" href="app/support-desk/contacts.html">Contacts</a><a class="nav-link py-1 link-600 fw-medium" href="app/support-desk/contact-details.html">Contact details</a><a class="nav-link py-1 link-600 fw-medium" href="app/support-desk/tickets-preview.html">Tickets preview</a><a class="nav-link py-1 link-600 fw-medium" href="app/support-desk/quick-links.html">Quick links</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-4">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">E-Learning</p><a class="nav-link py-1 link-600 fw-medium" href="app/e-learning/course/course-list.html">Course list</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-learning/course/course-grid.html">Course grid</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-learning/course/course-details.html">Course details</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-learning/course/create-a-course.html">Create a course</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-learning/student-overview.html">Student overview</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-learning/trainer-profile.html">Trainer profile</a>
                                                    <p class="nav-link text-700 mb-0 fw-bold">Events</p><a class="nav-link py-1 link-600 fw-medium" href="app/events/create-an-event.html">Create an event</a><a class="nav-link py-1 link-600 fw-medium" href="app/events/event-detail.html">Event detail</a><a class="nav-link py-1 link-600 fw-medium" href="app/events/event-list.html">Event list</a>
                                                    <p class="nav-link text-700 mb-0 fw-bold">Email</p><a class="nav-link py-1 link-600 fw-medium" href="app/email/inbox.html">Inbox</a><a class="nav-link py-1 link-600 fw-medium" href="app/email/email-detail.html">Email detail</a><a class="nav-link py-1 link-600 fw-medium" href="app/email/compose.html">Compose</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-4">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">E-Commerce</p><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/product/product-list.html">Product list</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/product/product-grid.html">Product grid</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/product/product-details.html">Product details</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/product/add-product.html">Add product</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/orders/order-list.html">Order list</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/orders/order-details.html">Order details</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/customers.html">Customers</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/customer-details.html">Customer details</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/shopping-cart.html">Shopping cart</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/checkout.html">Checkout</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/billing.html">Billing</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/invoice.html">Invoice</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="pagess">Pages</a>
                            <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="pagess">
                                <div class="card navbar-card-pages shadow-none dark__bg-1000">
                                    <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="images/authentication-corner.png" width="130" alt="" />
                                        <div class="row">
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">Simple Auth</p><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/simple/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/simple/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/simple/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/simple/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/simple/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/simple/reset-password.html">Reset password</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/simple/lock-screen.html">Lock screen</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">Card Auth</p><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/card/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/card/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/card/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/card/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/card/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/card/reset-password.html">Reset password</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/card/lock-screen.html">Lock screen</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">Split Auth</p><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/split/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/split/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/split/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/split/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/split/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/split/reset-password.html">Reset password</a><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/split/lock-screen.html">Lock screen</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">Layouts</p><a class="nav-link py-1 link-600 fw-medium" href="demo/navbar-vertical.html">Navbar vertical</a><a class="nav-link py-1 link-600 fw-medium" href="demo/navbar-top.html">Top nav</a><a class="nav-link py-1 link-600 fw-medium" href="demo/navbar-double-top.html">Double top<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="demo/combo-nav.html">Combo nav</a>
                                                    <p class="nav-link text-700 mb-0 fw-bold">Others</p><a class="nav-link py-1 link-600 fw-medium" href="pages/starter.html">Starter</a><a class="nav-link py-1 link-600 fw-medium" href="pages/landing.html">Landing</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">User</p><a class="nav-link py-1 link-600 fw-medium" href="pages/user/profile.html">Profile</a><a class="nav-link py-1 link-600 fw-medium" href="pages/user/settings.html">Settings</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">Pricing</p><a class="nav-link py-1 link-600 fw-medium" href="pages/pricing/pricing-default.html">Pricing default</a><a class="nav-link py-1 link-600 fw-medium" href="pages/pricing/pricing-alt.html">Pricing alt</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">Errors</p><a class="nav-link py-1 link-600 fw-medium" href="pages/errors/404.html">404</a><a class="nav-link py-1 link-600 fw-medium" href="pages/errors/500.html">500</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">Miscellaneous</p><a class="nav-link py-1 link-600 fw-medium" href="pages/miscellaneous/associations.html">Associations</a><a class="nav-link py-1 link-600 fw-medium" href="pages/miscellaneous/invite-people.html">Invite people</a><a class="nav-link py-1 link-600 fw-medium" href="pages/miscellaneous/privacy-policy.html">Privacy policy</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">FAQ</p><a class="nav-link py-1 link-600 fw-medium" href="pages/faq/faq-basic.html">Faq basic</a><a class="nav-link py-1 link-600 fw-medium" href="pages/faq/faq-alt.html">Faq alt</a><a class="nav-link py-1 link-600 fw-medium" href="pages/faq/faq-accordion.html">Faq accordion</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">Other Auth</p><a class="nav-link py-1 link-600 fw-medium" href="pages/authentication/wizard.html">Wizard</a><a class="nav-link py-1 link-600 fw-medium" href="#authentication-modal" data-bs-toggle="modal">Modal</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="moduless">Modules</a>
                            <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="moduless">
                                <div class="card navbar-card-components shadow-none dark__bg-1000">
                                    <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="images/authentication-corner.png" width="130" alt="" />
                                        <div class="row">
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">Components</p><a class="nav-link py-1 link-600 fw-medium" href="modules/components/accordion.html">Accordion</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/alerts.html">Alerts</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/anchor.html">Anchor</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/animated-icons.html">Animated icons</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/background.html">Background</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/badges.html">Badges</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/bottom-bar.html">Bottom bar<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/breadcrumbs.html">Breadcrumbs</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/buttons.html">Buttons</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/calendar.html">Calendar</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/cards.html">Cards</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/carousel/bootstrap.html">Bootstrap carousel</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column mt-md-4 pt-md-1"><a class="nav-link py-1 link-600 fw-medium" href="modules/components/carousel/swiper.html">Swiper</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/collapse.html">Collapse</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/cookie-notice.html">Cookie notice</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/countup.html">Countup</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/draggable.html">Draggable</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/dropdowns.html">Dropdowns</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/jquery-components.html">Jquery<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/list-group.html">List group</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/modals.html">Modals</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/navs-and-tabs/navs.html">Navs</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/navs-and-tabs/navbar.html">Navbar</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/navs-and-tabs/vertical-navbar.html">Navbar vertical</a></div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column mt-xxl-4 pt-xxl-1"><a class="nav-link py-1 link-600 fw-medium" href="modules/components/navs-and-tabs/top-navbar.html">Top nav</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/navs-and-tabs/double-top-navbar.html">Double top<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/navs-and-tabs/combo-navbar.html">Combo nav</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/navs-and-tabs/tabs.html">Tabs</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/offcanvas.html">Offcanvas</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/pictures/avatar.html">Avatar</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/pictures/images.html">Images</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/pictures/figures.html">Figures</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/pictures/hoverbox.html">Hoverbox</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/pictures/lightbox.html">Lightbox</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/progress-bar.html">Progress bar</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/placeholder.html">Placeholder</a></div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column mt-xxl-4 pt-xxl-1"><a class="nav-link py-1 link-600 fw-medium" href="modules/components/pagination.html">Pagination</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/popovers.html">Popovers</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/scrollspy.html">Scrollspy</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/search.html">Search</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/spinners.html">Spinners</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/timeline.html">Timeline</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/toasts.html">Toasts</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/tooltips.html">Tooltips</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/treeview.html">Treeview</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/typed-text.html">Typed text</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/videos/embed.html">Embed</a><a class="nav-link py-1 link-600 fw-medium" href="modules/components/videos/plyr.html">Plyr</a></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">Utilities</p><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/background.html">Background</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/borders.html">Borders</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/clearfix.html">Clearfix</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/colors.html">Colors</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/colored-links.html">Colored links</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/display.html">Display</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/flex.html">Flex</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/float.html">Float</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/focus-ring.html">Focus ring</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/grid.html">Grid</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/icon-link.html">Icon link</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/overlayscrollbar.html">Overlay scrollbar</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/position.html">Position</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/ratio.html">Ratio</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/spacing.html">Spacing</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/sizing.html">Sizing</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/stretched-link.html">Stretched link</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/text-truncation.html">Text truncation</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/typography.html">Typography</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/vertical-align.html">Vertical align</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/vertical-rule.html">Vertical rule</a><a class="nav-link py-1 link-600 fw-medium" href="modules/utilities/visibility.html">Visibility</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">Tables</p><a class="nav-link py-1 link-600 fw-medium" href="modules/tables/basic-tables.html">Basic tables</a><a class="nav-link py-1 link-600 fw-medium" href="modules/tables/advance-tables.html">Advance tables</a><a class="nav-link py-1 link-600 fw-medium" href="modules/tables/bulk-select.html">Bulk select</a>
                                                    <p class="nav-link text-700 mb-0 fw-bold">Charts</p><a class="nav-link py-1 link-600 fw-medium" href="modules/charts/chartjs.html">Chartjs</a><a class="nav-link py-1 link-600 fw-medium" href="modules/charts/d3js.html">D3js<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a>
                                                    <p class="nav-link text-700 mb-0 fw-bold">ECharts</p><a class="nav-link py-1 link-600 fw-medium" href="modules/charts/echarts/line-charts.html">Line charts</a><a class="nav-link py-1 link-600 fw-medium" href="modules/charts/echarts/bar-charts.html">Bar charts</a><a class="nav-link py-1 link-600 fw-medium" href="modules/charts/echarts/candlestick-charts.html">Candlestick charts</a><a class="nav-link py-1 link-600 fw-medium" href="modules/charts/echarts/geo-map.html">Geo map</a><a class="nav-link py-1 link-600 fw-medium" href="modules/charts/echarts/scatter-charts.html">Scatter charts</a><a class="nav-link py-1 link-600 fw-medium" href="modules/charts/echarts/pie-charts.html">Pie charts</a><a class="nav-link py-1 link-600 fw-medium" href="modules/charts/echarts/gauge-charts.html">Gauge charts</a><a class="nav-link py-1 link-600 fw-medium" href="modules/charts/echarts/radar-charts.html">Radar charts</a><a class="nav-link py-1 link-600 fw-medium" href="modules/charts/echarts/heatmap-charts.html">Heatmap charts</a><a class="nav-link py-1 link-600 fw-medium" href="modules/charts/echarts/how-to-use.html">How to use</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">Forms</p><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/basic/form-control.html">Form control</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/basic/input-group.html">Input group</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/basic/select.html">Select</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/basic/checks.html">Checks</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/basic/range.html">Range</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/basic/layout.html">Layout</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/advance/advance-select.html">Advance select</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/advance/date-picker.html">Date picker</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/advance/editor.html">Editor</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/advance/emoji-button.html">Emoji button</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/advance/file-uploader.html">File uploader</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/advance/input-mask.html">Input mask</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/advance/range-slider.html">Range slider</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/advance/rating.html">Rating</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/floating-labels.html">Floating labels</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/wizard.html">Wizard</a><a class="nav-link py-1 link-600 fw-medium" href="modules/forms/validation.html">Validation</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column pt-xxl-1">
                                                    <p class="nav-link text-700 mb-0 fw-bold">Icons</p><a class="nav-link py-1 link-600 fw-medium" href="modules/icons/font-awesome.html">Font awesome</a><a class="nav-link py-1 link-600 fw-medium" href="modules/icons/bootstrap-icons.html">Bootstrap icons</a><a class="nav-link py-1 link-600 fw-medium" href="modules/icons/feather.html">Feather</a><a class="nav-link py-1 link-600 fw-medium" href="modules/icons/material-icons.html">Material icons</a>
                                                    <p class="nav-link text-700 mb-0 fw-bold">Maps</p><a class="nav-link py-1 link-600 fw-medium" href="modules/maps/google-map.html">Google map</a><a class="nav-link py-1 link-600 fw-medium" href="modules/maps/leaflet-map.html">Leaflet map</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="documentations">Documentation</a>
                            <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="documentations">
                                <div class="bg-white dark__bg-1000 rounded-3 py-2"><a class="dropdown-item link-600 fw-medium" href="documentation/getting-started.html">Getting started</a><a class="dropdown-item link-600 fw-medium" href="documentation/customization/configuration.html">Configuration</a><a class="dropdown-item link-600 fw-medium" href="documentation/customization/styling.html">Styling<span class="badge rounded-pill ms-2 badge-subtle-success">Updated</span></a><a class="dropdown-item link-600 fw-medium" href="documentation/customization/dark-mode.html">Dark mode</a><a class="dropdown-item link-600 fw-medium" href="documentation/customization/plugin.html">Plugin</a><a class="dropdown-item link-600 fw-medium" href="documentation/faq.html">Faq</a><a class="dropdown-item link-600 fw-medium" href="documentation/gulp.html">Gulp</a><a class="dropdown-item link-600 fw-medium" href="documentation/design-file.html">Design file</a><a class="dropdown-item link-600 fw-medium" href="changelog.html">Changelog</a></div>
                            </div>
                        </li>
                    </ul>
                </div>
                <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
                    <li class="nav-item ps-2 pe-0">
                        <div class="dropdown theme-control-dropdown"><a class="nav-link d-flex align-items-center dropdown-toggle fa-icon-wait fs-9 pe-1 py-0" href="#" role="button" id="themeSwitchDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-sun fs-7" data-fa-transform="shrink-2" data-theme-dropdown-toggle-icon="light"></span><span class="fas fa-moon fs-7" data-fa-transform="shrink-3" data-theme-dropdown-toggle-icon="dark"></span><span class="fas fa-adjust fs-7" data-fa-transform="shrink-2" data-theme-dropdown-toggle-icon="auto"></span></a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-caret border py-0 mt-3" aria-labelledby="themeSwitchDropdown">
                                <div class="bg-white dark__bg-1000 rounded-2 py-2"><button class="dropdown-item d-flex align-items-center gap-2" type="button" value="light" data-theme-control="theme"><span class="fas fa-sun"></span>Light<span class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button><button class="dropdown-item d-flex align-items-center gap-2" type="button" value="dark" data-theme-control="theme"><span class="fas fa-moon" data-fa-transform=""></span>Dark<span class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button><button class="dropdown-item d-flex align-items-center gap-2" type="button" value="auto" data-theme-control="theme"><span class="fas fa-adjust" data-fa-transform=""></span>Auto<span class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button></div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item d-none d-sm-block">
                        <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait" href="app/e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart" data-fa-transform="shrink-7" style="font-size: 33px;"></span><span class="notification-indicator-number">1</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait" id="navbarDropdownNotification" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-hide-on-body-scroll="data-hide-on-body-scroll"><span class="fas fa-bell" data-fa-transform="shrink-6" style="font-size: 33px;"></span></a>
                        <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-menu-notification dropdown-caret-bg" aria-labelledby="navbarDropdownNotification">
                            <div class="card card-notification shadow-none">
                                <div class="card-header">
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-auto">
                                            <h6 class="card-header-title mb-0">Notifications</h6>
                                        </div>
                                        <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal" href="#">Mark all as read</a></div>
                                    </div>
                                </div>
                                <div class="scrollbar-overlay" style="max-height:19rem">
                                    <div class="list-group list-group-flush fw-normal fs-10">
                                        <div class="list-group-title border-bottom">NEW</div>
                                        <div class="list-group-item">
                                            <a class="notification notification-flush notification-unread" href="#!">
                                                <div class="notification-avatar">
                                                    <div class="avatar avatar-2xl me-3">
                                                        <img class="rounded-circle" src="images/1-thumb.png" alt="" />
                                                    </div>
                                                </div>
                                                <div class="notification-body">
                                                    <p class="mb-1"><strong>Emma Watson</strong> replied to your comment : "Hello world ????"</p>
                                                    <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">????</span>Just now</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="list-group-item">
                                            <a class="notification notification-flush notification-unread" href="#!">
                                                <div class="notification-avatar">
                                                    <div class="avatar avatar-2xl me-3">
                                                        <div class="avatar-name rounded-circle"><span>AB</span></div>
                                                    </div>
                                                </div>
                                                <div class="notification-body">
                                                    <p class="mb-1"><strong>Albert Brooks</strong> reacted to <strong>Mia Khalifa's</strong> status</p>
                                                    <span class="notification-time"><span class="me-2 fab fa-gratipay text-danger"></span>9hr</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="list-group-title border-bottom">EARLIER</div>
                                        <div class="list-group-item">
                                            <a class="notification notification-flush" href="#!">
                                                <div class="notification-avatar">
                                                    <div class="avatar avatar-2xl me-3">
                                                        <img class="rounded-circle" src="images/weather-sm.jpg" alt="" />
                                                    </div>
                                                </div>
                                                <div class="notification-body">
                                                    <p class="mb-1">The forecast today shows a low of 20&#8451; in California. See today's weather.</p>
                                                    <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">????️</span>1d</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="list-group-item">
                                            <a class="border-bottom-0 notification-unread  notification notification-flush" href="#!">
                                                <div class="notification-avatar">
                                                    <div class="avatar avatar-xl me-3">
                                                        <img class="rounded-circle" src="images/oxford.png" alt="" />
                                                    </div>
                                                </div>
                                                <div class="notification-body">
                                                    <p class="mb-1"><strong>University of Oxford</strong> created an event : "Causal Inference Hilary 2019"</p>
                                                    <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">✌️</span>1w</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="list-group-item">
                                            <a class="border-bottom-0 notification notification-flush" href="#!">
                                                <div class="notification-avatar">
                                                    <div class="avatar avatar-xl me-3">
                                                        <img class="rounded-circle" src="images/10.jpg" alt="" />
                                                    </div>
                                                </div>
                                                <div class="notification-body">
                                                    <p class="mb-1"><strong>James Cameron</strong> invited to join the group: United Nations International Children's Fund</p>
                                                    <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">????‍</span>2d</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-center border-top"><a class="card-link d-block" href="app/social/notifications.html">View all</a></div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown px-1">
                        <a class="nav-link fa-icon-wait nine-dots p-1" id="navbarDropdownMenu" role="button" data-hide-on-body-scroll="data-hide-on-body-scroll" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="43" viewBox="0 0 16 16" fill="none">
                                <circle cx="2" cy="2" r="2" fill="#6C6E71"></circle>
                                <circle cx="2" cy="8" r="2" fill="#6C6E71"></circle>
                                <circle cx="2" cy="14" r="2" fill="#6C6E71"></circle>
                                <circle cx="8" cy="8" r="2" fill="#6C6E71"></circle>
                                <circle cx="8" cy="14" r="2" fill="#6C6E71"></circle>
                                <circle cx="14" cy="8" r="2" fill="#6C6E71"></circle>
                                <circle cx="14" cy="14" r="2" fill="#6C6E71"></circle>
                                <circle cx="8" cy="2" r="2" fill="#6C6E71"></circle>
                                <circle cx="14" cy="2" r="2" fill="#6C6E71"></circle>
                            </svg></a>
                        <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-caret-bg" aria-labelledby="navbarDropdownMenu">
                            <div class="card shadow-none">
                                <div class="scrollbar-overlay nine-dots-dropdown">
                                    <div class="card-body px-3">
                                        <div class="row text-center gx-0 gy-0">
                                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="pages/user/profile.html" target="_blank">
                                                    <div class="avatar avatar-2xl"> <img class="rounded-circle" src="images/3.jpg" alt="" /></div>
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs-11">Account</p>
                                                </a></div>

                                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/google.png" alt="" width="40" height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Google</p>
                                                </a></div>
                                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/spotify.png" alt="" width="40" height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Spotify</p>
                                                </a></div>
                                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/steam.png" alt="" width="40" height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Steam</p>
                                                </a></div>
                                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/github-light.png" alt="" width="40" height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Github</p>
                                                </a></div>
                                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/discord.png" alt="" width="40" height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Discord</p>
                                                </a></div>
                                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/xbox.png" alt="" width="40" height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">xbox</p>
                                                </a></div>
                                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/trello.png" alt="" width="40" height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Kanban</p>
                                                </a></div>
                                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/hp.png" alt="" width="40" height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Hp</p>
                                                </a></div>
                                            <div class="col-12">
                                                <hr class="my-3 mx-n3 bg-200" />
                                            </div>
                                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/linkedin.png" alt="" width="40" height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Linkedin</p>
                                                </a></div>
                                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/twitter.png" alt="" width="40" height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Twitter</p>
                                                </a></div>
                                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/facebook.png" alt="" width="40" height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Facebook</p>
                                                </a></div>
                                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/instagram.png" alt="" width="40" height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Instagram</p>
                                                </a></div>
                                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/pinterest.png" alt="" width="40" height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Pinterest</p>
                                                </a></div>
                                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/slack.png" alt="" width="40" height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Slack</p>
                                                </a></div>
                                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="images/deviantart.png" alt="" width="40" height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Deviantart</p>
                                                </a></div>
                                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="app/events/event-detail.html" target="_blank">
                                                    <div class="avatar avatar-2xl">
                                                        <div class="avatar-name rounded-circle bg-primary-subtle text-primary"><span class="fs-7">E</span></div>
                                                    </div>
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs-11">Events</p>
                                                </a></div>
                                            <div class="col-12"><a class="btn btn-outline-primary btn-sm mt-4" href="#!">Show more</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="avatar avatar-xl">
                                <img class="rounded-circle" src="images/3-thumb.png" alt="" />
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                            <div class="bg-white dark__bg-1000 rounded-2 py-2">
                                <a class="dropdown-item fw-bold text-warning" href="#!"><span class="fas fa-crown me-1"></span><span>Go Pro</span></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#!">Set status</a>
                                <a class="dropdown-item" href="pages/user/profile.html">Profile &amp; account</a>
                                <a class="dropdown-item" href="#!">Feedback</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="pages/user/settings.html">Settings</a>
                                <a class="dropdown-item" href="pages/authentication/card/logout.html">Logout</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
            <script>
                var navbarPosition = localStorage.getItem('navbarPosition');
                var navbarVertical = document.querySelector('.navbar-vertical');
                var navbarTopVertical = document.querySelector('.content .navbar-top');
                var navbarTop = document.querySelector('[data-layout] .navbar-top:not([data-double-top-nav');
                var navbarDoubleTop = document.querySelector('[data-double-top-nav]');
                var navbarTopCombo = document.querySelector('.content [data-navbar-top="combo"]');

                if (localStorage.getItem('navbarPosition') === 'double-top') {
                    document.documentElement.classList.toggle('double-top-nav-layout');
                }

                if (navbarPosition === 'top') {
                    navbarTop.removeAttribute('style');
                    navbarTopVertical.remove(navbarTopVertical);
                    navbarVertical.remove(navbarVertical);
                    navbarTopCombo.remove(navbarTopCombo);
                    navbarDoubleTop.remove(navbarDoubleTop);
                } else if (navbarPosition === 'combo') {
                    navbarVertical.removeAttribute('style');
                    navbarTopCombo.removeAttribute('style');
                    navbarTop.remove(navbarTop);
                    navbarTopVertical.remove(navbarTopVertical);
                    navbarDoubleTop.remove(navbarDoubleTop);
                } else if (navbarPosition === 'double-top') {
                    navbarDoubleTop.removeAttribute('style');
                    navbarTopVertical.remove(navbarTopVertical);
                    navbarVertical.remove(navbarVertical);
                    navbarTop.remove(navbarTop);
                    navbarTopCombo.remove(navbarTopCombo);
                } else {
                    navbarVertical.removeAttribute('style');
                    navbarTopVertical.removeAttribute('style');
                    navbarTop.remove(navbarTop);
                    navbarDoubleTop.remove(navbarDoubleTop);
                    navbarTopCombo.remove(navbarTopCombo);
                }
            </script>
            <div class="row g-3 mb-3">
                <div class="col-md-6 col-xxl-3">
                    <div class="card h-md-100 ecommerce-card-min-width">
                        <div class="card-header pb-0">
                            <h6 class="mb-0 mt-2 d-flex align-items-center">Weekly Sales<span class="ms-1 text-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Calculated according to last week's sales"><span class="far fa-question-circle" data-fa-transform="shrink-1"></span></span></h6>
                        </div>
                        <div class="card-body d-flex flex-column justify-content-end">
                            <div class="row">
                                <div class="col">
                                    <p class="font-sans-serif lh-1 mb-1 fs-5">$47K</p><span class="badge badge-subtle-success rounded-pill fs-11">+3.5%</span>
                                </div>
                                <div class="col-auto ps-0">
                                    <div class="echart-bar-weekly-sales h-100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-3">
                    <div class="card h-md-100">
                        <div class="card-header pb-0">
                            <h6 class="mb-0 mt-2">Total Order</h6>
                        </div>
                        <div class="card-body d-flex flex-column justify-content-end">
                            <div class="row justify-content-between">
                                <div class="col-auto align-self-end">
                                    <div class="fs-5 fw-normal font-sans-serif text-700 lh-1 mb-1">58.4K</div><span class="badge rounded-pill fs-11 bg-200 text-primary"><span class="fas fa-caret-up me-1"></span>13.6%</span>
                                </div>
                                <div class="col-auto ps-0 mt-n4">
                                    <div class="echart-default-total-order" data-echarts='{"tooltip":{"trigger":"axis","formatter":"{b0} : {c0}"},"xAxis":{"data":["Week 4","Week 5","Week 6","Week 7"]},"series":[{"type":"line","data":[20,40,100,120],"smooth":true,"lineStyle":{"width":3}}],"grid":{"bottom":"2%","top":"2%","right":"10px","left":"10px"}}' data-echart-responsive="true"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-3">
                    <div class="card h-md-100">
                        <div class="card-body">
                            <div class="row h-100 justify-content-between g-0">
                                <div class="col-5 col-sm-6 col-xxl pe-2">
                                    <h6 class="mt-1">Market Share</h6>
                                    <div class="fs-11 mt-3">
                                        <div class="d-flex flex-between-center mb-1">
                                            <div class="d-flex align-items-center"><span class="dot bg-primary"></span><span class="fw-semi-bold">Samsung</span></div>
                                            <div class="d-xxl-none">33%</div>
                                        </div>
                                        <div class="d-flex flex-between-center mb-1">
                                            <div class="d-flex align-items-center"><span class="dot bg-info"></span><span class="fw-semi-bold">Huawei</span></div>
                                            <div class="d-xxl-none">29%</div>
                                        </div>
                                        <div class="d-flex flex-between-center mb-1">
                                            <div class="d-flex align-items-center"><span class="dot bg-300"></span><span class="fw-semi-bold">Apple</span></div>
                                            <div class="d-xxl-none">20%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto position-relative">
                                    <div class="echart-market-share"></div>
                                    <div class="position-absolute top-50 start-50 translate-middle text-1100 fs-7">26M</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-3">
                    <div class="card h-md-100">
                        <div class="card-header d-flex flex-between-center pb-0">
                            <h6 class="mb-0">Weather</h6>
                            <div class="dropdown font-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="dropdown-weather-update" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs-11"></span></button>
                                <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-weather-update"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-2">
                            <div class="row g-0 h-100 align-items-center">
                                <div class="col">
                                    <div class="d-flex align-items-center"><img class="me-3" src="images/weather-icon.png" alt="" height="60" />
                                        <div>
                                            <h6 class="mb-2">New York City</h6>
                                            <div class="fs-11 fw-semi-bold">
                                                <div class="text-warning">Sunny</div>Precipitation: 50%
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto text-center ps-2">
                                    <div class="fs-5 fw-normal font-sans-serif text-primary mb-1 lh-1">31&deg;</div>
                                    <div class="fs-10 text-800">32&deg; / 25&deg;</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-lg-6 pe-lg-2 mb-3">
                    <div class="card h-lg-100 overflow-hidden">
                        <div class="card-header bg-body-tertiary">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h6 class="mb-0">Running Projects</h6>
                                </div>
                                <div class="col-auto text-center pe-x1"><select class="form-select form-select-sm">
                                        <option>Working Time</option>
                                        <option>Estimated Time</option>
                                        <option>Billable Time</option>
                                    </select></div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="row g-0 align-items-center py-2 position-relative border-bottom border-200">
                                <div class="col ps-x1 py-1 position-static">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-xl me-3">
                                            <div class="avatar-name rounded-circle bg-primary-subtle text-dark"><span class="fs-9 text-primary">F</span></div>
                                        </div>
                                        <div class="flex-1">
                                            <h6 class="mb-0 d-flex align-items-center"><a class="text-800 stretched-link" href="#!">Falcon</a><span class="badge rounded-pill ms-2 bg-200 text-primary">38%</span></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col py-1">
                                    <div class="row flex-end-center g-0">
                                        <div class="col-auto pe-2">
                                            <div class="fs-10 fw-semi-bold">12:50:00</div>
                                        </div>
                                        <div class="col-5 pe-x1 ps-2">
                                            <div class="progress bg-200 me-2" style="height: 5px;" role="progressbar" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar rounded-pill" style="width: 38%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 align-items-center py-2 position-relative border-bottom border-200">
                                <div class="col ps-x1 py-1 position-static">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-xl me-3">
                                            <div class="avatar-name rounded-circle bg-success-subtle text-dark"><span class="fs-9 text-success">R</span></div>
                                        </div>
                                        <div class="flex-1">
                                            <h6 class="mb-0 d-flex align-items-center"><a class="text-800 stretched-link" href="#!">Reign</a><span class="badge rounded-pill ms-2 bg-200 text-primary">79%</span></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col py-1">
                                    <div class="row flex-end-center g-0">
                                        <div class="col-auto pe-2">
                                            <div class="fs-10 fw-semi-bold">25:20:00</div>
                                        </div>
                                        <div class="col-5 pe-x1 ps-2">
                                            <div class="progress bg-200 me-2" style="height: 5px;" role="progressbar" aria-valuenow="79" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar rounded-pill" style="width: 79%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 align-items-center py-2 position-relative border-bottom border-200">
                                <div class="col ps-x1 py-1 position-static">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-xl me-3">
                                            <div class="avatar-name rounded-circle bg-info-subtle text-dark"><span class="fs-9 text-info">B</span></div>
                                        </div>
                                        <div class="flex-1">
                                            <h6 class="mb-0 d-flex align-items-center"><a class="text-800 stretched-link" href="#!">Boots4</a><span class="badge rounded-pill ms-2 bg-200 text-primary">90%</span></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col py-1">
                                    <div class="row flex-end-center g-0">
                                        <div class="col-auto pe-2">
                                            <div class="fs-10 fw-semi-bold">58:20:00</div>
                                        </div>
                                        <div class="col-5 pe-x1 ps-2">
                                            <div class="progress bg-200 me-2" style="height: 5px;" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar rounded-pill" style="width: 90%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 align-items-center py-2 position-relative border-bottom border-200">
                                <div class="col ps-x1 py-1 position-static">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-xl me-3">
                                            <div class="avatar-name rounded-circle bg-warning-subtle text-dark"><span class="fs-9 text-warning">R</span></div>
                                        </div>
                                        <div class="flex-1">
                                            <h6 class="mb-0 d-flex align-items-center"><a class="text-800 stretched-link" href="#!">Raven</a><span class="badge rounded-pill ms-2 bg-200 text-primary">40%</span></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col py-1">
                                    <div class="row flex-end-center g-0">
                                        <div class="col-auto pe-2">
                                            <div class="fs-10 fw-semi-bold">21:20:00</div>
                                        </div>
                                        <div class="col-5 pe-x1 ps-2">
                                            <div class="progress bg-200 me-2" style="height: 5px;" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar rounded-pill" style="width: 40%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 align-items-center py-2 position-relative">
                                <div class="col ps-x1 py-1 position-static">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-xl me-3">
                                            <div class="avatar-name rounded-circle bg-danger-subtle text-dark"><span class="fs-9 text-danger">S</span></div>
                                        </div>
                                        <div class="flex-1">
                                            <h6 class="mb-0 d-flex align-items-center"><a class="text-800 stretched-link" href="#!">Slick</a><span class="badge rounded-pill ms-2 bg-200 text-primary">70%</span></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col py-1">
                                    <div class="row flex-end-center g-0">
                                        <div class="col-auto pe-2">
                                            <div class="fs-10 fw-semi-bold">31:20:00</div>
                                        </div>
                                        <div class="col-5 pe-x1 ps-2">
                                            <div class="progress bg-200 me-2" style="height: 5px;" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar rounded-pill" style="width: 70%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-body-tertiary p-0"><a class="btn btn-sm btn-link d-block w-100 py-2" href="#!">Show all projects<span class="fas fa-chevron-right ms-1 fs-11"></span></a></div>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-2 mb-3">
                    <div class="card h-lg-100">
                        <div class="card-header">
                            <div class="row flex-between-center">
                                <div class="col-auto">
                                    <h6 class="mb-0">Total Sales</h6>
                                </div>
                                <div class="col-auto d-flex"><select class="form-select form-select-sm select-month me-2">
                                        <option value="0">January</option>
                                        <option value="1">February</option>
                                        <option value="2">March</option>
                                        <option value="3">April</option>
                                        <option value="4">May</option>
                                        <option value="5">Jun</option>
                                        <option value="6">July</option>
                                        <option value="7">August</option>
                                        <option value="8">September</option>
                                        <option value="9">October</option>
                                        <option value="10">November</option>
                                        <option value="11">December</option>
                                    </select>
                                    <div class="dropdown font-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="dropdown-total-sales" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs-11"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-total-sales"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body h-100 pe-0"><!-- Find the JS file for the following chart at: src\js\charts\echarts\total-sales.js--><!-- If you are not using gulp based workflow, you can find the transpiled code at: public\assets\js\theme.js-->
                            <div class="echart-line-total-sales h-100" data-echart-responsive="true"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-lg-6 col-xl-7 col-xxl-8 mb-3 pe-lg-2 mb-3">
                    <div class="card h-lg-100">
                        <div class="card-body d-flex align-items-center">
                            <div class="w-100">
                                <h6 class="mb-3 text-800">Using Storage <strong class="text-1100">1775.06 MB </strong>of 2 GB</h6>
                                <div class="progress-stacked mb-3 rounded-3" style="height: 10px;">
                                    <div class="progress" style="width: 43.72%;" role="progressbar" aria-valuenow="43.72" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-progress-gradient border-end border-100 border-2"></div>
                                    </div>
                                    <div class="progress" style="width: 18.76%;" role="progressbar" aria-valuenow="18.76" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-info border-end border-100 border-2"></div>
                                    </div>
                                    <div class="progress" style="width: 9.38%;" role="progressbar" aria-valuenow="9.38" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-success border-end border-100 border-2"></div>
                                    </div>
                                    <div class="progress" style="width: 28.14%;" role="progressbar" aria-valuenow="28.14" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-200"></div>
                                    </div>
                                </div>
                                <div class="row fs-10 fw-semi-bold text-500 g-0">
                                    <div class="col-auto d-flex align-items-center pe-3"><span class="dot bg-primary"></span><span>Regular</span><span class="d-none d-md-inline-block d-lg-none d-xxl-inline-block">(895MB)</span></div>
                                    <div class="col-auto d-flex align-items-center pe-3"><span class="dot bg-info"></span><span>System</span><span class="d-none d-md-inline-block d-lg-none d-xxl-inline-block">(379MB)</span></div>
                                    <div class="col-auto d-flex align-items-center pe-3"><span class="dot bg-success"></span><span>Shared</span><span class="d-none d-md-inline-block d-lg-none d-xxl-inline-block">(192MB)</span></div>
                                    <div class="col-auto d-flex align-items-center"><span class="dot bg-200"></span><span>Free</span><span class="d-none d-md-inline-block d-lg-none d-xxl-inline-block">(576MB)</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-5 col-xxl-4 mb-3 ps-lg-2">
                    <div class="card h-lg-100">
                        <div class="bg-holder bg-card" style="background-image:url(images/corner-1.png);"></div><!--/.bg-holder-->
                        <div class="card-body position-relative">
                            <h5 class="text-warning">Running out of your space?</h5>
                            <p class="fs-10 mb-0">Your storage will be running out soon. Get more space and powerful productivity features.</p><a class="btn btn-link fs-10 text-warning mt-lg-3 ps-0" href="#!">Upgrade storage<span class="fas fa-chevron-right ms-1" data-fa-transform="shrink-4 down-1"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-lg-7 col-xl-8 pe-lg-2 mb-3">
                    <div class="card h-lg-100 overflow-hidden">
                        <div class="card-body p-0">
                            <div class="table-responsive scrollbar">
                                <table class="table table-dashboard mb-0 table-borderless fs-10 border-200">
                                    <thead class="bg-body-tertiary">
                                    <tr>
                                        <th class="text-900">Best Selling Products</th>
                                        <th class="text-900 text-end">Revenue ($3333)</th>
                                        <th class="text-900 pe-x1 text-end" style="width: 8rem">Revenue (%)</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="border-bottom border-200">
                                        <td>
                                            <div class="d-flex align-items-center position-relative"><img class="rounded-1 border border-200" src="images/12.png" width="60" alt="" />
                                                <div class="flex-1 ms-3">
                                                    <h6 class="mb-1 fw-semi-bold"><a class="text-1100 stretched-link" href="#!">Raven Pro</a></h6>
                                                    <p class="fw-semi-bold mb-0 text-500">Landing</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle text-end fw-semi-bold">$1311</td>
                                        <td class="align-middle pe-x1">
                                            <div class="d-flex align-items-center">
                                                <div class="progress me-3 rounded-3 bg-200" style="height: 5px; width:80px;" role="progressbar" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar rounded-pill" style="width: 39%;"></div>
                                                </div>
                                                <div class="fw-semi-bold ms-2">39%</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="border-bottom border-200">
                                        <td>
                                            <div class="d-flex align-items-center position-relative"><img class="rounded-1 border border-200" src="images/10.png" width="60" alt="" />
                                                <div class="flex-1 ms-3">
                                                    <h6 class="mb-1 fw-semi-bold"><a class="text-1100 stretched-link" href="#!">Boots4</a></h6>
                                                    <p class="fw-semi-bold mb-0 text-500">Portfolio</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle text-end fw-semi-bold">$860</td>
                                        <td class="align-middle pe-x1">
                                            <div class="d-flex align-items-center">
                                                <div class="progress me-3 rounded-3 bg-200" style="height: 5px; width:80px;" role="progressbar" aria-valuenow="26" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar rounded-pill" style="width: 26%;"></div>
                                                </div>
                                                <div class="fw-semi-bold ms-2">26%</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="border-bottom border-200">
                                        <td>
                                            <div class="d-flex align-items-center position-relative"><img class="rounded-1 border border-200" src="images/11.png" width="60" alt="" />
                                                <div class="flex-1 ms-3">
                                                    <h6 class="mb-1 fw-semi-bold"><a class="text-1100 stretched-link" href="#!">Falcon</a></h6>
                                                    <p class="fw-semi-bold mb-0 text-500">Admin</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle text-end fw-semi-bold">$539</td>
                                        <td class="align-middle pe-x1">
                                            <div class="d-flex align-items-center">
                                                <div class="progress me-3 rounded-3 bg-200" style="height: 5px; width:80px;" role="progressbar" aria-valuenow="16" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar rounded-pill" style="width: 16%;"></div>
                                                </div>
                                                <div class="fw-semi-bold ms-2">16%</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="border-bottom border-200">
                                        <td>
                                            <div class="d-flex align-items-center position-relative"><img class="rounded-1 border border-200" src="images/14.png" width="60" alt="" />
                                                <div class="flex-1 ms-3">
                                                    <h6 class="mb-1 fw-semi-bold"><a class="text-1100 stretched-link" href="#!">Slick</a></h6>
                                                    <p class="fw-semi-bold mb-0 text-500">Builder</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle text-end fw-semi-bold">$343</td>
                                        <td class="align-middle pe-x1">
                                            <div class="d-flex align-items-center">
                                                <div class="progress me-3 rounded-3 bg-200" style="height: 5px; width:80px;" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar rounded-pill" style="width: 10%;"></div>
                                                </div>
                                                <div class="fw-semi-bold ms-2">10%</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center position-relative"><img class="rounded-1 border border-200" src="images/13.png" width="60" alt="" />
                                                <div class="flex-1 ms-3">
                                                    <h6 class="mb-1 fw-semi-bold"><a class="text-1100 stretched-link" href="#!">Reign Pro</a></h6>
                                                    <p class="fw-semi-bold mb-0 text-500">Agency</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle text-end fw-semi-bold">$280</td>
                                        <td class="align-middle pe-x1">
                                            <div class="d-flex align-items-center">
                                                <div class="progress me-3 rounded-3 bg-200" style="height: 5px; width:80px;" role="progressbar" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar rounded-pill" style="width: 8%;"></div>
                                                </div>
                                                <div class="fw-semi-bold ms-2">8%</div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer bg-body-tertiary py-2">
                            <div class="row flex-between-center">
                                <div class="col-auto"><select class="form-select form-select-sm">
                                        <option>Last 7 days</option>
                                        <option>Last Month</option>
                                        <option>Last Year</option>
                                    </select></div>
                                <div class="col-auto"><a class="btn btn-sm btn-falcon-default" href="#!">View All</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-4 ps-lg-2 mb-3">
                    <div class="card h-100">
                        <div class="card-header d-flex flex-between-center bg-body-tertiary py-2">
                            <h6 class="mb-0">Shared Files</h6><a class="py-1 fs-10 font-sans-serif" href="#!">View All</a>
                        </div>
                        <div class="card-body pb-0">
                            <div class="d-flex mb-3 hover-actions-trigger align-items-center">
                                <div class="file-thumbnail"><img class="border h-100 w-100 object-fit-cover rounded-2" src="images/5-thumb.png" alt="" /></div>
                                <div class="ms-3 flex-shrink-1 flex-grow-1">
                                    <h6 class="mb-1"><a class="stretched-link text-900 fw-semi-bold" href="#!">apple-smart-watch.png</a></h6>
                                    <div class="fs-10"><span class="fw-semi-bold">Antony</span><span class="fw-medium text-600 ms-2">Just Now</span></div>
                                    <div class="hover-actions end-0 top-50 translate-middle-y"><a class="btn btn-tertiary border-300 btn-sm me-1 text-600" data-bs-toggle="tooltip" data-bs-placement="top" title="Download" href="images/cloud-download.svg" download="download"><img src="images/cloud-download.svg" alt="" width="15" /></a><button class="btn btn-tertiary border-300 btn-sm me-1 text-600 shadow-none" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><img src="images/edit-alt.svg" alt="" width="15" /></button></div>
                                </div>
                            </div>
                            <hr class="text-200" />
                            <div class="d-flex mb-3 hover-actions-trigger align-items-center">
                                <div class="file-thumbnail"><img class="border h-100 w-100 object-fit-cover rounded-2" src="images/3-thumb.png" alt="" /></div>
                                <div class="ms-3 flex-shrink-1 flex-grow-1">
                                    <h6 class="mb-1"><a class="stretched-link text-900 fw-semi-bold" href="#!">iphone.jpg</a></h6>
                                    <div class="fs-10"><span class="fw-semi-bold">Antony</span><span class="fw-medium text-600 ms-2">Yesterday at 1:30 PM</span></div>
                                    <div class="hover-actions end-0 top-50 translate-middle-y"><a class="btn btn-tertiary border-300 btn-sm me-1 text-600" data-bs-toggle="tooltip" data-bs-placement="top" title="Download" href="images/cloud-download.svg" download="download"><img src="images/cloud-download.svg" alt="" width="15" /></a><button class="btn btn-tertiary border-300 btn-sm me-1 text-600 shadow-none" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><img src="images/edit-alt.svg" alt="" width="15" /></button></div>
                                </div>
                            </div>
                            <hr class="text-200" />
                            <div class="d-flex mb-3 hover-actions-trigger align-items-center">
                                <div class="file-thumbnail"><img class="img-fluid" src="images/zip.png" alt="" /></div>
                                <div class="ms-3 flex-shrink-1 flex-grow-1">
                                    <h6 class="mb-1"><a class="stretched-link text-900 fw-semi-bold" href="#!">Falcon v1.8.2</a></h6>
                                    <div class="fs-10"><span class="fw-semi-bold">Jane</span><span class="fw-medium text-600 ms-2">27 Sep at 10:30 AM</span></div>
                                    <div class="hover-actions end-0 top-50 translate-middle-y"><a class="btn btn-tertiary border-300 btn-sm me-1 text-600" data-bs-toggle="tooltip" data-bs-placement="top" title="Download" href="images/cloud-download.svg" download="download"><img src="images/cloud-download.svg" alt="" width="15" /></a><button class="btn btn-tertiary border-300 btn-sm me-1 text-600 shadow-none" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><img src="images/edit-alt.svg" alt="" width="15" /></button></div>
                                </div>
                            </div>
                            <hr class="text-200" />
                            <div class="d-flex mb-3 hover-actions-trigger align-items-center">
                                <div class="file-thumbnail"><img class="border h-100 w-100 object-fit-cover rounded-2" src="images/2-thumb.png" alt="" /></div>
                                <div class="ms-3 flex-shrink-1 flex-grow-1">
                                    <h6 class="mb-1"><a class="stretched-link text-900 fw-semi-bold" href="#!">iMac.jpg</a></h6>
                                    <div class="fs-10"><span class="fw-semi-bold">Rowen</span><span class="fw-medium text-600 ms-2">23 Sep at 6:10 PM</span></div>
                                    <div class="hover-actions end-0 top-50 translate-middle-y"><a class="btn btn-tertiary border-300 btn-sm me-1 text-600" data-bs-toggle="tooltip" data-bs-placement="top" title="Download" href="images/cloud-download.svg" download="download"><img src="images/cloud-download.svg" alt="" width="15" /></a><button class="btn btn-tertiary border-300 btn-sm me-1 text-600 shadow-none" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><img src="images/edit-alt.svg" alt="" width="15" /></button></div>
                                </div>
                            </div>
                            <hr class="text-200" />
                            <div class="d-flex mb-3 hover-actions-trigger align-items-center">
                                <div class="file-thumbnail"><img class="img-fluid" src="images/docs.png" alt="" /></div>
                                <div class="ms-3 flex-shrink-1 flex-grow-1">
                                    <h6 class="mb-1"><a class="stretched-link text-900 fw-semi-bold" href="#!">functions.php</a></h6>
                                    <div class="fs-10"><span class="fw-semi-bold">John</span><span class="fw-medium text-600 ms-2">1 Oct at 4:30 PM</span></div>
                                    <div class="hover-actions end-0 top-50 translate-middle-y"><a class="btn btn-tertiary border-300 btn-sm me-1 text-600" data-bs-toggle="tooltip" data-bs-placement="top" title="Download" href="images/cloud-download.svg" download="download"><img src="images/cloud-download.svg" alt="" width="15" /></a><button class="btn btn-tertiary border-300 btn-sm me-1 text-600 shadow-none" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><img src="images/edit-alt.svg" alt="" width="15" /></button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-md-6 col-xxl-3 pe-md-2 mb-3 mb-xxl-0">
                    <div class="card">
                        <div class="card-header d-flex flex-between-center bg-body-tertiary py-2">
                            <h6 class="mb-0">Active Users</h6>
                            <div class="dropdown font-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="dropdown-active-user" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs-11"></span></button>
                                <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-active-user"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body py-2">
                            <div class="d-flex align-items-center position-relative mb-3">
                                <div class="avatar avatar-2xl status-online">
                                    <img class="rounded-circle" src="images/1.jpg" alt="" />
                                </div>
                                <div class="flex-1 ms-3">
                                    <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900" href="pages/user/profile.html">Emma Watson</a></h6>
                                    <p class="text-500 fs-11 mb-0">Admin</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center position-relative mb-3">
                                <div class="avatar avatar-2xl status-online">
                                    <img class="rounded-circle" src="images/2.jpg" alt="" />
                                </div>
                                <div class="flex-1 ms-3">
                                    <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900" href="pages/user/profile.html">Antony Hopkins</a></h6>
                                    <p class="text-500 fs-11 mb-0">Moderator</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center position-relative mb-3">
                                <div class="avatar avatar-2xl status-away">
                                    <img class="rounded-circle" src="images/3.jpg" alt="" />
                                </div>
                                <div class="flex-1 ms-3">
                                    <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900" href="pages/user/profile.html">Anna Karinina</a></h6>
                                    <p class="text-500 fs-11 mb-0">Editor</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center position-relative mb-3">
                                <div class="avatar avatar-2xl status-offline">
                                    <img class="rounded-circle" src="images/4.jpg" alt="" />
                                </div>
                                <div class="flex-1 ms-3">
                                    <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900" href="pages/user/profile.html">John Lee</a></h6>
                                    <p class="text-500 fs-11 mb-0">Admin</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center position-relative false">
                                <div class="avatar avatar-2xl status-offline">
                                    <img class="rounded-circle" src="images/5.jpg" alt="" />
                                </div>
                                <div class="flex-1 ms-3">
                                    <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900" href="pages/user/profile.html">Rowen Atkinson</a></h6>
                                    <p class="text-500 fs-11 mb-0">Editor</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-body-tertiary p-0"><a class="btn btn-sm btn-link d-block w-100 py-2" href="app/social/followers.html">All active users<span class="fas fa-chevron-right ms-1 fs-11"></span></a></div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-3 ps-md-2 order-xxl-1 mb-3 mb-xxl-0">
                    <div class="card h-100">
                        <div class="card-header bg-body-tertiary d-flex flex-between-center py-2">
                            <h6 class="mb-0">Bandwidth Saved</h6>
                            <div class="dropdown font-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="dropdown-bandwidth-saved" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs-11"></span></button>
                                <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-bandwidth-saved"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body d-flex flex-center flex-column"><!-- Find the JS file for the following chart at: src/js/charts/echarts/bandwidth-saved.js--><!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/theme.js-->
                            <div class="echart-bandwidth-saved" data-echart-responsive="true"></div>
                            <div class="text-center mt-3">
                                <h6 class="fs-9 mb-1"><span class="fas fa-check text-success me-1" data-fa-transform="shrink-2"></span>35.75 GB saved</h6>
                                <p class="fs-10 mb-0">38.44 GB total bandwidth</p>
                            </div>
                        </div>
                        <div class="card-footer bg-body-tertiary py-2">
                            <div class="row flex-between-center">
                                <div class="col-auto"><select class="form-select form-select-sm">
                                        <option>Last 6 Months</option>
                                        <option>Last Year</option>
                                        <option>Last 2 Year</option>
                                    </select></div>
                                <div class="col-auto"><a class="fs-10 font-sans-serif" href="#!">Help</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 px-xxl-2">
                    <div class="card h-100">
                        <div class="card-header bg-body-tertiary py-2">
                            <div class="row flex-between-center">
                                <div class="col-auto">
                                    <h6 class="mb-0">Top Products</h6>
                                </div>
                                <div class="col-auto d-flex"><a class="btn btn-link btn-sm me-2" href="#!">View Details</a>
                                    <div class="dropdown font-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="dropdown-top-products" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs-11"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-top-products"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body h-100"><!-- Find the JS file for the following chart at: src/js/charts/echarts/top-products.js--><!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/theme.js-->
                            <div class="echart-bar-top-products h-100" data-echart-responsive="true"></div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="row g-0 justify-content-between fs-10 mt-4 mb-3">
                    <div class="col-12 col-sm-auto text-center">
                        <p class="mb-0 text-600">Thank you for your love <span class="d-none d-sm-inline-block">| </span><br class="d-sm-none" /> 2024 &copy; <a href="https://therichpost.com">More Demos</a></p>
                    </div>
                    <div class="col-12 col-sm-auto text-center">
                        <p class="mb-0 text-600">v3.19.0</p>
                    </div>
                </div>
            </footer>
        </div>
        <div class="modal fade" id="authentication-modal" tabindex="-1" role="dialog" aria-labelledby="authentication-modal-label" aria-hidden="true">
            <div class="modal-dialog mt-6" role="document">
                <div class="modal-content border-0">
                    <div class="modal-header px-5 position-relative modal-shape-header bg-shape">
                        <div class="position-relative z-1">
                            <h4 class="mb-0 text-white" id="authentication-modal-label">Register</h4>
                            <p class="fs-10 mb-0 text-white">Please create your free Falcon account</p>
                        </div><button class="btn-close position-absolute top-0 end-0 mt-2 me-2" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body py-4 px-5">
                        <form>
                            <div class="mb-3"><label class="form-label" for="modal-auth-name">Name</label><input class="form-control" type="text" autocomplete="on" id="modal-auth-name" /></div>
                            <div class="mb-3"><label class="form-label" for="modal-auth-email">Email address</label><input class="form-control" type="email" autocomplete="on" id="modal-auth-email" /></div>
                            <div class="row gx-2">
                                <div class="mb-3 col-sm-6"><label class="form-label" for="modal-auth-password">Password</label><input class="form-control" type="password" autocomplete="on" id="modal-auth-password" /></div>
                                <div class="mb-3 col-sm-6"><label class="form-label" for="modal-auth-confirm-password">Confirm Password</label><input class="form-control" type="password" autocomplete="on" id="modal-auth-confirm-password" /></div>
                            </div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="modal-auth-register-checkbox" /><label class="form-label" for="modal-auth-register-checkbox">I accept the <a href="#!">terms </a>and <a class="white-space-nowrap" href="#!">privacy policy</a></label></div>
                            <div class="mb-3"><button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit">Register</button></div>
                        </form>
                        <div class="position-relative mt-5">
                            <hr />
                            <div class="divider-content-center">or register with</div>
                        </div>
                        <div class="row g-2 mt-2">
                            <div class="col-sm-6"><a class="btn btn-outline-google-plus btn-sm d-block w-100" href="#"><span class="fab fa-google-plus-g me-2" data-fa-transform="grow-8"></span> google</a></div>
                            <div class="col-sm-6"><a class="btn btn-outline-facebook btn-sm d-block w-100" href="#"><span class="fab fa-facebook-square me-2" data-fa-transform="grow-8"></span> facebook</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main><!-- ===============================================--><!--    End of Main Content--><!-- ===============================================-->

<div class="offcanvas offcanvas-end settings-panel border-0" id="settings-offcanvas" tabindex="-1" aria-labelledby="settings-offcanvas">
    <div class="offcanvas-header settings-panel-header bg-shape">
        <div class="z-1 py-1">
            <div class="d-flex justify-content-between align-items-center mb-1">
                <h5 class="text-white mb-0 me-2"><span class="fas fa-palette me-2 fs-9"></span>Settings</h5><button class="btn btn-primary btn-sm rounded-pill mt-0 mb-0" data-theme-control="reset" style="font-size:12px"> <span class="fas fa-redo-alt me-1" data-fa-transform="shrink-3"></span>Reset</button>
            </div>
            <p class="mb-0 fs-10 text-white opacity-75"> Set your own customized style</p>
        </div>
        <div class="z-1" data-bs-theme="dark"><button class="btn-close z-1 mt-0" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button></div>
    </div>
    <div class="offcanvas-body scrollbar-overlay px-x1 h-100" id="themeController">
        <h5 class="fs-9">Color Scheme</h5>
        <p class="fs-10">Choose the perfect color mode for your app.</p>
        <div class="btn-group d-block w-100 btn-group-navbar-style">
            <div class="row gx-2">
                <div class="col-4"><input class="btn-check" id="themeSwitcherLight" name="theme-color" type="radio" value="light" data-theme-control="theme" /><label class="btn d-inline-block btn-navbar-style fs-10" for="themeSwitcherLight"> <span class="hover-overlay mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="images/falcon-mode-default.jpg" alt=""/></span><span class="label-text">Light</span></label></div>
                <div class="col-4"><input class="btn-check" id="themeSwitcherDark" name="theme-color" type="radio" value="dark" data-theme-control="theme" /><label class="btn d-inline-block btn-navbar-style fs-10" for="themeSwitcherDark"> <span class="hover-overlay mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="images/falcon-mode-dark.jpg" alt=""/></span><span class="label-text"> Dark</span></label></div>
                <div class="col-4"><input class="btn-check" id="themeSwitcherAuto" name="theme-color" type="radio" value="auto" data-theme-control="theme" /><label class="btn d-inline-block btn-navbar-style fs-10" for="themeSwitcherAuto"> <span class="hover-overlay mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="images/falcon-mode-auto.jpg" alt=""/></span><span class="label-text"> Auto</span></label></div>
            </div>
        </div>
        <hr />
        <div class="d-flex justify-content-between">
            <div class="d-flex align-items-start"><img class="me-2" src="images/left-arrow-from-left.svg" width="20" alt="" />
                <div class="flex-1">
                    <h5 class="fs-9">RTL Mode</h5>
                    <p class="fs-10 mb-0">Switch your language direction </p><a class="fs-10" href="documentation/customization/configuration.html">RTL Documentation</a>
                </div>
            </div>
            <div class="form-check form-switch"><input class="form-check-input ms-0" id="mode-rtl" type="checkbox" data-theme-control="isRTL" /></div>
        </div>
        <hr />
        <div class="d-flex justify-content-between">
            <div class="d-flex align-items-start"><img class="me-2" src="images/arrows-h.svg" width="20" alt="" />
                <div class="flex-1">
                    <h5 class="fs-9">Fluid Layout</h5>
                    <p class="fs-10 mb-0">Toggle container layout system </p><a class="fs-10" href="documentation/customization/configuration.html">Fluid Documentation</a>
                </div>
            </div>
            <div class="form-check form-switch"><input class="form-check-input ms-0" id="mode-fluid" type="checkbox" data-theme-control="isFluid" /></div>
        </div>
        <hr />
        <div class="d-flex align-items-start"><img class="me-2" src="images/paragraph.svg" width="20" alt="" />
            <div class="flex-1">
                <h5 class="fs-9 d-flex align-items-center">Navigation Position</h5>
                <p class="fs-10 mb-2">Select a suitable navigation system for your web application </p>
                <div><select class="form-select form-select-sm" aria-label="Navbar position" data-theme-control="navbarPosition">
                        <option value="vertical">Vertical</option>
                        <option value="top">Top</option>
                        <option value="combo">Combo</option>
                        <option value="double-top">Double Top</option>
                    </select></div>
            </div>
        </div>
        <hr />
        <h5 class="fs-9 d-flex align-items-center">Vertical Navbar Style</h5>
        <p class="fs-10 mb-0">Switch between styles for your vertical navbar </p>
        <p> <a class="fs-10" href="modules/components/navs-and-tabs/vertical-navbar.html#navbar-styles">See Documentation</a></p>
        <div class="btn-group d-block w-100 btn-group-navbar-style">
            <div class="row gx-2">
                <div class="col-6"><input class="btn-check" id="navbar-style-transparent" type="radio" name="navbarStyle" value="transparent" data-theme-control="navbarStyle" /><label class="btn d-block w-100 btn-navbar-style fs-10" for="navbar-style-transparent"> <img class="img-fluid img-prototype" src="images/default.png" alt="" /><span class="label-text"> Transparent</span></label></div>
                <div class="col-6"><input class="btn-check" id="navbar-style-inverted" type="radio" name="navbarStyle" value="inverted" data-theme-control="navbarStyle" /><label class="btn d-block w-100 btn-navbar-style fs-10" for="navbar-style-inverted"> <img class="img-fluid img-prototype" src="images/inverted.png" alt="" /><span class="label-text"> Inverted</span></label></div>
                <div class="col-6"><input class="btn-check" id="navbar-style-card" type="radio" name="navbarStyle" value="card" data-theme-control="navbarStyle" /><label class="btn d-block w-100 btn-navbar-style fs-10" for="navbar-style-card"> <img class="img-fluid img-prototype" src="images/card.png" alt="" /><span class="label-text"> Card</span></label></div>
                <div class="col-6"><input class="btn-check" id="navbar-style-vibrant" type="radio" name="navbarStyle" value="vibrant" data-theme-control="navbarStyle" /><label class="btn d-block w-100 btn-navbar-style fs-10" for="navbar-style-vibrant"> <img class="img-fluid img-prototype" src="images/vibrant.png" alt="" /><span class="label-text"> Vibrant</span></label></div>
            </div>
        </div>
        <div class="text-center mt-5"><img class="mb-4" src="images/47.png" alt="" width="120" />
            <h5>Like What You See?</h5>
            <p class="fs-10">Get Falcon now and create beautiful dashboards with hundreds of widgets.</p><a class="mb-3 btn btn-primary" href="https://therichpost.com" target="_blank">Free Admins</a>
        </div>
    </div>
</div><a class="card setting-toggle" href="#settings-offcanvas" data-bs-toggle="offcanvas">
    <div class="card-body d-flex align-items-center py-md-2 px-2 py-1">
        <div class="bg-primary-subtle position-relative rounded-start" style="height:34px;width:28px">
            <div class="settings-popover"><span class="ripple"><span class="fa-spin position-absolute all-0 d-flex flex-center"><span class="icon-spin position-absolute all-0 d-flex flex-center"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z" fill="#2A7BE4"></path></svg></span></span></span></div>
        </div><small class="text-uppercase text-primary fw-bold bg-primary-subtle py-2 pe-2 ps-1 rounded-end">customize</small>
    </div>
</a>

<!-- ===============================================--><!--    JavaScripts--><!-- ===============================================-->
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/anchor.min.js"></script>
<script src="assets/js/is.min.js"></script>
<script src="assets/js/echarts.min.js"></script>
<script src="assets/js/all.min.js"></script>
<script src="assets/js/lodash.min.js"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
<script src="assets/js/list.min.js"></script>
<script src="assets/js/theme.js"></script>
</body>

</html>



{{--<!DOCTYPE html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--    <head>--}}
{{--        <meta charset="utf-8">--}}
{{--        <meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--        <title>{{ config('app.name', 'Laravel') }}</title>--}}

{{--        <!-- Fonts -->--}}
{{--        <link rel="preconnect" href="https://fonts.bunny.net">--}}
{{--        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />--}}

{{--        <!-- Styles / Scripts -->--}}
{{--        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))--}}
{{--            @vite(['resources/css/app.css', 'resources/js/app.js'])--}}
{{--        @else--}}
{{--            <style>--}}
{{--                /*! tailwindcss v4.0.7 | MIT License | https://tailwindcss.com */@layer theme{:root,:host{--font-sans:'Instrument Sans',ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--font-serif:ui-serif,Georgia,Cambria,"Times New Roman",Times,serif;--font-mono:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;--color-red-50:oklch(.971 .013 17.38);--color-red-100:oklch(.936 .032 17.717);--color-red-200:oklch(.885 .062 18.334);--color-red-300:oklch(.808 .114 19.571);--color-red-400:oklch(.704 .191 22.216);--color-red-500:oklch(.637 .237 25.331);--color-red-600:oklch(.577 .245 27.325);--color-red-700:oklch(.505 .213 27.518);--color-red-800:oklch(.444 .177 26.899);--color-red-900:oklch(.396 .141 25.723);--color-red-950:oklch(.258 .092 26.042);--color-orange-50:oklch(.98 .016 73.684);--color-orange-100:oklch(.954 .038 75.164);--color-orange-200:oklch(.901 .076 70.697);--color-orange-300:oklch(.837 .128 66.29);--color-orange-400:oklch(.75 .183 55.934);--color-orange-500:oklch(.705 .213 47.604);--color-orange-600:oklch(.646 .222 41.116);--color-orange-700:oklch(.553 .195 38.402);--color-orange-800:oklch(.47 .157 37.304);--color-orange-900:oklch(.408 .123 38.172);--color-orange-950:oklch(.266 .079 36.259);--color-amber-50:oklch(.987 .022 95.277);--color-amber-100:oklch(.962 .059 95.617);--color-amber-200:oklch(.924 .12 95.746);--color-amber-300:oklch(.879 .169 91.605);--color-amber-400:oklch(.828 .189 84.429);--color-amber-500:oklch(.769 .188 70.08);--color-amber-600:oklch(.666 .179 58.318);--color-amber-700:oklch(.555 .163 48.998);--color-amber-800:oklch(.473 .137 46.201);--color-amber-900:oklch(.414 .112 45.904);--color-amber-950:oklch(.279 .077 45.635);--color-yellow-50:oklch(.987 .026 102.212);--color-yellow-100:oklch(.973 .071 103.193);--color-yellow-200:oklch(.945 .129 101.54);--color-yellow-300:oklch(.905 .182 98.111);--color-yellow-400:oklch(.852 .199 91.936);--color-yellow-500:oklch(.795 .184 86.047);--color-yellow-600:oklch(.681 .162 75.834);--color-yellow-700:oklch(.554 .135 66.442);--color-yellow-800:oklch(.476 .114 61.907);--color-yellow-900:oklch(.421 .095 57.708);--color-yellow-950:oklch(.286 .066 53.813);--color-lime-50:oklch(.986 .031 120.757);--color-lime-100:oklch(.967 .067 122.328);--color-lime-200:oklch(.938 .127 124.321);--color-lime-300:oklch(.897 .196 126.665);--color-lime-400:oklch(.841 .238 128.85);--color-lime-500:oklch(.768 .233 130.85);--color-lime-600:oklch(.648 .2 131.684);--color-lime-700:oklch(.532 .157 131.589);--color-lime-800:oklch(.453 .124 130.933);--color-lime-900:oklch(.405 .101 131.063);--color-lime-950:oklch(.274 .072 132.109);--color-green-50:oklch(.982 .018 155.826);--color-green-100:oklch(.962 .044 156.743);--color-green-200:oklch(.925 .084 155.995);--color-green-300:oklch(.871 .15 154.449);--color-green-400:oklch(.792 .209 151.711);--color-green-500:oklch(.723 .219 149.579);--color-green-600:oklch(.627 .194 149.214);--color-green-700:oklch(.527 .154 150.069);--color-green-800:oklch(.448 .119 151.328);--color-green-900:oklch(.393 .095 152.535);--color-green-950:oklch(.266 .065 152.934);--color-emerald-50:oklch(.979 .021 166.113);--color-emerald-100:oklch(.95 .052 163.051);--color-emerald-200:oklch(.905 .093 164.15);--color-emerald-300:oklch(.845 .143 164.978);--color-emerald-400:oklch(.765 .177 163.223);--color-emerald-500:oklch(.696 .17 162.48);--color-emerald-600:oklch(.596 .145 163.225);--color-emerald-700:oklch(.508 .118 165.612);--color-emerald-800:oklch(.432 .095 166.913);--color-emerald-900:oklch(.378 .077 168.94);--color-emerald-950:oklch(.262 .051 172.552);--color-teal-50:oklch(.984 .014 180.72);--color-teal-100:oklch(.953 .051 180.801);--color-teal-200:oklch(.91 .096 180.426);--color-teal-300:oklch(.855 .138 181.071);--color-teal-400:oklch(.777 .152 181.912);--color-teal-500:oklch(.704 .14 182.503);--color-teal-600:oklch(.6 .118 184.704);--color-teal-700:oklch(.511 .096 186.391);--color-teal-800:oklch(.437 .078 188.216);--color-teal-900:oklch(.386 .063 188.416);--color-teal-950:oklch(.277 .046 192.524);--color-cyan-50:oklch(.984 .019 200.873);--color-cyan-100:oklch(.956 .045 203.388);--color-cyan-200:oklch(.917 .08 205.041);--color-cyan-300:oklch(.865 .127 207.078);--color-cyan-400:oklch(.789 .154 211.53);--color-cyan-500:oklch(.715 .143 215.221);--color-cyan-600:oklch(.609 .126 221.723);--color-cyan-700:oklch(.52 .105 223.128);--color-cyan-800:oklch(.45 .085 224.283);--color-cyan-900:oklch(.398 .07 227.392);--color-cyan-950:oklch(.302 .056 229.695);--color-sky-50:oklch(.977 .013 236.62);--color-sky-100:oklch(.951 .026 236.824);--color-sky-200:oklch(.901 .058 230.902);--color-sky-300:oklch(.828 .111 230.318);--color-sky-400:oklch(.746 .16 232.661);--color-sky-500:oklch(.685 .169 237.323);--color-sky-600:oklch(.588 .158 241.966);--color-sky-700:oklch(.5 .134 242.749);--color-sky-800:oklch(.443 .11 240.79);--color-sky-900:oklch(.391 .09 240.876);--color-sky-950:oklch(.293 .066 243.157);--color-blue-50:oklch(.97 .014 254.604);--color-blue-100:oklch(.932 .032 255.585);--color-blue-200:oklch(.882 .059 254.128);--color-blue-300:oklch(.809 .105 251.813);--color-blue-400:oklch(.707 .165 254.624);--color-blue-500:oklch(.623 .214 259.815);--color-blue-600:oklch(.546 .245 262.881);--color-blue-700:oklch(.488 .243 264.376);--color-blue-800:oklch(.424 .199 265.638);--color-blue-900:oklch(.379 .146 265.522);--color-blue-950:oklch(.282 .091 267.935);--color-indigo-50:oklch(.962 .018 272.314);--color-indigo-100:oklch(.93 .034 272.788);--color-indigo-200:oklch(.87 .065 274.039);--color-indigo-300:oklch(.785 .115 274.713);--color-indigo-400:oklch(.673 .182 276.935);--color-indigo-500:oklch(.585 .233 277.117);--color-indigo-600:oklch(.511 .262 276.966);--color-indigo-700:oklch(.457 .24 277.023);--color-indigo-800:oklch(.398 .195 277.366);--color-indigo-900:oklch(.359 .144 278.697);--color-indigo-950:oklch(.257 .09 281.288);--color-violet-50:oklch(.969 .016 293.756);--color-violet-100:oklch(.943 .029 294.588);--color-violet-200:oklch(.894 .057 293.283);--color-violet-300:oklch(.811 .111 293.571);--color-violet-400:oklch(.702 .183 293.541);--color-violet-500:oklch(.606 .25 292.717);--color-violet-600:oklch(.541 .281 293.009);--color-violet-700:oklch(.491 .27 292.581);--color-violet-800:oklch(.432 .232 292.759);--color-violet-900:oklch(.38 .189 293.745);--color-violet-950:oklch(.283 .141 291.089);--color-purple-50:oklch(.977 .014 308.299);--color-purple-100:oklch(.946 .033 307.174);--color-purple-200:oklch(.902 .063 306.703);--color-purple-300:oklch(.827 .119 306.383);--color-purple-400:oklch(.714 .203 305.504);--color-purple-500:oklch(.627 .265 303.9);--color-purple-600:oklch(.558 .288 302.321);--color-purple-700:oklch(.496 .265 301.924);--color-purple-800:oklch(.438 .218 303.724);--color-purple-900:oklch(.381 .176 304.987);--color-purple-950:oklch(.291 .149 302.717);--color-fuchsia-50:oklch(.977 .017 320.058);--color-fuchsia-100:oklch(.952 .037 318.852);--color-fuchsia-200:oklch(.903 .076 319.62);--color-fuchsia-300:oklch(.833 .145 321.434);--color-fuchsia-400:oklch(.74 .238 322.16);--color-fuchsia-500:oklch(.667 .295 322.15);--color-fuchsia-600:oklch(.591 .293 322.896);--color-fuchsia-700:oklch(.518 .253 323.949);--color-fuchsia-800:oklch(.452 .211 324.591);--color-fuchsia-900:oklch(.401 .17 325.612);--color-fuchsia-950:oklch(.293 .136 325.661);--color-pink-50:oklch(.971 .014 343.198);--color-pink-100:oklch(.948 .028 342.258);--color-pink-200:oklch(.899 .061 343.231);--color-pink-300:oklch(.823 .12 346.018);--color-pink-400:oklch(.718 .202 349.761);--color-pink-500:oklch(.656 .241 354.308);--color-pink-600:oklch(.592 .249 .584);--color-pink-700:oklch(.525 .223 3.958);--color-pink-800:oklch(.459 .187 3.815);--color-pink-900:oklch(.408 .153 2.432);--color-pink-950:oklch(.284 .109 3.907);--color-rose-50:oklch(.969 .015 12.422);--color-rose-100:oklch(.941 .03 12.58);--color-rose-200:oklch(.892 .058 10.001);--color-rose-300:oklch(.81 .117 11.638);--color-rose-400:oklch(.712 .194 13.428);--color-rose-500:oklch(.645 .246 16.439);--color-rose-600:oklch(.586 .253 17.585);--color-rose-700:oklch(.514 .222 16.935);--color-rose-800:oklch(.455 .188 13.697);--color-rose-900:oklch(.41 .159 10.272);--color-rose-950:oklch(.271 .105 12.094);--color-slate-50:oklch(.984 .003 247.858);--color-slate-100:oklch(.968 .007 247.896);--color-slate-200:oklch(.929 .013 255.508);--color-slate-300:oklch(.869 .022 252.894);--color-slate-400:oklch(.704 .04 256.788);--color-slate-500:oklch(.554 .046 257.417);--color-slate-600:oklch(.446 .043 257.281);--color-slate-700:oklch(.372 .044 257.287);--color-slate-800:oklch(.279 .041 260.031);--color-slate-900:oklch(.208 .042 265.755);--color-slate-950:oklch(.129 .042 264.695);--color-gray-50:oklch(.985 .002 247.839);--color-gray-100:oklch(.967 .003 264.542);--color-gray-200:oklch(.928 .006 264.531);--color-gray-300:oklch(.872 .01 258.338);--color-gray-400:oklch(.707 .022 261.325);--color-gray-500:oklch(.551 .027 264.364);--color-gray-600:oklch(.446 .03 256.802);--color-gray-700:oklch(.373 .034 259.733);--color-gray-800:oklch(.278 .033 256.848);--color-gray-900:oklch(.21 .034 264.665);--color-gray-950:oklch(.13 .028 261.692);--color-zinc-50:oklch(.985 0 0);--color-zinc-100:oklch(.967 .001 286.375);--color-zinc-200:oklch(.92 .004 286.32);--color-zinc-300:oklch(.871 .006 286.286);--color-zinc-400:oklch(.705 .015 286.067);--color-zinc-500:oklch(.552 .016 285.938);--color-zinc-600:oklch(.442 .017 285.786);--color-zinc-700:oklch(.37 .013 285.805);--color-zinc-800:oklch(.274 .006 286.033);--color-zinc-900:oklch(.21 .006 285.885);--color-zinc-950:oklch(.141 .005 285.823);--color-neutral-50:oklch(.985 0 0);--color-neutral-100:oklch(.97 0 0);--color-neutral-200:oklch(.922 0 0);--color-neutral-300:oklch(.87 0 0);--color-neutral-400:oklch(.708 0 0);--color-neutral-500:oklch(.556 0 0);--color-neutral-600:oklch(.439 0 0);--color-neutral-700:oklch(.371 0 0);--color-neutral-800:oklch(.269 0 0);--color-neutral-900:oklch(.205 0 0);--color-neutral-950:oklch(.145 0 0);--color-stone-50:oklch(.985 .001 106.423);--color-stone-100:oklch(.97 .001 106.424);--color-stone-200:oklch(.923 .003 48.717);--color-stone-300:oklch(.869 .005 56.366);--color-stone-400:oklch(.709 .01 56.259);--color-stone-500:oklch(.553 .013 58.071);--color-stone-600:oklch(.444 .011 73.639);--color-stone-700:oklch(.374 .01 67.558);--color-stone-800:oklch(.268 .007 34.298);--color-stone-900:oklch(.216 .006 56.043);--color-stone-950:oklch(.147 .004 49.25);--color-black:#000;--color-white:#fff;--spacing:.25rem;--breakpoint-sm:40rem;--breakpoint-md:48rem;--breakpoint-lg:64rem;--breakpoint-xl:80rem;--breakpoint-2xl:96rem;--container-3xs:16rem;--container-2xs:18rem;--container-xs:20rem;--container-sm:24rem;--container-md:28rem;--container-lg:32rem;--container-xl:36rem;--container-2xl:42rem;--container-3xl:48rem;--container-4xl:56rem;--container-5xl:64rem;--container-6xl:72rem;--container-7xl:80rem;--text-xs:.75rem;--text-xs--line-height:calc(1/.75);--text-sm:.875rem;--text-sm--line-height:calc(1.25/.875);--text-base:1rem;--text-base--line-height: 1.5 ;--text-lg:1.125rem;--text-lg--line-height:calc(1.75/1.125);--text-xl:1.25rem;--text-xl--line-height:calc(1.75/1.25);--text-2xl:1.5rem;--text-2xl--line-height:calc(2/1.5);--text-3xl:1.875rem;--text-3xl--line-height: 1.2 ;--text-4xl:2.25rem;--text-4xl--line-height:calc(2.5/2.25);--text-5xl:3rem;--text-5xl--line-height:1;--text-6xl:3.75rem;--text-6xl--line-height:1;--text-7xl:4.5rem;--text-7xl--line-height:1;--text-8xl:6rem;--text-8xl--line-height:1;--text-9xl:8rem;--text-9xl--line-height:1;--font-weight-thin:100;--font-weight-extralight:200;--font-weight-light:300;--font-weight-normal:400;--font-weight-medium:500;--font-weight-semibold:600;--font-weight-bold:700;--font-weight-extrabold:800;--font-weight-black:900;--tracking-tighter:-.05em;--tracking-tight:-.025em;--tracking-normal:0em;--tracking-wide:.025em;--tracking-wider:.05em;--tracking-widest:.1em;--leading-tight:1.25;--leading-snug:1.375;--leading-normal:1.5;--leading-relaxed:1.625;--leading-loose:2;--radius-xs:.125rem;--radius-sm:.25rem;--radius-md:.375rem;--radius-lg:.5rem;--radius-xl:.75rem;--radius-2xl:1rem;--radius-3xl:1.5rem;--radius-4xl:2rem;--shadow-2xs:0 1px #0000000d;--shadow-xs:0 1px 2px 0 #0000000d;--shadow-sm:0 1px 3px 0 #0000001a,0 1px 2px -1px #0000001a;--shadow-md:0 4px 6px -1px #0000001a,0 2px 4px -2px #0000001a;--shadow-lg:0 10px 15px -3px #0000001a,0 4px 6px -4px #0000001a;--shadow-xl:0 20px 25px -5px #0000001a,0 8px 10px -6px #0000001a;--shadow-2xl:0 25px 50px -12px #00000040;--inset-shadow-2xs:inset 0 1px #0000000d;--inset-shadow-xs:inset 0 1px 1px #0000000d;--inset-shadow-sm:inset 0 2px 4px #0000000d;--drop-shadow-xs:0 1px 1px #0000000d;--drop-shadow-sm:0 1px 2px #00000026;--drop-shadow-md:0 3px 3px #0000001f;--drop-shadow-lg:0 4px 4px #00000026;--drop-shadow-xl:0 9px 7px #0000001a;--drop-shadow-2xl:0 25px 25px #00000026;--ease-in:cubic-bezier(.4,0,1,1);--ease-out:cubic-bezier(0,0,.2,1);--ease-in-out:cubic-bezier(.4,0,.2,1);--animate-spin:spin 1s linear infinite;--animate-ping:ping 1s cubic-bezier(0,0,.2,1)infinite;--animate-pulse:pulse 2s cubic-bezier(.4,0,.6,1)infinite;--animate-bounce:bounce 1s infinite;--blur-xs:4px;--blur-sm:8px;--blur-md:12px;--blur-lg:16px;--blur-xl:24px;--blur-2xl:40px;--blur-3xl:64px;--perspective-dramatic:100px;--perspective-near:300px;--perspective-normal:500px;--perspective-midrange:800px;--perspective-distant:1200px;--aspect-video:16/9;--default-transition-duration:.15s;--default-transition-timing-function:cubic-bezier(.4,0,.2,1);--default-font-family:var(--font-sans);--default-font-feature-settings:var(--font-sans--font-feature-settings);--default-font-variation-settings:var(--font-sans--font-variation-settings);--default-mono-font-family:var(--font-mono);--default-mono-font-feature-settings:var(--font-mono--font-feature-settings);--default-mono-font-variation-settings:var(--font-mono--font-variation-settings)}}@layer base{*,:after,:before,::backdrop{box-sizing:border-box;border:0 solid;margin:0;padding:0}::file-selector-button{box-sizing:border-box;border:0 solid;margin:0;padding:0}html,:host{-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;line-height:1.5;font-family:var(--default-font-family,ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji");font-feature-settings:var(--default-font-feature-settings,normal);font-variation-settings:var(--default-font-variation-settings,normal);-webkit-tap-highlight-color:transparent}body{line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;-webkit-text-decoration:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,samp,pre{font-family:var(--default-mono-font-family,ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace);font-feature-settings:var(--default-mono-font-feature-settings,normal);font-variation-settings:var(--default-mono-font-variation-settings,normal);font-size:1em}small{font-size:80%}sub,sup{vertical-align:baseline;font-size:75%;line-height:0;position:relative}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}:-moz-focusring{outline:auto}progress{vertical-align:baseline}summary{display:list-item}ol,ul,menu{list-style:none}img,svg,video,canvas,audio,iframe,embed,object{vertical-align:middle;display:block}img,video{max-width:100%;height:auto}button,input,select,optgroup,textarea{font:inherit;font-feature-settings:inherit;font-variation-settings:inherit;letter-spacing:inherit;color:inherit;opacity:1;background-color:#0000;border-radius:0}::file-selector-button{font:inherit;font-feature-settings:inherit;font-variation-settings:inherit;letter-spacing:inherit;color:inherit;opacity:1;background-color:#0000;border-radius:0}:where(select:is([multiple],[size])) optgroup{font-weight:bolder}:where(select:is([multiple],[size])) optgroup option{padding-inline-start:20px}::file-selector-button{margin-inline-end:4px}::placeholder{opacity:1;color:color-mix(in oklab,currentColor 50%,transparent)}textarea{resize:vertical}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-date-and-time-value{min-height:1lh;text-align:inherit}::-webkit-datetime-edit{display:inline-flex}::-webkit-datetime-edit-fields-wrapper{padding:0}::-webkit-datetime-edit{padding-block:0}::-webkit-datetime-edit-year-field{padding-block:0}::-webkit-datetime-edit-month-field{padding-block:0}::-webkit-datetime-edit-day-field{padding-block:0}::-webkit-datetime-edit-hour-field{padding-block:0}::-webkit-datetime-edit-minute-field{padding-block:0}::-webkit-datetime-edit-second-field{padding-block:0}::-webkit-datetime-edit-millisecond-field{padding-block:0}::-webkit-datetime-edit-meridiem-field{padding-block:0}:-moz-ui-invalid{box-shadow:none}button,input:where([type=button],[type=reset],[type=submit]){-webkit-appearance:button;-moz-appearance:button;appearance:button}::file-selector-button{-webkit-appearance:button;-moz-appearance:button;appearance:button}::-webkit-inner-spin-button{height:auto}::-webkit-outer-spin-button{height:auto}[hidden]:where(:not([hidden=until-found])){display:none!important}}@layer components;@layer utilities{.absolute{position:absolute}.relative{position:relative}.static{position:static}.inset-0{inset:calc(var(--spacing)*0)}.-mt-\[4\.9rem\]{margin-top:-4.9rem}.-mb-px{margin-bottom:-1px}.mb-1{margin-bottom:calc(var(--spacing)*1)}.mb-2{margin-bottom:calc(var(--spacing)*2)}.mb-4{margin-bottom:calc(var(--spacing)*4)}.mb-6{margin-bottom:calc(var(--spacing)*6)}.-ml-8{margin-left:calc(var(--spacing)*-8)}.flex{display:flex}.hidden{display:none}.inline-block{display:inline-block}.inline-flex{display:inline-flex}.table{display:table}.aspect-\[335\/376\]{aspect-ratio:335/376}.h-1{height:calc(var(--spacing)*1)}.h-1\.5{height:calc(var(--spacing)*1.5)}.h-2{height:calc(var(--spacing)*2)}.h-2\.5{height:calc(var(--spacing)*2.5)}.h-3{height:calc(var(--spacing)*3)}.h-3\.5{height:calc(var(--spacing)*3.5)}.h-14{height:calc(var(--spacing)*14)}.h-14\.5{height:calc(var(--spacing)*14.5)}.min-h-screen{min-height:100vh}.w-1{width:calc(var(--spacing)*1)}.w-1\.5{width:calc(var(--spacing)*1.5)}.w-2{width:calc(var(--spacing)*2)}.w-2\.5{width:calc(var(--spacing)*2.5)}.w-3{width:calc(var(--spacing)*3)}.w-3\.5{width:calc(var(--spacing)*3.5)}.w-\[448px\]{width:448px}.w-full{width:100%}.max-w-\[335px\]{max-width:335px}.max-w-none{max-width:none}.flex-1{flex:1}.shrink-0{flex-shrink:0}.translate-y-0{--tw-translate-y:calc(var(--spacing)*0);translate:var(--tw-translate-x)var(--tw-translate-y)}.transform{transform:var(--tw-rotate-x)var(--tw-rotate-y)var(--tw-rotate-z)var(--tw-skew-x)var(--tw-skew-y)}.flex-col{flex-direction:column}.flex-col-reverse{flex-direction:column-reverse}.items-center{align-items:center}.justify-center{justify-content:center}.justify-end{justify-content:flex-end}.gap-3{gap:calc(var(--spacing)*3)}.gap-4{gap:calc(var(--spacing)*4)}:where(.space-x-1>:not(:last-child)){--tw-space-x-reverse:0;margin-inline-start:calc(calc(var(--spacing)*1)*var(--tw-space-x-reverse));margin-inline-end:calc(calc(var(--spacing)*1)*calc(1 - var(--tw-space-x-reverse)))}.overflow-hidden{overflow:hidden}.rounded-full{border-radius:3.40282e38px}.rounded-sm{border-radius:var(--radius-sm)}.rounded-t-lg{border-top-left-radius:var(--radius-lg);border-top-right-radius:var(--radius-lg)}.rounded-br-lg{border-bottom-right-radius:var(--radius-lg)}.rounded-bl-lg{border-bottom-left-radius:var(--radius-lg)}.border{border-style:var(--tw-border-style);border-width:1px}.border-\[\#19140035\]{border-color:#19140035}.border-\[\#e3e3e0\]{border-color:#e3e3e0}.border-black{border-color:var(--color-black)}.border-transparent{border-color:#0000}.bg-\[\#1b1b18\]{background-color:#1b1b18}.bg-\[\#FDFDFC\]{background-color:#fdfdfc}.bg-\[\#dbdbd7\]{background-color:#dbdbd7}.bg-\[\#fff2f2\]{background-color:#fff2f2}.bg-white{background-color:var(--color-white)}.p-6{padding:calc(var(--spacing)*6)}.px-5{padding-inline:calc(var(--spacing)*5)}.py-1{padding-block:calc(var(--spacing)*1)}.py-1\.5{padding-block:calc(var(--spacing)*1.5)}.py-2{padding-block:calc(var(--spacing)*2)}.pb-12{padding-bottom:calc(var(--spacing)*12)}.text-sm{font-size:var(--text-sm);line-height:var(--tw-leading,var(--text-sm--line-height))}.text-\[13px\]{font-size:13px}.leading-\[20px\]{--tw-leading:20px;line-height:20px}.leading-normal{--tw-leading:var(--leading-normal);line-height:var(--leading-normal)}.font-medium{--tw-font-weight:var(--font-weight-medium);font-weight:var(--font-weight-medium)}.text-\[\#1b1b18\]{color:#1b1b18}.text-\[\#706f6c\]{color:#706f6c}.text-\[\#F53003\],.text-\[\#f53003\]{color:#f53003}.text-white{color:var(--color-white)}.underline{text-decoration-line:underline}.underline-offset-4{text-underline-offset:4px}.opacity-100{opacity:1}.shadow-\[0px_0px_1px_0px_rgba\(0\,0\,0\,0\.03\)\,0px_1px_2px_0px_rgba\(0\,0\,0\,0\.06\)\]{--tw-shadow:0px 0px 1px 0px var(--tw-shadow-color,#00000008),0px 1px 2px 0px var(--tw-shadow-color,#0000000f);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.shadow-\[inset_0px_0px_0px_1px_rgba\(26\,26\,0\,0\.16\)\]{--tw-shadow:inset 0px 0px 0px 1px var(--tw-shadow-color,#1a1a0029);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.\!filter{filter:var(--tw-blur,)var(--tw-brightness,)var(--tw-contrast,)var(--tw-grayscale,)var(--tw-hue-rotate,)var(--tw-invert,)var(--tw-saturate,)var(--tw-sepia,)var(--tw-drop-shadow,)!important}.filter{filter:var(--tw-blur,)var(--tw-brightness,)var(--tw-contrast,)var(--tw-grayscale,)var(--tw-hue-rotate,)var(--tw-invert,)var(--tw-saturate,)var(--tw-sepia,)var(--tw-drop-shadow,)}.transition-all{transition-property:all;transition-timing-function:var(--tw-ease,var(--default-transition-timing-function));transition-duration:var(--tw-duration,var(--default-transition-duration))}.transition-opacity{transition-property:opacity;transition-timing-function:var(--tw-ease,var(--default-transition-timing-function));transition-duration:var(--tw-duration,var(--default-transition-duration))}.delay-300{transition-delay:.3s}.duration-750{--tw-duration:.75s;transition-duration:.75s}.not-has-\[nav\]\:hidden:not(:has(:is(nav))){display:none}.before\:absolute:before{content:var(--tw-content);position:absolute}.before\:top-0:before{content:var(--tw-content);top:calc(var(--spacing)*0)}.before\:top-1\/2:before{content:var(--tw-content);top:50%}.before\:bottom-0:before{content:var(--tw-content);bottom:calc(var(--spacing)*0)}.before\:bottom-1\/2:before{content:var(--tw-content);bottom:50%}.before\:left-\[0\.4rem\]:before{content:var(--tw-content);left:.4rem}.before\:border-l:before{content:var(--tw-content);border-left-style:var(--tw-border-style);border-left-width:1px}.before\:border-\[\#e3e3e0\]:before{content:var(--tw-content);border-color:#e3e3e0}@media (hover:hover){.hover\:border-\[\#1915014a\]:hover{border-color:#1915014a}.hover\:border-\[\#19140035\]:hover{border-color:#19140035}.hover\:border-black:hover{border-color:var(--color-black)}.hover\:bg-black:hover{background-color:var(--color-black)}}@media (width>=64rem){.lg\:-mt-\[6\.6rem\]{margin-top:-6.6rem}.lg\:mb-0{margin-bottom:calc(var(--spacing)*0)}.lg\:mb-6{margin-bottom:calc(var(--spacing)*6)}.lg\:-ml-px{margin-left:-1px}.lg\:ml-0{margin-left:calc(var(--spacing)*0)}.lg\:block{display:block}.lg\:aspect-auto{aspect-ratio:auto}.lg\:w-\[438px\]{width:438px}.lg\:max-w-4xl{max-width:var(--container-4xl)}.lg\:grow{flex-grow:1}.lg\:flex-row{flex-direction:row}.lg\:justify-center{justify-content:center}.lg\:rounded-t-none{border-top-left-radius:0;border-top-right-radius:0}.lg\:rounded-tl-lg{border-top-left-radius:var(--radius-lg)}.lg\:rounded-r-lg{border-top-right-radius:var(--radius-lg);border-bottom-right-radius:var(--radius-lg)}.lg\:rounded-br-none{border-bottom-right-radius:0}.lg\:p-8{padding:calc(var(--spacing)*8)}.lg\:p-20{padding:calc(var(--spacing)*20)}}@media (prefers-color-scheme:dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:border-\[\#3E3E3A\]{border-color:#3e3e3a}.dark\:border-\[\#eeeeec\]{border-color:#eeeeec}.dark\:bg-\[\#0a0a0a\]{background-color:#0a0a0a}.dark\:bg-\[\#1D0002\]{background-color:#1d0002}.dark\:bg-\[\#3E3E3A\]{background-color:#3e3e3a}.dark\:bg-\[\#161615\]{background-color:#161615}.dark\:bg-\[\#eeeeec\]{background-color:#eeeeec}.dark\:text-\[\#1C1C1A\]{color:#1c1c1a}.dark\:text-\[\#A1A09A\]{color:#a1a09a}.dark\:text-\[\#EDEDEC\]{color:#ededec}.dark\:text-\[\#F61500\]{color:#f61500}.dark\:text-\[\#FF4433\]{color:#f43}.dark\:shadow-\[inset_0px_0px_0px_1px_\#fffaed2d\]{--tw-shadow:inset 0px 0px 0px 1px var(--tw-shadow-color,#fffaed2d);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.dark\:before\:border-\[\#3E3E3A\]:before{content:var(--tw-content);border-color:#3e3e3a}@media (hover:hover){.dark\:hover\:border-\[\#3E3E3A\]:hover{border-color:#3e3e3a}.dark\:hover\:border-\[\#62605b\]:hover{border-color:#62605b}.dark\:hover\:border-white:hover{border-color:var(--color-white)}.dark\:hover\:bg-white:hover{background-color:var(--color-white)}}}@starting-style{.starting\:translate-y-4{--tw-translate-y:calc(var(--spacing)*4);translate:var(--tw-translate-x)var(--tw-translate-y)}}@starting-style{.starting\:translate-y-6{--tw-translate-y:calc(var(--spacing)*6);translate:var(--tw-translate-x)var(--tw-translate-y)}}@starting-style{.starting\:opacity-0{opacity:0}}}@keyframes spin{to{transform:rotate(360deg)}}@keyframes ping{75%,to{opacity:0;transform:scale(2)}}@keyframes pulse{50%{opacity:.5}}@keyframes bounce{0%,to{animation-timing-function:cubic-bezier(.8,0,1,1);transform:translateY(-25%)}50%{animation-timing-function:cubic-bezier(0,0,.2,1);transform:none}}@property --tw-translate-x{syntax:"*";inherits:false;initial-value:0}@property --tw-translate-y{syntax:"*";inherits:false;initial-value:0}@property --tw-translate-z{syntax:"*";inherits:false;initial-value:0}@property --tw-rotate-x{syntax:"*";inherits:false;initial-value:rotateX(0)}@property --tw-rotate-y{syntax:"*";inherits:false;initial-value:rotateY(0)}@property --tw-rotate-z{syntax:"*";inherits:false;initial-value:rotateZ(0)}@property --tw-skew-x{syntax:"*";inherits:false;initial-value:skewX(0)}@property --tw-skew-y{syntax:"*";inherits:false;initial-value:skewY(0)}@property --tw-space-x-reverse{syntax:"*";inherits:false;initial-value:0}@property --tw-border-style{syntax:"*";inherits:false;initial-value:solid}@property --tw-leading{syntax:"*";inherits:false}@property --tw-font-weight{syntax:"*";inherits:false}@property --tw-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-shadow-color{syntax:"*";inherits:false}@property --tw-inset-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-inset-shadow-color{syntax:"*";inherits:false}@property --tw-ring-color{syntax:"*";inherits:false}@property --tw-ring-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-inset-ring-color{syntax:"*";inherits:false}@property --tw-inset-ring-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-ring-inset{syntax:"*";inherits:false}@property --tw-ring-offset-width{syntax:"<length>";inherits:false;initial-value:0}@property --tw-ring-offset-color{syntax:"*";inherits:false;initial-value:#fff}@property --tw-ring-offset-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-blur{syntax:"*";inherits:false}@property --tw-brightness{syntax:"*";inherits:false}@property --tw-contrast{syntax:"*";inherits:false}@property --tw-grayscale{syntax:"*";inherits:false}@property --tw-hue-rotate{syntax:"*";inherits:false}@property --tw-invert{syntax:"*";inherits:false}@property --tw-opacity{syntax:"*";inherits:false}@property --tw-saturate{syntax:"*";inherits:false}@property --tw-sepia{syntax:"*";inherits:false}@property --tw-drop-shadow{syntax:"*";inherits:false}@property --tw-duration{syntax:"*";inherits:false}@property --tw-content{syntax:"*";inherits:false;initial-value:""}--}}
{{--            </style>--}}
{{--        @endif--}}
{{--    </head>--}}
{{--    <body class="bg-[#FDFDFC] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">--}}
{{--        <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">--}}
{{--            @if (Route::has('login'))--}}
{{--                <nav class="flex items-center justify-end gap-4">--}}
{{--                    @auth--}}
{{--                        <a--}}
{{--                            href="{{ url('/dashboard') }}"--}}
{{--                            class="inline-block px-5 py-1.5 border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] rounded-sm text-sm leading-normal"--}}
{{--                        >--}}
{{--                            Dashboard--}}
{{--                        </a>--}}
{{--                    @else--}}
{{--                        <a--}}
{{--                            href="{{ route('login') }}"--}}
{{--                            class="inline-block px-5 py-1.5 text-[#1b1b18] border border-transparent hover:border-[#19140035] rounded-sm text-sm leading-normal"--}}
{{--                        >--}}
{{--                            Log in--}}
{{--                        </a>--}}

{{--                        @if (Route::has('register'))--}}
{{--                            <a--}}
{{--                                href="{{ route('register') }}"--}}
{{--                                class="inline-block px-5 py-1.5 border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] rounded-sm text-sm leading-normal">--}}
{{--                                Register--}}
{{--                            </a>--}}
{{--                        @endif--}}
{{--                    @endauth--}}
{{--                </nav>--}}
{{--            @endif--}}
{{--        </header>--}}
{{--        <div class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">--}}
{{--            <main class="flex max-w-[335px] w-full flex-col-reverse lg:max-w-4xl lg:flex-row">--}}
{{--                <div class="text-[13px] leading-[20px] flex-1 p-6 pb-12 lg:p-20 bg-white shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] rounded-bl-lg rounded-br-lg lg:rounded-tl-lg lg:rounded-br-none">--}}
{{--                    <h1 class="mb-1 font-medium">Let's get started</h1>--}}
{{--                    <p class="mb-2 text-[#706f6c]">Laravel has an incredibly rich ecosystem. <br>We suggest starting with the following.</p>--}}
{{--                    <ul class="flex flex-col mb-4 lg:mb-6">--}}
{{--                        <li class="flex items-center gap-4 py-2 relative before:border-l before:border-[#e3e3e0] before:top-1/2 before:bottom-0 before:left-[0.4rem] before:absolute">--}}
{{--                            <span class="relative py-1 bg-white">--}}
{{--                                <span class="flex items-center justify-center rounded-full bg-[#FDFDFC] shadow-[0px_0px_1px_0px_rgba(0,0,0,0.03),0px_1px_2px_0px_rgba(0,0,0,0.06)] w-3.5 h-3.5 border border-[#e3e3e0]">--}}
{{--                                    <span class="rounded-full bg-[#dbdbd7] w-1.5 h-1.5"></span>--}}
{{--                                </span>--}}
{{--                            </span>--}}
{{--                            <span>--}}
{{--                                Read the--}}
{{--                                <a href="https://laravel.com/docs" target="_blank" class="inline-flex items-center space-x-1 font-medium underline underline-offset-4 text-[#f53003] ml-1">--}}
{{--                                    <span>Documentation</span>--}}
{{--                                    <svg--}}
{{--                                        width="10"--}}
{{--                                        height="11"--}}
{{--                                        viewBox="0 0 10 11"--}}
{{--                                        fill="none"--}}
{{--                                        xmlns="http://www.w3.org/2000/svg"--}}
{{--                                        class="w-2.5 h-2.5"--}}
{{--                                    >--}}
{{--                                        <path--}}
{{--                                            d="M7.70833 6.95834V2.79167H3.54167M2.5 8L7.5 3.00001"--}}
{{--                                            stroke="currentColor"--}}
{{--                                            stroke-linecap="square"--}}
{{--                                        />--}}
{{--                                    </svg>--}}
{{--                                </a>--}}
{{--                            </span>--}}
{{--                        </li>--}}
{{--                        <li class="flex items-center gap-4 py-2 relative before:border-l before:border-[#e3e3e0] before:bottom-1/2 before:top-0 before:left-[0.4rem] before:absolute">--}}
{{--                            <span class="relative py-1 bg-white">--}}
{{--                                <span class="flex items-center justify-center rounded-full bg-[#FDFDFC] shadow-[0px_0px_1px_0px_rgba(0,0,0,0.03),0px_1px_2px_0px_rgba(0,0,0,0.06)] w-3.5 h-3.5 border border-[#e3e3e0]">--}}
{{--                                    <span class="rounded-full bg-[#dbdbd7] w-1.5 h-1.5"></span>--}}
{{--                                </span>--}}
{{--                            </span>--}}
{{--                            <span>--}}
{{--                                Watch video tutorials at--}}
{{--                                <a href="https://laracasts.com" target="_blank" class="inline-flex items-center space-x-1 font-medium underline underline-offset-4 text-[#f53003] ml-1">--}}
{{--                                    <span>Laracasts</span>--}}
{{--                                    <svg--}}
{{--                                        width="10"--}}
{{--                                        height="11"--}}
{{--                                        viewBox="0 0 10 11"--}}
{{--                                        fill="none"--}}
{{--                                        xmlns="http://www.w3.org/2000/svg"--}}
{{--                                        class="w-2.5 h-2.5"--}}
{{--                                    >--}}
{{--                                        <path--}}
{{--                                            d="M7.70833 6.95834V2.79167H3.54167M2.5 8L7.5 3.00001"--}}
{{--                                            stroke="currentColor"--}}
{{--                                            stroke-linecap="square"--}}
{{--                                        />--}}
{{--                                    </svg>--}}
{{--                                </a>--}}
{{--                            </span>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                    <ul class="flex gap-3 text-sm leading-normal">--}}
{{--                        <li>--}}
{{--                            <a href="https://cloud.laravel.com" target="_blank" class="inline-block hover:bg-black hover:border-black px-5 py-1.5 bg-[#1b1b18] rounded-sm border border-black text-white text-sm leading-normal">--}}
{{--                                Deploy now--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <div class="bg-[#fff2f2] relative lg:-ml-px -mb-px lg:mb-0 rounded-t-lg lg:rounded-t-none lg:rounded-r-lg aspect-[335/376] lg:aspect-auto w-full lg:w-[438px] shrink-0 overflow-hidden">--}}
{{--                    --}}{{-- Laravel Logo --}}
{{--                    <svg class="w-full text-[#F53003] transition-all translate-y-0 opacity-100 max-w-none duration-750 starting:opacity-0 starting:translate-y-6" viewBox="0 0 438 104" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                        <path d="M17.2036 -3H0V102.197H49.5189V86.7187H17.2036V-3Z" fill="currentColor" />--}}
{{--                        <path d="M110.256 41.6337C108.061 38.1275 104.945 35.3731 100.905 33.3681C96.8667 31.3647 92.8016 30.3618 88.7131 30.3618C83.4247 30.3618 78.5885 31.3389 74.201 33.2923C69.8111 35.2456 66.0474 37.928 62.9059 41.3333C59.7643 44.7401 57.3198 48.6726 55.5754 53.1293C53.8287 57.589 52.9572 62.274 52.9572 67.1813C52.9572 72.1925 53.8287 76.8995 55.5754 81.3069C57.3191 85.7173 59.7636 89.6241 62.9059 93.0293C66.0474 96.4361 69.8119 99.1155 74.201 101.069C78.5885 103.022 83.4247 103.999 88.7131 103.999C92.8016 103.999 96.8667 102.997 100.905 100.994C104.945 98.9911 108.061 96.2359 110.256 92.7282V102.195H126.563V32.1642H110.256V41.6337ZM108.76 75.7472C107.762 78.4531 106.366 80.8078 104.572 82.8112C102.776 84.8161 100.606 86.4183 98.0637 87.6206C95.5202 88.823 92.7004 89.4238 89.6103 89.4238C86.5178 89.4238 83.7252 88.823 81.2324 87.6206C78.7388 86.4183 76.5949 84.8161 74.7998 82.8112C73.004 80.8078 71.6319 78.4531 70.6856 75.7472C69.7356 73.0421 69.2644 70.1868 69.2644 67.1821C69.2644 64.1758 69.7356 61.3205 70.6856 58.6154C71.6319 55.9102 73.004 53.5571 74.7998 51.5522C76.5949 49.5495 78.738 47.9451 81.2324 46.7427C83.7252 45.5404 86.5178 44.9396 89.6103 44.9396C92.7012 44.9396 95.5202 45.5404 98.0637 46.7427C100.606 47.9451 102.776 49.5487 104.572 51.5522C106.367 53.5571 107.762 55.9102 108.76 58.6154C109.756 61.3205 110.256 64.1758 110.256 67.1821C110.256 70.1868 109.756 73.0421 108.76 75.7472Z" fill="currentColor" />--}}
{{--                        <path d="M242.805 41.6337C240.611 38.1275 237.494 35.3731 233.455 33.3681C229.416 31.3647 225.351 30.3618 221.262 30.3618C215.974 30.3618 211.138 31.3389 206.75 33.2923C202.36 35.2456 198.597 37.928 195.455 41.3333C192.314 44.7401 189.869 48.6726 188.125 53.1293C186.378 57.589 185.507 62.274 185.507 67.1813C185.507 72.1925 186.378 76.8995 188.125 81.3069C189.868 85.7173 192.313 89.6241 195.455 93.0293C198.597 96.4361 202.361 99.1155 206.75 101.069C211.138 103.022 215.974 103.999 221.262 103.999C225.351 103.999 229.416 102.997 233.455 100.994C237.494 98.9911 240.611 96.2359 242.805 92.7282V102.195H259.112V32.1642H242.805V41.6337ZM241.31 75.7472C240.312 78.4531 238.916 80.8078 237.122 82.8112C235.326 84.8161 233.156 86.4183 230.614 87.6206C228.07 88.823 225.251 89.4238 222.16 89.4238C219.068 89.4238 216.275 88.823 213.782 87.6206C211.289 86.4183 209.145 84.8161 207.35 82.8112C205.554 80.8078 204.182 78.4531 203.236 75.7472C202.286 73.0421 201.814 70.1868 201.814 67.1821C201.814 64.1758 202.286 61.3205 203.236 58.6154C204.182 55.9102 205.554 53.5571 207.35 51.5522C209.145 49.5495 211.288 47.9451 213.782 46.7427C216.275 45.5404 219.068 44.9396 222.16 44.9396C225.251 44.9396 228.07 45.5404 230.614 46.7427C233.156 47.9451 235.326 49.5487 237.122 51.5522C238.917 53.5571 240.312 55.9102 241.31 58.6154C242.306 61.3205 242.806 64.1758 242.806 67.1821C242.805 70.1868 242.305 73.0421 241.31 75.7472Z" fill="currentColor" />--}}
{{--                        <path d="M438 -3H421.694V102.197H438V-3Z" fill="currentColor" />--}}
{{--                        <path d="M139.43 102.197H155.735V48.2834H183.712V32.1665H139.43V102.197Z" fill="currentColor" />--}}
{{--                        <path d="M324.49 32.1665L303.995 85.794L283.498 32.1665H266.983L293.748 102.197H314.242L341.006 32.1665H324.49Z" fill="currentColor" />--}}
{{--                        <path d="M376.571 30.3656C356.603 30.3656 340.797 46.8497 340.797 67.1828C340.797 89.6597 356.094 104 378.661 104C391.29 104 399.354 99.1488 409.206 88.5848L398.189 80.0226C398.183 80.031 389.874 90.9895 377.468 90.9895C363.048 90.9895 356.977 79.3111 356.977 73.269H411.075C413.917 50.1328 398.775 30.3656 376.571 30.3656ZM357.02 61.0967C357.145 59.7487 359.023 43.3761 376.442 43.3761C393.861 43.3761 395.978 59.7464 396.099 61.0967H357.02Z" fill="currentColor" />--}}
{{--                    </svg>--}}

{{--                    --}}{{-- Light Mode 12 SVG --}}
{{--                    <svg class="w-[448px] max-w-none relative -mt-[4.9rem] -ml-8 lg:ml-0 lg:-mt-[6.6rem]" viewBox="0 0 440 376" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">--}}
{{--                            <path d="M188.263 355.73L188.595 355.73C195.441 348.845 205.766 339.761 219.569 328.477C232.93 317.193 242.978 308.205 249.714 301.511C256.34 294.626 260.867 287.358 263.296 279.708C265.725 272.058 264.565 264.121 259.816 255.896C254.516 246.716 247.062 239.352 237.454 233.805C227.957 228.067 217.908 225.198 207.307 225.198C196.927 225.197 190.136 227.97 186.934 233.516C183.621 238.872 184.726 246.331 190.247 255.894L125.647 255.891C116.371 239.825 112.395 225.481 113.72 212.858C115.265 200.235 121.559 190.481 132.602 183.596C143.754 176.52 158.607 172.982 177.159 172.983C196.594 172.984 215.863 176.523 234.968 183.6C253.961 190.486 271.299 200.241 286.98 212.864C302.661 225.488 315.14 239.833 324.416 255.899C333.03 270.817 336.841 283.918 335.847 295.203C335.075 306.487 331.376 316.336 324.75 324.751C318.346 333.167 308.408 343.494 294.936 355.734L377.094 355.737L405.917 405.656L217.087 405.649L188.263 355.73Z" fill="black" />--}}
{{--                            <path d="M9.11884 226.339L-13.7396 226.338L-42.7286 176.132L43.0733 176.135L175.595 405.649L112.651 405.647L9.11884 226.339Z" fill="black" />--}}
{{--                            <path d="M188.263 355.73L188.595 355.73C195.441 348.845 205.766 339.761 219.569 328.477C232.93 317.193 242.978 308.205 249.714 301.511C256.34 294.626 260.867 287.358 263.296 279.708C265.725 272.058 264.565 264.121 259.816 255.896C254.516 246.716 247.062 239.352 237.454 233.805C227.957 228.067 217.908 225.198 207.307 225.198C196.927 225.197 190.136 227.97 186.934 233.516C183.621 238.872 184.726 246.331 190.247 255.894L125.647 255.891C116.371 239.825 112.395 225.481 113.72 212.858C115.265 200.235 121.559 190.481 132.602 183.596C143.754 176.52 158.607 172.982 177.159 172.983C196.594 172.984 215.863 176.523 234.968 183.6C253.961 190.486 271.299 200.241 286.98 212.864C302.661 225.488 315.14 239.833 324.416 255.899C333.03 270.817 336.841 283.918 335.847 295.203C335.075 306.487 331.376 316.336 324.75 324.751C318.346 333.167 308.408 343.494 294.936 355.734L377.094 355.737L405.917 405.656L217.087 405.649L188.263 355.73Z" stroke="#1B1B18" stroke-width="1" />--}}
{{--                            <path d="M9.11884 226.339L-13.7396 226.338L-42.7286 176.132L43.0733 176.135L175.595 405.649L112.651 405.647L9.11884 226.339Z" stroke="#1B1B18" stroke-width="1" />--}}
{{--                            <path d="M204.592 327.449L204.923 327.449C211.769 320.564 222.094 311.479 235.897 300.196C249.258 288.912 259.306 279.923 266.042 273.23C272.668 266.345 277.195 259.077 279.624 251.427C282.053 243.777 280.893 235.839 276.145 227.615C270.844 218.435 263.39 211.071 253.782 205.524C244.285 199.786 234.236 196.917 223.635 196.916C213.255 196.916 206.464 199.689 203.262 205.235C199.949 210.59 201.054 218.049 206.575 227.612L141.975 227.61C132.699 211.544 128.723 197.2 130.048 184.577C131.593 171.954 137.887 162.2 148.93 155.315C160.083 148.239 174.935 144.701 193.487 144.702C212.922 144.703 232.192 148.242 251.296 155.319C270.289 162.205 287.627 171.96 303.308 184.583C318.989 197.207 331.468 211.552 340.745 227.618C349.358 242.536 353.169 255.637 352.175 266.921C351.403 278.205 347.704 288.055 341.078 296.47C334.674 304.885 324.736 315.213 311.264 327.453L393.422 327.456L422.246 377.375L233.415 377.368L204.592 327.449Z" fill="#F8B803" />--}}
{{--                            <path d="M25.447 198.058L2.58852 198.057L-26.4005 147.851L59.4015 147.854L191.923 377.368L128.979 377.365L25.447 198.058Z" fill="#F8B803" />--}}
{{--                            <path d="M204.592 327.449L204.923 327.449C211.769 320.564 222.094 311.479 235.897 300.196C249.258 288.912 259.306 279.923 266.042 273.23C272.668 266.345 277.195 259.077 279.624 251.427C282.053 243.777 280.893 235.839 276.145 227.615C270.844 218.435 263.39 211.071 253.782 205.524C244.285 199.786 234.236 196.917 223.635 196.916C213.255 196.916 206.464 199.689 203.262 205.235C199.949 210.59 201.054 218.049 206.575 227.612L141.975 227.61C132.699 211.544 128.723 197.2 130.048 184.577C131.593 171.954 137.887 162.2 148.93 155.315C160.083 148.239 174.935 144.701 193.487 144.702C212.922 144.703 232.192 148.242 251.296 155.319C270.289 162.205 287.627 171.96 303.308 184.583C318.989 197.207 331.468 211.552 340.745 227.618C349.358 242.536 353.169 255.637 352.175 266.921C351.403 278.205 347.704 288.055 341.078 296.47C334.674 304.885 324.736 315.213 311.264 327.453L393.422 327.456L422.246 377.375L233.415 377.368L204.592 327.449Z" stroke="#1B1B18" stroke-width="1" />--}}
{{--                            <path d="M25.447 198.058L2.58852 198.057L-26.4005 147.851L59.4015 147.854L191.923 377.368L128.979 377.365L25.447 198.058Z" stroke="#1B1B18" stroke-width="1" />--}}
{{--                        </g>--}}
{{--                        <g style="mix-blend-mode: hard-light" class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">--}}
{{--                            <path d="M217.342 305.363L217.673 305.363C224.519 298.478 234.844 289.393 248.647 278.11C262.008 266.826 272.056 257.837 278.792 251.144C285.418 244.259 289.945 236.991 292.374 229.341C294.803 221.691 293.643 213.753 288.895 205.529C283.594 196.349 276.14 188.985 266.532 183.438C257.035 177.7 246.986 174.831 236.385 174.83C226.005 174.83 219.214 177.603 216.012 183.149C212.699 188.504 213.804 195.963 219.325 205.527L154.725 205.524C145.449 189.458 141.473 175.114 142.798 162.491C144.343 149.868 150.637 140.114 161.68 133.229C172.833 126.153 187.685 122.615 206.237 122.616C225.672 122.617 244.942 126.156 264.046 133.233C283.039 140.119 300.377 149.874 316.058 162.497C331.739 175.121 344.218 189.466 353.495 205.532C362.108 220.45 365.919 233.551 364.925 244.835C364.153 256.12 360.454 265.969 353.828 274.384C347.424 282.799 337.486 293.127 324.014 305.367L406.172 305.37L434.996 355.289L246.165 355.282L217.342 305.363Z" fill="#F0ACB8" />--}}
{{--                            <path d="M38.197 175.972L15.3385 175.971L-13.6505 125.765L72.1515 125.768L204.673 355.282L141.729 355.279L38.197 175.972Z" fill="#F0ACB8" />--}}
{{--                            <path d="M217.342 305.363L217.673 305.363C224.519 298.478 234.844 289.393 248.647 278.11C262.008 266.826 272.056 257.837 278.792 251.144C285.418 244.259 289.945 236.991 292.374 229.341C294.803 221.691 293.643 213.753 288.895 205.529C283.594 196.349 276.14 188.985 266.532 183.438C257.035 177.7 246.986 174.831 236.385 174.83C226.005 174.83 219.214 177.603 216.012 183.149C212.699 188.504 213.804 195.963 219.325 205.527L154.725 205.524C145.449 189.458 141.473 175.114 142.798 162.491C144.343 149.868 150.637 140.114 161.68 133.229C172.833 126.153 187.685 122.615 206.237 122.616C225.672 122.617 244.942 126.156 264.046 133.233C283.039 140.119 300.377 149.874 316.058 162.497C331.739 175.121 344.218 189.466 353.495 205.532C362.108 220.45 365.919 233.551 364.925 244.835C364.153 256.12 360.454 265.969 353.828 274.384C347.424 282.799 337.486 293.127 324.014 305.367L406.172 305.37L434.996 355.289L246.165 355.282L217.342 305.363Z" stroke="#1B1B18" stroke-width="1" />--}}
{{--                            <path d="M38.197 175.972L15.3385 175.971L-13.6505 125.765L72.1515 125.768L204.673 355.282L141.729 355.279L38.197 175.972Z" stroke="#1B1B18" stroke-width="1" />--}}
{{--                        </g>--}}
{{--                        <g style="mix-blend-mode: plus-darker" class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">--}}
{{--                            <path d="M230.951 281.792L231.282 281.793C238.128 274.907 248.453 265.823 262.256 254.539C275.617 243.256 285.666 234.267 292.402 227.573C299.027 220.688 303.554 213.421 305.983 205.771C308.412 198.12 307.253 190.183 302.504 181.959C297.203 172.778 289.749 165.415 280.142 159.868C270.645 154.13 260.596 151.26 249.995 151.26C239.615 151.26 232.823 154.033 229.621 159.579C226.309 164.934 227.413 172.393 232.935 181.956L168.335 181.954C159.058 165.888 155.082 151.543 156.407 138.92C157.953 126.298 164.247 116.544 175.289 109.659C186.442 102.583 201.294 99.045 219.846 99.0457C239.281 99.0464 258.551 102.585 277.655 109.663C296.649 116.549 313.986 126.303 329.667 138.927C345.349 151.551 357.827 165.895 367.104 181.961C375.718 196.88 379.528 209.981 378.535 221.265C377.762 232.549 374.063 242.399 367.438 250.814C361.033 259.229 351.095 269.557 337.624 281.796L419.782 281.8L448.605 331.719L259.774 331.712L230.951 281.792Z" fill="#F3BEC7" />--}}
{{--                            <path d="M51.8063 152.402L28.9479 152.401L-0.0411453 102.195L85.7608 102.198L218.282 331.711L155.339 331.709L51.8063 152.402Z" fill="#F3BEC7" />--}}
{{--                            <path d="M230.951 281.792L231.282 281.793C238.128 274.907 248.453 265.823 262.256 254.539C275.617 243.256 285.666 234.267 292.402 227.573C299.027 220.688 303.554 213.421 305.983 205.771C308.412 198.12 307.253 190.183 302.504 181.959C297.203 172.778 289.749 165.415 280.142 159.868C270.645 154.13 260.596 151.26 249.995 151.26C239.615 151.26 232.823 154.033 229.621 159.579C226.309 164.934 227.413 172.393 232.935 181.956L168.335 181.954C159.058 165.888 155.082 151.543 156.407 138.92C157.953 126.298 164.247 116.544 175.289 109.659C186.442 102.583 201.294 99.045 219.846 99.0457C239.281 99.0464 258.551 102.585 277.655 109.663C296.649 116.549 313.986 126.303 329.667 138.927C345.349 151.551 357.827 165.895 367.104 181.961C375.718 196.88 379.528 209.981 378.535 221.265C377.762 232.549 374.063 242.399 367.438 250.814C361.033 259.229 351.095 269.557 337.624 281.796L419.782 281.8L448.605 331.719L259.774 331.712L230.951 281.792Z" stroke="#1B1B18" stroke-width="1" />--}}
{{--                            <path d="M51.8063 152.402L28.9479 152.401L-0.0411453 102.195L85.7608 102.198L218.282 331.711L155.339 331.709L51.8063 152.402Z" stroke="#1B1B18" stroke-width="1" />--}}
{{--                        </g>--}}
{{--                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">--}}
{{--                            <path d="M188.467 355.363L188.798 355.363C195.644 348.478 205.969 339.393 219.772 328.11C233.133 316.826 243.181 307.837 249.917 301.144C253.696 297.217 256.792 293.166 259.205 288.991C261.024 285.845 262.455 282.628 263.499 279.341C265.928 271.691 264.768 263.753 260.02 255.529C254.719 246.349 247.265 238.985 237.657 233.438C228.16 227.7 218.111 224.831 207.51 224.83C197.13 224.83 190.339 227.603 187.137 233.149C183.824 238.504 184.929 245.963 190.45 255.527L125.851 255.524C116.574 239.458 112.598 225.114 113.923 212.491C114.615 206.836 116.261 201.756 118.859 197.253C122.061 191.704 126.709 187.03 132.805 183.229C143.958 176.153 158.81 172.615 177.362 172.616C196.797 172.617 216.067 176.156 235.171 183.233C254.164 190.119 271.502 199.874 287.183 212.497C302.864 225.121 315.343 239.466 324.62 255.532C333.233 270.45 337.044 283.551 336.05 294.835C335.46 303.459 333.16 311.245 329.151 318.194C327.915 320.337 326.515 322.4 324.953 324.384C318.549 332.799 308.611 343.127 295.139 355.367L377.297 355.37L406.121 405.289L217.29 405.282L188.467 355.363Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />--}}
{{--                            <path d="M9.32197 225.972L-13.5365 225.971L-42.5255 175.765L43.2765 175.768L175.798 405.282L112.854 405.279L9.32197 225.972Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />--}}
{{--                            <path d="M345.247 111.915C329.566 99.2919 312.229 89.5371 293.235 82.6512L235.167 183.228C254.161 190.114 271.498 199.869 287.179 212.492L345.247 111.915Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />--}}
{{--                            <path d="M382.686 154.964C373.41 138.898 360.931 124.553 345.25 111.93L287.182 212.506C302.863 225.13 315.342 239.475 324.618 255.541L382.686 154.964Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />--}}
{{--                            <path d="M293.243 82.6472C274.139 75.57 254.869 72.031 235.434 72.0303L177.366 172.607C196.801 172.608 216.071 176.147 235.175 183.224L293.243 82.6472Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />--}}
{{--                            <path d="M394.118 194.257C395.112 182.973 391.301 169.872 382.688 154.953L324.619 255.53C333.233 270.448 337.044 283.55 336.05 294.834L394.118 194.257Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />--}}
{{--                            <path d="M235.432 72.0311C216.88 72.0304 202.027 75.5681 190.875 82.6442L132.806 183.221C143.959 176.145 158.812 172.607 177.363 172.608L235.432 72.0311Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />--}}
{{--                            <path d="M265.59 124.25C276.191 124.251 286.24 127.12 295.737 132.858L237.669 233.435C228.172 227.697 218.123 224.828 207.522 224.827L265.59 124.25Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />--}}
{{--                            <path d="M295.719 132.859C305.326 138.406 312.78 145.77 318.081 154.95L260.013 255.527C254.712 246.347 247.258 238.983 237.651 233.436L295.719 132.859Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />--}}
{{--                            <path d="M387.218 217.608C391.227 210.66 393.527 202.874 394.117 194.25L336.049 294.827C335.459 303.451 333.159 311.237 329.15 318.185L387.218 217.608Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />--}}
{{--                            <path d="M245.211 132.577C248.413 127.03 255.204 124.257 265.584 124.258L207.516 224.835C197.136 224.834 190.345 227.607 187.143 233.154L245.211 132.577Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />--}}
{{--                            <path d="M318.094 154.945C322.842 163.17 324.002 171.107 321.573 178.757L263.505 279.334C265.934 271.684 264.774 263.746 260.026 255.522L318.094 154.945Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />--}}
{{--                            <path d="M176.925 96.6737C180.127 91.1249 184.776 86.4503 190.871 82.6499L132.803 183.227C126.708 187.027 122.059 191.702 118.857 197.25L176.925 96.6737Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />--}}
{{--                            <path d="M387.226 217.606C385.989 219.749 384.59 221.813 383.028 223.797L324.96 324.373C326.522 322.39 327.921 320.326 329.157 318.183L387.226 217.606Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />--}}
{{--                            <path d="M317.269 188.408C319.087 185.262 320.519 182.045 321.562 178.758L263.494 279.335C262.451 282.622 261.019 285.839 259.201 288.985L317.269 188.408Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />--}}
{{--                            <path d="M245.208 132.573C241.895 137.928 243 145.387 248.522 154.95L190.454 255.527C184.932 245.964 183.827 238.505 187.14 233.15L245.208 132.573Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />--}}
{{--                            <path d="M176.93 96.6719C174.331 101.175 172.686 106.255 171.993 111.91L113.925 212.487C114.618 206.831 116.263 201.752 118.862 197.249L176.93 96.6719Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />--}}
{{--                            <path d="M317.266 188.413C314.853 192.589 311.757 196.64 307.978 200.566L249.91 301.143C253.689 297.216 256.785 293.166 259.198 288.99L317.266 188.413Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />--}}
{{--                            <path d="M464.198 304.708L435.375 254.789L377.307 355.366L406.13 405.285L464.198 304.708Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />--}}
{{--                            <path d="M353.209 254.787C366.68 242.548 376.618 232.22 383.023 223.805L324.955 324.382C318.55 332.797 308.612 343.124 295.141 355.364L353.209 254.787Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />--}}
{{--                            <path d="M435.37 254.787L353.212 254.784L295.144 355.361L377.302 355.364L435.37 254.787Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />--}}
{{--                            <path d="M183.921 154.947L248.521 154.95L190.453 255.527L125.853 255.524L183.921 154.947Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />--}}
{{--                            <path d="M171.992 111.914C170.668 124.537 174.643 138.881 183.92 154.947L125.852 255.524C116.575 239.458 112.599 225.114 113.924 212.491L171.992 111.914Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />--}}
{{--                            <path d="M307.987 200.562C301.251 207.256 291.203 216.244 277.842 227.528L219.774 328.105C233.135 316.821 243.183 307.832 249.919 301.139L307.987 200.562Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />--}}
{{--                            <path d="M15.5469 75.1797L44.5359 125.386L-13.5321 225.963L-42.5212 175.756L15.5469 75.1797Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />--}}
{{--                            <path d="M277.836 227.536C264.033 238.82 253.708 247.904 246.862 254.789L188.794 355.366C195.64 348.481 205.965 339.397 219.768 328.113L277.836 227.536Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />--}}
{{--                            <path d="M275.358 304.706L464.189 304.713L406.12 405.29L217.29 405.283L275.358 304.706Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />--}}
{{--                            <path d="M44.5279 125.39L67.3864 125.39L9.31834 225.967L-13.5401 225.966L44.5279 125.39Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />--}}
{{--                            <path d="M101.341 75.1911L233.863 304.705L175.795 405.282L43.2733 175.768L101.341 75.1911ZM15.5431 75.19L-42.525 175.767L43.277 175.77L101.345 75.1932L15.5431 75.19Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />--}}
{{--                            <path d="M246.866 254.784L246.534 254.784L188.466 355.361L188.798 355.361L246.866 254.784Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />--}}
{{--                            <path d="M246.539 254.781L275.362 304.701L217.294 405.277L188.471 355.358L246.539 254.781Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />--}}
{{--                            <path d="M67.3906 125.391L170.923 304.698L112.855 405.275L9.32257 225.967L67.3906 125.391Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />--}}
{{--                            <path d="M170.921 304.699L233.865 304.701L175.797 405.278L112.853 405.276L170.921 304.699Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />--}}
{{--                        </g>--}}
{{--                        <g style="mix-blend-mode: hard-light" class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">--}}
{{--                            <path d="M246.544 254.79L246.875 254.79C253.722 247.905 264.046 238.82 277.849 227.537C291.21 216.253 301.259 207.264 307.995 200.57C314.62 193.685 319.147 186.418 321.577 178.768C324.006 171.117 322.846 163.18 318.097 154.956C312.796 145.775 305.342 138.412 295.735 132.865C286.238 127.127 276.189 124.258 265.588 124.257C255.208 124.257 248.416 127.03 245.214 132.576C241.902 137.931 243.006 145.39 248.528 154.953L183.928 154.951C174.652 138.885 170.676 124.541 172 111.918C173.546 99.2946 179.84 89.5408 190.882 82.6559C202.035 75.5798 216.887 72.0421 235.439 72.0428C254.874 72.0435 274.144 75.5825 293.248 82.6598C312.242 89.5457 329.579 99.3005 345.261 111.924C360.942 124.548 373.421 138.892 382.697 154.958C391.311 169.877 395.121 182.978 394.128 194.262C393.355 205.546 389.656 215.396 383.031 223.811C376.627 232.226 366.688 242.554 353.217 254.794L435.375 254.797L464.198 304.716L275.367 304.709L246.544 254.79Z" fill="#F0ACB8" />--}}
{{--                            <path d="M246.544 254.79L246.875 254.79C253.722 247.905 264.046 238.82 277.849 227.537C291.21 216.253 301.259 207.264 307.995 200.57C314.62 193.685 319.147 186.418 321.577 178.768C324.006 171.117 322.846 163.18 318.097 154.956C312.796 145.775 305.342 138.412 295.735 132.865C286.238 127.127 276.189 124.258 265.588 124.257C255.208 124.257 248.416 127.03 245.214 132.576C241.902 137.931 243.006 145.39 248.528 154.953L183.928 154.951C174.652 138.885 170.676 124.541 172 111.918C173.546 99.2946 179.84 89.5408 190.882 82.6559C202.035 75.5798 216.887 72.0421 235.439 72.0428C254.874 72.0435 274.144 75.5825 293.248 82.6598C312.242 89.5457 329.579 99.3005 345.261 111.924C360.942 124.548 373.421 138.892 382.697 154.958C391.311 169.877 395.121 182.978 394.128 194.262C393.355 205.546 389.656 215.396 383.031 223.811C376.627 232.226 366.688 242.554 353.217 254.794L435.375 254.797L464.198 304.716L275.367 304.709L246.544 254.79Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="round" />--}}
{{--                        </g>--}}
{{--                        <g style="mix-blend-mode: hard-light" class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">--}}
{{--                            <path d="M67.41 125.402L44.5515 125.401L15.5625 75.1953L101.364 75.1985L233.886 304.712L170.942 304.71L67.41 125.402Z" fill="#F0ACB8" />--}}
{{--                            <path d="M67.41 125.402L44.5515 125.401L15.5625 75.1953L101.364 75.1985L233.886 304.712L170.942 304.71L67.41 125.402Z" stroke="#1B1B18" stroke-width="1" />--}}
{{--                        </g>--}}
{{--                    </svg>--}}

{{--                    --}}{{-- Dark Mode 12 SVG --}}
{{--                    <svg class="w-[448px] max-w-none relative -mt-[4.9rem] -ml-8 lg:ml-0 lg:-mt-[6.6rem] hidden" viewBox="0 0 440 376" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">--}}
{{--                            <path d="M188.263 355.73L188.595 355.73C195.441 348.845 205.766 339.761 219.569 328.477C232.93 317.193 242.978 308.205 249.714 301.511C256.34 294.626 260.867 287.358 263.296 279.708C265.725 272.058 264.565 264.121 259.816 255.896C254.516 246.716 247.062 239.352 237.454 233.805C227.957 228.067 217.908 225.198 207.307 225.198C196.927 225.197 190.136 227.97 186.934 233.516C183.621 238.872 184.726 246.331 190.247 255.894L125.647 255.891C116.371 239.825 112.395 225.481 113.72 212.858C115.265 200.235 121.559 190.481 132.602 183.596C143.754 176.52 158.607 172.982 177.159 172.983C196.594 172.984 215.863 176.523 234.968 183.6C253.961 190.486 271.299 200.241 286.98 212.864C302.661 225.488 315.14 239.833 324.416 255.899C333.03 270.817 336.841 283.918 335.847 295.203C335.075 306.487 331.376 316.336 324.75 324.751C318.346 333.167 308.408 343.494 294.936 355.734L377.094 355.737L405.917 405.656L217.087 405.649L188.263 355.73Z" fill="black"/>--}}
{{--                            <path d="M9.11884 226.339L-13.7396 226.338L-42.7286 176.132L43.0733 176.135L175.595 405.649L112.651 405.647L9.11884 226.339Z" fill="black"/>--}}
{{--                            <path d="M188.263 355.73L188.595 355.73C195.441 348.845 205.766 339.761 219.569 328.477C232.93 317.193 242.978 308.205 249.714 301.511C256.34 294.626 260.867 287.358 263.296 279.708C265.725 272.058 264.565 264.121 259.816 255.896C254.516 246.716 247.062 239.352 237.454 233.805C227.957 228.067 217.908 225.198 207.307 225.198C196.927 225.197 190.136 227.97 186.934 233.516C183.621 238.872 184.726 246.331 190.247 255.894L125.647 255.891C116.371 239.825 112.395 225.481 113.72 212.858C115.265 200.235 121.559 190.481 132.602 183.596C143.754 176.52 158.607 172.982 177.159 172.983C196.594 172.984 215.863 176.523 234.968 183.6C253.961 190.486 271.299 200.241 286.98 212.864C302.661 225.488 315.14 239.833 324.416 255.899C333.03 270.817 336.841 283.918 335.847 295.203C335.075 306.487 331.376 316.336 324.75 324.751C318.346 333.167 308.408 343.494 294.936 355.734L377.094 355.737L405.917 405.656L217.087 405.649L188.263 355.73Z" stroke="#FF750F" stroke-width="1"/>--}}
{{--                            <path d="M9.11884 226.339L-13.7396 226.338L-42.7286 176.132L43.0733 176.135L175.595 405.649L112.651 405.647L9.11884 226.339Z" stroke="#FF750F" stroke-width="1"/>--}}
{{--                            <path d="M204.592 327.449L204.923 327.449C211.769 320.564 222.094 311.479 235.897 300.196C249.258 288.912 259.306 279.923 266.042 273.23C272.668 266.345 277.195 259.077 279.624 251.427C282.053 243.777 280.893 235.839 276.145 227.615C270.844 218.435 263.39 211.071 253.782 205.524C244.285 199.786 234.236 196.917 223.635 196.916C213.255 196.916 206.464 199.689 203.262 205.235C199.949 210.59 201.054 218.049 206.575 227.612L141.975 227.61C132.699 211.544 128.723 197.2 130.048 184.577C131.593 171.954 137.887 162.2 148.93 155.315C160.083 148.239 174.935 144.701 193.487 144.702C212.922 144.703 232.192 148.242 251.296 155.319C270.289 162.205 287.627 171.96 303.308 184.583C318.989 197.207 331.468 211.552 340.745 227.618C349.358 242.536 353.169 255.637 352.175 266.921C351.403 278.205 347.704 288.055 341.078 296.47C334.674 304.885 324.736 315.213 311.264 327.453L393.422 327.456L422.246 377.375L233.415 377.368L204.592 327.449Z" fill="#391800"/>--}}
{{--                            <path d="M25.447 198.058L2.58852 198.057L-26.4005 147.851L59.4015 147.854L191.923 377.368L128.979 377.365L25.447 198.058Z" fill="#391800"/>--}}
{{--                            <path d="M204.592 327.449L204.923 327.449C211.769 320.564 222.094 311.479 235.897 300.196C249.258 288.912 259.306 279.923 266.042 273.23C272.668 266.345 277.195 259.077 279.624 251.427C282.053 243.777 280.893 235.839 276.145 227.615C270.844 218.435 263.39 211.071 253.782 205.524C244.285 199.786 234.236 196.917 223.635 196.916C213.255 196.916 206.464 199.689 203.262 205.235C199.949 210.59 201.054 218.049 206.575 227.612L141.975 227.61C132.699 211.544 128.723 197.2 130.048 184.577C131.593 171.954 137.887 162.2 148.93 155.315C160.083 148.239 174.935 144.701 193.487 144.702C212.922 144.703 232.192 148.242 251.296 155.319C270.289 162.205 287.627 171.96 303.308 184.583C318.989 197.207 331.468 211.552 340.745 227.618C349.358 242.536 353.169 255.637 352.175 266.921C351.403 278.205 347.704 288.055 341.078 296.47C334.674 304.885 324.736 315.213 311.264 327.453L393.422 327.456L422.246 377.375L233.415 377.368L204.592 327.449Z" stroke="#FF750F" stroke-width="1"/>--}}
{{--                            <path d="M25.447 198.058L2.58852 198.057L-26.4005 147.851L59.4015 147.854L191.923 377.368L128.979 377.365L25.447 198.058Z" stroke="#FF750F" stroke-width="1"/>--}}
{{--                        </g>--}}
{{--                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4" style="mix-blend-mode:hard-light">--}}
{{--                            <path d="M217.342 305.363L217.673 305.363C224.519 298.478 234.844 289.393 248.647 278.11C262.008 266.826 272.056 257.837 278.792 251.144C285.418 244.259 289.945 236.991 292.374 229.341C294.803 221.691 293.643 213.753 288.895 205.529C283.594 196.349 276.14 188.985 266.532 183.438C257.035 177.7 246.986 174.831 236.385 174.83C226.005 174.83 219.214 177.603 216.012 183.149C212.699 188.504 213.804 195.963 219.325 205.527L154.725 205.524C145.449 189.458 141.473 175.114 142.798 162.491C144.343 149.868 150.637 140.114 161.68 133.229C172.833 126.153 187.685 122.615 206.237 122.616C225.672 122.617 244.942 126.156 264.046 133.233C283.039 140.119 300.377 149.874 316.058 162.497C331.739 175.121 344.218 189.466 353.495 205.532C362.108 220.45 365.919 233.551 364.925 244.835C364.153 256.12 360.454 265.969 353.828 274.384C347.424 282.799 337.486 293.127 324.014 305.367L406.172 305.37L434.996 355.289L246.165 355.282L217.342 305.363Z" fill="#733000"/>--}}
{{--                            <path d="M38.197 175.972L15.3385 175.971L-13.6505 125.765L72.1515 125.768L204.673 355.282L141.729 355.279L38.197 175.972Z" fill="#733000"/>--}}
{{--                            <path d="M217.342 305.363L217.673 305.363C224.519 298.478 234.844 289.393 248.647 278.11C262.008 266.826 272.056 257.837 278.792 251.144C285.418 244.259 289.945 236.991 292.374 229.341C294.803 221.691 293.643 213.753 288.895 205.529C283.594 196.349 276.14 188.985 266.532 183.438C257.035 177.7 246.986 174.831 236.385 174.83C226.005 174.83 219.214 177.603 216.012 183.149C212.699 188.504 213.804 195.963 219.325 205.527L154.725 205.524C145.449 189.458 141.473 175.114 142.798 162.491C144.343 149.868 150.637 140.114 161.68 133.229C172.833 126.153 187.685 122.615 206.237 122.616C225.672 122.617 244.942 126.156 264.046 133.233C283.039 140.119 300.377 149.874 316.058 162.497C331.739 175.121 344.218 189.466 353.495 205.532C362.108 220.45 365.919 233.551 364.925 244.835C364.153 256.12 360.454 265.969 353.828 274.384C347.424 282.799 337.486 293.127 324.014 305.367L406.172 305.37L434.996 355.289L246.165 355.282L217.342 305.363Z" stroke="#FF750F" stroke-width="1"/>--}}
{{--                            <path d="M38.197 175.972L15.3385 175.971L-13.6505 125.765L72.1515 125.768L204.673 355.282L141.729 355.279L38.197 175.972Z" stroke="#FF750F" stroke-width="1"/>--}}
{{--                        </g>--}}
{{--                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">--}}
{{--                            <path d="M217.342 305.363L217.673 305.363C224.519 298.478 234.844 289.393 248.647 278.11C262.008 266.826 272.056 257.837 278.792 251.144C285.418 244.259 289.945 236.991 292.374 229.341C294.803 221.691 293.643 213.753 288.895 205.529C283.594 196.349 276.14 188.985 266.532 183.438C257.035 177.7 246.986 174.831 236.385 174.83C226.005 174.83 219.214 177.603 216.012 183.149C212.699 188.504 213.804 195.963 219.325 205.527L154.726 205.524C145.449 189.458 141.473 175.114 142.798 162.491C144.343 149.868 150.637 140.114 161.68 133.229C172.833 126.153 187.685 122.615 206.237 122.616C225.672 122.617 244.942 126.156 264.046 133.233C283.039 140.119 300.377 149.874 316.058 162.497C331.739 175.121 344.218 189.466 353.495 205.532C362.108 220.45 365.919 233.551 364.925 244.835C364.153 256.12 360.454 265.969 353.828 274.384C347.424 282.799 337.486 293.127 324.014 305.367L406.172 305.37L434.996 355.289L246.165 355.282L217.342 305.363Z" stroke="#FF750F" stroke-width="1"/>--}}
{{--                            <path d="M38.197 175.972L15.3385 175.971L-13.6505 125.765L72.1515 125.768L204.673 355.282L141.729 355.279L38.197 175.972Z" stroke="#FF750F" stroke-width="1"/>--}}
{{--                        </g>--}}
{{--                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">--}}
{{--                            <path d="M188.467 355.363L188.798 355.363C195.644 348.478 205.969 339.393 219.772 328.11C233.133 316.826 243.181 307.837 249.917 301.144C253.696 297.217 256.792 293.166 259.205 288.991C261.024 285.845 262.455 282.628 263.499 279.341C265.928 271.691 264.768 263.753 260.02 255.529C254.719 246.349 247.265 238.985 237.657 233.438C228.16 227.7 218.111 224.831 207.51 224.83C197.13 224.83 190.339 227.603 187.137 233.149C183.824 238.504 184.929 245.963 190.45 255.527L125.851 255.524C116.574 239.458 112.598 225.114 113.923 212.491C114.615 206.836 116.261 201.756 118.859 197.253C122.061 191.704 126.709 187.03 132.805 183.229C143.958 176.153 158.81 172.615 177.362 172.616C196.797 172.617 216.067 176.156 235.171 183.233C254.164 190.119 271.502 199.874 287.183 212.497C302.864 225.121 315.343 239.466 324.62 255.532C333.233 270.45 337.044 283.551 336.05 294.835C335.46 303.459 333.16 311.245 329.151 318.194C327.915 320.337 326.515 322.4 324.953 324.384C318.549 332.799 308.611 343.127 295.139 355.367L377.297 355.37L406.121 405.289L217.29 405.282L188.467 355.363Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>--}}
{{--                            <path d="M9.32197 225.972L-13.5365 225.971L-42.5255 175.765L43.2765 175.768L175.798 405.282L112.854 405.279L9.32197 225.972Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>--}}
{{--                            <path d="M345.247 111.915C329.566 99.2919 312.229 89.5371 293.235 82.6512L235.167 183.228C254.161 190.114 271.498 199.869 287.179 212.492L345.247 111.915Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>--}}
{{--                            <path d="M382.686 154.964C373.41 138.898 360.931 124.553 345.25 111.93L287.182 212.506C302.863 225.13 315.342 239.475 324.618 255.541L382.686 154.964Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>--}}
{{--                            <path d="M293.243 82.6472C274.139 75.57 254.869 72.031 235.434 72.0303L177.366 172.607C196.801 172.608 216.071 176.147 235.175 183.224L293.243 82.6472Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>--}}
{{--                            <path d="M394.118 194.257C395.112 182.973 391.301 169.872 382.688 154.953L324.619 255.53C333.233 270.448 337.044 283.55 336.05 294.834L394.118 194.257Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>--}}
{{--                            <path d="M235.432 72.0311C216.88 72.0304 202.027 75.5681 190.875 82.6442L132.806 183.221C143.959 176.145 158.812 172.607 177.363 172.608L235.432 72.0311Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>--}}
{{--                            <path d="M265.59 124.25C276.191 124.251 286.24 127.12 295.737 132.858L237.669 233.435C228.172 227.697 218.123 224.828 207.522 224.827L265.59 124.25Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>--}}
{{--                            <path d="M295.719 132.859C305.326 138.406 312.78 145.77 318.081 154.95L260.013 255.527C254.712 246.347 247.258 238.983 237.651 233.436L295.719 132.859Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>--}}
{{--                            <path d="M387.218 217.608C391.227 210.66 393.527 202.874 394.117 194.25L336.049 294.827C335.459 303.451 333.159 311.237 329.15 318.185L387.218 217.608Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>--}}
{{--                            <path d="M245.211 132.577C248.413 127.03 255.204 124.257 265.584 124.258L207.516 224.835C197.136 224.834 190.345 227.607 187.143 233.154L245.211 132.577Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>--}}
{{--                            <path d="M318.094 154.945C322.842 163.17 324.002 171.107 321.573 178.757L263.505 279.334C265.934 271.684 264.774 263.746 260.026 255.522L318.094 154.945Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>--}}
{{--                            <path d="M176.925 96.6737C180.127 91.1249 184.776 86.4503 190.871 82.6499L132.803 183.227C126.708 187.027 122.059 191.702 118.857 197.25L176.925 96.6737Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>--}}
{{--                            <path d="M387.226 217.606C385.989 219.749 384.59 221.813 383.028 223.797L324.96 324.373C326.522 322.39 327.921 320.326 329.157 318.183L387.226 217.606Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>--}}
{{--                            <path d="M317.269 188.408C319.087 185.262 320.519 182.045 321.562 178.758L263.494 279.335C262.451 282.622 261.019 285.839 259.201 288.985L317.269 188.408Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>--}}
{{--                            <path d="M245.208 132.573C241.895 137.928 243 145.387 248.522 154.95L190.454 255.527C184.932 245.964 183.827 238.505 187.14 233.15L245.208 132.573Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>--}}
{{--                            <path d="M176.93 96.6719C174.331 101.175 172.686 106.255 171.993 111.91L113.925 212.487C114.618 206.831 116.263 201.752 118.862 197.249L176.93 96.6719Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>--}}
{{--                            <path d="M317.266 188.413C314.853 192.589 311.757 196.64 307.978 200.566L249.91 301.143C253.689 297.216 256.785 293.166 259.198 288.99L317.266 188.413Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>--}}
{{--                            <path d="M464.198 304.708L435.375 254.789L377.307 355.366L406.13 405.285L464.198 304.708Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>--}}
{{--                            <path d="M353.209 254.787C366.68 242.548 376.618 232.22 383.023 223.805L324.955 324.382C318.55 332.797 308.612 343.124 295.141 355.364L353.209 254.787Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>--}}
{{--                            <path d="M435.37 254.787L353.212 254.784L295.144 355.361L377.302 355.364L435.37 254.787Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>--}}
{{--                            <path d="M183.921 154.947L248.521 154.95L190.453 255.527L125.853 255.524L183.921 154.947Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>--}}
{{--                            <path d="M171.992 111.914C170.668 124.537 174.643 138.881 183.92 154.947L125.852 255.524C116.575 239.458 112.599 225.114 113.924 212.491L171.992 111.914Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>--}}
{{--                            <path d="M307.987 200.562C301.251 207.256 291.203 216.244 277.842 227.528L219.774 328.105C233.135 316.821 243.183 307.832 249.919 301.139L307.987 200.562Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>--}}
{{--                            <path d="M15.5469 75.1797L44.5359 125.386L-13.5321 225.963L-42.5212 175.756L15.5469 75.1797Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>--}}
{{--                            <path d="M277.836 227.536C264.033 238.82 253.708 247.904 246.862 254.789L188.794 355.366C195.64 348.481 205.965 339.397 219.768 328.113L277.836 227.536Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>--}}
{{--                            <path d="M275.358 304.706L464.189 304.713L406.12 405.29L217.29 405.283L275.358 304.706Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>--}}
{{--                            <path d="M44.5279 125.39L67.3864 125.39L9.31834 225.967L-13.5401 225.966L44.5279 125.39Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>--}}
{{--                            <path d="M101.341 75.1911L233.863 304.705L175.795 405.282L43.2733 175.768L101.341 75.1911ZM15.5431 75.19L-42.525 175.767L43.277 175.77L101.345 75.1932L15.5431 75.19Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>--}}
{{--                            <path d="M246.866 254.784L246.534 254.784L188.466 355.361L188.798 355.361L246.866 254.784Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>--}}
{{--                            <path d="M246.539 254.781L275.362 304.701L217.294 405.277L188.471 355.358L246.539 254.781Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>--}}
{{--                            <path d="M67.3906 125.391L170.923 304.698L112.855 405.275L9.32257 225.967L67.3906 125.391Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>--}}
{{--                            <path d="M170.921 304.699L233.865 304.701L175.797 405.278L112.853 405.276L170.921 304.699Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>--}}
{{--                        </g>--}}
{{--                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4" style="mix-blend-mode:hard-light">--}}
{{--                            <path d="M246.544 254.79L246.875 254.79C253.722 247.905 264.046 238.82 277.849 227.537C291.21 216.253 301.259 207.264 307.995 200.57C314.62 193.685 319.147 186.418 321.577 178.768C324.006 171.117 322.846 163.18 318.097 154.956C312.796 145.775 305.342 138.412 295.735 132.865C286.238 127.127 276.189 124.258 265.588 124.257C255.208 124.257 248.416 127.03 245.214 132.576C241.902 137.931 243.006 145.39 248.528 154.953L183.928 154.951C174.652 138.885 170.676 124.541 172 111.918C173.546 99.2946 179.84 89.5408 190.882 82.6559C202.035 75.5798 216.887 72.0421 235.439 72.0428C254.874 72.0435 274.144 75.5825 293.248 82.6598C312.242 89.5457 329.579 99.3005 345.261 111.924C360.942 124.548 373.421 138.892 382.697 154.958C391.311 169.877 395.121 182.978 394.128 194.262C393.355 205.546 389.656 215.396 383.031 223.811C376.627 232.226 366.688 242.554 353.217 254.794L435.375 254.797L464.198 304.716L275.367 304.709L246.544 254.79Z" fill="#4B0600"/>--}}
{{--                            <path d="M246.544 254.79L246.875 254.79C253.722 247.905 264.046 238.82 277.849 227.537C291.21 216.253 301.259 207.264 307.995 200.57C314.62 193.685 319.147 186.418 321.577 178.768C324.006 171.117 322.846 163.18 318.097 154.956C312.796 145.775 305.342 138.412 295.735 132.865C286.238 127.127 276.189 124.258 265.588 124.257C255.208 124.257 248.416 127.03 245.214 132.576C241.902 137.931 243.006 145.39 248.528 154.953L183.928 154.951C174.652 138.885 170.676 124.541 172 111.918C173.546 99.2946 179.84 89.5408 190.882 82.6559C202.035 75.5798 216.887 72.0421 235.439 72.0428C254.874 72.0435 274.144 75.5825 293.248 82.6598C312.242 89.5457 329.579 99.3005 345.261 111.924C360.942 124.548 373.421 138.892 382.697 154.958C391.311 169.877 395.121 182.978 394.128 194.262C393.355 205.546 389.656 215.396 383.031 223.811C376.627 232.226 366.688 242.554 353.217 254.794L435.375 254.797L464.198 304.716L275.367 304.709L246.544 254.79Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="round"/>--}}
{{--                        </g>--}}
{{--                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4" style="mix-blend-mode:hard-light">--}}
{{--                            <path d="M67.41 125.402L44.5515 125.401L15.5625 75.1953L101.364 75.1985L233.886 304.712L170.942 304.71L67.41 125.402Z" fill="#4B0600"/>--}}
{{--                            <path d="M67.41 125.402L44.5515 125.401L15.5625 75.1953L101.364 75.1985L233.886 304.712L170.942 304.71L67.41 125.402Z" stroke="#FF750F" stroke-width="1"/>--}}
{{--                        </g>--}}
{{--                    </svg>--}}
{{--                    <div class="absolute inset-0 rounded-t-lg lg:rounded-t-none lg:rounded-r-lg shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)]"></div>--}}
{{--                </div>--}}
{{--            </main>--}}
{{--        </div>--}}

{{--        @if (Route::has('login'))--}}
{{--            <div class="h-14.5 hidden lg:block"></div>--}}
{{--        @endif--}}
{{--    </body>--}}
{{--</html>--}}
