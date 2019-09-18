<?php

namespace app\classes;

use PDO;

class Db implements StorageSystemInterface
{
    
    private $pdo = null;
    
    public function __construct() {
            
        try {
            
            $dbParams = require_once $_SERVER['DOCUMENT_ROOT'] . '/config/dbConn.php';
            
            $pdo = new PDO("{$dbParams['driver']}:host={$dbParams['host']};dbname={$dbParams['dbname']}", $dbParams['user'], $dbParams['password']);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            
            $this->pdo = $pdo;
            
        } catch (PDOException $e) {
            exit('Connection Error: '.$e->getMessage());
        }
        
    }


    public function saveFeedback(array $data) {
        
        $sql = 'INSERT INTO feedback (name, phone, appeal) VALUES (:name, :phone, :appeal)';
        $statement = $this->pdo->prepare($sql);
        $feedback = $statement->execute([':name' => $data['name'], ':phone' => $data['phone'], ':appeal' => $data['appeal']]);
        
        if ($feedback) {
            return true;
        } else {
            throw new \Exception('Ошибка записи в базу данных');
        }
        
    }
    
}