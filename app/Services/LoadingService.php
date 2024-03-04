<?php

namespace App\Services;

class LoadingService
{
    private bool $isLoading = false;

    public function startLoading()
    {
        $this->isLoading = true;
    }
    public function stopLoading()
    {
        $this->isLoading = false;
    }
    public function isLoading()
    {
        return $this->isLoading;
    }
}
