<?php

it('loads the homepage', function () {
    $response = $this->get('/');
    
    $response->assertStatus(200);
    $response->assertSee('Andrew Atkinson'); // Adjust 'Welcome' to a string that should appear on your homepage
});