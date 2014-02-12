<?php
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Helper\ViewModel;

class UserController 
    extends AbstractActionController{
    
    private $user;
    
    public function indexAction(){

        return new ViewModel();
    }
}

?>