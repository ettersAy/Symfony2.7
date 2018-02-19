<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MuscleGroupe
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\MuscleGroupeRepository")
 */
class MuscleGroupe
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
     * @ORM\Column(name="LargeImg", type="string", length=255)
     */
    private $largeImg;


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
     * @return MuscleGroupe
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
     * @return MuscleGroupe
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
     * Set largeImg
     *
     * @param string $largeImg
     * @return MuscleGroupe
     */
    public function setLargeImg($largeImg)
    {
        $this->largeImg = $largeImg;

        return $this;
    }

    /**
     * Get largeImg
     *
     * @return string 
     */
    public function getLargeImg()
    {
        return $this->largeImg;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return MuscleGroupe
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
