<?php

require_once 'core/init.php';




$message = new message();



$cname = $_POST['name'];

$cmail = $_POST['mail'];

$csubject = $_POST['subject'];

$cmessage = $_POST['message'];





$validate=new validate();

$validation=$validate->check($_POST, array(

	'name'=>array(

		'required'=>true

	),

	'mail'=>array(

		'required'=>true

	),

	'message'=>array(

		'required'=>true

	)

));



if($validation->passed()){

	try{

		$message->create('dodoka_messages', array(

			'name'=>$cname,

			'mail'=>$cmail,

			'subject'=>$csubject,

			'message'=>$cmessage,

			'time'=>date("Y-m-d H:i:s")

		), '');

		

		$receiver='johannes.dotter@dodoka.at';

		

		mail($receiver, $csubject, $cmessage, $cmail, $cname);

		

		echo 0;

	}catch(Exception $e){

		die($e->getMessage());

	}

}else{

	echo 'Fehler! Folgende Felder müssen ausgefüllt werden: ';

	echo '</ul>';

	foreach($validation->errors() as $error){

		switch($error){

			case 'name':

				$error='Ihr Name';

				break;

			case 'mail':

				$error='Ihre E-Mail Adresse';

				break;

			case 'message':

				$error='Nachricht';

				break;

		}

		echo '<li>'.$error.'</li>';

	}

	echo '</ul>';

}