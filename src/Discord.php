<?php

class WebhookApi
{
    /* 
    @ load function
    @ string $url
  */
    public function __construct(string $url)
    {
        $this->url = $url;
        $this->embedmanager = new EmbedManager();
    }
    public function setMessage($title)
    {
        return $this->title = $title;
    }
    public function getMessage()
    {
        if ($this->title !== null) {
            return $this->title;
        } else {
            return false;
        }
    }
    public function setUsername($user)
    {
        return $this->user = $user;
    }
    public function getUsername()
    {
        return $this->user;
    }
    /*
      @ $av = avatar (cuz ima too lazy)
    */
    public function setAvatar($av)
    {
        return $this->av = $av;
    }
    public function getAvatar()
    {
        return $this->av;
    }
    public function setTts(bool $tts)
    {
        return $this->tts = $tts;
    }
    public function getTts()
    {
        return $this->tts;
    }
    public function setEnableEmbed(bool $embed)
    {
        return $this->embed = $embed;
    }

    public function getEmbedManager()
    {
        return $this->embedmanager;
    }

    public function sendMessage()
    {
        $finalcontent = [
            "username" => $this->user,
            "content" => $this->title,
        ];
        if ($this->av !== null) {
            $finalcontent["avatar_url"] = $this->av;
        }
        if ($this->tts !== null) {
            $finalcontent["tts"] = $this->tts;
        }

        $a = $this->embedmanager->archiveValue();
        $b = $a[0]["title"];
        if (null !== $b) {
            $finalcontent["embeds"] = $this->embedmanager->archiveValue();
        }

        

        $ch = curl_init($this->url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Content-type: application/json",
        ]);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt(
            $ch,
            CURLOPT_POSTFIELDS,
            json_encode(
                $finalcontent,
                JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE
            )
        );
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $config["useragent"] =
            "Mozilla/5.0 (Windows NT 6.2; WOW64; rv:17.0) Gecko/20100101 Firefox/17.0";

        curl_setopt($ch, CURLOPT_USERAGENT, $config["useragent"]);
        curl_setopt($ch, CURLOPT_REFERER, "https://replit.com/");

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);
        $this->info = curl_getinfo($ch);

        return json_encode(
            $finalcontent,
            JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE
        );
    }
    public function getNetworkStatus()
    {
        $i = $this->info;
        return [
            "requesttime" => $i["total_time"],
            "httpcode" => $i["http_code"],
            "connecttime" => $i["connect_time"],
            "findiptime" => $i["namelookup_time"],
            "uptime" => $i["size_upload"],
            "downtime" => $i["size_download"],
        ];
    }
}

class EmbedManager
{
    public function __construct()
    {
        $this->embed = new \stdClass();
    }

    public function setTitle(string $title)
    {
        return $this->embed->title = $title;
    }
    public function getTitle()
    {
        return $this->embed->title;
    }
    public function setType(string $type)
    {
        return $this->embed->type = $type;
    }
    public function getType()
    {
        return $this->embed->type;
    }
    public function setDescription(string $desc)
    {
        return $this->embed->desc = $desc;
    }
    public function getDescription()
    {
        return $this->embed->desc;
    }
    public function setTimeStamp($time)
    {
        $this->embed->ts = date("c", $time);
    }
    public function getTimeStamp()
    {
        return $this->embed->ts;
    }
    public function setUrl(string $u)
    {
        return $this->embed->url = $u;
    }
    public function getUrl()
    {
        return $this->embed->url;
    }
    public function setColor(string $color)
    {
        return $this->embed->color = hexdec($color);
    }
    public function getColor()
    {
        return $this->embed->color;
    }
    public function setField(array $field)
    {
        if (isset($this->embed->field) and is_array($this->embed->field)) {
            return $this->embed->field[count($this->embed->field)] = $field;
        } else {
            return $this->embed->field[0] = $field;
        }
    }
    public function getField()
    {
        return $this->embed->field;
    }
    public function setFooter(array $f)
    {
        if (isset($f["text"]) and isset($f["icon_url"])) {
            return $this->embed->footer = $f;
        } else {
            return false;
        }
    }
    public function getFooter()
    {
        return $this->embed->footer;
    }
    public function setAuthor(array $author)
    {
        return $this->embed->author = $author;
    }
    public function getAuthor()
    {
        return $this->embed->author;
    }
    public function setImage(string $img)
    {
        return $this->embed->image = $img;
    }
    public function getImage()
    {
        return $this->embed->image;
    }
    public function archiveValue()
    {
        $embed = [];
        if (isset($this->embed->title)) {
            $embed["title"] = $this->embed->title;
        }
        if (isset($this->embed->image)) {
            $embed["image"]["url"] = $this->embed->image;
        }
        if (isset($this->embed->type)) {
            $embed["type"] = $this->embed->type;
        }
        if (isset($this->embed->desc)) {
            $embed["description"] = $this->embed->desc;
        }
        if (isset($this->embed->url)) {
            $embed["url"] = $this->embed->url;
        }
        if (isset($this->embed->color)) {
            $embed["color"] = $this->embed->color;
        }
        if (isset($this->embed->field)) {
            $embed["fields"] = $this->embed->field;
        }
        if (isset($this->embed->footer)) {
            ///    var_dump($k);
            $embed["footer"] = $this->embed->footer;
        }
        if (isset($this->embed->author)) {
            $embed["author"] = $this->embed->author;
        }
        if (isset($this->embed->ts)) {
            $embed["timestamp"] = $this->embed->ts;
        }
        $rv[] = $embed;
        return $rv;
    }
}
