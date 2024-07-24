<?php

it('fetches an education record correctly', function () {

    // Assert that the education record is in the database
    $this->assertDatabaseHas('education', [
        'course' => 'Master of Science in Digital Forensics',
        'university' => 'Teesside University',
        'description' => 'A program focusing on computer science principles within the context of a cyber investigation. Emphasizes collecting, examining, and interpreting digital evidence. Includes practical sessions using industry-standard software and practices.',
        'date' => '2010-07-01',
    ]);
});
