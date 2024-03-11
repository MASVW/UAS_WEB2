<?php

use Tests\TestCase;
use App\Services\PositionService;
use App\Services\UserInfoService;
class TestingTest extends TestCase
{
    private $positionService;
    private $userServiceInfoService;
    public $errorService;

    protected function setUp(): void
    {
        parent::setUp();
        $this->positionService = app(PositionService::class);
        $this->userServiceInfoService = app(UserInfoService::class);
        $this->errorService = app(\App\Services\ErrorService::class);
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
    public function test_getUserId()
    {
        $data = $this->userServiceInfoService->getUserById();
        dd($data);
    }
    public function testErrorNotLogin()
    {
        $data = $this->errorService->notLogin();

        $errorMessage = session('error');

        $this->assertEquals('Silahkan login terlebih dahulu', $errorMessage);
    }
    public function testGetHistory()
    {
        $data = $this->userServiceInfoService->getHistory();
        dd($data);
    }
}

