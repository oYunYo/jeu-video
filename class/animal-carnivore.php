<?php

    class AnimalCarnivore extends Animal {

        public function __construct($jeuVideo, $nom, $force, $distanceObjectif)
        {
            parent::__construct($jeuVideo, $nom, $force, $distanceObjectif);
        }

        public function mangerViande() {
            $action = rand(1, 2);
            if ($action == 1) {
                $this->force += 3;
                echo('Le carnivore prend un bonus de force de +3');
            }
        }
    }
?>


