<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Storage;
use App\Payment;

class UserController extends Controller
{
    public function showHomePage() {
        $listPayment = Payment::all();
        $nofi = Storage::where('key', 'thongtinchung')->first();
        $general = (object) [
            'hotline' => '',
            'email' => ''
        ];

        try {
            if ($nofi) {
                $general = json_decode($nofi->value);
            }
        } catch (Exception $e) {
            $general = (object) [
                'hotline' => '',
                'email' => ''
            ];
        }
        return view('index')->with('listPayment', $listPayment)->with('general', $general);
    }

    public function chinhsach() {
        $storage = Storage::where('key', 'chinhsach')->first();
        $content = '';
        if ($storage) {
            $content = $storage->value;
        }

        return view('chinhsach')->with('content', $content);
    }

    public function showBanggia() {
        $storage = Storage::where('key', 'banggia')->first();
        $content = '';
        if ($storage) {
            $content = $storage->value;
        }

        return view('banggia')->with('content', $content);
    }

    public function gioithieu() {
        $storage = Storage::where('key', 'gioithieu')->first();
        $content = '';
        if ($storage) {
            $content = $storage->value;
        }

        return view('gioithieu')->with('content', $content);
    }
}
