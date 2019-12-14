<?php
if(!empty($_POST)){
    dd($_POST);
}
?>
<?= "Slug : " . $params['slug'] . "<br>Id : " . $params['id'] ?>

<form method="post">
    <input type="text" name="slug" class="form-control">
    <button class="btn btn-success">Envoyer</button>
</form>
