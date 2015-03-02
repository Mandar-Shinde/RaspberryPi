<?php
    if (isset($_POST['on']))
    {
         exec('sh on.sh');
    }
	else
    {
         exec('sh off.sh');
    }
?>


<html>
<head>
 <link href="css/bootstrap.min.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="mandar shinde">
</head>
<body>

<div class="container">
    <div class="row">
        
<div class="center-block">
    <form method="post">
        <button name="on" class="btn btn-success" >On</button>
        <button name="off" class="btn btn-danger">Off</button>
    </form>
</div>
</div>
</div>
	 <script src="js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
