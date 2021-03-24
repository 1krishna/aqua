<script src="js/custom.js"></script>
<?php
if (!isset($_SESSION['userID']) || isset($_GET['lo'])) {
    session_destroy();
    header('Location: index.php');
}

?>