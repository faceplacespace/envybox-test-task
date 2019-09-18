<?php

namespace app\classes;

class Csv implements StorageSystemInterface
{
    
    private $csvFile =  '../../feedback.csv';
    
    public function __construct() {
        
        if (!file_exists($this->csvFile)) {
            echo 'sajsajasjkaja';
            throw new \Exception("Файл {$this->csvFile} не найден");
        }
        
    }
    
    public function saveFeedback(array $data) {
        
        $handle = fopen($this->csvFile, 'a+');
        
        if (!fputcsv($handle, $data)) {
            throw new \Exception('Ошибка при записи в файл');
        }
 
        fclose($handle);
        
        return true;
        
    }
    
}