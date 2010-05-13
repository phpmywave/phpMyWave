<?php
class phpMyWave_Server
{
    protected $_methods = array();
    
    public function __construct($class = null)
    {
        if (!empty($class)) {
            
            $this->setClass($class);
        }
    }
    
    public function handle()
    {
        var_dump($this->_methods);
    }
    
    public function setClass($class, $namespace = '', $argv = null)
    {
        if ((is_string($class) && class_exists($class)) || is_object($class)) {
            
            // Get args.
            $argv = null;
            
            if (2 < func_num_args()) {
                
                $argv = array_slice(func_get_args(), 2);
            }
            
            // Get namespace.
            if ($namespace == '') {
                $namespace = is_object($class) ? get_class($class) : $class;
            }
            
            // Reflect class.
            $this->_methods[] = Zend_Server_Reflection::reflectClass($class, $argv, $namespace);
            
        } else {
            
            throw new Exception('Invalid method or class; must be a classname or object');
        }
        
        return $this;
    }
}