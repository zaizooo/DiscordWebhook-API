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
