<?php

namespace app\classes;

class Factory
{
    
    public static function createStorage(string $storage): StorageSystemInterface {
        
        $className = __NAMESPACE__ . '\\' . $storage;
        if (class_exists($className)) {
            return new $className;
        } else {
            throw new \Exception("Storage {$storage} doesn't exist!");
        }
        
    }
    
}