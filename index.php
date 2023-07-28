<?php
session_start();
ob_start();

if (!isset($_SESSION['giohang']))
    $_SESSION['giohang'] = [];

// include "model/category.php";
// include "model/product.php";
// include "model/account.php";
// include "model/connectdb.php";


// $dsdm = getAll_dm();
// $sphome1 = getall_sp(0, "");
// $spdacbiet = get_product_special();
// $all_cat = get_all_cat();
// $all_pro = get_all_pro();



if (isset($_GET['action'])) {
    $action = $_GET['action'];
    include "views/inc/header.php";
    switch ($action) {

        // APPS
        case 'dashboard':
            include "views/layouts/index.php";
            break;

        case 'mailbox':
            include "views/layouts/mailbox.php";
            break;

        case 'file-manager':
            include "views/layouts/file-manager.php";
            break;

        case 'calendar':
            include "views/layouts/calendar.php";
            break;

        case 'todo':
            include "views/layouts/todo.php";
            break;

        //  Pages
        case 'pricing':
            include "views/layouts/pricing.php";
            break;

        case 'invoice':
            include "views/layouts/invoice.php";
            break;

        case 'settings':
            include "views/layouts/settings.php";
            break;

        case 'sign-in':
            include "views/layouts/sign-in.php";
            break;

        case 'sign-up':
            include "views/layouts/sign-up.php";
            break;

        case 'lock-screen':
            include "views/layouts/lock-screen.php";
            break;

        case 'error':
            include "views/layouts/error.php";
            break;

        // UI ELEMENTS

        // Styles
        case 'styles-typography':
            include "views/layouts/styles-typography.php";
            break;

        case 'styles-code':
            include "views/layouts/styles-code.php";
            break;

        case 'styles-icons':
            include "views/layouts/styles-icons.php";
            break;

        // Tables
        case 'tables-basic':
            include "views/layouts/tables-basic.php";
            break;

        case 'tables-datatable':
            include "views/layouts/tables-datatable.php";
            break;

        // Elements
        case 'ui-alerts':
            include "views/layouts/ui-alerts.php";
            break;

        case 'ui-avatars':
            include "views/layouts/ui-avatars.php";
            break;

        case 'ui-badge':
            include "views/layouts/ui-badge.php";
            break;

        case 'ui-breadcrumbs':
            include "views/layouts/ui-breadcrumbs.php";
            break;

        case 'ui-buttons':
            include "views/layouts/ui-buttons.php";
            break;

        case 'ui-button-groups':
            include "views/layouts/ui-button-groups.php";
            break;

        case 'ui-collapse':
            include "views/layouts/ui-collapse.php";
            break;

        case 'ui-dropdown':
            include "views/layouts/ui-dropdown.php";
            break;

        case 'ui-images':
            include "views/layouts/ui-images.php";
            break;

        case 'ui-pagination':
            include "views/layouts/ui-pagination.php";
            break;

        case 'ui-popovers':
            include "views/layouts/ui-popovers.php";
            break;

        case 'ui-progress':
            include "views/layouts/ui-progress.php";
            break;

        case 'ui-spinners':
            include "views/layouts/ui-spinners.php";
            break;

        case 'ui-toast':
            include "views/layouts/ui-toast.php";
            break;

        case 'ui-tooltips':
            include "views/layouts/ui-tooltips.php";
            break;

        // Components
        case 'components-accordions':
            include "views/layouts/components-accordions.php";
            break;

        case 'components-block-ui':
            include "views/layouts/components-block-ui.php";
            break;

        case 'components-cards':
            include "views/layouts/components-cards.php";
            break;

        case 'components-carousel':
            include "views/layouts/components-carousel.php";
            break;

        case 'components-countdown':
            include "views/layouts/components-countdown.php";
            break;

        case 'components-lightbox':
            include "views/layouts/components-lightbox.php";
            break;

        case 'components-lists':
            include "views/layouts/components-lists.php";
            break;

        case 'components-modals':
            include "views/layouts/components-modals.php";
            break;

        case 'components-tabs':
            include "views/layouts/components-tabs.php";
            break;

        case 'components-session-timeout':
            include "views/layouts/components-session-timeout.php";
            break;

        // Widgets
        case 'widgets':
            include "views/layouts/widgets.php";
            break;


        // Forms
        case 'forms-basic':
            include "views/layouts/forms-basic.php";
            break;

        case 'forms-input-groups':
            include "views/layouts/forms-input-groups.php";
            break;

        case 'forms-input-masks':
            include "views/layouts/forms-input-masks.php";
            break;

        case 'forms-layouts':
            include "views/layouts/forms-layouts.php";
            break;

        case 'forms-validation':
            include "views/layouts/forms-validation.php";
            break;

        case 'forms-file-upload':
            include "views/layouts/forms-file-upload.php";
            break;

        case 'forms-text-editor':
            include "views/layouts/forms-text-editor.php";
            break;

        case 'forms-datepickers':
            include "views/layouts/forms-datepickers.php";
            break;

        case 'forms-select2':
            include "views/layouts/forms-select2.php";
            break;

        //Charts
        case 'charts-apex':
            include "views/layouts/charts-apex.php";
            break;

        case 'charts-chartjs':
            include "views/layouts/charts-chartjs.php";
            break;

        // LAYOUT

        // Content
        case 'content-page-headings':
            include "views/layouts/content-page-headings.php";
            break;

        case 'content-section-headings':
            include "views/layouts/content-section-headings.php";
            break;

        case 'content-left-menu':
            include "views/layouts/content-left-menu.php";
            break;

        case 'content-right-menu':
            include "views/layouts/content-right-menu.php";
            break;

        case 'content-boxed-content':
            include "views/layouts/content-boxed-content.php";
            break;

        // Menu
        case 'menu-off-canvas':
            include "views/layouts/menu-off-canvas.php";
            break;

        case 'menu-standard':
            include "views/layouts/menu-standard.php";
            break;

        case 'menu-dark-sidebar':
            include "views/layouts/menu-dark-sidebar.php";
            break;

        case 'menu-hover-menu':
            include "views/layouts/menu-hover-menu.php";
            break;

        case 'menu-colored-sidebar':
            include "views/layouts/menu-colored-sidebar.php";
            break;

        // Header
        case 'header-basic':
            include "views/layouts/header-basic.php";
            break;

        case 'header-full-width':
            include "views/layouts/header-full-width.php";
            break;

        case 'header-transparent':
            include "views/layouts/header-transparent.php";
            break;

        case 'header-large':
            include "views/layouts/header-large.php";
            break;

        case 'header-colorful':
            include "views/layouts/header-colorful.php";
            break;

        default:
            include "views/layouts/index.php";
            break;
    }
    include "views/inc/footer.php";
} else {
    header('location: index.php?action=dashboard');
}
?>