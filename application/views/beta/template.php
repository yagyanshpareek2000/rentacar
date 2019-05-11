<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Ahmet DALDEMİR">
    <link rel="icon" href="favicon.html">
    <title>SinCms</title>
    <link href="<?= base_url() ?>backend/css/app.css" rel="stylesheet">
    <link href="<?= base_url() ?>backend/css/custom.css" rel="stylesheet">
    <script src="<?= base_url() ?>backend/js/app.js"></script>
    <script src="<?= base_url() ?>backend/js/custom.js"></script>

</head>
<body class="theme-blue">
<div class="splash active">
    <div class="splash-icon"></div>
</div>
<div class="wrapper">
    <nav id="sidebar" class="sidebar">
        <a class="sidebar-brand" href="<?= base_url() ?>">
            <svg>
                <use xlink:href="#ion-ios-pulse-strong"></use>
            </svg>
            Artı Rent A Car
        </a>
        <div class="sidebar-content">
            <div class="sidebar-user">
                <div class="font-weight-bold">Linda Miller</div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-header">
                    Main
                </li>
                <li class="sidebar-item active">
                    <a class="sidebar-link" href="<?= base_url() ?>">
                        <i class="align-middle mr-2 fas fa-fw fa-home" style="font-size: 1.5em;"></i> <span
                                class="align-middle">Anasayfa</span>
                    </a>
                </li>
                <li class="sidebar-header">
                    Ürünler
                </li>
                <li class="sidebar-item">
                    <a href="#ui" data-toggle="collapse" class="sidebar-link collapsed">
                        <i class="align-middle mr-2 fas fa-fw fa-hotel " style="font-size: 1.5em;"></i> <span
                                class="align-middle">Otel Yönetimi</span>
                    </a>
                    <ul id="ui" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                        <li class="sidebar-item"><a class="sidebar-link" href=""><i
                                        class="align-middle mr-2 fas fa-fw fa-arrow-right"></i> Oteller</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href=""><i
                                        class="align-middle mr-2 fas fa-fw fa-arrow-right"></i> Destinations</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href=""><i
                                        class="align-middle mr-2 fas fa-fw fa-arrow-right"></i> Temalar</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href=""><i
                                        class="align-middle mr-2 fas fa-fw fa-arrow-right"></i> Konaklama Tipi</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href=""><i
                                        class="align-middle mr-2 fas fa-fw fa-arrow-right"></i> Hizmetler</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href=""><i
                                        class="align-middle mr-2 fas fa-fw fa-arrow-right"></i> Ekstra Hizmetler</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#charts" data-toggle="collapse" class="sidebar-link collapsed">
                        <i class="align-middle mr-2 fab fa-fw fa-reacteurope " style="font-size: 1.5em;"></i> <span
                                class="align-middle">Tur Yönetimi</span>
                        <span class="sidebar-badge badge badge-pill badge-primary">New</span>
                    </a>
                    <ul id="charts" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                        <li class="sidebar-item"><a class="sidebar-link" href="#"><i
                                        class="align-middle mr-2 fas fa-fw fa-arrow-right"></i> Turlar</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="#"><i
                                        class="align-middle mr-2 fas fa-fw fa-arrow-right"></i> Destinations</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="#"><i
                                        class="align-middle mr-2 fas fa-fw fa-arrow-right"></i> Temalar</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="#"><i
                                        class="align-middle mr-2 fas fa-fw fa-arrow-right"></i> Ulaşım Tipleri</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="#"><i
                                        class="align-middle mr-2 fas fa-fw fa-arrow-right"></i> Dönemler</a></li>
                    </ul>
                </li>

                <li class="sidebar-item">
                    <a href="#forms" data-toggle="collapse" class="sidebar-link collapsed">
                        <i class="align-middle mr-2 fas fa-fw fa-shuttle-van " style="font-size: 1.5em;"></i> <span
                                class="align-middle">Transfer Yönetimi</span>
                    </a>
                    <ul id="forms" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                        <li class="sidebar-item"><a class="sidebar-link" href="#">Transferler</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="#">Fiyatlandırma</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="#">Araçlar</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="#">Şöförler</a></li>

                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#tables" data-toggle="collapse" class="sidebar-link collapsed">
                        <i class="align-middle mr-2 fas fa-fw fa-plane " style="font-size: 1.5em;"></i> <span
                                class="align-middle">Uçak Yönetimi</span>
                    </a>
                    <ul id="tables" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                        <li class="sidebar-item"><a class="sidebar-link" href="#">Uçuşlar</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="#">Havalimanları</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="#">Havayolları</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="#">Fiyatlandırma</a></li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#icons" data-toggle="collapse" class="sidebar-link collapsed">
                        <i class="align-middle mr-2 fas fa-fw fa-bus " style="font-size: 1.5em;"></i> <span
                                class="align-middle">Otobüs Yöneitmi</span>
                    </a>
                    <ul id="icons" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                        <li class="sidebar-item"><a class="sidebar-link" href="#">Seferler</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="#">Güzergahlar</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="#">Fiyatlandırma</a></li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#rentacar" data-toggle="collapse" class="sidebar-link collapsed">
                        <i class="align-middle mr-2 fas fa-fw fa-car " style="font-size: 1.5em;"></i> <span
                                class="align-middle">Rent A Car Yöneitmi</span>
                    </a>
                    <ul id="rentacar" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                        <li class="sidebar-item"><a class="sidebar-link" href="<?= base_url() ?>Backend/Car/index"><i
                                        class="align-middle mr-2 fas fa-fw fa-arrow-right"></i> Araç Tanımı</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="<?= base_url() ?>Backend/Car/category"><i
                                        class="align-middle mr-2 fas fa-fw fa-arrow-right"></i> Kategori Tanımı</a></li>

                        <li class="sidebar-item"><a class="sidebar-link" href="<?= base_url() ?>Backend/Car/driver"><i
                                        class="align-middle mr-2 fas fa-fw fa-arrow-right"></i> Şöför Tanımı</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="<?= base_url() ?>Backend/Car/period"><i
                                        class="align-middle mr-2 fas fa-fw fa-arrow-right"></i> Periyot Tanımı</a></li>
                        <li class="sidebar-item"><a class="sidebar-link"
                                                    href="<?= base_url() ?>Backend/Car/attribute"><i
                                        class="align-middle mr-2 fas fa-fw fa-arrow-right"></i> Özellik Tanımı</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="<?= base_url() ?>Backend/Car/ekstra"><i
                                        class="align-middle mr-2 fas fa-fw fa-arrow-right"></i> Ekstra Tanımı</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="#"><i
                                        class="align-middle mr-2 fas fa-fw fa-arrow-right"></i> Rezervasyon Tanımı</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-header">
                    Ekstralar
                </li>
                <li class="sidebar-item">
                    <a href="#pages" data-toggle="collapse" class="sidebar-link collapsed">
                        <i class="align-middle mr-2 fas fa-fw fa-file" style="font-size: 1.5em;"></i> <span
                                class="align-middle">Online Booking</span>
                    </a>
                    <ul id="pages" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                        <li class="sidebar-item"><a class="sidebar-link" href="#">Rezervayon Yap</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="#">Rezervasyonlar</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="#">Otel Raporları</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="#">Tur Raporları</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="#">Transfer Raporları</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="#">Uçak Raporları</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="#">Otobüs Raporları</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="#">Tren Raporları</a></li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="documentation.html">
                        <i class="align-middle mr-2 fas fa-fw fa-book" style="font-size: 1.5em;"></i> <span
                                class="align-middle">Müşteriler</span>
                    </a>
                </li>
                <li class="sidebar-header">
                    Ayarlar
                </li>
                <li class="sidebar-item">
                    <a href="#pages" data-toggle="collapse" class="sidebar-link collapsed">
                        <i class="align-middle mr-2 fas fa-fw fa-file" style="font-size: 1.5em;"></i> <span
                                class="align-middle">Genel Ayarlar</span>
                    </a>
                    <ul id="pages" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                        <li class="sidebar-item"><a class="sidebar-link" href="<?= base_url() ?>Backend/Site">Site
                                Ayarları</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="#">Dashboard Ayarları</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="<?= base_url() ?>Backend/Slider">Slider Ayarları</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="#">Dil Ayarları</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="#">Sms Ayarları</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="#">Email Ayarları</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="#">Fatura Ayarları</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="#">Seo Ayarları</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="#">Rent A Car Tanımı</a></li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="documentation.html">
                        <i class="align-middle mr-2 fas fa-fw fa-book" style="font-size: 1.5em;"></i> <span
                                class="align-middle">Api Ayarları</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="documentation.html">
                        <i class="align-middle mr-2 fas fa-fw fa-book" style="font-size: 1.5em;"></i> <span
                                class="align-middle">Kullanıcılar</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="main">
        <nav class="navbar navbar-expand navbar-dark">
            <a class="sidebar-toggle d-flex mr-2">
                <i class="hamburger align-self-center"></i>
            </a>

            <form class="form-inline d-none d-sm-inline-block">
                <input class="form-control form-control-lite" type="text" placeholder="Arama...">
            </form>

            <div class="navbar-collapse collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" data-toggle="dropdown">
                            <i class="align-middle fas fa-envelope-open"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0"
                             aria-labelledby="messagesDropdown">
                            <div class="dropdown-menu-header">
                                <div class="position-relative">
                                    4 New Messages
                                </div>
                            </div>
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-2">
                                            <img src="img/avatar-5.jpg" class="avatar img-fluid rounded-circle"
                                                 alt="Michelle Bilodeau">
                                        </div>
                                        <div class="col-10 pl-2">
                                            <div class="text-dark">Michelle Bilodeau</div>
                                            <div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu
                                                tortor.
                                            </div>
                                            <div class="text-muted small mt-1">5m ago</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-2">
                                            <img src="img/avatar-3.jpg" class="avatar img-fluid rounded-circle"
                                                 alt="Kathie Burton">
                                        </div>
                                        <div class="col-10 pl-2">
                                            <div class="text-dark">Kathie Burton</div>
                                            <div class="text-muted small mt-1">Pellentesque auctor neque nec urna.</div>
                                            <div class="text-muted small mt-1">30m ago</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-2">
                                            <img src="img/avatar-2.jpg" class="avatar img-fluid rounded-circle"
                                                 alt="Alexander Groves">
                                        </div>
                                        <div class="col-10 pl-2">
                                            <div class="text-dark">Alexander Groves</div>
                                            <div class="text-muted small mt-1">Curabitur ligula sapien euismod vitae.
                                            </div>
                                            <div class="text-muted small mt-1">2h ago</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-2">
                                            <img src="img/avatar-4.jpg" class="avatar img-fluid rounded-circle"
                                                 alt="Daisy Seger">
                                        </div>
                                        <div class="col-10 pl-2">
                                            <div class="text-dark">Daisy Seger</div>
                                            <div class="text-muted small mt-1">Aenean tellus metus, bibendum sed,
                                                posuere ac, mattis non.
                                            </div>
                                            <div class="text-muted small mt-1">5h ago</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="dropdown-menu-footer">
                                <a href="#" class="text-muted">Show all messages</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown ml-lg-2">
                        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" data-toggle="dropdown">
                            <i class="align-middle fas fa-bell"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0"
                             aria-labelledby="alertsDropdown">
                            <div class="dropdown-menu-header">
                                4 New Notifications
                            </div>
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-2">
                                            <i class="ml-1 text-danger fas fa-fw fa-bell"></i>
                                        </div>
                                        <div class="col-10">
                                            <div class="text-dark">Update completed</div>
                                            <div class="text-muted small mt-1">Restart server 12 to complete the
                                                update.
                                            </div>
                                            <div class="text-muted small mt-1">2h ago</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-2">
                                            <i class="ml-1 text-warning fas fa-fw fa-envelope-open"></i>
                                        </div>
                                        <div class="col-10">
                                            <div class="text-dark">Lorem ipsum</div>
                                            <div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate
                                                hendrerit et.
                                            </div>
                                            <div class="text-muted small mt-1">6h ago</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-2">
                                            <i class="ml-1 text-primary fas fa-fw fa-building"></i>
                                        </div>
                                        <div class="col-10">
                                            <div class="text-dark">Login from 192.186.1.1</div>
                                            <div class="text-muted small mt-1">8h ago</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-2">
                                            <i class="ml-1 text-success fas fa-fw fa-bell-slash"></i>
                                        </div>
                                        <div class="col-10">
                                            <div class="text-dark">New connection</div>
                                            <div class="text-muted small mt-1">Anna accepted your request.</div>
                                            <div class="text-muted small mt-1">12h ago</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="dropdown-menu-footer">
                                <a href="#" class="text-muted">Show all notifications</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown ml-lg-2">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" data-toggle="dropdown">
                            <i class="align-middle fas fa-cog"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#"><i class="align-middle mr-1 fas fa-fw fa-user"></i> View
                                Profile</a>
                            <a class="dropdown-item" href="#"><i class="align-middle mr-1 fas fa-fw fa-comments"></i>
                                Contacts</a>
                            <a class="dropdown-item" href="#"><i class="align-middle mr-1 fas fa-fw fa-chart-pie"></i>
                                Analytics</a>
                            <a class="dropdown-item" href="#"><i class="align-middle mr-1 fas fa-fw fa-cogs"></i>
                                Settings</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i
                                        class="align-middle mr-1 fas fa-fw fa-arrow-alt-circle-right"></i> Sign out</a>
                        </div>
                    </li>
                </ul>
            </div>

        </nav>
        <main class="content">
            <div class="container-fluid">

                <div class="header text-center">
                    <h1 class="header-title">
                        Hoşgeldiniz, Ahmet DALDEMİR
                    </h1>
                </div>
                <?= $contents ?>
            </div>
        </main>
        <footer class="footer">
            <div class="container-fluid">
                <div class="row text-muted">
                    <div class="col-8 text-left">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a class="text-muted" href="#">Support</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="text-muted" href="#">Privacy</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="text-muted" href="#">Terms of Service</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="text-muted" href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-4 text-right">
                        <p class="mb-0">
                            &copy; 2019 - <a href="<?= base_url() ?>" class="text-muted">Spark</a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

