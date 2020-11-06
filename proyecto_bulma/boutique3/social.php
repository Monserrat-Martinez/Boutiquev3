<?php
    require_once 'header.php';
?>
<!DOCTYPE html>
<html>

<head>
    <style>
        ul.social-network 
        {
	        list-style: none;
	        display: inline;
	        margin-left:0 !important;
            padding: 0;
            position: center;
        }
        ul.social-network li 
        {
	        display: inline;
	        margin: 0 5px;
        }

        .colores
        {
            
        }

        .social-network a.icoFacebook:hover 
        {
	        background-color:#3B5998;
        }
        .social-network a.icoInstagram:hover 
        {
	        background-color:#33ccff;
        }

        .social-network a.icoFacebook:hover i, .social-network a.icoInstagram:hover i{
	        color: #fff;
        }
        a.socialIcon:hover, .socialHoverClass {
	        color:#44BCDD;
        }

        .social-circle li a {
            display:inline-block;
	        position: center;
	        margin:0 auto 0 auto;
	        -moz-border-radius:70%;
            -webkit-border-radius:70%;
            border: 1px solid black;
	        border-radius:70%;
	        text-align:center;
	        width: 70px;
	        height: 70px;
	        font-size:20px;
        }
        .social-circle li i {
	        margin:0;
	        line-height:70px;
	        text-align: center;
        }

        #face{
            background-color:#3B5998;
        }
        #insta{
            background-color:#33ccff;
        }
        .social-circle li a:hover i, .triggeredHover {
	        -moz-transform: rotate(360deg);
	        -webkit-transform: rotate(360deg);
	        -ms--transform: rotate(360deg);
	        transform: rotate(360deg);
	        -webkit-transition: all 0.2s;
	        -moz-transition: all 0.2s;
	        -o-transition: all 0.2s;
	        -ms-transition: all 0.2s;
	        transition: all 0.2s;
        }
        .social-circle i {
            
	        color: #fff;
	        -webkit-transition: all 0.8s;
	        -moz-transition: all 0.8s;
	        -o-transition: all 0.8s;
	        -ms-transition: all 0.8s;
	        transition: all 0.8s;
        }
    </style>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
</head>

<body >
    <div class="card text-center colores">
        <div class="card-header">
            <h3>PUEDES CONTACTARNOS EN NUESTRAS REDES SOCIALES</h3>
        </div>
        <div class="card-body">
            
        </div>
        <div align= "center">
            <ul class="social-network social-circle" >
                <li><a href="https://www.instagram.com/monsee_martinez/" class="icoInstagram" id="insta"  title="Instragram"><i class="fa fa-instagram"></i></a></li>
                <li><a href="https://www.facebook.com/profile.php?id=100008718855769" class="icoFacebook" id="face" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                <?php echo ""; ?>
            </ul>
        </div>
        <br>
        <div class="card-footer text-muted">
            <?php echo ""; ?>
        </div>
    </div>
</body>

</html>