<?php
if(isset($_GET['repo'])) $repo = $_GET['repo'];
if(isset($_GET['docPath'])) $docPath = $_GET['docPath'] . '/' . $repo . '/';
?>
<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Abas Docs</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css" crossorigin="anonymous">
    <script src="js/jquery.min.js" crossorigin="anonymous"></script>
    <script src="js/popper.min.js" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
</head>
<body>
<h1>Branches</h1>
<ul class="list-group">
    <?php
    $dirs = array_filter(glob($docPath . '*'), 'is_dir');
    foreach ($dirs as $dir) {
        $name = str_replace($docPath, "", $dir);
        echo "<li class='list-group-item'><a href='${docPath}/${name}/html/index.html'>${name}</a></li>";
    }
    ?>
</ul>
</body>
</html>