<?php

namespace Shapes\Shape;

/**
 * Description of Rectangle
 *
 * @author Corrado
 */
use Shapes\Interfaces\ShapesInterface;

class Rectangle implements ShapesInterface {
    
    /**
     *
     * @var integer 
     */
    private $_height;
    
    /**
     *
     * @var integer 
     */
    private $_weight;
    
    /**
     *
     * @var integer 
     */
    private $_resourceId;
            
    function __construct($height, $weight) {
        
        if(is_int($height)){
            $this->_height = $height;
        }else{
            throw new \InvalidArgumentException("The height arguments must be integer");
        }
        if(is_int($weight)){
            $this->_weight = $weight;
        }else{
            throw new \InvalidArgumentException("The weight arguments must be integer");
        }        
        $this->_generateResourceId();
    }
    
    private function _generateResourceId(){
        $this->_resourceId = "Rectangle_".uniqid();
    }
        
    function getResourceId(){
        return $this->_resourceId;
    }
    
    function getResourceArea(){
        
        return $this->_weight * $this->_height;
    }
}
