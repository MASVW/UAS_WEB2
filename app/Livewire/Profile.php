<?php

namespace App\Livewire;

use App\Services\ErrorService;
use App\Services\UserInfoService;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Redirect;
use Livewire\Attributes\Title;
use Livewire\Component;
use Propaganistas\LaravelPhone\PhoneNumber;
use Ramsey\Collection\Collection;

#[Title('Profil')]
class Profile extends Component
{
    public $user;
    public $fullName;
    public $email;
    public $phone;
    public $birthDate;
    public $history;
    public function mount(UserInfoService $users, ErrorService $errorService)
    {
        try {
            $this->user = $users->getUserById();
        }
        catch (ModelNotFoundException $e) {
            return Redirect::to('masuk')->with('error', $errorService->notLogin());
        }

        $this->fullName = "{$this->user->firstName} {$this->user->lastName}";
        $this->email = $this->user->email;

        $this->phone = $this->changePhone($this->user->phone);

        $this->birthDate = Carbon::parse($this->user->birthDate)->format('d F Y');

        $this->history = $users->getHistory();
    }

    public function convertHistory($data)
    {
        $check = is_object($data);
        $paymentIdCheck = [];
        if ($check) {
            $total = count($check);
            foreach ($check as $item){
                array_push($paymentIdCheck, $item->payments->id);
            }
        } else
        {
            return $check;
        }
    }

    public function changePhone($phone): string
    {
        $formatPhone = new PhoneNumber($phone, 'ID');
        return $formatPhone->formatForMobileDialingInCountry('ID');
    }

    public   function render()
    {
        return view('livewire.profile');
    }
}
