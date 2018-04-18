<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 18/04/2018
 * Time: 13:37
 */

class Chat
{
    // Création des propriétés privées
    /**
     * @ORM\Column(type="string", length(
     *     min = 3,
     *     max = 20,
     *     minMessage = "le prénom doit faire au minimum {{limit}} charactères")
     */
    private $prenom;

    /**
     * @ORM\Column(type="int")
     */
    private$age;

    /**
     * @ORM\Column(type="string", length(
     *     min = 3,
     *     max = 10,
     *     minMessage = "le prénom doit faire au minimum {{limit}} charactères")
     */
    private $color;


    private $sexe;

    /**
     * @ORM\Column(type="string", length(
     *     min = 3,
     *     max = 20,
     *     minMessage = "le prénom doit faire au minimum {{limit}} charactères")
     */
    private $race;

    //Getters & Setters

    /**
     * @return mixed
     */
    public function getPrenom()
    {

        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * @param mixed $sexe
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }

    /**
     * @return mixed
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * @param mixed $race
     */
    public function setRace($race)
    {
        $this->race = $race;
    }

    //Construct

    public function __construct()
    {


    }

    // méthode getInfos

    public function getInfos($prenom,$age,$color,$race){

        echo $prenom.','.$race.','.$age.','.$color.'<br>';

    }
}
$chat1 = new Chat ;
$chat2 = new Chat ;
$chat3 = new Chat ;
$chat1->getInfos ('rantanplan', '10', 'roux', 'européen');
$chat2->getInfos ('roo', '2', 'gris', 'maincoon');
$chat3->getInfos ('titus', '16', 'blanc', 'bengal');

return $chat1;
