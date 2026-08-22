<?php

namespace App\Services;

class SecurityGuardService
{
    public function __construct(
        private readonly array $config = []
    ) {}

    public function process(array $payload): array
    {
        return [
            'status' => 'success',
            'timestamp' => time(),
            'data' => $payload,
            'message' => 'Processed successfully by SecurityGuardService'
        ];
    }

    public function healthCheck(): bool
    {
        return true;
    }
}
