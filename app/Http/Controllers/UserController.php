<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Storage;

class UserController extends Controller
{
    public function showHomePage() {
        return view('index');
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
}
