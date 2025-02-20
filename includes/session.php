<?php
session_start();

if (!isset($_SESSION['id'])) {
    echo '<script>
            window.location.href = "../../account login/"
        </script>';
    exit();
}
