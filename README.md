# DiscordWebhook
- A sample Libary For Discord Webhook Writed On PHP
- That Just Made For Test Only So Don't Have A Update In Future😳
# Tutorial\Example
 > Register Class
```php
  $wh = new WebhookApi('your_webhook_link');
```

> Set Avatar/name
```php
  $wh = new WebhookApi('your_webhook_link');
  $wh->setAvatar('image_url');
  $wh->setName('Test!');
```
> Get Avatar/name
```php
  $wh = new WebhookApi('your_webhook_link');
  $wh->setAvatar('image_url');
  $wh->setName('Test!');
  $name = $wh->getName();
  $avatar = $wh->getAvatar();
```
> Set Message
```php
  $wh = new WebhookApi('your_webhook_link');
  $wh->setMessage('hello world');
```
> EmbedManager
```php
  $h = new WebhookApi('your_webhook_link');
  
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

//while(true){
$h->sendMessage();
```
> Send a message
```php
  $wh = new WebhookApi('your_webhook_link');
  $wh->sendMessage();
```
> Get A Request Info
```php
$wh = new WebhookApi('your_webhook_link');
  $wh->sendMessage();
$wh->getNetworkStatus() //return request array(uptime, downtime, httpstatus, domain_finding time, connect_time, total_time)
$wh->getResponse() //return webhook request content
