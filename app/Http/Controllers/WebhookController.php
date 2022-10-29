<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class WebhookController extends Controller
{
    protected $telegram;
    protected $update;
    protected $chatId;
    protected $text;

    public function __construct(\Telegram\Bot\Api $telegram)
    {
        $this->telegram = $telegram;
        $this->update = $this->telegram->getWebhookUpdate();
        $this->chatId = $this->update->getChat()->id;
        $this->text = $this->update->getMessage()->text;
    }

    public function webhook()
    {
        $categories = Category::query()
            ->where('status', 1)
            ->orderBy('queue')
            ->get()
            ->chunk(2)
            ->toArray();
        dd($categories);
        switch ($this->text) {
            case '/start':
                $this->answer('Assalomu alaykum. Botga xush kelibsiz! Keling tanishib olaylik. Ismingiz nima? 😊');
                break;
        }
    }

    protected function answer($text) {
        $this->telegram->sendMessage([
            'chat_id' => $this->chatId,
            'text' => $text,
        ]);
    }
}
