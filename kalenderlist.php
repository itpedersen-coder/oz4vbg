<?php

date_default_timezone_set('Europe/Copenhagen');

foreach ($program as $e) {
        ?><label style='color:black; font-size: 20px;'><? echo $e->date->format('d-m-Y').': '.$e->name.' - '.' kl.'.$e->date->format('H:i'); ?></label>
        <br />
        <?
}


?>
