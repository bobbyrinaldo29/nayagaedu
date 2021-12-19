<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BankNameRequest;
use App\Models\BankName;
use Illuminate\Support\Str;

class BankNameController extends Controller
{

    public function index()
    {
        $bank = BankName::all();

        return view('dashboard.admin.bankName', compact('bank'));
    }

    public function store(BankNameRequest $request)
    {
        $data = $request->validated();
        BankName::create([
            'name' => Str::ucfirst($data['name']),
            'code' => Str::upper($data['code']),
            'status' => '0',
        ]);

        return redirect()->route('bank-setting.index')->withSuccess('Data has been created');
    }

    public function update(BankNameRequest $request, $id)
    {
        $data = $request->validated();
        BankName::findOrFail($id)
            ->update([
                'name' => Str::ucfirst($data['name']),
                'code' => Str::upper($data['code']),
                'status' => $data['status'],
            ]);

        return redirect()->route('bank-setting.index')->withSuccess('Data has been updated');
    }

    public function destroy($id)
    {
        BankName::findOrFail($id)->delete();
        return redirect()->route('bank-setting.index')->withSuccess('Data has been deleted');
    }
}
