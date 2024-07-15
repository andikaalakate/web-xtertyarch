<?php

namespace App\Filament\Auth;

use App\Models\User;
use Filament\Pages\Auth\Register;
 
class CustomRegister extends Register
{
    protected function handleRegistration(array $data): User
    {
        $user = $this->getUserModel()::create($data); 
        $user->assignRole('customer'); 
 
        return $user; 
    }
}