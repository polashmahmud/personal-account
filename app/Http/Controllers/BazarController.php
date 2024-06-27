<?php

namespace App\Http\Controllers;

use App\Http\Requests\BazarRequest;
use App\Http\Resources\BazarResource;
use App\Models\Bazar;

class BazarController extends Controller
{
    public function index()
    {
        return inertia()->render('Bazar/Index', [
            'bazars' => BazarResource::collection(Bazar::latest()->paginate())
        ]);
    }

    public function create()
    {
        return inertia()->render('Bazar/Create');
    }

    public function store(BazarRequest $request)
    {
        $bazar = Bazar::create($request->validated());

        if ($request->hasFile('image')) {
            $bazar->addMediaFromRequest('image')
                ->toMediaCollection('image');
        }

        return redirect()->route('bazars.index')->with('success', 'Bazar created.');
    }

    public function edit(Bazar $bazar)
    {
        return inertia()->render('Bazar/Edit', [
            'bazar' => new BazarResource($bazar)
        ]);
    }

    public function update(BazarRequest $request, Bazar $bazar)
    {
        $bazar->update($request->validated());

        if ($request->hasFile('image')) {
            $bazar->addMediaFromRequest('image')
                ->toMediaCollection('image');
        }

        return redirect()->route('bazars.index')->with('success', 'Bazar updated.');
    }

    public function destroy(Bazar $bazar)
    {
        $bazar->delete();

        return back()->with('success', 'Bazar deleted.');
    }
}
