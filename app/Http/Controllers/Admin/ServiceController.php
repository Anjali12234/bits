<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Service\StoreServiceRequest;
use App\Http\Requests\Service\UpdateServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ServiceController extends Controller
{
    public function create()
    {
        $services = Service::paginate(10);
        return view('admin.service.create',compact('services'));
    }
    
    public function store(StoreServiceRequest $request)
    {
        Service::create($request->validated());
        Alert::success('Service added successfully');
        return back();
    }

    public function edit(Service $service)
    {
        return view('admin.service.edit',compact('service'));
    }

    public function update(UpdateServiceRequest $request, Service $service)
    {
        
        if ($request->hasFile('image') && $image = $service->getRawOriginal('image')) {
            $this->deleteFile($image);
        }
        $service->update($request->validated());
        Alert::success('Service updated successfully');
        return redirect(route('admin.service.create'));
    }

    public function destroy(Service $service)
    {
        $service->delete();
        Alert::success('service deleted successfully');
        return back();
    }
}
