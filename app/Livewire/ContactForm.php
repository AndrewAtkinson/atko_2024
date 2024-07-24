<?php

namespace App\Livewire;

use App\Models\contactFormRequest;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ContactForm extends Component
{
    #[Validate('required|min:4')]
    public $name = '';

    #[Validate('required|email')]
    public $email = '';

    #[Validate('required|min:3')]
    public $subject = '';

    #[Validate('required|min:5')]
    public $message = '';

    public function save()
    {
        $this->validate();

        contactFormRequest::create(
            $this->only(['name', 'subject', 'email', 'message'])
        );

        session()->flash('status', 'Thank you for getting in touch!');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
