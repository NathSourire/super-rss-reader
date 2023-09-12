<?php
$flux = simplexml_load_file('https://www.jeuxactu.com/rss/ja.rss');

foreach ($flux->channel->item as $key => $value) {
    $title = $value->title;
    $link = $value->link;
    $description = $value->description;
}
