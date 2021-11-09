<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BankNameRequest;
use App\Models\BankName;
use Illuminate\Http\Request;

class SettingsController extends Controller
{

    public function index()
    {
        $bank = BankName::all();

        return view('dashboard.admin.settings', compact('bank'));
    }

    public function create(BankNameRequest $request)
    {
        $data = $request->validated();
        BankName::create([
            'name' => $data['name'],
            'code' => $data['code'],
            'status' => '0',
        ]);

        return redirect()->route('admin.settings')->withSuccess('Data has been created');
    }

    public function update(BankNameRequest $request, $id)
    {
        $data = $request->validated();
        BankName::findOrFail($id)
        ->update([
            'name' => $data['name'],
            'code' => $data['code'],
            'status' => $data['status'],
        ]);

        return redirect()->route('admin.settings')->withSuccess('Data has been updated');
    }
}
