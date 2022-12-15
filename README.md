# DiscordWebhook
- A sample Libary For Discord Webhook Writed On PHP
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
  $wh = new WebhookApi('your_webhook_link');
  //Get Embed Manager
  $em = $wh->getEmbedManager();
  //Set Embed Title
  $em->setTitle('That Is Title');
  //Set Embed Type
  $em->setType('rich');
  //Set Embed Description
  $em->setDescription('That Is Description');
 //Set Embed Image
  $em->setImage('your_image_link');
 //Set Embed Footer
  $em->setFooter();
```
> Send a message
```php
  $wh = new Webhook('your_webhook_link');
  $wh->send();
```
