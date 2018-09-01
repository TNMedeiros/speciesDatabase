<?php
include_once 'init.php';
include_once 'modules/taxa_tree.php';
$page_title = 'Espécies';
?>
<!doctype html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="<?php echo $author; ?>">
	<title><?php echo $page_title; ?> - <?php echo $site_name; ?></title>
    <?php include_once 'modules/head.php'; ?>
</head>

<body class="bg-light">
<?php include_once 'modules/menu.php'; ?>
<div class="container-fluid" role="main">
    <div class="row">
        <div class="col-12 col-md-8">
            <div class="my-3 p-3 bg-white rounded box-shadow">
                <h5>Ordem Characiformes</h5>
                <?php taxa_recursive_tree(1); ?>
            </div>
            <div class="my-3 p-3 bg-white rounded box-shadow">
                <h5>Ordem Cyprinodontiformes</h5>
                <?php taxa_recursive_tree(31); ?>
            </div>
            <div class="my-3 p-3 bg-white rounded box-shadow">
                <h5>Ordem Gymnotiformes</h5>
                <?php taxa_recursive_tree(2); ?>
            </div>
            <div class="my-3 p-3 bg-white rounded box-shadow">
                <h5>Ordem Perciformes</h5>
                <?php taxa_recursive_tree(3); ?>
            </div>
            <div class="my-3 p-3 bg-white rounded box-shadow">
                <h5>Ordem Siluriformes</h5>
                <?php taxa_recursive_tree(4); ?>
            </div>
            <?php mysqli_close($mysqli); ?>
        </div>

        <div class="col-12 col-md-4">
            <div class="my-3 p-3 bg-white rounded box-shadow">
                <?php include_once 'modules/references.php'; ?>
            </div>
            
            <div class="my-3 p-3 bg-white rounded box-shadow">
                <?php include_once 'modules/captions.php'; ?>
            </div>
            
            <div class="my-3 p-3 bg-white rounded box-shadow">
                <?php include_once 'modules/abbreviations.php'; ?>
            </div>
        </div>
    </div>
</div>
<?php include_once 'modules/footer.php'; ?>
</body>
</html>