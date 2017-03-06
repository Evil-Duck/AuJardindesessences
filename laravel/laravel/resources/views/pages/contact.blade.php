
<?php

if(isset($_GET)){
	if(isset($_GET['nom'])&&isset($_GET['prenom'])&&isset($_GET['mail'])&&isset($_GET['subject'])&&isset($_GET['msg']) && isset($_GET['submit'])){


		$Mailcontact = "moi@yopmail.com";
		$mails = $_GET['mail'];
		$nom = htmlentities($_GET['nom']);
		$prenom = htmlentities($_GET['prenom']);
		$sujet = htmlentities($_GET['subject']);
		$msgU = htmlentities($_GET['msg']);

		if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $Mailcontact)){
			$passage_ligne = "\r\n";
		}
		else {
			$passage_ligne = "\n";
		}

		$message='
		<html>
			<body>
				<div style=" margin:0px 10% 0px 10%; background-color: #fff9ff" >
					<div style="text-align:center; background-color: #cb9dba; font-size:30px; font-color:white;">
						Nouveau Message
					</div>
					<div style="margin: 15px;text-align:left; font-size:15px;">
						<b>Prénom :</b> '.$prenom.'
					</div>
					<div style="margin: 15px;text-align:left; font-size:15px;">
						<b>Nom :</b> '.$nom.'
					</div>
					<div style="margin: 15px;text-align:left; font-size:15px;">
						<b>Mail :</b> '.$mails.'
					</div>
					<div style="margin: 15px;text-align:Left; border-bottom: 1px solid #8f617e; font-size:15px;">
						<b>Sujet du message :</b> '.$sujet.'
					</div>
					<div style="margin: 12px;text-align:justify;">
						'.$msgU.'
					</div>
					<div style="text-align:center;"><i style="color:red; font-size: 16px" >Attention, pour répondre veuillez utiliser l\'adresse mail du client: '.$mails.' </i></div>
				</div>

			</body>
		</html>';

		$headers  = 'MIME-Version: 1.0' . $passage_ligne;
		$headers .= 'Content-type: text/html; charset=UTF-8 sans BOM' . $passage_ligne;

		$headers .= 'From: NOREPLY.Aujardindesessences.ch' . $passage_ligne;
		$headers .= 'Date: ' . date("r") . $passage_ligne;

		if(mail($Mailcontact, $sujet, $message, $headers)){
			?><script>alert("E-Mail envoyé");</script><?php
		}
		else {
			?><script>alert("Erreur lors de l'envoi");</script><?php
		}
	}
}
?>
@extends('default')
@section('content')
	<div class="grid-container">
		<div class="panel grid-80 suffix-10 prefix-10">
	      <div class="panel-banner" style="background-image: url('{{ elixir('images/contact.jpeg') }}")>
	        <div class="opacity">
	          <h1>contactez-moi</h1>
	        </div>
	      </div>
	      <div id="Cmaps" class="panel-content" Onclick="IframeClick('maps')">
	        <h2>Les moyens de me contacter</h2>
	        <p>Voici les differents moyens de me contacter</p>
	        <ul class="info-list fa-ul">
		    	<li><i class="fa-li fa fa-dot-circle-o"></i>Téléphone : 000 / 000.00.00</li>
		    	<li><i class="fa-li fa fa-dot-circle-o"></i>E-Mail: contact@aujardindesessences.ch</li>
		    	<li><i class="fa-li fa fa-dot-circle-o"></i>Via le formulaire de contact ci-dessous</li>
			</ul>
			<br>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.8558182529478!2d6.813422045214869!3d46.92721023450359!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478dde043e5f33c5%3A0x808217a6a6373a2c!2sChemin+des+Chapons-des-Pr%C3%A9s+12%2C+2022+Bevaix!5e1!3m2!1sfr!2sch!4v1487324845806" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen="yes" id="maps" scrolling="yes"></iframe>
	      </div>
	    </div>
	    <div class="panel grid-80 suffix-10 prefix-10">
	      <div class="panel-content">
	        <form action="/contact" method="get" accept-charset="utf-8">
		        <input type="text" name="nom" value="" placeholder="Votre nom ..." class="input-50" /required>
		        <input type="text" name="prenom" value="" placeholder="Votre prenom ..." class="input-50" /required>
		        <input type="email" name="mail" value="" placeholder="Votre adresse e-mail ..."/required>
		        <input type="text" name="subject" value="" placeholder="Le sujet de votre demande ..."/required>
		        <textarea name="msg" placeholder="Contenu du message ..." /required></textarea>
		        <button name="submit" type="submit">Envoyer</button>
	        </form>
	      </div>
	    </div>
	</div>
@stop
