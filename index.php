<?php

    // class Soda{
    //     protected $litre;
    //     protected $marque;
    //     protected $nom;

    //     public function __construct($litre, $marque, $nom){
    //         $this->litre = $litre;
    //         $this->marque = $marque;
    //         $this->nom = $nom;
    //     }

    //     public function getLitre(){
    //         return $this->litre;
    //     }
    //     public function getMarque(){
    //         return $this->marque;
    //     }
    //     public function getNom(){
    //         return $this->nom;
    //     }
    //     public function SetLitre($litre){
    //         $this->litre = $litre;
    //     }
    // }

    // $coca = new Soda(1.5, "coca-cola", "coca");
    // echo "Mon " . $coca->getNom() . " à " . $coca->getLitre() ."L";

    // echo "<br>";

    // $fanta = new Soda(0.5, "coca-cola", "fanta");
    // echo "Mon " . $fanta->getNom() . " à " . $fanta->getLitre() ."L";

    // echo "<br>";
    // echo "<br>";

    // echo "Je verse " . $fanta->getLitre() . "L de mon " . $fanta->getNom(). " dans mon " . $coca->getNom();

    // $coca->setLitre($coca->getLitre() + $fanta->getLitre());

    // echo "<br>";

    // echo "Mon coca à maintenant : " . $coca->getLitre() ."L" . " (Oui ce mélange est dégueu)";

    // class Verre extends Soda{
    //     private $contenance;
    //     private $verreNumber;
    //     public function __construct($litre, $marque, $nom, $contenance, $verreNumber){
    //         parent::__construct($litre, $marque, $nom);
    //         $this->contenance = $contenance;
    //         $this->verreNumber = $verreNumber;
    //     }
    //     public function getVerreNumber(){
    //         return $this->verreNumber;
    //     }
    //     public function getContenance(){
    //         return $this->contenance;
    //     }
    //     public function getLitreVerre(){
    //         return $this->litre;
    //     }
    // }

    // $verre1 = new Verre(0, "coca-cola", "coca", 1, 1);
    // $coca->setLitre($coca->getLitre() - $verre1->getContenance());
    // $verre1->setLitre($verre1->getContenance());
    
    // echo "<br>";
    // echo "Je verse " . $verre1->getContenance() . "L de " . $coca->getNom() . " dans mon verre" . $verre1->getVerreNumber();
    // echo ", il me reste " . $coca->getLitre() . "L de coca et j'ai " . $verre1->getLitreVerre() . "L dans mon verre" . $verre1->getVerreNumber();

    class VendingMachine{
        private $money = 100;
        private $nom;
        private $objets = [];
        public function __construct($money, $nom){
            $this->money = $money;
            $this->nom = $nom;

        }
        public function getObjets(){
            return  $this->objets;
        }
        public function getMoney(){
            return  $this->money;
        }
        public function setObjet($objet){
            array_push($this->objets, $objet);
        }
        
        public function resetMoney(){
            $this->money = 0;
        }
        public function buy($objetKey){
            $this->money = $this->money + $this->objets[$objetKey]->getPrice();
            unset($this->objets[$objetKey]);
        }
    }
    
    class Soda{
        private $price;
        private $nom;
        
        public function __construct($price, $nom){
            $this->price = $price;
            $this->nom = $nom;

        }
        public function getNom(){
            return $this->nom;
        }
        public function getPrice(){
            return $this->price;
        }
        
    }

    $vendingMachine1 = new VendingMachine(100, "machine1");
    $coca = new Soda(2, "coca");
    $fanta = new Soda(2, "fanta");
    $orangina = new Soda(2, "orangina");
    $vendingMachine1->setObjet($coca);
    $vendingMachine1->setObjet($fanta);
    $vendingMachine1->setObjet($orangina);
    var_dump($vendingMachine1->getObjets());
    $vendingMachine1->buy(1);
    var_dump($vendingMachine1->getObjets());
    var_dump($vendingMachine1->getMoney());
    
?>

