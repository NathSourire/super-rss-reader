<main>
    <!-- sujet 1 -->
    <div class="line"></div>
    <div class="container-fluid">

        <h4 class="text-center my-3"><?= $subject1 ?></h4>
        <div class="line mb-3"></div>
        <?php
        $flux = simplexml_load_file(ACTUALITY[$subject1]);

          <h4 class="text-center my-3">Sujet 1 ( futur variable )</h4>

        <div class="line mb-3"></div>
        <?php

        $flux = simplexml_load_file('https://www.jeuxactu.com/rss/ja.rss');

        if ($flux) {
            $titles = array();
            foreach ($flux->channel->item as $item) {
                $title = $item->title;
                $titles[] = $title;
                $link = $item->link;
            }
            for ($i = 0; $i < 6; $i++) {
                $currentTitle = isset($titles[$i]) ? $titles[$i] : '';
        ?>
                <a class="link-underline link-underline-opacity-0 link" target="_blank" href="<?= $link ?>">
                    <div class="border d-flex justify-content-between p-2 my-2 accueil-actu">
                        <h5 class="m-0 pt-2 title-text"><?= $currentTitle ?></h5>
                        <img src="/public/assets/img/arrow-right.png" alt="arrow-right">
                    </div>
                </a>
        <?php }
        }
        ?>
    </div>
    <div class="line"></div>
    <!--  -->
    <!-- sujet 2 -->
    <div class="container-fluid">
        <h4 class="text-center my-3"><?= $subject2 ?></h4>
        <div class="line mb-3"></div>
        <?php
        $flux = simplexml_load_file(ACTUALITY[$subject2]);
        if ($flux) {
            $titles = array();
            foreach ($flux->channel->item as $item) {
                $title = $item->title;
                $titles[] = $title;
                $link = $item->link;
            }


            for ($i = 0; $i < 6; $i++) {
                $currentTitle = isset($titles[$i]) ? $titles[$i] : '';
        ?>
                <a class="link-underline link-underline-opacity-0 link" target="_blank" href="<?= $link ?>">
                    <div class="border d-flex justify-content-between p-2 my-2 accueil-actu">
                        <h5 class="m-0 pt-2 title-text"><?= $currentTitle ?></h5>
                        <img src="/public/assets/img/arrow-right.png" alt="arrow-right">
                    </div>
                </a>
        <?php }
        }
        ?>
    </div>
    <div class="line"></div>
    <!--  -->
    <!-- sujet 3 -->
    <div class="container-fluid">
        <h4 class="text-center my-3"><?= $subject3 ?></h4>
        <div class="line mb-3"></div>
        <?php
        $flux = simplexml_load_file(ACTUALITY[$subject3]);
        if ($flux) {
            $titles = array();
            foreach ($flux->channel->item as $item) {
                $title = $item->title;
                $titles[] = $title;
                $link = $item->link;
            }


            for ($i = 0; $i < 6; $i++) {
                $currentTitle = isset($titles[$i]) ? $titles[$i] : '';
        ?>
                <a class="link-underline link-underline-opacity-0 link" target="_blank" href="<?= $link ?>">
                    <div class="border d-flex justify-content-between p-2 my-2 accueil-actu">
                        <h5 class="m-0 pt-2 title-text"><?= $currentTitle ?></h5>
                        <img src="/public/assets/img/arrow-right.png" alt="arrow-right">
                    </div>
                </a>
        <?php }
        }
        ?>
    </div>
    <!--  -->
</main>