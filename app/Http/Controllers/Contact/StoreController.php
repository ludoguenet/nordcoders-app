<?php

declare(strict_types=1);

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contact\StoreRequest;
use App\Mail\ContactMail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;

final class StoreController extends Controller
{
    public function __invoke(
        StoreRequest $request
    ): RedirectResponse {
        Mail::to('ludovicguenet@gmx.com')
            ->send(new ContactMail(
                ...$request->only('senderMail', 'senderSubject', 'senderMessage'),
            ));

        return redirect()
            ->back()
            ->with('success', 'Le mail a été envoyé avec succès.');
    }
}
