<?php
class Timing {
    public function timeConv($sec) {
        $day = floor($sec / (3600 * 24));
        $hour = floor($sec % (3600 * 24) / 3600);
        $min = floor($sec % 3600 / 60);
        $rest = floor($sec % 60);
        return ($sec . " Sekunden" . " sind " . $day . " Tage " . $hour . " Stunden " . $min . " Minuten " . $rest . " Sekunden");
    }
}


// test what the function returns
$timing = new Timing;
echo $timing->timeConv(2500);