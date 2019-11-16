<?php ob_start(); 
/*it buffers the content of the page, stores it in the buffer until you're ready to display it, 
and after all the php function calls and everything, it "spits out" the content (automatically). 
You can manually extract the data from the buffer in the place where you want with the ob_get_contents(); 

It's good to use ob_start()  in combination with header("Location: ");  
because when you're trying to use header, to redirect, you must not have any output before calling that function. 
So ob_start();  will make sure to avoid errors such as "headers already sent" error. 
Because it will allow you to send headers even though you have sent some content already. */
?>


<?php include("init.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">