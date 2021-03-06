<?php

namespace AppBundle\Services;

class ReservationChecker
{

    private $repo;

    public function __construct(\AppBundle\Repository\ReservationsRepository $repo)
    {

        $this->repo = $repo;
    }

    public function isRegistered(\AppBundle\Entity\User $user, $trainingTime)
    {
            //dump($trainingTime);
        foreach ($trainingTime->getTrainingTime() as $training) {
            $old_training = $training;
            $result = $this->repo->findIfRegistered($user, $training);
            if ($result) {
                $training->is_registered = true;
                $training->reservation = $result->getId();
            }
            $trainingTime->removeTrainingTime($old_training);
            $trainingTime->addTrainingTime($training);
        }

            return $trainingTime;
    }
}
