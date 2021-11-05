<?php
session_set_cookie_params(0);
session_start();
session_destroy();

setcookie('id', '', time() - 3600);
setcookie('key', '', time() - 3600);
header('Location:index.html');
