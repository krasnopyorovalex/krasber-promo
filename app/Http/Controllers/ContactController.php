<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\Forms\ContactRequest;
use App\Mail\ContactFormSent;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;

/**
 * Class ContactController
 * @package App\Http\Controllers
 */
class ContactController extends Controller
{
    /**
     * @param ContactRequest $request
     * @return JsonResponse
     */
    public function __invoke(ContactRequest $request)
    {
        Mail::to(['info@krasber.ru'])->send(new ContactFormSent($request->all()));

        return response()->json([
            'message' => 'Благодарим за Вашу заявку. Наш менеджер свяжется с Вами в ближайшее время',
            'status' => 200
        ]);
    }
}
