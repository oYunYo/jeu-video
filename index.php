
<?php
    // require_once 'include_class.php';

    // $persoGentil = new PersonnageGentil('Docus', 'Sadida', 10000, 1000);
    // $persoMechant = new PersonnageMechant('Dofus', 'Cra', 200, 20, 10, 20);

    // while ($persoMechant->getForce() > 0 && $persoMechant->getDistanceObjectif()>0 &&
    // $persoGentil->getForce() > 0 && $persoGentil->getDistanceObjectif() >0)
    // {
    //     $attaque = $persoMechant->attaquer();

    //     $persoGentil->subirAttaque($attaque);

    //     var_dump($persoGentil);
    //     var_dump($persoMechant);

    //     if($persoGentil->getForce() <= 0) {
    //         echo('Le personnage gentil est mort !! ');
    //     }

    //     if($persoMechant->getForce() <= 0) {
    //         echo('Le personnage méchant est mort !! ');
    //     }
    // }



    require_once 'include_class.php';
    require_once 'include_interface.php';

    $antilope = new AnimalHerbivore('AnimalDeCourse', 'antilope', 12, 100);
    $guepard = new AnimalCarnivore('AnimalDeCourse', 'guépard', 12, 100);

    while ($antilope->getForce() > 0 && $antilope->getDistanceObjectif() > 0 &&
    $guepard->getForce() > 0 && $guepard->getDistanceObjectif() > 0)
    {
        $antilope->course();
        $guepard->course();
        $antilope->mangerPlante();
        $guepard->mangerViande();

        var_dump($antilope);
        var_dump($guepard);

        if($antilope->getForce() <= 0) {
            echo('L\'herbivore est épuisé et ne peut plus bouger !! Le carnivore remporte la course !');
        }

        if($guepard->getForce() <= 0) {
            echo('Le carnivore est épuisé et ne peut plus bouger !! L\'herbivore remporte la course !');
        }

        if($antilope->getDistanceObjectif() <= 0) {
            echo('L\'herbivore a franchi la ligne d\'arrivée bravo !!');
        }

        if($guepard->getDistanceObjectif() <= 0) {
            echo('Le carnivore a franchi la ligne d\'arrivée bravo !!');
        }
    }
?>


