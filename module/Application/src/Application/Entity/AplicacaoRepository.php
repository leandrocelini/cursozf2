<?php
namespace Application\Entity;
use Doctrine\ORM\EntityRepository;


class AplicacaoRepository extends EntityRepository {

    public function fetchPairs() {
        $entities = $this->findAll();
        
        $array = array();
        
        foreach($entities as $entity) {
            $array[$entity->getId()] = $entity->getNome();
            $array[$entity->getId()] = $entity->getTipo();
        }
        
        return $array;
    }
}
