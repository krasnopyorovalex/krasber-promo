<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\Forms\OrderRequest;
use App\Mail\OrderFormSent;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;

/**
 * Class OrderController
 * @package App\Http\Controllers
 */
class OrderController extends Controller
{
    /**
     * @param OrderRequest $request
     * @return JsonResponse
     */
    public function __invoke(OrderRequest $request)
    {
        Mail::to(['info@krasber.ru'])->send(new OrderFormSent($request->all()));

        return response()->json([
            'message' => 'Благодарим за Вашу заявку. Наш менеджер свяжется с Вами в ближайшее время',
            'status' => 200
        ]);
    }
}
