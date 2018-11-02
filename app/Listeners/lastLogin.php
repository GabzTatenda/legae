<?php

namespace App\Listeners;

use App\UserDeviceInformation;
use Illuminate\Auth\Events\Login;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Carbon\Carbon;

class lastLogin
{
    public $deviceInformation;
    public function __construct(UserDeviceInformation $deviceInformation)
    {
        $this->deviceInformation = $deviceInformation;
    }
    public function handle(Login $event)
    {
        $this->deviceInformation->logIn    =Carbon::now('Africa/Harare');
        $this->deviceInformation->logOut   =null;
        $this->deviceInformation->deviceInformation    ="samsung";
        $this->deviceInformation->deviceIpAddress      ="192.0.2.122";
        $this->deviceInformation->userId   =$event->user->id;
        $this->deviceInformation->save();
    }
}
