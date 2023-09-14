<h3 class="text-center  my-5">Paramètres</h3>
<form id="formparameters" enctype="multipart/form-data" method="post">
    <fieldset class="container-fluid">
        <div class="row">
            <div class=" text-center fs-5  my-5">
                <div>
                    <label class="form-label" for="selectsubject"></label>
                    <input class="inputparameters text-center " type="text" name="selectSubject" id="selectsubject" value="Séléctionner nouveaux sujets" disabled>
                    <div class="my-5">
                    <p class="inputparameters col-4 offset-md-4 "> Nombres d’articles à afficher</p>
                        <div class="my-3">
                            <label class="form-label" for="six">6</label>
                            <input type="radio" name="numberarticles" id="six">
                            <label class="form-label" for="nine">9</label>
                            <input type="radio" name="numberarticles" id="nine">
                            <label class="form-label" for="twelve">12</label>
                            <input type="radio" name="numberarticles" id="twelve">
                        </div>
                    </div>
                    <label class="form-label" for="darkmode"></label>
                    <input class="inputparameters text-center" type="text" name="" id="darkmode" value="Dark mode" disabled>
                    <div>
                        <button type="button" class="btn inputparameters my-5" id="btnparameters">Valider</button>
                    </div>
                </div>
            </div>
        </div>
    </fieldset>
</form>