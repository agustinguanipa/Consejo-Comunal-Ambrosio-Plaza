<?php 

	include "../paginas/conexion.php";

	$cedul_per = $_POST['cedul_per'];
	$nombr_per = $_POST['nombr_per'];
	$apeli_per = $_POST['apeli_per'];
	$fecna_per = $_POST['fecna_per'];
	$telem_per = $_POST['telem_per'];
	$telec_per = $_POST['telec_per'];
	$email_per = $_POST['email_per'];
	$direc_per = $_POST['direc_per'];
	$tifam_per = 'JEFE DE FAMILIA';
	$tibom_per = $_POST['tibom_per'];
	$seria_per = $_POST['seria_per'];
	$usuar_per = $_POST['usuar_per'];
	$contr_per = md5($_POST['contr_per']);
	$statu_per = 1;
	$ident_tip = $_POST['ident_tip'];

	$query_insert = mysqli_query($conexion,"INSERT INTO tab_per(cedul_per,nombr_per,apeli_per,fecna_per,telem_per,telec_per,email_per,direc_per,tifam_per,tibom_per,seria_per,usuar_per,contr_per, statu_per,ident_tip,ident_fam) VALUES('$cedul_per','$nombr_per','$apeli_per','$fecna_per','$telem_per','$telec_per','$email_per','$direc_per','$tifam_per','$tibom_per','$seria_per','$usuar_per','$contr_per','$statu_per','$ident_tip')");
	}

	header('location: ../paginas/persona_registro_exito.php');
?>