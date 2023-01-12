<?php

require_once("config.php");

echo session_save_path();


echo "<br>";

var_dump(session_status());

switch (session_status()) {

    case PHP_SESSION_DISABLED:
    echo " as sessões estão desabilitadas";
    break;

    case PHP_SESSION_NONE:
    echo " as sessões estão habilitadas, porém não iniciadas";
    break;

    case PHP_SESSION_ACTIVE:
    echo " sessão ativa";
    break;
    }

    ?>

