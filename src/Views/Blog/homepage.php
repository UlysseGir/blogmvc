<?php
ob_start();
?>

<section class="homepage">
    <h1>Blog</h1>
    <p>Bienvenue sur ce site !</p>
    <p>Visiter tout nos blog dès maintenant</p>
</section>

<?php

$content = ob_get_clean();
require VIEWS . 'layout.php';
