<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

$storage = ucfirst(trim(htmlspecialchars($_POST['storage'])));
$data['name'] = trim(htmlspecialchars($_POST['name']));
$data['phone'] = trim(htmlspecialchars($_POST['phone']));
$data['appeal'] = trim(htmlspecialchars($_POST['appeal']));

$feedback = new app\classes\Feedback();

try {
    $feedback->save($storage, $data);
    $result['success'] = true;
} catch (Exception $ex) {
    $result['success'] = false;
} finally {
    echo json_encode($result);
}