<?php

require_once("Pen.php");

class RedPen extends Pen{
    public function write()
    {
        //superwrite
        print "pen writing in red-color\n";
    }
    
    public function writeEspecific()
    {
        $this->write();
    }
    
    public function writeFather()
    {
        parent::write();
    }
}