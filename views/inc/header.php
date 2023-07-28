<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Dashboard</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
    <link href="views/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="views/assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="views/assets/plugins/pace/pace.css" rel="stylesheet">


    <!-- Mailbox -->
    <?php
    if (isset($_GET['action']) && $_GET['action'] == 'mailbox') {
        ?>
        <!-- Styles -->
        <link href="views/assets/plugins/summernote/summernote-lite.min.css" rel="stylesheet">
        <?php
    }
    ?>

    <!-- File-manager, Todo, Pricing, Styles -->
    <?php
    if (isset($_GET['action']) && $_GET['action'] == 'file-manager' || $_GET['action'] == 'todo' || $_GET['action'] == 'pricing' || $_GET['action'] == 'styles-typography' || $_GET['action'] == 'styles-code' || $_GET['action'] == 'styles-icons' || $_GET['action'] == 'tables-basic') {
        ?>
        <!-- Styles -->
        <link href="views/assets/plugins/highlight/styles/github-gist.css" rel="stylesheet">
        <?php
    }
    ?>

    <!-- Calendar -->
    <?php
    if (isset($_GET['action']) && $_GET['action'] == 'calendar') {
        ?>
        <!-- Styles -->
        <link href="views/assets/plugins/highlight/styles/github-gist.css" rel="stylesheet">
        <link href="views/assets/plugins/fullcalendar/lib/main.min.css" rel="stylesheet">
        <?php
    }
    ?>

    <!-- Settings -->
    <?php
    if (isset($_GET['action']) && $_GET['action'] == 'settings') {
        ?>
        <!-- Styles -->
        <link href="views/assets/plugins/highlight/styles/github-gist.css" rel="stylesheet">
        <link href="views/assets/plugins/select2/css/select2.min.css" rel="stylesheet">
        <?php
    }
    ?>

    <!-- Tables Database -->
    <?php
    if (isset($_GET['action']) && $_GET['action'] == 'tables-database') {
        ?>
        <!-- Styles -->
        <link href="views/assets/plugins/highlight/styles/github-gist.css" rel="stylesheet">
        <link href="views/assets/plugins/datatables/datatables.min.css" rel="stylesheet">
        <?php
    }
    ?>

    <!-- Theme Styles -->
    <link href="views/assets/css/main.min.css" rel="stylesheet">
    <link href="views/assets/css/custom.css" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href="views/assets/images/neptune.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="views/assets/images/neptune.png" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<?php
