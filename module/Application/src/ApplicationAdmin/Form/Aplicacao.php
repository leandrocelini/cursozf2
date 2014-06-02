<?php
namespace ApplicationAdmin\Form;
use Zend\Form\Form;


class Aplicacao extends Form{
    public function __construct($name = null) {
        
        parent::__construct('aplicacoes');
       
        $this->setAttribute('method', 'post');
        
         $this->setInputFilter(new AplicacaoFilter);
        
        $this->add(array('name'=>'id',
                   array('attributes'=>array('type'=>'hidden'))));
        
      $this->add(array(
            'name' => 'nome',
            'options' => array(
                'type' => 'text',
                'label' => 'Nome'
            ),
            'attributes' => array(
                'id' => 'nome',
                'placeholder' => 'Entre com o nome'
            )
        ));
      
        $this->add(array(
            'name' => 'tipo',
            'options' => array(
                'type' => 'text',
                'label' => 'tipo'
            ),
            'attributes' => array(
                'id' => 'nome',
                'placeholder' => 'Entre com a categoria'
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
