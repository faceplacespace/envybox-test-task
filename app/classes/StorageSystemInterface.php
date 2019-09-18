<?php

namespace app\classes;

interface StorageSystemInterface {
    public function saveFeedback(array $data);
}