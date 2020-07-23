<?php
\App\FlashMessage::setFlash("error", "Hey ! Attention, tu n'as pas fait ta déconnexion :(");
header("Location: " . $router->url("home"));
exit();