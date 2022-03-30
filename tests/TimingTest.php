<?php
use PHPUnit\Framework\TestCase;
require_once "src/testtime.php";
// class name supposed to match name og the php file
class TimingTest extends TestCase {
    public function testtimeConv() {
        // tests if the class with the same name exists (throws an error before testing)
        $this->assertTrue(class_exists("Timing"), "You must declare Timing class");
        $counting = new Timing();
        $this->assertEquals("2400 Sekunden sind 0 Tage 0 Stunden 41 Minuten 40 Sekunden", $counting->timeConv(2500), "timeConv() must return 2500 Sekunden sind 0 Tage 0 Stunden 41 Minuten 40 Sekunden"); //last - if the function failed, will show this msg
    }
 }