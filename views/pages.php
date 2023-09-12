<div class="container">
    <div class="row py-5">
        <?php
        $flux = simplexml_load_file('https://www.jeuxactu.com/rss/ja.rss');
        $nameSpace = $flux->getNamespaces(true);
        if ($flux) {
            foreach ($flux->channel->item as $item) {
                $title = $item->title;
                $link = $item->link;
                $description = $item->description;
                $image = $item->enclosure['url'];
                $date = date("d/m/Y", strtotime($item->pubDate));
                $dc = $item->children($nameSpace['dc']);
                $date = date_parse($dc->date);



        ?>
                <div class="col-lg-4 py-3">
                    <div class="card">
                        <img src="<?= $image ?>" class="card-img-top" alt="logo jeu vidéo">
                        <div class="card-body">
                            <h4 class="card-title text-center"><?= $title ?></h4>
                            <p class="card-text"><?= $description ?></p>
                            <div class="d-flex justify-content-between">
                                <p class="cardDate">Publié le <?= $date['day'] . '/' . $date['month'] . '/' . $date['year'] ?></p>
                                <a target="_blank" href="<?= $link ?>">
                                    <img src="/public/assets/img/arrow-right-solid 1.png" alt="flèche vers la droite">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
        <?php
            }
        } else {
            echo "<p>Impossible de charger le flux RSS.</p>";
        }
        ?>
    </div>
</div>