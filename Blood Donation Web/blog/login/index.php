<!DOCTYPE html>
<html>
<head>
<title>Login</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="" />

	 <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <style>
        .username {
            outline: none;
            font-size: 15px;
            color: #222;
            border:none;
            width: 90%;
            display: inline-block;
            background: transparent;
            letter-spacing: 1px;
        }
        h5 {
            font-size: 45px;
            color: #fff;
            font-weight: 300;
            text-transform: uppercase;
            letter-spacing: 4px;
            text-align: center;
            padding: 1em 0 0.4em 0;
        }
        @media(max-width:667px){

            h5 {
                font-size: 40px;
                letter-spacing: 3px;
            }
        }

        @media(max-width:415px){

            h5 {
                font-size: 35px;
                letter-spacing: 3px;
            }

            .copyright {
                padding: 2em 1em;
            }
        }
    </style>

	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />

	<link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">

</head>
<body>

<div class="w3layouts-main"> 
	<div class="bg-layer">
        <a href="../"><img style="margin-left: 10px; margin-top: 10px;" src="images/back.png" width="50" height="50"/></a>
		<h1>Sign In</h1>
        <?php
        if(isset($_GET['msg'])) {echo "<h5>".$msg=$_GET['msg']."</h5>";}
        ?>
		<div class="header-main">
			<div class="main-icon">
				<span class="fa fa-eercast"></span>

			</div>
			<div class="header-left-bottom">
				<form id="login_form" action="loginuser.php" method="post">
					<div class="icon1">
						<span class="fa fa-user"></span>
						<input type="text" class="username" name="username" placeholder="User Name" />
					</div>
					<div class="icon1">
						<span class="fa fa-lock"></span>
						<input type="password" name="password" placeholder="Password"/>
					</div>
					<div class="login-check">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i> Keep me logged in</label>
					</div>

					<div class="bottom">
						<button type="button" id="login" class="btn">Log In</button>
					</div>

				</form>

			</div>
            <span style="color: red;" id="result"></span>

		</div>
        <script src="js/jquery-1.11.3.min.js"></script>
        <script>
            $("#login").click(function(){
                $.post( $("#login_form").attr("action"), $("#login_form :input").serializeArray(), function(info){ $("#result").html(info); });
                clearInput();

            });

            $("#login_form").submit(function(){
                return false;
            });

            /*function clearInput(){

             $("#myform :input").each(function(index, element) {
             $(this).val('NA');
             });

             }*/
        </script>

		<div class="copyright">
			<p>© 2019 Company Name . All rights reserved | Design & Developed by <a href="#" target="_blank">Company Name</a></p>
		</div>

	</div>
</div>	


</body>
</html>