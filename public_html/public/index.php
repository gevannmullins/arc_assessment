<?php
include_once "./config.php";
?>
<?php //echo SCRIPT; ?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ARC API</title>

    <!-- styles -->
    <link href="<?php echo SCRIPT; ?>public/assets/plugins_scripts/bootstrap/css/bootstrap.css" />
    <link href="<?php echo SCRIPT; ?>public/assets/plugins_scripts/datatables/jquery.dataTables.css" />
    <link href="<?php echo SCRIPT; ?>css/main.css" />

    <style type="text/css">
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: .9em;
            color: #000000;
            background-color: #FFFFFF;
            margin: 0;
            padding: 0;
        }
        #welcome {
            /*text-align: center;*/
            width: 80vw;
            margin: 50px auto;
            font-size: 14px;
            padding: 50px;
            box-shadow: 0 0 10px #dedede;
            border-radius: 5px;
        }
    </style>
</head>

<body>

<div id="welcome">

    <h1 align="center">Welcome To The API Documentation</h1>

    <br /><hr width="100%" /><br />

    <h2>Assessment Instructions</h2>
    <p>
        <b>Choose a framework of your liking and create a simple API Project</b>
        <ul>
            <li>Create Users table for Authentication</li>
            <li>Create a transactions table to list transactions from your shop</li>
            <li>You must be able to POST, GET, PUT data to and from the Transactions table using a User from the Users table.</li>
            <li>Documentation on how to use your project</li>
            <li>Commit your code to a GIT repository for us to review.</li>
        </ul>
        <b>Create a Dockerfile to create an image which will be run as a container to host your API project above.</b>
        <ul>
            <li>Dockerfile to create image and setup your project</li>
            <li>Documentation for your fellow developers to install and run your Dockerfile and project.</li>
            <li>Push your Docker image to a Docker container registry and provide a link to it. (Bonus)</li>
        </ul>
    </p>

    <h2>Introduction</h2>
    <p>
        This API system is a very basic system that I build a few months ago.
        I am currently working on a more advanced system with extra security features etc.
        but for now this system should be ok for the purpose of this Assessment.
    </p>
    <br />

    <h2>Minimum Requirements</h2>
    <p>
        Minimum requirements
    </p>
    <br />

    <h2>Installation Instructions</h2>
    <p>
        Install instructions
    </p>

</div>

<script src="<?php echo ASSET_ROOT; ?>plugins_scripts/jquery/jquery.js"></script>
<script src="<?php echo ASSET_ROOT; ?>plugins_scripts/jQueryUI/jquery-ui.js"></script>
<script src="<?php echo ASSET_ROOT; ?>plugins_scripts/bootstrap/bootstrap.js"></script>
<script src="<?php echo ASSET_ROOT; ?>js/main.js" ></script>
</body>
</html>