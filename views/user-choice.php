<h3 class="text-center">Choisir 3 sujets d'actualité</h3>
<form id="formchoice" enctype="multipart/form-data" method="post">
    <fieldset class="container-fluid">
        <div class="row">
            <div class=" checkmiddle col-12 col-4 offset-md-4">
                <h4>
                <label class="form-label"></label><br>
                <?php
                foreach (ACTUALITY as $key => $value) { ?>
                    <input class="my-3 ms-5 actualities" id="actuality_<?= $key ?>" type="checkbox" name="actuality[]" value="<?= $value ?>">
                    <label for="actuality_<?= $key ?>"><?= $value ?></label>
                    <br>
                <?php } ?>
                <p class="red">
                    <?= $errors['actuality'] ?? '' ?>
                </p>
                <button type="submit" class="btn ms-5" id="btnsubmit">Envoie !</button>
            </h4>
        </div>
        </div>
    </fieldset>
</form>