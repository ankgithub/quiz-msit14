<?php

namespace Application\Controller;

use Zend\View\Model\ViewModel;


class IndexController extends AppActionController
{
    
    public function indexAction()
    {
        $renderer = $this->getServiceLocator()->get(
            'Zend\View\Renderer\PhpRenderer');
        $view = new ViewModel();
        return $view;
    }
}
