<?php
namespace AppBundle\Controller;
use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 *
 * @author fy
 */
class SecurityController extends Controller
{
    /**
     * @Route("/inscription",name="security")
     */
    public function registration(){
        $user=new User();
      $form=$this  ->createForm(UserType::class, $user);
      return $this->render('security/registration.html.twig',array('form'=>$form->createView())
      );
      
            return $this->redirectToRoute('replace_with_some_route');
            
            if($request->isMethod('POST')){
                $form->handleRequest($request);
                if($form->isValid()){
                    $em=$this->getDoctrine()->getManager();
                    $em->persist($user);
                    $em->flush();
                    $request->getSession()->getFlashBag()->add('notice','Annonce bien enregistrée.');
                    return $this->redirectToRoute('oc_platform_view', array('id'=>$user->getId()));
                }
            }
          
    }
    public function index($name, \Swift_Mailer $mailer)
{
    $message = (new \Swift_Message('Hello Email'))
        ->setFrom('send@example.com')
        ->setTo('recipient@example.com')
        ->setBody(
            $this->renderView(
                // templates/emails/registration.html.twig
                'emails/registration.html.twig',
                array('name' => $name)
            ),
            'text/html'
        )
        /*
         * If you also want to include a plaintext version of the message
        ->addPart(
            $this->renderView(
                'emails/registration.txt.twig',
                array('name' => $name)
            ),
            'text/plain'
        )
        */
    ;

    $mailer->send($message);

   
}
}
