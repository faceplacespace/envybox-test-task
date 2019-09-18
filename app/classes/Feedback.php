<?php

namespace app\classes;

class Feedback
{

    public function save(string $storage, array $data) {
        $storage = Factory::createStorage($storage);
        $storage->saveFeedback($data);
    }
    
}