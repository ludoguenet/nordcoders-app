<?php

declare(strict_types=1);

use App\Mail\ContactMail;

use function Pest\Laravel\post;

it('can send contact email', function () {
    Mail::fake();

    post(
        uri: route('contact.store'),
        data: [
            'senderMail' => $senderEmail = fake()->email,
            'senderSubject' => $senderSubject = fake()->sentence,
            'senderMessage' => fake()->sentence,
        ],
    )
        ->assertRedirect()
        ->assertSessionHas('success');

    Mail::assertSent(static function (ContactMail $mail) use ($senderEmail, $senderSubject) {
        return $mail->hasTo('ludovicguenet@gmx.com') &&
                $mail->hasFrom($senderEmail) &&
                $mail->hasSubject($senderSubject) &&
                $mail->assertSeeInHtml('Contact mail') &&
                count($mail->attachments()) === 0;
    });
});

it('shows errors if contact informations are missing', function () {
    post(
        uri: route('contact.store')
    )
        ->assertRedirect()
        ->assertSessionHasErrors([
            'senderMail',
            'senderSubject',
            'senderMessage',
        ]);
});
