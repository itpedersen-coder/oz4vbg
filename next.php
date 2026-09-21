<?php

date_default_timezone_set('Europe/Copenhagen');



foreach ($program as $e) {
    
    //Virker
     $datetimeNow = new DateTime();
     $difference = $datetimeNow->diff($e->date); 
   
     $pos = strpos($difference->format("%R%a"), "+");

    if($pos !== false)
    {
        ?><label style='color:black; font-size: 20px;'><? echo 'Næste aften er:<br /> '.$e->name.' den. '.$e->date->format('d-m-Y').' kl.'.$e->date->format('H:i'); ?></label><?
        break;
    }
}


?>