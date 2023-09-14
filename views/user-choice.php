<div class="inputparameters ">
    <h3 class="text-center">Choisir 3 sujets d'actualité</h3>
    <form id="formchoice" enctype="multipart/form-data" method="post">
        <fieldset class="container-fluid ">
            <div class="row">
                <div class="fs-5 col-12 col-4 offset-md-4 my-4">
                    <?php
                    foreach ((ACTUALITY[0]) as $key => $value) { ?>
                        <input class="my-4 ms-5 actualities" id="actuality_<?= $key ?>" type="checkbox" name="actuality[]" value="<?= $value ?>">
                        <label for="actuality_<?= $key ?>"><?= $value ?></label>
                        <br>
                    <?php } ?>
                    <p class="red">
                        <?= $errors['actuality'] ?? '' ?>
                    </p>
                    <button type="submit" class="btn my-5 ms-5" id="btnsubmit">Envoie !</button>
                </div>
            </div>
        </fieldset>
    </form>
</div>