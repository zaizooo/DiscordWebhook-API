# DiscordWebhook
- A sample Libary For Discord Webhook Writed On PHP
# Tutorial\Example
 > Register Class
```php
  $wh = new Webhook('your_webhook_link');
```
> Settings
```php
  $wh = new Webhook('your_webhook_link');
  $wh->settings(['setting_key', 'setting_value']);
```
> Set Avatar/name
```php
  $wh = new Webhook('your_webhook_link');
  $wh->setAvatar('image_url');
  $wh->setName('Test!');
```
> Get Avatar/name
```php
  $wh = new Webhook('your_webhook_link');
  $wh->setAvatar('image_url');
  $wh->setName('Test!');
  $name = $wh->getName();
  $avatar = $wh->getAvatar();
```
> Set Message
```php
  $wh = new Webhook('your_webhook_link');
  $wh->setMessage('hello world');
```
> Embed
```php
  $wh = new Webhook('your_webhook_link');
  //You must enable using embed on settings
  //Set embed content: title, type, description, field.v.v
  $wh->setEmbed('title', 'hello world');
  $wh->setEmbed('image', 'your_image_path');
```
> Send a message
```php
  $wh = new Webhook('your_webhook_link');
  $wh->send();
```