</div>

<svg width="0" height="0" style="position:absolute">
    <defs>
        <symbol viewBox="0 0 512 512" id="ion-ios-pulse-strong">
            <path
                    d="M448 273.001c-21.27 0-39.296 13.999-45.596 32.999h-38.857l-28.361-85.417a15.999 15.999 0 0 0-15.183-10.956c-.112 0-.224 0-.335.004a15.997 15.997 0 0 0-15.049 11.588l-44.484 155.262-52.353-314.108C206.535 54.893 200.333 48 192 48s-13.693 5.776-15.525 13.135L115.496 306H16v31.999h112c7.348 0 13.75-5.003 15.525-12.134l45.368-182.177 51.324 307.94c1.229 7.377 7.397 11.92 14.864 12.344.308.018.614.028.919.028 7.097 0 13.406-3.701 15.381-10.594l49.744-173.617 15.689 47.252A16.001 16.001 0 0 0 352 337.999h51.108C409.973 355.999 427.477 369 448 369c26.511 0 48-22.492 48-49 0-26.509-21.489-46.999-48-46.999z">
            </path>
        </symbol>
    </defs>
</svg>

<script>
    $(function () {
        // Line chart
        new Chart(document.getElementById("chartjs-dashboard-line"), {
            type: 'line',
            data: {
                labels: ["Jan", "", "Feb", "", "Mar", "", "Apr", "", "May", "", "Jun", "", "Jul", "", "Aug", "", "Sep", "", "Oct", "", "Nov", "", "Dec", ""],
                datasets: [{
                    label: "Sales ($)",
                    fill: true,
                    backgroundColor: "transparent",
                    borderColor: window.theme.primary,
                    data: [6, 7, 8, 11, 9, 11, 8, 14, 12, 16, 9, 10, 14, 15, 9, 12, 16, 17, 22, 18, 24, 32, 31, 36]
                }, {
                    label: "Orders",
                    fill: true,
                    backgroundColor: "transparent",
                    borderColor: window.theme.tertiary,
                    borderDash: [4, 4],
                    data: [3, 5, 4, 9, 5, 8, 5, 6, 4, 7, 4, 3, 4, 6, 4, 7, 12, 12, 18, 15, 20, 25, 22, 25]
                }]
            },
            options: {
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
                tooltips: {
                    intersect: false
                },
                hover: {
                    intersect: true
                },
                plugins: {
                    filler: {
                        propagate: false
                    }
                },
                scales: {
                    xAxes: [{
                        reverse: true,
                        gridLines: {
                            color: "rgba(0,0,0,0.0)"
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            stepSize: 5
                        },
                        display: true,
                        borderDash: [5, 5],
                        gridLines: {
                            color: "rgba(0,0,0,0)",
                            fontColor: "#fff"
                        }
                    }]
                }
            }
        });
    });
