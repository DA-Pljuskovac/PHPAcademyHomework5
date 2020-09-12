<?php namespace FinalClass\classdir;

require 'First/classdir/Helpclass.php';
require 'Second/classdir/Helpclass.php';
require 'Third/classdir/Helpclass.php';
use First\classdir\Helpclass as FirstClass;
use Second\classdir\Helpclass as SecondClass;
use Third\classdir\Helpclass as ThirdClass;
class App
{
    public $value;
    public function getClass($value)
    {
        switch ($value)
        {
            case 1:
                return FirstClass::viewAction();
                break;
            case 2:
                return SecondClass::viewAction();
                break;
            case 3:
                return ThirdClass::viewAction();
                break;
            default:
                return 'None of them';
                break;
        }
    }
}
