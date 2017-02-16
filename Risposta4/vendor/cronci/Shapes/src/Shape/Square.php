<?php

namespace Shapes\Shape;

/**
 * Description of Square
 *
 * @author Corrado
 */
use Shapes\Interfaces\ShapesInterface;

class Square implements ShapesInterface{
    
    /**
     *
     * @var integer 
     */
    private $_height;
        
    /**
     *
     * @var integer 
     */
    private $_resourceId;
            
    function __construct($height) {
        
        if(is_int($height)){
            $this->_height = $height;
        }else{
            throw new \InvalidArgumentException("The height arguments must be integer");
        }       
        $this->_generateResourceId();
    }
    
    private function _generateResourceId(){
        $this->_resourceId = "Square_".uniqid();
    }
        
    function getResourceId(){
        return $this->_resourceId;
    }
    
    function getResourceArea(){
        
        return $this->_height * $this->_height;
    }
}
