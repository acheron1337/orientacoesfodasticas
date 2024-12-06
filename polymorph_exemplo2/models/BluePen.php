<?php 

require_once("Pen.php");

class BluePen extends Pen{
    public function write()
    {
        //subwrite
        print "pen is blue-writing\n";
    }
}