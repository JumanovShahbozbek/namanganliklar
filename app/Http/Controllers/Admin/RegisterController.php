<?php

namespace App\Http\Controllers\Admin;

use App\Events\AuditEvent;
use App\Http\Controllers\Controller;
use App\Models\Register;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        $registers = Register::orderBy('id', 'DESC')->get();

        return view('admin.messages.index', compact('registers'));
    }

    public function show(Register $register, $id)
    {
        $register = Register::find($id);

        return view('admin.messages.show', compact('register'));
    }

    public function destroy(Register $register, $id)
    {
        $user = auth()->user()->name;
        event(new AuditEvent('create', 'infos', $user, $register));

        Register::find($id)->delete();

        return redirect()->route('admin.messages.index')->with('danger', 'Malumot mavaffaqiyatli ochirildi');
    }
}
