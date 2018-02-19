<?php
namespace AppBundle\Factory;

use AppBundle\Entity\MuscleGroupe;

class MuscleGroupFactory
{
    /**
     * @param array $data
     * @return AppBundle\Entity\MuscleGroup
     */
    public static function createMuscleGroupFromArray($data)
    {
        $muscleGroup = new MuscleGroupe();
        $muscleGroup->setName($data['name']);
        $muscleGroup->setSmallImg($data['smallImg']);
        $muscleGroup->setLargeImg($data['largeImg']);
 
        return $muscleGroup;
    }
}