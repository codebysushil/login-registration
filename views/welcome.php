<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A new web page">
    <meta name="robots" content="index, follow">
    <link rel="icon" href="favicon.ico">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />
	<style>
	:root{
		--font: "Poppins";
    	--font-medium: 400;
    	--font-style: normal;
    }
	body{
    	font-family: "Poppins", Sans-Serif;
    	font-weight: 400;
    	font-style: normal;
    	}
    .fa{
        font-size: 22px;
    }
    a{
    	color: #000;
    	text-decoration:none;
    }
</style>
</head>
<body>
   <div class="container mt-3" id="app">
       <div class="row">
           <div class="col-12 col-md-8">
               <p>I'm here <a href="/"><i class="fa fa-home"></i>Home </a></p>
               <p>I'm here <a href="/"><i class="fa fa-user"></i>Profile </a></p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="main.js"></script>
</body>
</html>
