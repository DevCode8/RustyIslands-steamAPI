<?php
    require ('steamauth/steamauth.php');
	# You would uncomment the line beneath to make it refresh the data every time the page is loaded
	// unset($_SESSION['steam_uptodate']);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>RustyIslands LTD</title>
	<link href="css/rustyislands.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div class="limiter">
		<div class="container-vital flex-center">
			<img src="https://cdn.discordapp.com/attachments/803675679366447136/810863319526408224/logobanner.png" />
		<h2 style="color: #fff;">Sign in with your Steam account</h2>
		<?php
if(!isset($_SESSION['steamid'])) {
    loginbutton("rectangle");
    
}  else {
    include ('steamauth/userInfo.php');

    //Protected content
	echo "<p>Type <code>/auth</code> in-game to claim rewards</p>";
    echo "Welcome back " . $steamprofile['personaname'] . "</br>";
    echo "here is your avatar: </br>" . '<img src="'.$steamprofile['avatarfull'].'" title="" alt="" /><br>'; // Display their avatar!
    
    logoutbutton();
}    
?>  
		</div>
	</div>
</body>
</html>