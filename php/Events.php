<?php

class Events
{
    public static function get() {
        $json = file_get_contents("https://spreadsheets.google.com/feeds/list/1GAa8Slp90LyVH9HDExiS24vT_ZtX85bdtW5UhyBWokI/od6/public/values?alt=json");
        $obj = json_decode($json);
        $result= [];

        foreach($obj->feed->entry as $item) 
        {
            $event = $item->{'gsx$event'}->{'$t'};
            $date = $item->{'gsx$date'}->{'$t'};
            $description = $item->{'gsx$description'}->{'$t'};

            array_push($result, new WEvent($event, $date, $description));
        }

        return $result;
    }
}

class WEvent {
    public $date;
    public $name;
    public $description;

    public function __construct($_name, $_date, $_description) {
        $this->date = $_date;
        $this->name = $_name;
        $this->description = $_description;
    }
}

?>