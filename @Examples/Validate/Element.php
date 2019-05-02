<?php
/*
** Hytex Solutions Limited (http://hytex.radmaster.net)
** Part of Radmaster Toolkit  (http://toolkit.radmaster.net) 
** Siarhei (matty) Vauchok  (http://matty.at.ebase.in)  

** Inspired by | Dolores O`Riordan Radzivilus |
*/

namespace Radmaster\RapidZf\Validate;

use Radmaster\RapidZf\Std\StdClass as Std_Class;
class Element extends Std_Class
{


    protected $_filters = array();
    protected $_validators = array();

    public function __construct()
    {
    }

    public function setRequired($flag){
        return $this->setParam('required',$flag);
    }

    public function setRequiredTrue(){
        return $this->setRequired(true);
    }



}