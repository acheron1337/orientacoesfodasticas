<?php

require_once("atividades_oobj/Pen.php");
require_once("atividades_oobj/BluePen.php");
require_once("atividades_oobj/RedPen.php");

$pen1 = new Pen;
$pen1->write();

$bluePen1 = new BluePen;
$bluePen1->write();

$redPen1 = new RedPen;
$redPen1->write();