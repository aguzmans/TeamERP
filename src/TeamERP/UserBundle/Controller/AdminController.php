<?php

namespace TeamERP\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\User\UserInterface;
use TeamERP\UserBundle\Form\Type;

/**
 * Description of AdminController
 *
 * @author Abel Guzman
 */
class AdminController extends Controller
{
    public function adminAction()
    {
        $userManager = $this->get('fos_user.user_manager');
        $users = $userManager->findUsers();
        return $this->render('TeamERPUserBundle:Admin:admin.html.twig',array('users' =>$users));
    }   
    public function editUserAction($id){

        $userManager = $this->get('fos_user.user_manager');
        $user = $userManager->findUserByUsername($id);
        
        //$form = new NewUserFormType();
        $form = $this->container->get('fos_user.profile.form');
        $formHandler = $this->container->get('fos_user.profile.form.handler');

        $process = $formHandler->process($user);
        if ($process) {
            $user->upload();
            $this->setFlash('fos_user_success', 'profile.flash.updated');

            return new RedirectResponse($this->container->get('router')->generate('fos_user_profile_show'));
        }

        return $this->container->get('templating')->renderResponse(
        'FOSUserBundle:Profile:edit.html.'.$this->container->getParameter('fos_user.template.engine'),
        array('form' => $form->createView())
        );
    }
    public function deleteUserAction($aUser){
        $user = $this->container->get('security.context')->getToken()->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this     section.');
        }
        $userManager = $this->get('fos_user.user_manager');
        $user = $userManager->findUserByUsername($aUser);    
        $userManager->deleteUser($user);
    }
}
