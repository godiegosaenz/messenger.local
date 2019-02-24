<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    public function index(){
        $userId = auth()->id();
        return Message::select(
            'id',
            DB::raw('IF(`from_id` = '.$userId.',TRUE,FALSE) as me'),
            'created_at',
            'content')
        ->get();
    }

    public function store(Request $r) {
        $mensaje = new Message();
        $mensaje->from_id = Auth()->id();
        $mensaje->to_id = $r->to_id;
        $mensaje->content = $r->content;
        $saved = $mensaje->save();

        $data = [];
        $data['success'] = $saved;
        return $data;
    }
}
