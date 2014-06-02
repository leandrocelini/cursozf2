<?php

namespace ApplicationAdmin\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use ApplicationAdmin\Form\Aplicacao as FrmAplicacoes;

class AplicacaoController extends AbstractActionController {

    protected $em;

    public function indexAction() {
        $list = $this->getEm()->getRepository('Application\Entity\Aplicacao')->findAll();
        print_r($list);
        return new ViewModel();
    }
    
    public function insertAction() {

        $form = new FrmAplicacoes();
        $request = $this->getRequest();


        if ($request->isPost()) {
            $form->setData($request->getPost());

            if ($form->isValid()) {

                $service = $this->getServiceLocator()->get('Application\Service\Aplicacao');
                $service->insert($request->getPost()->toArray());

                return $this->redirect()->toRoute('aplication-admin', array('controller' => 'aplicacao'));
            }
        }
        return new ViewModel(array('form' => $form));
    }

    /*
     * @return EntityManager
     */

    public function getEm() {
        if (null == $this->em) {
            $this->em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
            return $this->em;
        }
    }

}
