<!DOCTYPE html>
<?php session_start()?>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="K2K.css" />
		<title>Key To Key - Contact </title>
		<link rel="icon" type="image/gif" href="Img/icone.gif" />
	</head>
	
	
	<body>
		<?php include("header.php"); ?>
		<!--formulaire contact-->
		<div>
			<div align="center">
			<p>
			<form method="post"action="traitement.php">
			
			<fieldset>
				<br>
				<legend class="qui">qui êtes-vous?</legend>
				<label for="nom">Nom : </label>
				</br>
				<input class= "case_contact" style="margin:auto",type="text", name="nom", id="nom", required/>
			<br>
				<label for="prenom">Prénom : </label>
			</br>
			<input class= "case_contact" style="margin:auto",type "text", name="prenom", id="prenom", required/>
			<br>	
				<label for "email">email : </label>
			</br>
			<input class= "case_contact"style="margin:auto",type "email", name="email", id="email", required/>
			</fieldset>			
			<div style="height:50px"></div>
			<br>
        	<label for = "message"> Ecrivez votre message </label>
			</br> 
			<textarea class= "case_contact" name="message", id="message", rows="25", cols="50"> 
			</textarea>
            </p>
            <input type="submit" value="Envoyer"/>
			</form>
		
		</div>
		
		
		<?php include("footer.php"); ?>
	</body>