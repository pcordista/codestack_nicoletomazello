<?php
$file = basename($_SERVER['PHP_SELF']); // your file name 
$last_modified_time = filemtime($file);
$etag = md5_file($file);

header("Last-Modified: " . gmdate("D, d M Y H:i:s", $last_modified_time) . " GMT");
header("Etag: $etag");
?>

<?php include 'header.php'; ?>

<?php include 'components/menu.php'; ?>

<?php include 'components/sidebar.php'; ?>

<?php include 'components/slider.php'; ?>

<?php include 'components/newsletter.php'; ?>

<?php include 'components/about.php'; ?>

<?php include 'components/parallax.php'; ?>

<?php include 'components/services.php'; ?>

<?php include 'components/testemonials.php'; ?>

<?php include 'components/purpose.php'; ?>

<?php include 'components/news.php'; ?>

<?php include 'components/events.php'; ?>

<?php include 'components/contact.php'; ?>

<?php include 'components/instagram.php'; ?>

<?php include 'components/modal.php'; ?>

<?php include 'footer.php'; ?>


<?php include 'assets/js/JS_includes.php'; ?>
<script src="assets/devlop/live.js"></script>
<script>
    document.addEventListener("load", startHome())
</script>

</body>

</html>