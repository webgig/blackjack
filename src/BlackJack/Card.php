<?php
namespace  BlackJack;

class Card{

    private $card_int   =  array(2,3,4,5,6,7,8,9,10);

    private $card_alpha =  array('A' => 11,'K'=> 10,'Q' => 10,'J' => 10);

    private $card_suit  =  array('S','C','D','H');

    private $card;

    private $suit;

    public function __construct($card){
         $c =  substr($card, 0,1);
         $s =  substr($card, 1,1);

        if(!$this->isValidCard($c))
            throw new \Exception("Invalid Card [$c]");

        if(!$this->isValidSuit($s))
            throw new \Exception("Invalid Suit [$s]");

        $this->setCard($c);
        $this->setSuit($s);
    }

    public function isValidCard($card){
        if(!in_array($card,$this->card_int) && !in_array($card, array_keys($this->card_alpha)))
            return false;
        else
            return true;
    }

    public function isValidSuit($suit){
        if(in_array($suit,$this->card_suit))
            return true;
        else
            return false;
    }

    public function setCard($card){
        if(isset($card))
            $this->card = $card;
    }

    public function getCard(){

        if($this->card)
           return $this->card;
        else
           return false;
    }

    public function setSuit($suit){
        if(isset($suit))
            $this->suit = $suit;
    }

    public function getSuit(){

        if($this->suit)
           return $this->suit;
        else
           return false;
    }

    public function getFaceValue(){

        if(is_numeric($this->getCard())){
            $index = array_search($this->getCard(),$this->card_int);
            return $this->card_int[$index];
        } elseif (is_string($this->getCard())) {
            return $this->card_alpha[$this->getCard()];
        } else
           return false;

    }

}
