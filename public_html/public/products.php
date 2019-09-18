<?php
// set the page title
$page_title = "Products";
?>
<!doctype html>
<html lang="en">
    <title>ARC API</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include_once SCRIPT . "public/_includes/styles.php"; ?>

    </head>

<body>
<!-- loading the menu -->
<?php include SCRIPT . "public/_partials/nav_header.php"; ?>


<div id="new">
    <a href="#"> New </a>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-right">
            <a href="#" class="button"> New Product </a>
        </div>
    </div>
</div>


<div class="center_content">

    <table id="display_data" class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>ID</td>
            <td>Full Name</td>
            <td>Email Address</td>
            <td>Mobile Number</td>
            <td>Created Date</td>
            <td>Deleted</td>
            <td>Active</td>
        </tr>
        </thead>
        <tbody>
        <?php
        // load all the transactions from the API
        $products = file_get_contents(HTTP_ROOT . "api/products");
//        echo $products;
        // loop through all the transactions
        foreach(json_decode($products, true) as $product) {
            ?>
            <tr>
                <td><?php echo $product['id']; ?></td>
                <td><?php echo $product['product_name']; ?></td>
                <td><?php echo $product['product_sku']; ?></td>
                <td><?php if($product['product_type']==null){ echo ""; }else{echo $product['product_type'];} ?></td>
                <td><?php if($product['price']==null){ echo ""; }else{echo $product['price'];} ?></td>
                <td><?php echo $product['quantity']; ?></td>
                <td><?php echo $product['created']; ?></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>

<?php
include_once SCRIPT . "public/_includes/scripts.php";
?>

</body>
</html>