if (isset($_GET['action']) && $_GET['action'] != 'sign-in' && $_GET['action'] != 'sign-up' && $_GET['action'] != 'error' && $_GET['action'] != 'lock-screen') {
    ?>

    <body>
        <div class="app align-content-stretch d-flex flex-wrap">
            <div class="app-sidebar">
                <div class="logo">
                    <a href="index.php?action=dashboard" class="logo-icon"><span class="logo-text">Neptune</span></a>
                    <div class="sidebar-user-switcher user-activity-online">
                        <a href="index.php?action=#">
                            <img src="views/assets/images/avatars/avatar1.jpg">
                            <span class="activity-indicator"></span>
                            <span class="user-info-text">Chloe<br><span class="user-state-info">On a call</span></span>
                        </a>
                    </div>
                </div>
                <div class="app-menu">
                    <ul class="accordion-menu">
                        <li class="sidebar-title">
                            Apps
                        </li>
                        <li>
                            <a href="index.php?action=dashboard" class="active"><i
                                    class="material-icons-two-tone">dashboard</i>Dashboard</a>
                        </li>
                        <li>
                            <a href="index.php?action=mailbox"><i class="material-icons-two-tone">inbox</i>Mailbox<span
                                    class="badge rounded-pill badge-danger float-end">87</span></a>
                        </li>
                        <li>
                            <a href="index.php?action=file-manager"><i class="material-icons-two-tone">cloud_queue</i>File
                                Manager</a>
                        </li>
                        <li>
                            <a href="index.php?action=calendar"><i
                                    class="material-icons-two-tone">calendar_today</i>Calendar<span
                                    class="badge rounded-pill badge-success float-end">14</span></a>
                        </li>
                        <li>
                            <a href="index.php?action=todo"><i class="material-icons-two-tone">done</i>Todo</a>
                        </li>
                        <li>
                            <a href="index.php?action=#"><i class="material-icons-two-tone">star</i>Pages<i
                                    class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="index.php?action=pricing">Pricing</a>
                                </li>
                                <li>
                                    <a href="index.php?action=invoice">Invoice</a>
                                </li>
                                <li>
                                    <a href="index.php?action=settings">Settings</a>
                                </li>
                                <li>
                                    <a href="index.php?action=#">Authentication<i
                                            class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="index.php?action=sign-in">Sign In</a>
                                        </li>
                                        <li>
                                            <a href="index.php?action=sign-up">Sign Up</a>
                                        </li>
                                        <li>
                                            <a href="index.php?action=lock-screen">Lock Screen</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="index.php?action=error">Error</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-title">
                            UI Elements
                        </li>
                        <li>
                            <a href="index.php?action=#"><i class="material-icons-two-tone">color_lens</i>Styles<i
                                    class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="index.php?action=styles-typography">Typography</a>
                                </li>
                                <li>
                                    <a href="index.php?action=styles-code">Code</a>
                                </li>
                                <li>
                                    <a href="index.php?action=styles-icons">Icons</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="index.php?action=#"><i class="material-icons-two-tone">grid_on</i>Tables<i
                                    class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="index.php?action=tables-basic">Basic</a>
                                </li>
                                <li>
                                    <a href="index.php?action=tables-datatable">DataTable</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="index.php?action=#"><i
                                    class="material-icons-two-tone">sentiment_satisfied_alt</i>Elements<i
                                    class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="index.php?action=ui-alerts">Alerts</a>
                                </li>
                                <li>
                                    <a href="index.php?action=ui-avatars">Avatars</a>
                                </li>
                                <li>
                                    <a href="index.php?action=ui-badge">Badge</a>
                                </li>
                                <li>
                                    <a href="index.php?action=ui-breadcrumbs">Breadcrumbs</a>
                                </li>
                                <li>
                                    <a href="index.php?action=ui-buttons">Buttons</a>
                                </li>
                                <li>
                                    <a href="index.php?action=ui-button-groups">Button Groups</a>
                                </li>
                                <li>
                                    <a href="index.php?action=ui-collapse">Collapse</a>
                                </li>
                                <li>
                                    <a href="index.php?action=ui-dropdown">Dropdown</a>
                                </li>
                                <li>
                                    <a href="index.php?action=ui-images">Images</a>
                                </li>
                                <li>
                                    <a href="index.php?action=ui-pagination">Pagination</a>
                                </li>
                                <li>
                                    <a href="index.php?action=ui-popovers">Popovers</a>
                                </li>
                                <li>
                                    <a href="index.php?action=ui-progress">Progress</a>
                                </li>
                                <li>
                                    <a href="index.php?action=ui-spinners">Spinners</a>
                                </li>
                                <li>
                                    <a href="index.php?action=ui-toast">Toast</a>
                                </li>
                                <li>
                                    <a href="index.php?action=ui-tooltips">Tooltips</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="index.php?action=#"><i class="material-icons-two-tone">card_giftcard</i>Components<i
                                    class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="index.php?action=components-accordions">Accordions</a>
                                </li>
                                <li>
                                    <a href="index.php?action=components-block-ui">Block UI</a>
                                </li>
                                <li>
                                    <a href="index.php?action=components-cards">Cards</a>
                                </li>
                                <li>
                                    <a href="index.php?action=components-carousel">Carousel</a>
                                </li>
                                <li>
                                    <a href="index.php?action=components-countdown">Countdown</a>
                                </li>
                                <li>
                                    <a href="index.php?action=components-lightbox">Lightbox</a>
                                </li>
                                <li>
                                    <a href="index.php?action=components-lists">Lists</a>
                                </li>
                                <li>
                                    <a href="index.php?action=components-modals">Modals</a>
                                </li>
                                <li>
                                    <a href="index.php?action=components-tabs">Tabs</a>
                                </li>
                                <li>
                                    <a href="index.php?action=components-session-timeout">Session Timeout</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="index.php?action=widgets"><i class="material-icons-two-tone">widgets</i>Widgets</a>
                        </li>
                        <li>
                            <a href="index.php?action=#"><i class="material-icons-two-tone">edit</i>Forms<i
                                    class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="index.php?action=forms-basic">Basic</a>
                                </li>
                                <li>
                                    <a href="index.php?action=forms-input-groups">Input Groups</a>
                                </li>
                                <li>
                                    <a href="index.php?action=forms-input-masks">Input Masks</a>
                                </li>
                                <li>
                                    <a href="index.php?action=forms-layouts">Form Layouts</a>
                                </li>
                                <li>
                                    <a href="index.php?action=forms-validation">Form Validation</a>
                                </li>
                                <li>
                                    <a href="index.php?action=forms-file-upload">File Upload</a>
                                </li>
                                <li>
                                    <a href="index.php?action=forms-text-editor">Text Editor</a>
                                </li>
                                <li>
                                    <a href="index.php?action=forms-datepickers">Datepickers</a>
                                </li>
                                <li>
                                    <a href="index.php?action=forms-select2">Select2</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="index.php?action=#"><i class="material-icons-two-tone">analytics</i>Charts<i
                                    class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="index.php?action=charts-apex">Apex</a>
                                </li>
                                <li>
                                    <a href="index.php?action=charts-chartjs">ChartJS</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-title">
                            Layout
                        </li>
                        <li>
                            <a href="index.php?action=#"><i class="material-icons-two-tone">view_agenda</i>Content<i
                                    class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="index.php?action=content-page-headings">Page Headings</a>
                                </li>
                                <li>
                                    <a href="index.php?action=content-section-headings">Section Headings</a>
                                </li>
                                <li>
                                    <a href="index.php?action=content-left-menu">Left Menu</a>
                                </li>
                                <li>
                                    <a href="index.php?action=content-right-menu">Right Menu</a>
                                </li>
                                <li>
                                    <a href="index.php?action=content-boxed-content">Boxed Content</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="index.php?action=#"><i class="material-icons-two-tone">menu</i>Menu<i
                                    class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="index.php?action=menu-off-canvas">Off-Canvas</a>
                                </li>
                                <li>
                                    <a href="index.php?action=menu-standard">Standard</a>
                                </li>
                                <li>
                                    <a href="index.php?action=menu-dark-sidebar">Dark Sidebar</a>
                                </li>
                                <li>
                                    <a href="index.php?action=menu-hover-menu">Hover Menu</a>
                                </li>
                                <li>
                                    <a href="index.php?action=menu-colored-sidebar">Colored Sidebar</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="index.php?action=#"><i class="material-icons-two-tone">view_day</i>Header<i
                                    class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="index.php?action=header-basic">Basic</a>
                                </li>
                                <li>
                                    <a href="index.php?action=header-full-width">Full-width</a>
                                </li>
                                <li>
                                    <a href="index.php?action=header-transparent">Transparent</a>
                                </li>
                                <li>
                                    <a href="index.php?action=header-large">Large</a>
                                </li>
                                <li>
                                    <a href="index.php?action=header-colorful">Colorful</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-title">
                            Other
                        </li>
                        <li>
                            <a href="index.php?action=#"><i class="material-icons-two-tone">bookmark</i>Documentation</a>
                        </li>
                        <li>
                            <a href="index.php?action=#"><i class="material-icons-two-tone">access_time</i>Change Log</a>
                        </li>
                    </ul>
                </div>
            </div>
            <?php
}
?>