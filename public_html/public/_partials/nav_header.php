<?php


?>
<style type="text/css">
    body {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 12px;
        color: #000000;
        background-color: #FFFFFF;
        margin: 0;
        padding: 0;
    }
    #header {
        /*text-align: center;*/
        /*display: inline-flex;*/
        width: 80vw;
        margin: 10px auto;
        font-size: 14px;
        padding: 10px;
        box-shadow: 0 0 10px #dedede;
        border-radius: 5px;
        left: 10vw;
        /*text-align: center;*/
    }
    .header_left {
        width: 39%;
        display: inline-flex;
    }
    .header_right {
        width: 59%;
        display: inline-flex;
        text-align: right;
    }
    .header_menu {
        display: inline-flex;
        list-style: none;
    }
    .header_menu li {
        margin-right: 15px;
    }
    .header_menu li a {
        margin-right: 15px;
        text-decoration: none;
    }

    .center_content {
        /*text-align: center;*/
        /*display: inline-flex;*/
        width: 80vw;
        margin: 10px auto;
        font-size: 14px;
        padding: 10px;
        box-shadow: 0 0 10px #dedede;
        border-radius: 5px;
        left: 10vw;
        /*text-align: center;*/
    }
</style>

<div id="header">
    <div class="header_left">
        <?php echo $page_title; ?>
    </div>
    <div class="header_right">
        <ul class="header_menu text-center">
            <li><a href="/">Home</a></li>
            <li><a href="/web/transactions">Transactions</a></li>
            <li><a href="/web/users">Users</a></li>
            <li><a href="/web/products">Products</a></li>
        </ul>
    </div>
</div>
