<?php

namespace App\Services;


class ErrorService
{
    public function notLogin(): string
    {
        return 'Silahkan login terlebih dahulu';
    }
}
