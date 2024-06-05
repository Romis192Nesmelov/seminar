<?php

namespace App\Http\Controllers;
use App\Http\Requests\OnlineRequest;
use App\Jobs\SendMessage;
use Illuminate\Http\JsonResponse;

class FeedbackController extends Controller
{
    public function onlineRequest(OnlineRequest $request): JsonResponse
    {
        return $this->sendMessage('online_request', env('MAIL_TO'), null, $request->validated());
    }

    private function sendMessage(string $template, string $mailTo, string|null $cc, array $fields, string|null $pathToFile=null): JsonResponse
    {
        dispatch(new SendMessage($template, $mailTo, $cc, $fields, $pathToFile));
        $message = 'Спасибо за обращение,<br>мы свяжемся с Вами в самое ближайшее время!';
        return response()->json(['success' => true, 'message' => $message],200);
    }
}
