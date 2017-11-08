<?php
/**
 * Created by PhpStorm.
 * User: bastien.cornu
 * Date: 08/11/17
 * Time: 10:57
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController extends Controller
{
    /**
     * @Route("/admin/login", name="app_security_login")
     */
    public function login(Request $request, AuthenticationUtils $authentificationUtils){
        $error = $authentificationUtils->getLastAuthenticationError();
        $lastUsername = $authentificationUtils->getLastUsername();

        return $this->render('Security/login.html.twig',array(
            'last_username'=>$lastUsername,
            'error'=>$error,
        ));
    }
}