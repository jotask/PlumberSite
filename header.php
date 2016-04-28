<?php include_once("first.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Plumbers</title>

    <?php include_once("include_css.php"); ?>

</head>
<body>
<?php
    $included_files = get_included_files();

    $log = false;

    foreach ($included_files as $filename) {
        if(basename($filename) == 'login.php'){
            $log = true;
        }
    }

    if(!$log)
        include_once("modules/nav_header.php");

?>

<div class="container-fluid">