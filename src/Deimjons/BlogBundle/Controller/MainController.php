<?php

namespace Deimjons\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function AllAction()
    {

        return $this->render('DeimjonsBlogBundle:Main:Main.html.twig', array());
    }

    public function AddPostAction()
    {
      return $this->render('DeimjonsBlogBundle:Main:AddPost.html.twig');
    }
}