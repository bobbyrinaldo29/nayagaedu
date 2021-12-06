<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PackageRequest;
use App\Models\Package;
use Illuminate\Support\Str;

class PackageController extends Controller
{
    public function index()
    {
        $package = Package::all();

        return view('dashboard.admin.packageSetting', compact('package'));
    }

    public function show()
    {
        $package = Package::all();

        return view('dashboard.users.package', compact('package'));
    }

    public function create(PackageRequest $request)
    {
        $data = $request->validated();
        Package::create([
            'packageName' => Str::ucfirst($data['packageName']),
            'price' => $data['price'],
            'description' => $data['description'],
        ]);

        return redirect()->route('admin.package')->withSuccess('Data has been created');
    }

    public function update(PackageRequest $request, $id)
    {
        $data = $request->validated();
        Package::findOrFail($id)
            ->update([
                'packageName' => Str::ucfirst($data['packageName']),
                'price' => $data['price'],
                'description' => $data['description'],
            ]);

        return redirect()->route('admin.package')->withSuccess('Data has been updated');
    }

    public function destroy($id)
    {
        Package::findOrFail($id)->delete();
        return redirect()->route('admin.package')->withSuccess('Data has been deleted');
    }
}
