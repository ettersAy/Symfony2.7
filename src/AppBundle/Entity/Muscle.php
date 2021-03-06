<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Muscle
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\MuscleRepository")
 */
class Muscle
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="smallImg", type="string", length=255)
     */
    private $smallImg;

    /**
     * @var string
     *
     * @ORM\Column(name="laregImg", type="string", length=255)
     */
    private $laregImg;

    /**
     * @ORM\ManyToOne(targetEntity="MuscleGroupe", inversedBy="Muscle")
     * @ORM\JoinColumn(name="idMuscleGroupe", referencedColumnName="id")
     */
    private $muscleGroupe;
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Muscle
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set smallImg
     *
     * @param string $smallImg
     * @return Muscle
     */
    public function setSmallImg($smallImg)
    {
        $this->smallImg = $smallImg;

        return $this;
    }

    /**
     * Get smallImg
     *
     * @return string 
     */
    public function getSmallImg()
    {
        return $this->smallImg;
    }

    /**
     * Set laregImg
     *
     * @param string $laregImg
     * @return Muscle
     */
    public function setLaregImg($laregImg)
    {
        $this->laregImg = $laregImg;

        return $this;
    }

    /**
     * Get laregImg
     *
     * @return string 
     */
    public function getLaregImg()
    {
        return $this->laregImg;
    }

    /**
     * Set muscleGroupe
     *
     * @param \AppBundle\Entity\MuscleGroupe $muscleGroupe
     * @return Muscle
     */
    public function setMuscleGroupe(\AppBundle\Entity\MuscleGroupe $muscleGroupe = null)
    {
        $this->muscleGroupe = $muscleGroupe;

        return $this;
    }

    /**
     * Get muscleGroupe
     *
     * @return \AppBundle\Entity\MuscleGroupe 
     */
    public function getMuscleGroupe()
    {
        return $this->muscleGroupe;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Muscle
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
}
