<?php

namespace ApplicationAdmin\Form;

use Zend\InputFilter\InputFilter;

class AplicacaoFilter extends InputFilter {

    public function __construct() {
        
        $this->add(array(
            'name' => 'nome',
            'required' => true,
            'filters' => array(
                array('name' => 'StripTags'),
                array('name' => 'StringTrim')
            ),
            'validators' => array(
                array(
                    'name' => 'NotEmpty',
                    'options' => array(
                        'messages' => array('isEmpty' => 'Nome não pode estar em branco'),
                    )
                )
            ))
        );
        
        $this->add(array(
            'name' => 'tipo',
            'required' => true,
            'filters' => array(
                array('name' => 'StripTags'),
                array('name' => 'StringTrim')
            ),
            'validators' => array(
                array(
                    'name' => 'NotEmpty',
                    'options' => array(
                        'messages' => array('isEmpty' => 'Categoria não pode estar em branco'),
                    )
                )
            ))
        );
        
        
        
        
    }

}
