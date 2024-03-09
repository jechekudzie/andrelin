<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>ANDRELIN ENTERPRISES</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="{{ asset('vendors/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendors/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/js/config.js') }}"></script>



    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('vendors/simplebar/simplebar.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link href="{{ asset('assets/css/theme-rtl.min.css') }}" type="text/css" rel="stylesheet" id="style-rtl">
    <link href="{{ asset('assets/css/theme.min.css') }}" type="text/css" rel="stylesheet" id="style-default">
    <link href="{{ asset('assets/css/user-rtl.min.css') }}" type="text/css" rel="stylesheet" id="user-style-rtl">
    <link href="{{ asset('assets/css/user.min.css') }}" type="text/css" rel="stylesheet" id="user-style-default">

    <script>
        var phoenixIsRTL = window.config.config.phoenixIsRTL;
        if (phoenixIsRTL) {
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
    <link href="{{ asset('vendors/leaflet/leaflet.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/leaflet.markercluster/MarkerCluster.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/leaflet.markercluster/MarkerCluster.Default.css') }}" rel="stylesheet">

    <!-- Gijgo config file -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css"/>
    <style>
        .gj-tree-bootstrap-4 ul.gj-list-bootstrap li.active {
            background-color: gray !important;
        }
    </style>
    @stack('head')
</head>


<body>

<!-- ===============================================-->
<!--    Main Content-->
<!-- ===============================================-->
<main class="main" id="top">
    <nav class="navbar navbar-vertical navbar-expand-lg">
        <script>
            var navbarStyle = window.config.config.phoenixNavbarStyle;
            if (navbarStyle && navbarStyle !== 'transparent') {
                document.querySelector('body').classList.add(`navbar-${navbarStyle}`);
            }
        </script>
        <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
            <!-- scrollbar removed-->
            <div class="navbar-vertical-content">
                <ul class="navbar-nav flex-column" id="navbarVerticalNav">
                    <li class="nav-item">
                        <!-- parent pages-->
                        <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-home" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="nv-home">
                                <div class="d-flex align-items-center">
                                    <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span class="nav-link-icon"><span data-feather="pie-chart"></span></span><span class="nav-link-text">Andrelin Enterprises</span>
                                </div>
                            </a>
                            <div class="parent-wrapper label-1">
                                <ul class="nav collapse parent show" data-bs-parent="#navbarVerticalCollapse" id="nv-home">
                                    <li class="collapsed-nav-item-title d-none">Home - Andrelin Enterprises
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ Request::routeIs('admin.organisation-types*') ? 'active' : '' }}" href="{{route('admin.organisation-types.index')}}" data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Organisational Structure</span></div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link {{ Request::routeIs('admin.organisations.index') ? 'active' : '' }}" href="{{route('admin.organisations.index')}}" data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Company Brands</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ Request::routeIs('admin.organisations.manage') ? 'active' : '' }} " href="{{route('admin.organisations.manage')}}" data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Manage Brands</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <!-- label-->
                        <p class="navbar-vertical-label">Apps
                        </p>
                        <hr class="navbar-vertical-line" />
                        <!-- parent pages-->
                        <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-e-commerce" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-e-commerce">
                                <div class="d-flex align-items-center">
                                    <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span class="nav-link-icon"><span data-feather="shopping-cart"></span></span><span class="nav-link-text">E commerce</span>
                                </div>
                            </a>
                            <div class="parent-wrapper label-1">
                                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-e-commerce">
                                    <li class="collapsed-nav-item-title d-none">E commerce
                                    </li>
                                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#nv-admin" data-bs-toggle="collapse" aria-expanded="true" aria-controls="nv-admin">
                                            <div class="d-flex align-items-center">
                                                <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span class="nav-link-text">Admin</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                        <div class="parent-wrapper">
                                            <ul class="nav collapse parent show" data-bs-parent="#e-commerce" id="nv-admin">
                                                <li class="nav-item"><a class="nav-link" href="apps/e-commerce/admin/add-product.html" data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span class="nav-link-text">Add product</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="apps/e-commerce/admin/products.html" data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span class="nav-link-text">Products</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="apps/e-commerce/admin/customers.html" data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span class="nav-link-text">Customers</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="apps/e-commerce/admin/customer-details.html" data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span class="nav-link-text">Customer details</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="apps/e-commerce/admin/orders.html" data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span class="nav-link-text">Orders</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="apps/e-commerce/admin/order-details.html" data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span class="nav-link-text">Order details</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="apps/e-commerce/admin/refund.html" data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span class="nav-link-text">Refund</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <!-- parent pages-->
                        <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-CRM" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-CRM">
                                <div class="d-flex align-items-center">
                                    <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span class="nav-link-icon"><span data-feather="phone"></span></span><span class="nav-link-text">CRM</span><span class="fa-solid fa-circle text-info ms-1 new-page-indicator" style="font-size: 6px"></span>
                                </div>
                            </a>
                            <div class="parent-wrapper label-1">
                                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-CRM">
                                    <li class="collapsed-nav-item-title d-none">CRM
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="apps/crm/analytics.html" data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Analytics</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="apps/crm/deals.html" data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Deals</span><span class="badge ms-2 badge badge-phoenix badge-phoenix-info ">New</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="apps/crm/deal-details.html" data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Deal details</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="apps/crm/leads.html" data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Leads</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="apps/crm/lead-details.html" data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Lead details</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="apps/crm/reports.html" data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Reports</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="apps/crm/reports-details.html" data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Reports details</span><span class="badge ms-2 badge badge-phoenix badge-phoenix-info ">New</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="apps/crm/add-contact.html" data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Add contact</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- parent pages-->
                        <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-project-management" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-project-management">
                                <div class="d-flex align-items-center">
                                    <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span class="nav-link-icon"><span data-feather="clipboard"></span></span><span class="nav-link-text">Project management</span>
                                </div>
                            </a>
                            <div class="parent-wrapper label-1">
                                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-project-management">
                                    <li class="collapsed-nav-item-title d-none">Project management
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="apps/project-management/create-new.html" data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Create new</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="apps/project-management/project-list-view.html" data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Project list view</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="apps/project-management/project-card-view.html" data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Project card view</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="apps/project-management/project-board-view.html" data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Project board view</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="apps/project-management/todo-list.html" data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Todo list</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="apps/project-management/project-details.html" data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Project details</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- parent pages-->
                        <div class="nav-item-wrapper"><a class="nav-link label-1" href="apps/chat.html" role="button" data-bs-toggle="" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="message-square"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Chat</span></span>
                                </div>
                            </a>
                        </div>
                        <!-- parent pages-->
                        <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-email" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-email">
                                <div class="d-flex align-items-center">
                                    <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span class="nav-link-icon"><span data-feather="mail"></span></span><span class="nav-link-text">Email</span>
                                </div>
                            </a>
                            <div class="parent-wrapper label-1">
                                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-email">
                                    <li class="collapsed-nav-item-title d-none">Email
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="apps/email/inbox.html" data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Inbox</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="apps/email/email-detail.html" data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Email detail</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="apps/email/compose.html" data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Compose</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- parent pages-->
                        <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-events" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-events">
                                <div class="d-flex align-items-center">
                                    <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span class="nav-link-icon"><span data-feather="bookmark"></span></span><span class="nav-link-text">Events</span>
                                </div>
                            </a>
                            <div class="parent-wrapper label-1">
                                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-events">
                                    <li class="collapsed-nav-item-title d-none">Events
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="apps/events/create-an-event.html" data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Create an event</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="apps/events/event-detail.html" data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Event detail</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- parent pages-->
                        <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-kanban" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-kanban">
                                <div class="d-flex align-items-center">
                                    <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span class="nav-link-icon"><span data-feather="trello"></span></span><span class="nav-link-text">Kanban</span><span class="fa-solid fa-circle text-info ms-1 new-page-indicator" style="font-size: 6px"></span>
                                </div>
                            </a>
                            <div class="parent-wrapper label-1">
                                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-kanban">
                                    <li class="collapsed-nav-item-title d-none">Kanban
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="apps/kanban/kanban.html" data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Kanban</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="apps/kanban/boards.html" data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Boards</span><span class="badge ms-2 badge badge-phoenix badge-phoenix-info ">New</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="apps/kanban/create-kanban-board.html" data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Create board</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- parent pages-->
                        <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-social" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-social">
                                <div class="d-flex align-items-center">
                                    <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span class="nav-link-icon"><span data-feather="share-2"></span></span><span class="nav-link-text">Social</span>
                                </div>
                            </a>
                            <div class="parent-wrapper label-1">
                                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-social">
                                    <li class="collapsed-nav-item-title d-none">Social
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="apps/social/profile.html" data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Profile</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="apps/social/settings.html" data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Settings</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- parent pages-->
                        <div class="nav-item-wrapper"><a class="nav-link label-1" href="apps/calendar.html" role="button" data-bs-toggle="" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="calendar"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Calendar</span></span>
                                </div>
                            </a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
        <div class="navbar-vertical-footer">
            <button class="btn navbar-vertical-toggle border-0 fw-semi-bold w-100 white-space-nowrap d-flex align-items-center"><span class="uil uil-left-arrow-to-left fs-0"></span><span class="uil uil-arrow-from-right fs-0"></span><span class="navbar-vertical-footer-text ms-2">Collapsed View</span></button>
        </div>
    </nav>

    <nav class="navbar navbar-top fixed-top navbar-expand" id="navbarDefault">
        <div class="collapse navbar-collapse justify-content-between">
            <div class="navbar-logo">

                <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
                <a class="navbar-brand me-1 me-sm-3" href="{{url('/admin')}}">
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center"><img src="assets/img/icons/logo.png" alt="phoenix" width="27" />
                            <p class="logo-text ms-2 d-none d-sm-block">ANDRELIN</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="search-box navbar-top-search-box d-none d-lg-block" data-list='{"valueNames":["title"]}' style="width:25rem;">
                <form class="position-relative" data-bs-toggle="search" data-bs-display="static">
                    <input class="form-control search-input fuzzy-search rounded-pill form-control-sm" type="search" placeholder="Search..." aria-label="Search" />
                    <span class="fas fa-search search-box-icon"></span>

                </form>
                <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none" data-bs-dismiss="search">
                    <button class="btn btn-link btn-close-falcon p-0" aria-label="Close"></button>
                </div>
                <div class="dropdown-menu border border-300 font-base start-0 py-0 overflow-hidden w-100">
                    <div class="scrollbar-overlay" style="max-height: 30rem;">
                        <div class="list pb-3">
                            <h6 class="dropdown-header text-1000 fs--2 py-2">24 <span class="text-500">results</span></h6>
                            <hr class="text-200 my-0" />
                            <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Recently Searched </h6>

                            <hr class="text-200 my-0" />
                            <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Products</h6>
                            <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center" href="apps/e-commerce/landing/product-details.html">
                                    <div class="file-thumbnail me-2"><img class="h-100 w-100 fit-cover rounded-3" src="assets/img/products/60x60/3.png" alt="" /></div>
                                    <div class="flex-1">
                                        <h6 class="mb-0 text-1000 title">Battery</h6>

                                    </div>
                                </a>
                                <a class="dropdown-item py-2 d-flex align-items-center" href="apps/e-commerce/landing/product-details.html">
                                    <div class="file-thumbnail me-2"><img class="img-fluid" src="assets/img/products/60x60/3.png" alt="" /></div>
                                    <div class="flex-1">
                                        <h6 class="mb-0 text-1000 title">Solar Pannels</h6>
                                    </div>
                                </a>

                            </div>
                            <hr class="text-200 my-0" />
                        </div>
                        <div class="text-center">
                            <p class="fallback fw-bold fs-1 d-none">No Result Found.</p>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="navbar-nav navbar-nav-icons flex-row">
                <li class="nav-item">
                    <div class="theme-control-toggle fa-icon-wait px-2">
                        <input class="form-check-input ms-0 theme-control-toggle-input" type="checkbox" data-theme-control="phoenixTheme" value="dark" id="themeControlToggle" />
                        <label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="moon"></span></label>
                        <label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="sun"></span></label>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" style="min-width: 2.5rem" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-auto-close="outside"><span data-feather="bell" style="height:20px;width:20px;"></span></a>

                    <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border border-300 navbar-dropdown-caret" id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
                        <div class="card position-relative border-0">
                            <div class="card-header p-2">
                                <div class="d-flex justify-content-between">
                                    <h5 class="text-black mb-0">Notificatons</h5>
                                    <button class="btn btn-link p-0 fs--1 fw-normal" type="button">Mark all as read</button>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="scrollbar-overlay" style="height: 27rem;">
                                    <div class="border-300">
                                        <div class="px-2 px-sm-3 py-3 border-300 notification-card position-relative read border-bottom">
                                            <div class="d-flex align-items-center justify-content-between position-relative">
                                                <div class="d-flex">
                                                    <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="assets/img/team/40x40/30.webp" alt="" />
                                                    </div>
                                                    <div class="flex-1 me-sm-3">
                                                        <h4 class="fs--1 text-black"> Notification test</h4>
                                                        <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>💬</span>Notification message.<span class="ms-2 text-400 fw-bold fs--2">10m</span></p>
                                                        <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:41 AM </span>date comes here</p>
                                                    </div>
                                                </div>
                                                <div class="font-sans-serif d-none d-sm-block">
                                                    <button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="card-footer p-0 border-top border-0">
                                <div class="my-2 text-center fw-bold fs--2 text-600"><a class="fw-bolder" href="pages/notifications.html">Notification history</a></div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                        <div class="avatar avatar-l ">
                            <img class="rounded-circle " src="assets/img/team/40x40/57.webp" alt="" />

                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border border-300" aria-labelledby="navbarDropdownUser">
                        <div class="card position-relative border-0">
                            <div class="card-body p-0">
                                <div class="text-center pt-4 pb-3">
                                    <div class="avatar avatar-xl ">
                                        <img class="rounded-circle " src="" alt="" />

                                    </div>
                                    <h6 class="mt-2 text-black">Admin</h6>
                                </div>
                                <div class="mb-3 mx-3">
                                    <input class="form-control form-control-sm" id="statusUpdateInput" type="text" placeholder="Update your status" />
                                </div>
                            </div>
                            <div class="overflow-auto scrollbar" style="height: 10rem;">
                                <ul class="nav d-flex flex-column mb-2 pb-1">
                                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="user"></span><span>Profile</span></a></li>
                                    <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900" data-feather="pie-chart"></span>Dashboard</a></li>
                                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="settings"></span>Settings &amp; Privacy </a></li>
                                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="help-circle"></span>Help Center</a></li>
                                </ul>
                            </div>
                            <div class="card-footer p-0 border-top">
                                <hr />
                                <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"> <span class="me-2" data-feather="log-out"> </span>Sign out</a></div>
                                <div class="my-2 text-center fw-bold fs--2 text-600"><a class="text-600 me-1" href="#!">Privacy policy</a>&bull;<a class="text-600 mx-1" href="#!">Terms</a>&bull;<a class="text-600 ms-1" href="#!">Cookies</a></div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>


    <div class="content">
        @yield('content')
        <footer class="footer position-absolute">
            <div class="row g-0 justify-content-between align-items-center h-100">
                <div class="col-12 col-sm-auto text-center">
                    <p class="mb-0 mt-2 mt-sm-0 text-900">ANDRELIN ENTERPRISES<span class="d-none d-sm-inline-block"></span><span class="d-none d-sm-inline-block mx-1">|</span><br class="d-sm-none" />{{date('Y')}} &copy;<a class="mx-1" href="https://leadingdigital.africa">Developed By Leading Digital</a></p>
                </div>
                <div class="col-12 col-sm-auto text-center">
                    <p class="mb-0 text-600">v1.1.0</p>
                </div>
            </div>
        </footer>
    </div>

    <script>
        var navbarTopStyle = window.config.config.phoenixNavbarTopStyle;
        var navbarTop = document.querySelector('.navbar-top');
        if (navbarTopStyle === 'darker') {
            navbarTop.classList.add('navbar-darker');
        }

        var navbarVerticalStyle = window.config.config.phoenixNavbarVerticalStyle;
        var navbarVertical = document.querySelector('.navbar-vertical');
        if (navbarVertical && navbarVerticalStyle === 'darker') {
            navbarVertical.classList.add('navbar-darker');
        }
    </script>

