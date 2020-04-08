<?php

    class AnimalHerbivore extends Animal {

        public function __construct($jeuVideo, $nom, $force, $distanceObjectif)
        {
            parent::__construct($jeuVideo, $nom, $force, $distanceObjectif);
        }

        public function mangerPlante() {
            $action = rand(1, 2);
            if ($action == 1) {
                $this->distanceObjectif -= 5;
                echo('L\'herbivore prend un bonus de distance de -5');
            }
        }
    }
?>

