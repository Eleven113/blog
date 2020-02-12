<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title><?= $title ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">   
    <link href="public/css/style.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/5fbf6a0223.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/kkhvihv2kq63k749dzof0jfnzs1w0ws3wkdzmo2al6neam7j/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
</head>

<body>
    <header>
        <div id="banner_admin">
            <div id="banner_admin-title">Interface d'administration</div>
            <nav id="menu_admin">
                <a href="index.php?action=admin">Gérer les articles</a>
                <a href="index.php?action=listcomments">Gérer les commentaires</a>
            </nav>
        </div>
    </header>
    <div id="main">
        <div id="container">
            <?= $content ?>
        </div>
    </div>
</body>
<script src="public/js/confirmmanagement.js"></script>
<script src=<?= $script ?>></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>