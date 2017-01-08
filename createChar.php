<!DOCTYPE html>
<html>
	<head>
		<title>Fire and Ice: Create Your Character</title>
		<link type="text/css" rel="stylesheet" href="css/fireice.css"/>
		<script src="http://use.edgefonts.net/aladin.js"></script>
		<script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
		<script src="js/cookies.js"></script>
		<script src="js/main.js"></script>
	</head>
	<body><center>
		<div class="content">
			<form method="get" action="" onsubmit="javascript:createChar(); return false;">
				<p id="row">Character Name: <input type="text" id="name" /></p>
				<p id="row">Age: <input type="text" id="age" value=""/></p>
				<p id="row">
					Gender: <input type="radio" id="gen" value="Male"/>Male <br/>
					        <input type="radio" id="gen" value="Female"/>Female
				</p>
				<p id="row">Species:
					<select id="species">
						<option value="Kendrii">Kendrii</option>
						<option value="Human">Human</option>
						<option value="ELven">Elven</option>
					</select>
				</p>
				<p id="row">Dragon-person or Ice Master?
					<input type="radio" id="fireice" value="Fire"/>Fire <br/>
					<input type="radio" id="fireice" value="Ice"/>Ice
				</p>
				<button onClick="form.submit()">Create Character</button>
			</form>
		</div>
	</center></body>
</html>