<main>
    <!-- sujet 1 -->
    <div class="line"></div>
    <div class="container-fluid">
        <?php
        if (isset($selectedIndices)) {
            // Récupérez la valeur du cookie 'articleCount'
            $articleCount = isset($_COOKIE['articleCount']) ? intval($_COOKIE['articleCount']) : 6; // Par défaut à 6 si le cookie n'est pas défini

            foreach ($selectedIndices as $index) {
                if (isset(ACTUALITY[$index])) {
                    $item = ACTUALITY[$index];
                    $name = $item[0];
                    $url = $item[1];
                    $itemCount = 0;
        ?>

                    <h4 class="text-center my-3"><a href="/controllers/pages-controller.php?subject=<?= $url ?>"><?= $name ?></a></h4>
                    <div class="line mb-3"></div>

                    <?php
                    $flux = simplexml_load_file($url);
                    if ($flux) {
                        foreach ($flux->channel->item as $rssItem) {
                            if ($itemCount >= $articleCount) { // Utilisez la valeur du cookie
                                break;
                            }
                            $title = $rssItem->title;
                            $link = $rssItem->link;
                    ?>

                            <a class="link-underline link-underline-opacity-0 link" target="_blank" href="<?= $link ?>">
                                <div class="border d-flex justify-content-between p-2 my-2 accueil-actu">
                                    <h5 class="m-0 pt-2 title-text"><?= $title ?></h5>
                                    <img src="/public/assets/img/arrow-right.png" alt="arrow-right">
                                </div>
                            </a>

        <?php
                            $itemCount++;
                        }
                    }
                }
            }
        }
        ?>
    </div>
    <div class="line"></div>
</main>