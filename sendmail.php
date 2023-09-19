<?php 
if(isset($_POST['submit'])){
    $to = "office@bluelimo.rs"; 
    $from = $_POST['email']; 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $datumOd = $_POST['datumOd'];
    $telefon = $_POST['telefon'];
    $vreme = $_POST['vreme'];
    $cars = $_POST['cars'];
    $brojKofera = $_POST['brojKofera'];
    $brojPutnika = $_POST['brojPutnika'];
    $placanje = $_POST['placanje'];
    $message1 = $_POST['message1'];
    $decijeSediste = $_POST['decijeSediste'];
 

    $subject = "Rezervacija termina";
    $message = "Ime: ".$name . 
    " \n\n email:" . $email .
    "\n\n Broj telefona: ". $telefon .
    "\n\n Datum: ". $datumOd .
    "\n\n Vreme: ". $vreme .
    "\n\n Auto: ". $cars .
    "\n\n Broj Kofera: ". $brojKofera .
    "\n\n Broj Putnika: ". $brojPutnika .
    "\n\n Nacin Placanja: ". $placanje .
    "\n\n Decije sediste: ". $decijeSediste .
    "\n\n Dodatna poruka: ". $message1;
    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    }
    
    header("Location: ./index.html");
?>