<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\MuscleGroupe;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ));
    }
  
    /**
     * @Route("/muscleGroup/", name="listMuscleGroup")
     */
    public function listAction(Request $request)
    {
        $repository = $this->getDoctrine()
            ->getManager()
            ->getRepository('AppBundle:MuscleGroup');
      
        $listMuscleGroup = $repository->findAll();
        return $this->render('AppBundle:MuscleGroup:list.html.twig', array(
            'listMuscleGroup' => $listMuscleGroup
         ));
    }
  
  
    /**
     * @Route("/addMuscleGroupe/", name="addMuscleGroupe")
     */
    public function addMuscleGroupeAction(Request $request)
    {
        $muscleGroup = array(
            'name' => 'Pectoraux',
            'smallImg' => 'pectoraux_small.jpeg',
            'largeImg' => 'pectoraux_large.jpeg'
        );
        $muscleGroup = $this->get('app.muscle_group_factory')
            ->createMuscleGroupFromArray($muscleGroup);
        
        $em = $this->getDoctrine()->getManager();
        
        $em->persist($muscleGroup);
        $em->flush();
        
      
      // Reste de la méthode qu'on avait déjà écrit
      if ($request->isMethod('POST')) {
        $request->getSession()->getFlashBag()->add('notice', 'Muscle group added.');
        return $this->redirect($this->generateUrl('Hello', array('id' => $advert->getId())));
      }

      return $this->render('AppBundle:MuscleGroup:add.html.twig');
    }
}
