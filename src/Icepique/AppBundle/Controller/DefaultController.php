<?php

namespace Icepique\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation;

/**
 * @author Svetlin Staev <svetlin@icepique.com>
 */
class DefaultController extends Controller
{
    /**
     * @param HttpFoundation\Request $request
     *
     * @return HttpFoundation\Response
     */
    public function indexAction(HttpFoundation\Request $request) : HttpFoundation\Response
    {
        return $this->render('@IcepiqueApp/default/index.html.twig', ['route' => $request->attributes->get('_route')]);
    }
}
