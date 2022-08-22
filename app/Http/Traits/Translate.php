<?php
namespace App\Http\Traits;

use Statickidz\GoogleTranslate;

class Translate{

public $from ='en';
public $to ='ar';
public $text;


public function translate($text){

$trans = new GoogleTranslate();
    $result=$trans->translate($this->from , $this->to, $text);
    return $result;
}

}


