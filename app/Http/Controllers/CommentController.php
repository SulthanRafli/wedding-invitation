<?php

namespace App\Http\Controllers;

use App\Models\Tamu;

class CommentController extends Controller
{
    public function index()
    {
        $guestUuid = request()->query('guest');
        $name = 'Fulan';
        $image = '9';

        if ($guestUuid) {
            $data = Tamu::find($guestUuid);
            if ($data) {
                $name = $data->nama;
                $image = $data->image;
            } else {
                return view('404');
            }
        } else {
            return view('404');
        }

        return view('welcome', compact(['name']));
    }
}
