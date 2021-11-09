<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BankNameRequest;
use App\Models\BankName;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SettingsController extends Controller
{
    public function index()
    {
        $bank = BankName::all();

        return view('dashboard.admin.settings', compact('bank'));
    }

    public function store(BankNameRequest $request)
    {
        $data = $request->all();
        BankName::create([
            'name' => $data['name'],
            'code' => $data['code'],
            'status' => '0',
        ]);

        return redirect()->route('admin.settings')->withSuccess('Data has been created');
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'code' => 'required',
            'status' => 'required',
        ]);

        $find = BankName::findOrFail($id);
        $data = [
            'name' => $request->name,
            'code' => $request->code,
            'status' => $request->status,
        ];
        $find->update($data);

        return redirect()->route('admin.settings')->withSuccess('Data has been updated');
    }
}
