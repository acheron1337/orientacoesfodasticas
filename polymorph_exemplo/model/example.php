<?php

class Example
{
    /*
    public function write($v)
    {
        print "value: " . $v . "\n";
    }
    
    public function write()
    {
        print "Valor: no value\n";
    }
    
    public function write($v,$w)
    {
        print "values: " . $v . " " . $w . "\n";
    }
    */ //this doesn't work with php, anyways, with other oriented languages this works
    
    public function write($v=null, $w=null)
    {
        if($v == null && $w == null)
        {
            print "value: no value\n";
        }
        else if($w == null) 
        {
          print "value: " . $v . "\n";
        } 
        else if($v == null) 
        {
          print "value: " . $w . "\n";
        } 
        else 
        {
          print "values: " . $v . " " . $w . "\n";
        }
        
    }
}