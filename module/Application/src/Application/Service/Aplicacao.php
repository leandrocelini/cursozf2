<?php
namespace Application\Service;
use Doctrine\ORM\EntityManager;

class Aplicacao extends AbstractService {
    
    public function __construct(EntityManager $em) {
        parent::__construct($em);
        $this->entity = "Application\Entity\Aplicacao";
    }
    
}
