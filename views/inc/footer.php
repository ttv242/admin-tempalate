<!-- Javascripts -->
<script src="views/assets/plugins/jquery/jquery-3.5.1.min.js"></script>
<script src="views/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="views/assets/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
<script src="views/assets/plugins/pace/pace.min.js"></script>
<script src="views/assets/plugins/apexcharts/apexcharts.min.js"></script>
<script src="views/assets/js/main.min.js"></script>
<script src="views/assets/js/custom.js"></script>
<script src="views/assets/js/pages/dashboard.js"></script>

<!-- Active  -->

<?php
// echo '
//     substr(htmlspecialchars("{$_SERVER['REQUEST_URI']}", ENT_QUOTES, 'UTF-8' ), 24)
// ';
?>
<!-- <script>
    var li__all = document.querySelectorAll(".accordion-menu li a");
    console.log(li__all);
    li__all.forEach(function (li) {
        console.log(li.innerHTML);
    })
</script> -->


<!-- Mailbox -->
<?php
if (isset($_GET['action']) && $_GET['action'] == 'mailbox') {
    ?>
    <!-- Javascripts -->
    <script src="views/assets/plugins/summernote/summernote-lite.min.js"></script>
    <script src="views/assets/js/pages/mailbox.js"></script>
    <?php
}
?>

<!-- File-manager, Todo, Pricing, Styles -->
<?php
if (isset($_GET['action']) && $_GET['action'] == 'file-manager' || $_GET['action'] == 'todo' || $_GET['action'] == 'pricing' || $_GET['action'] == 'styles-typography' || $_GET['action'] == 'styles-code' || $_GET['action'] == 'styles-icons' || $_GET['action'] == 'tables-basic') {
    ?>
    <!-- Javascripts -->
    <script src="views/assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="views/assets/plugins/highlight/highlight.pack.js"></script>
    <?php
}
?>

<!-- Calendar -->
<?php
if (isset($_GET['action']) && $_GET['action'] == 'calendar') {
    ?>
    <!-- Javascripts -->
    <script src="views/assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="views/assets/plugins/highlight/highlight.pack.js"></script>
    <script src="views/assets/plugins/fullcalendar/lib/main.min.js"></script>
    <script src="views/assets/js/pages/calendar.js"></script>
    <?php
}
?>

<!-- Settings -->
<?php
if (isset($_GET['action']) && $_GET['action'] == 'settings') {
    ?>
    <!-- Javascripts -->
    <script src="views/assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="views/assets/plugins/highlight/highlight.pack.js"></script>
    <script src="views/assets/plugins/select2/js/select2.full.min.js"></script>
    <script src="views/assets/js/pages/settings.js"></script>
    <?php
}
?>

<!-- Tables Database -->
<?php
if (isset($_GET['action']) && $_GET['action'] == 'tables-database') {
    ?>
    <!-- Styles -->
    <script src="views/assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="views/assets/plugins/highlight/highlight.pack.js"></script>
    <script src="views/assets/plugins/datatables/datatables.min.js"></script>
    <?php
}
?>

</body>

</html>