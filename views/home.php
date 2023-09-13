<main>
    <!-- sujet 1 -->
    <div class="line"></div>
    <div class="container-fluid">
        <?php
        foreach (ACTUALITY as $item) {
            $name = $item[0];
            $url = $item[1];
        ?>

            <h4 class="text-center my-3"><a href="/controllers/pages-controller.php?subject=<?= $url ?>"><?= $name ?></a></h4>
            <div class="line mb-3"></div>

            <?php
            $flux = simplexml_load_file($url);
            if ($flux) {
                $titles = array();
                foreach ($flux->channel->item as $rssItem) {
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
                }
            }
            ?>
    </div>
    <div class="line"></div>
<?php
        }
?>

<!--  -->
</main>