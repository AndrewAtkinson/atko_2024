<?php

use App\Livewire\ContactForm;

use function Pest\Livewire\livewire;

it('tests the ProfileForm validation rules', function () {
    livewire(ContactForm::class)
        ->call('save')
        ->assertHasErrors();
});
