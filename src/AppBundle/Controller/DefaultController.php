<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/pani-twardowska.html", name="pani-twardowska")
     */
    public function paniTwardowskaAction()
    {
        return $this->render('default/pani-twardowska.html.twig');
    }


    /*
     * A
     */

    /**
     * @Route("/autobiografia.html", name="autobiografia")
     */
    public function  autobiografiaAction()
    {
        return $this->render('default/autobiografia.html.twig');
    }

    /*
     * B
     */
    
    /**
     * @Route("/balkanica.html", name="balkanica")
     */
    public function balkanicaAction()
    {
        return $this->render('default/balkanica.html.twig');
    }
    /**
     * @Route("/ridingWithTheKing.html", name="Riding with the king")
     */
    public function ridingWithTheKingAction()
    {
        return $this->render('default/ridingWithTheKing.html.twig');
    }

    /**
     * @Route("/ciagle_pada.html", name="ciagle-pada")
     */
    public function  ciaglePadaAction()
    {
        return $this->render('default/ciagle_pada.html.twig');
    }

    /*
     * D
     */

    /**
     * @Route("/Dreamer.html", name="Dreamer")
     */
    public function DreamerAction()
    {
        return $this->render('default/Dreamer.html.twig');
    }
    
    /*
     * E
     */
    /**
     * @Route("/endless.html", name="Endless")
     */
    public function endlessAction()
    {
        return $this->render('default/endless.html.twig');
    }

    /*
     * F
     */
    /**
     * @Route("/bystra-woda.html", name="bystra-woda")
     */
    public function  bystraWodaAction()
    {
        return $this->render('default/bystra-woda.html.twig');
    }

    /*
     * G
     */
        /**
 * @Route("/goradol.html", name="goradol")
 */
public function goradolAction()
{
    return $this->render('default/goradol.html.twig');
}
    /*
     * H
     */

    /*
     * I
     */
    /**
    * @Route("/Iridescent.html", name="iridescent")
    */
    public function iridescentAction()
    {
       return $this->render('default/Iridescent.html.twig');
    }
     /**
     * @Route("/juvenile.html", name="juvenile")
     */
    public function juvenileAction()
    {
        return $this->render('default/juvenile.html.twig');
    }

   
    /**
 * @Route("/korowody.html", name="korowody")
 */
public function korowodyAction()
{
   
    return $this->render('default/korowody.html.twig');
}
     

    /*
     * L
     */
    /**
    * @Route("/lato.html", name="lato")
    */
    public function latoAction()
    {
    return $this->render('default/lato.html.twig');
    }

    /*
     * M
     */
    /**
     * @Route("/piosenka-mury.html", name="piosenka-mury")
     */
    public function piosenkaMuryAction()
    {
        return $this->render('default/piosenka-mury.html.twig');
    }

    /*
     * N
     */

    /**
     * @Route("/noMoreMrNiceGuy.html", name="noMoreMrNiceGuy")
     */
    public function noMoreMrNiceGuyAction()
    {
        return $this->render('default/noMoreMrNiceGuy.html.twig');
    }
    
    
    /*
     * O
     */
    
    /**
     * @Route("/onajestzesnu.html", name="onajestzesnu")
     */
    public function onajestzesnuAction()
    {
        return $this->render('default/onajestzesnu.html.twig');
    }

    /*
     * P
     */
    
     /**
     * @Route("/pszczolka-maja.html", name="pszczolka-maja")
     */
      public function  pszczolkamajaAction()
      {
         return $this->render('default/pszczolka-maja.html.twig');
      }

    /*
     * Q
     */

    /*
     * R
     */
    
    /**
     * @Route("/rplayboys.html", name="rplayboys")
     */
    public function rplayboysAction()
    {
        return $this->render('default/rplayboys.html.twig');
    }
    
    /**
     * @Route("/Stop.html", name="Stop")
     */
    public function StopAction()
    {
        return $this->render('default/Stop.html.twig');
    }

    /*
     * T
     */

    /*
     * U
     */

    /*
     * V
     */

    /*
     * W
     */
/**
 * @Route("/whisky.html", name="whisky")
 */
public function  whiskyAction()
{
    return $this->render('default/whisky.html.twig');
}
    /*
     * X
     */

    /*
     * Y
     */

    /*
     * Z
     */


}
