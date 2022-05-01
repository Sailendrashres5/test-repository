<?php
session_start();
include "data_config.php";?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>RECIPEPAGE</title>
	<link rel="stylesheet" type="text/css" href="reciplada.css">
	<link rel="stylesheet" type="text/css" href="mainpage.css">
</head>
<body>
    <header class="main-header">
		<a href="homepage.php"><div class="brand-logo"></div></a>
		<nav class="main-nav">
			<ul>
				<li><div><input id="searchbar"type="text" class="search-bar" placeholder="Search..." onkeypress="clickpress(event)"></div></li>
				<li><a href="sign-in.html"><div class="sign-in">Profile</div></a>
          <ul>
            <li class="nest"><a href="favoritepage.php">Favorites</a></li>
    				<li class="nest"> <a href="logoutprocess.php">Log out</a> </li>
            
          </ul>
        </li>
        <li><a href="searchpage.php"><div class="advance-search" style="margin-top:20px">Advance search</div></a></li>

				
			</ul>
		</nav>
	</header>
	<div class="divine">

		<?php
		if(isset($_POST)){
			$id=$_GET['id'];
			$recsql="select * from recipe where recipe_id=$id";
			$res=mysqli_query($conn,$recsql);
			while($row=mysqli_fetch_assoc($res)){
				echo "<br><h1>".'<p style="position: relative; text-align: center;">'.$row['recipe_name']."</p></h1><br>";
				echo '<img src="data:image/jpeg;base64,'.( $row['recipe_image'] ).'"style="position: relative; margin-left: 275px; border-radius: 10px;"/>';
				
				echo '<p style="position: relative; text-align: center; margin-top:30px;">'.$row['recipe_description']."</p><br>";
				echo '<p style="position: relative; text-align: center; margin-block-end:40px;">'.$row['recipe_direction']."</p>";
			}

		}



		?>
	</div>
</body>
</html>