<?php
$flux = simplexml_load_file('https://www.jeuxactu.com/rss/ja.rss');

foreach ($flux->channel->item as $key => $value) {
    $title = $value->title;
    $link = $value->link;
    $description = $value->description;
}
?>

<div class="container">
    <div class="row py-5">
        <div class="col-md-4 py-3">
            <div class="card">
                <img src="/./public/assets/img/Gaming.png" class="card-img-top" alt="logo jeu vidéo">
                <div class="card-body">
                    <h4 class="card-title text-center">Titre du sujet</h4>
                    <h5 class="card-title text-center">Description</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam quidem, unde numquam
                        voluptatibus reprehenderit asperiores facere doloremque repellat, mollitia perferendis, ex ut ullam tenetur culpa!
                        Dicta consequatur accusantium velit pariatur.</p>
                    <div class="d-flex justify-content-between">
                        <p class="cardDate">12/09/2023</p>
                        <a href="/./controllers/article-controller.php">
                            <img src="/./public/assets/img/arrow-right-solid 1.png" alt="flèche vers la droite">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 py-3">
            <div class="card">
                <img src="/./public/assets/img/Gaming.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title text-center">Titre du sujet</h4>
                    <h5 class="card-title text-center">Description</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam quidem, unde numquam
                        voluptatibus reprehenderit asperiores facere doloremque repellat, mollitia perferendis, ex ut ullam tenetur culpa!
                        Dicta consequatur accusantium velit pariatur.</p>
                    <div class="d-flex justify-content-between">
                        <p class="cardDate">12/09/2023</p>
                        <a href="#">
                            <img src="/./public/assets/img/arrow-right-solid 1.png" alt="flèche vers la droite">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 py-3">
            <div class="card">
                <img src="/./public/assets/img/Gaming.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title text-center">Titre du sujet</h4>
                    <h5 class="card-title text-center">Description</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam quidem, unde numquam
                        voluptatibus reprehenderit asperiores facere doloremque repellat, mollitia perferendis, ex ut ullam tenetur culpa!
                        Dicta consequatur accusantium velit pariatur.</p>
                    <div class="d-flex justify-content-between">
                        <p class="cardDate">12/09/2023</p>
                        <a href="#">
                            <img src="/./public/assets/img/arrow-right-solid 1.png" alt="flèche vers la droite">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>