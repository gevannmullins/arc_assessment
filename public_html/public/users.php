<?php
// set the page title
$page_title = "Users";
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
            <a href="#" class="button"> New User </a>
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
        $users = file_get_contents(HTTP_ROOT . "api/users");
//        echo $users;
        // loop through all the transactions
        foreach(json_decode($users, true) as $user) {
            ?>
            <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['full_name']; ?></td>
                <td><?php echo $user['email_address']; ?></td>
                <td><?php if($user['mobile_number']==null){ echo ""; }else{echo $user['mobile_number'];} ?></td>
                <td><?php if($user['created']==null){ echo ""; }else{echo $user['created'];} ?></td>
                <td><?php echo $user['deleted']; ?></td>
                <td><?php echo $user['active']; ?></td>
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