</script>
<script>
    $(function () {
        // Pie chart
        new Chart(document.getElementById("chartjs-dashboard-pie"), {
            type: 'pie',
            data: {
                labels: ["Chrome", "Firefox", "IE", "Other"],
                datasets: [{
                    data: [4401, 4003, 1589],
                    backgroundColor: [
                        window.theme.primary,
                        window.theme.warning,
                        window.theme.danger,
                        "#E8EAED"
                    ],
                    borderColor: "transparent"
                }]
            },
            options: {
                responsive: !window.MSInputMethodContext,
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
                cutoutPercentage: 60
            }
        });
    });
</script>
<script>
    $(function () {
        // Bar chart
        new Chart(document.getElementById("chartjs-dashboard-bar"), {
            type: 'bar',
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Last year",
                    backgroundColor: window.theme.primary,
                    borderColor: window.theme.primary,
                    hoverBackgroundColor: window.theme.primary,
                    hoverBorderColor: window.theme.primary,
                    data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79]
                }, {
                    label: "This year",
                    backgroundColor: "#E8EAED",
                    borderColor: "#E8EAED",
                    hoverBackgroundColor: "#E8EAED",
                    hoverBorderColor: "#E8EAED",
                    data: [69, 66, 24, 48, 52, 51, 44, 53, 62, 79, 51, 68]
                }]
            },
            options: {
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                        gridLines: {
                            display: false
                        },
                        stacked: false,
                        ticks: {
                            stepSize: 20
                        }
                    }],
                    xAxes: [{
                        barPercentage: .75,
                        categoryPercentage: .5,
                        stacked: false,
                        gridLines: {
                            color: "transparent"
                        }
                    }]
                }
            }
        });
    });
</script>
<script>
    $(function () {
        var mapData = {
            "US": 298,
            "SA": 200,
            "DE": 220,
            "FR": 540,
            "CN": 120,
            "AU": 760,
            "BR": 550,
            "IN": 200,
            "GB": 120,
        };
        $('#world_map').vectorMap({
            map: 'world_mill',
            backgroundColor: "transparent",
            zoomOnScroll: false,
            regionStyle: {
                initial: {
                    fill: '#e4e4e4',
                    "fill-opacity": 0.9,
                    stroke: 'none',
                    "stroke-width": 0,
                    "stroke-opacity": 0
                }
            },
            series: {
                regions: [{
                    values: mapData,
                    scale: ["#0a6ebd"],
                    normalizeFunction: 'polynomial'
                }]
            },
        });
    })
</script>
<script>
    $(function () {
        $('#datatables-dashboard').DataTable({
            pageLength: 6,
            lengthChange: false,
            bFilter: false,
            autoWidth: false
        });
    });
</script>
<script>
    $(function () {
        $('#datetimepicker-dashboard').datetimepicker({
            inline: true,
            sideBySide: false,
            format: 'L'
        });
    });
</script>
</body>
</html>