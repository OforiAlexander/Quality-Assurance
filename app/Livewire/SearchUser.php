<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Http\Request as HttpRequest;
use Livewire\Attributes\Rule;
use Livewire\Component;

class SearchUser extends Component
{
    // #[Rule('required', message: 'Enter name in full')]
    //  public $name;

    //  #[Rule('required', message: 'Enter either Department mail or user mail')]
    //  public $email;

    //  #[Rule('required', message: 'Enter phone number in the correct order')]
    //  public $phone;

    //  #[Rule('required', message: 'Enter the role of this user')]
    //  public $role;

    //  #[Rule('required', message: 'Choose the department this user belongs to')]
    //  public $department;

    //  public function createUser(HttpRequest $request) 
    //  {
    //     $validated = $this->validate();

    //     if ($validated) {
    //         User::create($request->all());

    //         $this->reset();
    //         session()->flash('success','New User Created');
    //     }
    //  }

    //  public function mount(User $user)
    //  {
    //      // Initialize the properties with user data
    //      $this->name = $user->name;
    //      $this->email = $user->email;
    //      $this->phone = $user->phone;
    //      $this->role = $user->role;
    //      $this->department = $user->department;
    //  }

    public function render()
    {
        return view('livewire.search-user');
    }
}
