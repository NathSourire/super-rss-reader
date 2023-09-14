<div class="inputparameters ">
    <h1 class="text-center py-5">Choisir 3 sujets d'actualité</h1>
    <form id="formchoice" enctype="multipart/form-data" method="post">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 fs-5">
                    <label class="form-label"></label>
                    <?php
                    foreach (ACTUALITY as $key => $news) { ?>
                        <input class="my-3 ms-5 actualities" id="actuality_<?= $news[0] ?>" type="checkbox" name="actuality[]" value="<?= $key ?>">
                        <label for="actuality_<?= $news[0] ?>"><?= $news[0] ?></label>
                        <br>
                    <?php }
                    ?>
                    <p class="red">
                        <?= $errors['actuality'] ?? '' ?>
                    </p>


        <div class="row">
            <div class=" text-center fs-5 my-5">
                <div>
                    <label for="selectsubject"></label>
                    <input class="inputparameters text-center" type="text" name="" id="selectsubject" value="Séléctionner nouveaux sujets" disabled>
                    <div class="my-5">
                        <div class="my-3">
                            <label for="six">6</label>
                            <input type="radio" name="nbArticles" id="six" value="6">
                            <label for="nine">9</label>
                            <input type="radio" name="nbArticles" id="nine" value="9">
                            <label for="twelve">12</label>
                            <input type="radio" name="nbArticles" id="twelve" value="12">
                        </div>
                        <p class="red">
                            <?= $errors['nbArticlesErrors'] ?? '' ?>
                        </p>
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
    </form>
</div>