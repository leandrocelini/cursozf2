<?php

namespace LivrariaAdmin\Form;

use Zend\Form\Form;

class Categoria extends Form {

    //put your code here

    public function __construct($name = null, $options = array()) {
        parent::__construct('categoria');
        
        $this->setInputFilter(new CategoriaFilter);
        $this->setAttribute('method', 'post');
        $this->add(array(
            'name' => 'id',
            'attributes' => array(
                'type' => 'hidden'
            )
        ));

        $this->add(array(
            'name' => 'nome',
            'options' => array(
                'type' => 'hidden',
                'label' => 'Nome'
            ),
            'attributes' => array(
                'id' => 'nome',
                'placeholder' => 'Entre com o nome'
            )
        ));
        $this->add(array(
            'name' => 'submit',
            'type' => 'Zend\Form\Element\Submit',
            'attributes' => array(
                'value' => 'Salvar',
                'class' => 'btn-success'
            )
        ));
    }

}
