<?php
/*
** Hytex Solutions Limited (http://hytex.radmaster.net)
** Part of Radmaster Toolkit  (http://toolkit.radmaster.net) 
** Siarhei (matty) Vauchok  (http://matty.at.ebase.in)  

** Inspired by | Dolores O`Riordan Radzivilus |
*/


/*

* @method static Validator intType()

*/
namespace Radmaster\RapidZf\Ui;

use Radmaster\RapidZf\Std\StdClass as Std_Class;

class Field extends Std_Class
{

    protected $_attributes = array();
    protected $_options = array();




    protected $_validator;


   // protected $_validate;

    protected $_rules;
    //protected $_validators;


    public function __construct($name = null)
    {
        $this->setName($name);
    }

    public static function factory(){
        $class_name = self::class;
        return new $class_name;

    }

    public function onInit(){

        $this->_init_rules();
        $this->_init_validators();
    }



    public function setValidator($validator){
        $this->_validator = $validator;
    }



    /**
     * @param $name name
     * @param $value value
     * @return Radmaster\RapidZf\Ui\Field
     */

    public function setRule($name,$value){
        $this->_rules[$name] = $value;
        return $this;
    }

    public function getRule($name){
        return $this->_rules[$name];

    }

    public function setRuleRequired($flag = true){
        return $this->setRule('required',$flag);
    }

    protected function _init_rules(){
        if(!$this->_rules['filters']) $this->_rules['filters'] = array();
    }
    protected function _init_validators(){
        if(!$this->_rules['validators']) $this->_rules['validators'] = array();
    }


    public function addRuleFilter($filter_name){
        $this->_rules['filters']['name'] = $filter_name;
        return $this;

    }

    public function addRuleValidator($validator_name){
        $this->_rules['validators']['name'] = $validator_name;
        return $this;

    }

    public function addRuleValidatorStringLength(){
        return $this->addRuleValidator('StringLength');
    }


    public function addRuleFilterStripTags(){
     $this->addRuleFilter('StripTags');
     return $this;

    }


    // public function addValidator()

    public function setAttribute($name,$value){
        $this->_attributes[$name] = $value;
        return $this;
    }

    public function getAttribute($name){
        return $this->_attributes[$name];
        
    }


    public function setOption($name,$value){
        $this->_options[$name] = $value;
        return $this;
    }

    public function getOption($name){
        return $this->_options[$name];

    }




    public function getVariable($variable_name){
        return $this->$variable_name;

    }


    /**
     * @return \Radmaster\RapidZf\Ui\Field
     */
    public function setTypeText(){
        return $this->setType('text');
    }

    public function setTypeButton(){
        return $this->setType('button');

    }

    public function setOptionLabel($value){
        $this->setOption('label',$value);
        return $this;
    }
    public function  setAttributeId($value){
        $this->setAttribute('id',$value);
        return $this;
    }

    public function  setAttributeValue($value){
        $this->setAttribute('value',$value);
        return $this;
    }

}