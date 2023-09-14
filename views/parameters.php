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

                    <div class="text-center">
                        <button class="inputparameters btn my-3 text-center"  name="" id="selectsubject">Sélectionner nouveaux sujets</button>
                        <div class="my-5">
                            <label for="numberarticle" class="fs-3">Nombre d’articles à afficher</label>                          
                            <div class="my-4">
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
                        <div class="d-flex justify-content-center my-5">
                            <button type="submit" class="btn" id="btnsubmit">Envoi !</button>
                        </div>
                        <!-- <button class="btn" id="theme-btn">Changer de thème</button> -->
                        <!-- <div>
                            <button type="button" class="btn inputparameters my-5" id="btnparameters">Valider</button>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>