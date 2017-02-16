<?php

namespace Shapes\Shape;

/**
 * Description of Circle
 *
 * @author Corrado
 */
use Shapes\Interfaces\ShapesInterface;

class Circle implements ShapesInterface{
    
    /**
     *
     * @var integer 
     */
    private $_radius;
       
    /**
     *
     * @var integer 
     */
    private $_resourceId;
            
    function __construct($radius) {
        
        if(is_int($radius)){
            $this->_radius = $radius;
        }else{
            throw new \InvalidArgumentException("The radius arguments must be integer");
        }       
        $this->_generateResourceId();
    }
    
    private function _generateResourceId(){
        $this->_resourceId = "Circle_".uniqid();
    }
        
    function getResourceId(){
        return $this->_resourceId;
    }
    
    function getResourceArea(){
        
        return $this->_radius * $this->_radius;
    }
}
