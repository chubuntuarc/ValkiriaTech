<?php require_once("back/session.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title><?php echo $_SESSION["module"]; ?></title>

    <!-- CSS  -->
    <link href="../css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="../css/tech.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
    <?php include_once("front/nav.php") ?>
    <div class="row col s12">
        <div class="container">
            <?php include_once("front/side_menu.php") ?>
            <div class="main-content">
                <a href="#" data-toggle=".container" id="sidebar-toggle">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </a>

                <div class="row">
                    <div class="col s12 m12" style="border-bottom: 1px solid #3D464D;">
                        <h5 class="header"><?php echo $_SESSION["module"]; ?>&nbsp;&nbsp;
                            <span style="font-size:14px; color:#9e9e9e;"><?php echo $_SESSION["module_description"]; ?></span></h5>
                        </div>
                    </div>
