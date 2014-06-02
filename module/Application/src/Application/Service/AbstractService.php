<?php

namespace Application\Service;
use Doctrine\ORM\EntityManager;
use Application\Entity\Aplicacao as AplicacaoService;
use Application\Entity\Configurator;


abstract class AbstractService {
    
    protected $em;
    protected $entity;

    public function __construct(EntityManager $em) {
        $this->em = $em;
    }
    
    public function insert(array $data){
       
        $entity = new $this->entity($data);
        $this->em->persist($entity);
        $this->em->flush();
        
        return $entity;
    }
}
