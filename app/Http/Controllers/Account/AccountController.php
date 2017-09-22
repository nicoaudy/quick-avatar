<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    public function update(Request $request)
    {
        $this->validate($request, [
            'avatar_id' => Rule::exists('images', 'id')->when(function ($q) {
                $q->where('user_id', $request->user()->id);
            }),
        ]);

        $request->user()->update($request->only(['name', 'avatar_id']));
        return back();
    }
}
