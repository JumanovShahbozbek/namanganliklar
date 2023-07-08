<?php

namespace App\Http\Controllers\Admin;

use App\Events\AuditEvent;
use App\Http\Controllers\Controller;
use App\Models\Login;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        $logins = Login::orderBy('id', 'DESC')->get();

        return view('admin.logins.index', compact('logins'));
    }

    public function show(Login $userinfo, $id)
    {
        $login = Login::find($id);

        return view('admin.logins.show', compact('login'));
    }

    public function destroy(Login $login)
    {
        $user = auth()->user()->name;
        event(new AuditEvent('delete', 'logins', $user, $login));

        // Login::find($id)->delete();
        $login->delete();

        return redirect()->route('admin.logins.index')->with('danger', 'Malumot mavaffaqiyatli ochirildi');
    }
}
