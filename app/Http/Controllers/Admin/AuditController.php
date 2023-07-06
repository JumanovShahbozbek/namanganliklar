<?php

namespace App\Http\Controllers\Admin;

use App\Events\AuditEvent;
use App\Http\Controllers\Controller;
use App\Models\Audit;
use Illuminate\Http\Request;

class AuditController extends Controller
{
    public function index()
    {
        $audits = Audit::orderBy('id', 'DESC')->get();

        return view('admin.audits.index', compact('audits'));
    }

    public function show(Audit $login, $id)
    {
        $Login = Audit::find($id);

        return view('admin.audits.show', compact('audit'));
    }

    public function destroy(Audit $audit, $id)
    {
        $user = auth()->user()->name;
        event(new AuditEvent('delete', 'audits', $user, $audit));

        Audit::find($id)->delete();

        return redirect()->route('admin.audits.index')->with('danger', 'Malumot mavaffaqiyatli ochirildi');
    }
}
