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

public function translateSpcific( $fromTtext, $toText, $text){

    $trans = new GoogleTranslate();
        $result=$trans->translate($fromTtext , $toText, $text);
        return $result;
    }
}


