<?php
namespace AppBundle\Controller;


use AppBundle\Entity\Training;
use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
class TrainerController extends Controller
{
    /**
     * @Route("/trainer/{id}", name="trainer_page")
     */
    public function trainerAction(Request $request, $id)
    {
        $trainers = $this->getDoctrine()
            ->getRepository(User::class)->findWithTrainings($id);
        return $this->render('@App/trainer/trainerPage.html.twig', [
            'trainers' => $trainers[0]
        ]);
    }
}