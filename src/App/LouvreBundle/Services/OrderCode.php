<?php

namespace App\LouvreBundle\Services;

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

    $characts    = 'abcdefghijklmnopqrstuvwxyz';
    $characts   .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';  
    $characts   .= '1234567890'; 
    $code_aleatoire      = ''; 

    for($i=0;$i < 10;$i++)    //10 est le nombre de caractères
    { 
          $code_aleatoire .= substr($characts,rand()%(strlen($characts)),1); 
    }
    return $code_aleatoire; 

  }
}