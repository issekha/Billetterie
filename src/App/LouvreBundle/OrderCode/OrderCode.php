<?php

namespace App\LouvreBundle\OrderCode;

class OrderCode
{
  /**
   * Vérifie si le texte est un spam ou non
   *
   * @param string $text
   * @return bool
   */
  public function generateur()
  {

    $codeChar    = 'abcdefghijklmnopqrstuvwxyz';
    $codeChar   .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';  
    $codeChar   .= '1234567890'; 
    $randomCode      = ''; 

    for($i=0;$i < 10;$i++)    //10 est le nombre de caractères
    { 
          $randomCode .= substr($codeChar,rand()%(strlen($codeChar)),1); 
    }
    return $randomCode; 

  }
}