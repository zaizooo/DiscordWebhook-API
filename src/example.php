<?php

require(__DIR__.'/discordapi.php);
//Single message
$h = new Webhook('your_wh');
$h->setMessage('Hello World');
$h->sendMessage();
//Embed
$h->getEmbedManager()->setTitle("That Is Embed Title");
$h->getEmbedManager()->setType("rich");
$h->getEmbedManager()->setDescription("That Is Embed Description");

$h->getEmbedManager()->setColor("ffffff");
$h->getEmbedManager()->setField([
    "name" => "Field2",
    "value" => "@zaizooo",
    "inline" => false,
]);
$h->getEmbedManager()->setField([
    "name" => "Field1",
    "value" => "@zaizooo",
    "inline" => false,
]);
$h->getEmbedManager()->setField([
    "name" => "Field1",
    "value" => "@zaizooo",
    "inline" => false,
]);
$h->getEmbedManager()->setImage(
    "https://i.pinimg.com/236x/ca/3a/8c/ca3a8ca2b8551d5ac314ef108a3fcb6f.jpg"
);
$h->getEmbedManager()->setAuthor([
    "name" => "Saidua",
    "url" =>
        "https://i.pinimg.com/236x/ca/3a/8c/ca3a8ca2b8551d5ac314ef108a3fcb6f.jpg",
]);
$h->getEmbedManager()->setFooter([
    "text" => "Awesome?",
    "icon_url" =>
        "https://2sao.vietnamnetjsc.vn/images/2021/08/09/10/29/jack-2.jpeg",
]);
$h->getEmbedManager()->setTimeStamp(time());

$h->sendMessage();
