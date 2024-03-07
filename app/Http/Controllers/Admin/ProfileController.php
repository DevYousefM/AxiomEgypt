<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function edit(): View
    {
        return view('admin.profile.profile');
    }

    public function update(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . auth()->user()->id,
        ]);
        $user = User::findOrFail(auth()->user()->id);
        $user->update([
            "name" => $request->name,
            "email" => $request->email,
        ]);
        return redirect()->route('dashboard.profile.edit')->with('success-info', 'تم تحديث بيانات الحساب!');
    }
    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required|string',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::findOrFail(auth()->user()->id);

        if (!Hash::check($request->input('current_password'), $user->password)) {
            return redirect()->back()->withErrors(['current_password' => 'كلمة المرور الحالية غير صحيحة']);
        }

        $user->password = Hash::make($request->input('new_password'));
        $user->save();

        return redirect()->route('dashboard.profile.edit')->with('success-password', 'تم تحديث كلمة المرور!');
    }
}
