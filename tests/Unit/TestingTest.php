<?php

use Tests\TestCase;
use App\Services\PositionService;

class TestingTest extends TestCase
{
    private $positionService;

    protected function setUp(): void
    {
        parent::setUp();
        $this->positionService = app(PositionService::class);
    }

    public function testBasic()
    {
        $this->positions = $this->positionService->getAllPosition();
        dd($this->positions[0]['desc']);
    }
    public function testNamedPosition()
    {
        $namedPosition = $this->positionService->getPositionNameById(2);
        dd($namedPosition);
    }
}

