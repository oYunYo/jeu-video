<?php
     abstract class Animal implements AnimalInterface {
        private $jeuVideo;
        public $nom;
        protected $force;
        public $distanceObjectif;

        public function __construct($jeuVideo, $nom, $force, $distanceObjectif)
        {
            $this->jeuVideo = $jeuVideo;
            $this->nom = $nom;
            $this->force = $force;
            $this->distanceObjectif = $distanceObjectif;
        }

        public function courir(){
            if($this->force >= 3) {
                $this->force -= 3;
                $this->distanceObjectif -= 20;
            }
        }

        public function marcher() {
            if($this->force >= 1) {
            $this->force -= 1;
            $this->distanceObjectif -= 8;
            }
        }

        // public function sauter() {

        // }

        public function getAllInfo() {
            return $this;
        }

        public function getDistanceObjectif() {
            return $this->distanceObjectif;
        }

        public function getForce() {
            return $this->force;
        }

        public function course() {
            $action = rand(1, 2);
            if ($action == 1) {
                $this->courir();
                echo('l\'animal prend de la vitesse et se met à courir !');
            } else {
                $this->marcher();
                echo('l\'animal prend son temps...');
            }
        }
    }
?>



