<!DOCTYPE html>
<head>
    <title>Git diff between releases</title>

    <link rel="stylesheet" href="./assets/css/style.css"/>
    <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
    <script src="./assets/js/main.js"></script>
</head>
<body>

<?php

require_once __DIR__ . '/git/autoload.php';
require_once __DIR__ . '/diff/autoload.php';

$git = new \SebastianBergmann\Git('../bucket.dev/wp-content/themes/bucket');

if ( !isset( $_POST['form_submited'] ) ) {
    require_once 'form.php';
} else {
    require_once 'preview.php';
}
?>

</body>
</hmtl>