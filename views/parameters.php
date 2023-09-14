<h3 class="text-center">Choisir 3 sujets d'actualité</h3>
<form id="formchoice" enctype="multipart/form-data" method="post">
    <fieldset class="container-fluid">
        <div>
            <label class="form-label"></label><br>
            <?php
            foreach (ACTUALITY as $key => $news) { ?>
                <input class="my-3 ms-5 actualities" id="actuality_<?= $news[0] ?>" type="checkbox" name="actuality[]" value="<?= $key ?>">
                <label for="actuality_"><?= $news[0] ?></label>
                <br>
            <?php }
            ?>
            <p class="red">
                <?= $errors['actuality'] ?? '' ?>
            </p>
        </div>
        <button type="submit" class="btn ms-5 my-3" id="btnsubmit">Envoi !</button>
    </fieldset>
</form>