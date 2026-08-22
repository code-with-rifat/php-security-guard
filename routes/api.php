<?php

/**
 * API Routes Definition for php-security-guard
 */

return [
    'GET /api/v1/health' => ['App\Controllers\ApiController', 'health'],
    'GET /api/v1/security-guard' => ['App\Controllers\\SecurityGuardController', 'index'],
    'POST /api/v1/security-guard' => ['App\Controllers\\SecurityGuardController', 'store'],
    'GET /api/v1/security-guard/{id}' => ['App\Controllers\\SecurityGuardController', 'show'],
    'DELETE /api/v1/security-guard/{id}' => ['App\Controllers\\SecurityGuardController', 'destroy']
];