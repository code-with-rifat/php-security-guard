<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Controllers\\SecurityGuardController;

echo "========================================\n";
echo " PHP Web Application Security & Sanitization Shield CLI Engine\n";
echo "========================================\n\n";

$controller = new SecurityGuardController();
$status = $controller->status();

echo "Service: " . $status['service'] . "\n";
echo "Version: " . $status['version'] . "\n";
echo "Status:  " . $status['status'] . "\n\n";
echo "System Ready.\n";
