<?php
$nomdujeu = 'La Bataille de ouf';

class Pile  
{
  //Les cartes sont dos au tapis. La carte du bas est en position 0 du paquet
  //tableau de tableau qui représente les cartes dans un ordre défini
  
  public $suites = ['S', 'H', 'C', 'D'];
  public $chiffres = [2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14];
  public $pile = [];

    function __construct()
  {
		$this->créer();
  }

    function créer()
	{     
		foreach($this->suites as $suite) {
			foreach($this->chiffres as $index) {
			$this->pile[] = $this->créercarte($chiffres, $index);
			}
		}
		return $this;    //return du tableau des suites des cartes jouées
    }
        function mélanger() //mélange les cartes  
	{
		shuffle($this->pile);
		return $this;
    }
        public function addCardToBottom ($carte) //place la carte en bas du paquet
    {
          array_unshift($this->pile, $carte); //https://www.php.net/manual/en/function.array-unshift.php
      
      return;
    }
  
        public function addCardToTop ($carte)  //place la carte en haut du paquet
    {
          $this->pile[] = $carte;
      
      return;
    }

            function bataille ($player1, $player2, $paquetcartes)
              if ($player1->nombredecartes() == 0) {
                echo 'Tu es à court de cartes';
                return;
              }
              if ($player2->nombredecartes() == 0) {
                echo 'Le jeu est à court de cartes';
                return;
                  //joue la première carte de la pile
            $carte = $player1->getTopCard();

            $paquetcartes->addCardToTop($carte);

        echo 'à toi de jouer';  $player1->printCard($carte);

            $cartejeu = $player2->getTopCard();

            $paquetcartes->addCardToTop($cartejeu);

        echo 'Le jeu joue';  $player2->printCard($cartejeu);
              }
              if ($carte['index'] > $cartejeu['index']) {

                echo 'gagné';
                $player1->addToBottom($battlepile);

              } elseif ($card2['index'] > $card1['index']) {

                echo 'perdu';

                $player2->addToBottom($battlepile);

              } else {

                echo 'égalité';
              }
              
              return;
            }

    function créercarte($suite, $index)
    {
      return ['suite' => $suite, 'index' => $index]; // "pioche" une carte
    }


    if ($player1->nombredecartes() > 0) {
        echo 'Tu gagnes !';
     } else {
       echo 'Le jeu gagne ! :(';
     }
     
      ?>