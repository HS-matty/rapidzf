<?php
/*
** Hytex Solutions Limited (http://hytex.radmaster.net)
** Part of Radmaster Toolkit  (http://toolkit.radmaster.net) 
** Siarhei (matty) Vauchok  (http://matty.at.ebase.in)  

** Inspired by | Dolores O`Riordan Radzivilus |
*/


namespace Radmaster\RapidZf\Ui;

use Radmaster\RapidZf\Std\StdClass as Std_Class;
use Radmaster\RapidZf\Ui\Field as Ui_Field;

class Form extends Std_Class
{

    protected $_fields;
    protected $_input_filters;



 /*   protected $_validators;



    public function setValidator(){

    }*/

    /**
     * @param mixed|null $field
     * @return  \Radmaster\RapidZf\Ui\Field
     */
    public function addField($field = null){

        $field_name = '';

        if($field && (is_string($field)) ) {
            $field_name = $field;
            $field = null;
        }

        if(!$field) {
            $field =  \Radmaster\RapidZf\Ui\Field::factory();
            $field->setName($field_name);
        }
        ///todo instance of


        $this->_fields[] = $field;
        return $field;

    }


    public function setMethod($type){
        return$this->setParam('method','post');
    }

    public function setMethodPost(){
        return $this->setMethod('post');
    }





}