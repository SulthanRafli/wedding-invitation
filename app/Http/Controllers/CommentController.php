<?php

namespace App\Http\Controllers;

use App\Models\Tamu;

class CommentController extends Controller
{
    public function index($id)
    {
        $name = 'Fulan';
        $image = '9';

        if (is_numeric($id)) {
            $data = Tamu::find($id);
            if ($data) {
                $name = $data->nama;
                $image = $data->image;
            }
        } else {
            $name = str_replace("+", " ", $id);
        }

        return view('welcome', compact(['name']));
    }
}
