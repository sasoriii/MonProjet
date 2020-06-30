<?php
class Personnage
{
    private $_force;
    private $_experience;
    private $_degats;


    public function frapper(Personnage $persoAFrapper)
    {
        $persoAFrapper->_degats += $this->_force;
    }

    public function gagnerExperience()
    {
        $this->_experience++;
    }

    public function setForce($force)
    {
        if (!is_int($force))
        {
            trigger_error('force perso doit être un nombre entier', E_USER_WARNING);
            return;
        }

        if ($force > 100)
        {
            trigger_error('force perso peut pas dépasser 100', E_USER_WARNING);
            return;
        }

        $this->_force = $force;
    }

    public function setExperience($experience)
    {
        if (!is_int($experience))
        {
            trigger_error('exp perso doit être un nombre entier', E_USER_WARNING);
            return;
        }

        if ($experience > 100)
        {
            trigger_error('exp perso peut pas dépasser 100', E_USER_WARNING);
            return;
        }

        $this->_experience = $experience;
    }

    public function degats()
    {
        return $this->_degats;
    }

    public function force()
    {
        return $this->_force;
    }

    public function experience()
    {
        return $this->_experience;
    }
}

/*$perso = new Personnage;
$perso->parler();
$perso->gagnerExperience();
$perso->afficherExperience();
*/

$perso1 = new Personnage;
$perso2 = new Personnage;

$perso1->setForce(10);
$perso1->setExperience(2);

$perso2->setForce(90);
$perso2->setExperience(58);

$perso1->frapper($perso2);
$perso1->gagnerExperience();

$perso2->frapper($perso1);
$perso2->gagnerExperience();

echo 'perso 1 a ', $perso1->force(), 'force, perso 2 qui a ', $perso2->force(), 'force';
echo 'perso 1 a ', $perso1->experience(), 'exp, perso 2 qui a ', $perso2->experience(), 'exp';
echo 'perso 1 a ', $perso1->degats(), 'degat, perso 2 qui a ', $perso2->degats(), ' de dégâts';