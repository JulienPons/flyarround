<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

use AppBundle\Entity\Flight;
use AppBundle\Entity\PlaneModel;
use AppBundle\Entity\Reservation;

/**
 * Review controller.
 *
 * @Route("review")
 */

class ReviewController extends Controller
{
    /**
     *
     *
     * @Route("/", name="review_index")
     * @Method("GET")
     */
    public function review()
    {
        return $this->render('review/index.html.twig');
    }
    
    /**
     * Creates a new review.
     *
     * @Route("/new", name="review_new")
     * @Method({"GET", "POST"})
     */
    public function newAction()
    {
        return $this->render('review/new.html.twig');
    }
}