</main>
<!-- ===============================================-->
<!--    End of Main Content-->
<!-- ===============================================-->



<!-- ===============================================-->
<!--    JavaScripts-->
<!-- ===============================================-->
<script src="{{ asset('vendors/popper/popper.min.js') }}"></script>
<script src="{{ asset('vendors/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendors/anchorjs/anchor.min.js') }}"></script>
<script src="{{ asset('vendors/is/is.min.js') }}"></script>
<script src="{{ asset('vendors/fontawesome/all.min.js') }}"></script>
<script src="{{ asset('vendors/lodash/lodash.min.js') }}"></script>
<!-- For external assets, you don't need the asset helper -->
<script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
<script src="{{ asset('vendors/list.js/list.min.js') }}"></script>
<script src="{{ asset('vendors/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('vendors/dayjs/dayjs.min.js') }}"></script>
<script src="{{ asset('assets/js/phoenix.js') }}"></script>
<script src="{{ asset('vendors/echarts/echarts.min.js') }}"></script>
<script src="{{ asset('vendors/leaflet/leaflet.js') }}"></script>
<script src="{{ asset('vendors/leaflet.markercluster/leaflet.markercluster.js') }}"></script>
<script src="{{ asset('vendors/leaflet.tilelayer.colorfilter/leaflet-tilelayer-colorfilter.min.js') }}"></script>
<script src="{{ asset('assets/js/ecommerce-dashboard.js') }}"></script>

<script>
    $(document).ready(function () {
        // Iterate over each active nav-link
        $('.nav-link.active').each(function () {
            // Traverse up to find the parent 'menu-link'
            var parentMenuLink = $(this).closest('.collapse').prev('.menu-link');

            // Check if parentMenuLink is found
            if (parentMenuLink.length) {
                // Remove 'collapsed' class, set 'aria-expanded' to true, and add 'active' class
                parentMenuLink.removeClass('collapsed').addClass('active').attr('aria-expanded', 'true');

                // Expand the parent collapse menu
                $(this).closest('.collapse').addClass('show');
            }
        });
    });

</script>

@stack('scripts')

</body>

</html>
