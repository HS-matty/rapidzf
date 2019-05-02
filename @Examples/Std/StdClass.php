<?php
/*
** Hytex Solutions Limited (http://hytex.radmaster.net)
** Part of Radmaster Toolkit  (http://toolkit.radmaster.net) 
** Siarhei (matty) Vauchok  (http://matty.at.ebase.in)  

** Inspired by | Dolores O`Riordan Radzivilus |
*/



namespace Radmaster\RapidZf\Std;

class StdClass{

    protected $_params = array();

    public function __construct()
    {
        $this->onInit();
    }

    protected function onInit(){
        return;
    }

    /***
     * @param $name string
     * @param $value mixed
     * @return StdClass
     */
    public function setParam($name,$value){
        $this->_params[$name] = $value;
        return $this;
    }

    public function getParam($name){

        return $this->_params[$name];

    }

    public function addParam($name,$value){
        return $this->setParam($name,$value);
    }
    public function getAllParam(){
        return $this->_params;
    }


    public function setName($name){
        return $this->setParam('name',$name);

    }

    public function getName(){

        return $this->getParam('name');
    }

    public function setType($type){
        return $this->setParam('type',$type);
    }



    public function getType(){
        return $this->getParam('type');
    }

    public function setTitle($title){
        return $this->setParam('title',$title);
    }

    public function getTitle(){
        $this->getParam('title');
    }

    public function setDescription($description){
        return $this->setParam('description',$description);
    }
    public function getDescription(){
        return $this->getParam('description');
    }





}