<?php

require '../../app/common.php'

if ($_SERVER['REQUEST METHOD'] == 'POST') {}

$taskId = intval($_GET['taskId'] ?? 0);

$work = Work::findByTaskId($taskId);

echo json_encode($work);

if ($task <1) {
  throw new Exception('Invalid Task ID');
}

// 1. Go to the database and get all work associated with the $taskId
$workArr = Work::getWorkByTaskId($taskId);

// 2. Convert to JsonSerializable
$json = json_encode($workArr, JSON_PRETTY_PRINT);

// 3. Print
header('Content-Type: application/json');
echo $json;
