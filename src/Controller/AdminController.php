<?php
    namespace App\Controller;

    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\route;


    class AdminController extends AbstractController
    {
        /**
         * @Route("/" , name="homepage")
         */
        public function  homepageAction(){
//            return new Response( "<h1>welkom</h1>");
            return $this->render('admin/homepage.html.twig');
        }
    }