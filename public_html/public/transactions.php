<?php
// set the page title
$page_title = "Transactions";
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
            <a href="#" class="button"> New Transaction </a>
        </div>
    </div>
</div>


<div class="center_content">

    <table  id="display_data" class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>ID</td>
            <td>Product ID</td>
            <td>USer ID</td>
            <td>Total</td>
            <td>Item Amount</td>
            <td>Date of Purchase</td>
            <td></td>
        </tr>
        </thead>
        <tbody>
        <?php
        // load all the transactions from the API
        $transactions = file_get_contents(HTTP_ROOT . "api/transactions");
        // loop through all the transactions
        foreach(json_decode($transactions, true) as $transaction) {
        ?>
            <tr>
                <td><?php echo $transaction['id']; ?></td>
                <td><?php echo $transaction['product_id']; ?></td>
                <td><?php echo $transaction['consumer_id']; ?></td>
                <td><?php if($transaction['price']==null){ echo ""; }else{echo $transaction['price'];} ?></td>
                <td><?php if($transaction['quantity']==null){ echo ""; }else{echo $transaction['quantity'];} ?></td>
                <td><?php echo $transaction['date_time']; ?></td>
                <td><?php echo $transaction['updated']; ?></td>
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