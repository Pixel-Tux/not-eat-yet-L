<html>
<head>
<title>SignIn</title>
    <script src="/old-data/js/jquery-3.5.1.min.js"></script>
    <script src="/old-data/js/main2.js"></script>
    <link rel="stylesheet" type="text/css"  href="{{ asset('/old-data/style.css') }}">
</head>
<body>

	<!-- Modal login -->
	<div style='display: block' id="modaleLogin" class="modal">
		<!-- Modal content -->
		<div class="modal-content-login">
		<a href='/old/'><span class="close" id='close-modal'>&times;</span></a>
			<div class="imgcontainer">
				<img
					src='/old-data/img/Logo_rev05-01.png' alt="Avatar"
					class="avatar">
			</div>
			<div>
				<form action="/signup" method="post"  class="container">
					<label for="ruolo"><b>Chi sei?</b></label>
					<select style='width:30%' name="ruolo">
						<option value="user">User</option>
						<option value="ristorante">Ristorante</option>
					</select>
					<br>
					<label for="email"><b>Mail</b></label>
					<input type="email" placeholder="Mail" name="email" required>
					<label for="username"><b>Username</b></label>
						<input type="text" placeholder="Enter Username" name="username" required>
					<label for="password"><b>Password</b></label>
					<input type="password" placeholder="Enter Password" name="password" required>
					<button type="submit" class="login button">Sign in</button>
				</form>
			</div>
			<br>
		</div>
	</div>
	<!--fine modal login-->
<!--FIXME-->
	<footer>
		<div class="clas footer-content">
			<div class="footer-section about"></div>
			<div class="footer-section links"></div>
			<div class="footer-section contact"></div>

		</div>
		<div class="footer-bottom">� 2020 All Rights Reserved
			NotEatYet.com</div>
	</footer>
	<!--fine fixme-->
</body>
</html>
