<h3 class="text-center">Choisir 3 sujets d'actualité</h3>
<form id="formchoice" enctype="multipart/form-data" method="post">
    <fieldset class="container-fluid">

        <div class="row">
            <div class=" text-center fs-5 my-5">
                <div>
                    <label for="selectsubject"></label>
                    <input class="inputparameters text-center" type="text" name="" id="selectsubject" value="Séléctionner nouveaux sujets" disabled>
                    <div class="my-5">
                    <label for="numberarticle"></label>
                    <input class="inputparameters text-center" type="text" name="" id="numberarticle" value="Nombres d’articles à afficher" disabled>
                        <div class="my-3">
                            <label for="six">6</label>
                            <input type="radio" name="sixR" id="six">
                            <label for="nine">9</label>
                            <input type="radio" name="nineR" id="nine">
                            <label for="twelve">12</label>
                            <input type="radio" name="twelveR" id="twelve">
                        </div>
                    </div>
                    <label for=""></label>
                    <!-- <button class="btn" id="theme-btn">Changer de thème</button> -->
                    <div>
                        <button type="button" class="btn inputparameters my-5" id="btnparameters">Valider</button>
                    </div>
                </div>
            </div>
</div>

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