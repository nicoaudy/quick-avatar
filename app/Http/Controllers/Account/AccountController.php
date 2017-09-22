<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    public function update(Request $request)
    {
        $this->validate($request, [
            'avatar_id' => 'exists:images,id',
        ]);

        $request->user()->update($request->only(['name', 'avatar_id']));
        return back();
    }
}
