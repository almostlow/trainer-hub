<?php
namespace AppBundle\Controller;


use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        $trainers = $em->getRepository(User::class);

        $trainers = $trainers->findByRoles('ROLE_TRAINER');

        return $this->render('@App/public/index.html.twig', [
            'trainers' => $trainers
        ]);

    }
}