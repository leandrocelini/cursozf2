<?php

namespace Livraria\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $categoriaService = $this->getServiceLocator()->get("Livraria\Model\CategoriaService");
        $categoria = $categoriaService->fetchAll();
        return new ViewModel(array('categoria' => $categoria));
    }
}
