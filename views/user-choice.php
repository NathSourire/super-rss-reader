<h3 class="text-center">Choisir 3 sujet d'actu</h3>
<form id="formchoice" enctype="multipart/form-data" method="get">
    <fieldset class="container-fluid">
        <div class="row  my-5">
            <div>
                <label for="choiceastuce"></label>
                Toutes les Astuces et Soluces <input class="ms-5" type="checkbox" name="choiceAstuce" id="choiceastuce">
            </div>
            <div>
                <label for="choicearcade"></label>
                Toute l'actualité Arcade <input class="ms-5" type="checkbox" name="choiceArcade" id="choicearcade">
            </div>
            <div>
                <label for="choicemobile"></label>
                Toute l'actualité Mobile <input class="ms-5" type="checkbox" name="choiceMobile" id="choicemobile">
            </div>
            <div>
            <label for="choicepc"></label>
            Toute l'actulité PC <input class="ms-5" type="checkbox" name="choicePc" id="choicepc">
            </div>
            <div>
            <label for="choicesortie"></label>
            Les prochaines sorties <input class="ms-5" type="checkbox" name="choiceSortie" id="choicesortie">
            </div>
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