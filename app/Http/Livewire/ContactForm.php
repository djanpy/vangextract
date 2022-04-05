<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;

    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
    ];

    /**
     * @throws \Illuminate\Validation\ValidationException
     */
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function saveContact()
    {
        $validatedData = $this->validate();

        //Contact::create($validatedData);
    }

    public function submit()
    {
        $this->validate();

        // Execution doesn't reach here if validation fails.

      /*  Contact::create([
            'name' => $this->name,
            'email' => $this->email,
        ]);*/
    }
}
