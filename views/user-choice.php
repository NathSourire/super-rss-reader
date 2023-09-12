<h3 class="text-center">Choisir 3 sujet d'actu</h3>
<form id="formchoice" enctype="multipart/form-data" method="get">
    <fieldset class="container-fluid">
        <div>
            <label class="form-label"></label><br>
            <?php
            foreach (ACTUALITY as $key => $value) { ?>
                <label for="actuality_<?= $key ?>"></label>
                <input class="my-3 ms-5" id="actuality_<?= $key ?>" type="checkbox" name="actuality[]" value="<?= $key ?>">
                <?= $value ?><br>
            <?php } ?>
        </div>
            <button type="button" class="btn ms-5 my-3" id="btnsubmit">Envoie !</button>
    </fieldset>
</form>