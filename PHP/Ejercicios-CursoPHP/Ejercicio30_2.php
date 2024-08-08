<?php
session_start();
session_destroy();  // eliminamos la sesion para cerrarla
echo "Se destruyo la sesion de usuario" . ":<br>";