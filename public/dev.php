<?php

session_start();

require_once "inc/header.php";

?>

<pre><?= var_dump($_SESSION) ?></pre>
<pre><?= var_dump($_COOKIE) ?></pre>
<pre><?= var_dump($_SERVER) ?></pre>

<?php

require_once "inc/footer.php";

?>
