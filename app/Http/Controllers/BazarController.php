<?php

namespace App\Http\Controllers;

use App\Http\Requests\BazarRequest;
use App\Http\Resources\BazarResource;
use App\Models\Bazar;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class BazarController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        $this->authorize('viewAny', Bazar::class);

        return inertia()->render('Bazar/Index', [
            'bazars' => BazarResource::collection(Bazar::latest()->paginate())
        ]);
    }

    public function create()
    {
        $this->authorize('create', Bazar::class);

        return inertia()->render('Bazar/Create');
    }

    public function store(BazarRequest $request)
    {
        $this->authorize('create', Bazar::class);

        $bazar = Bazar::create($request->validated());

        if ($request->hasFile('image')) {
            $bazar->addMediaFromRequest('image')
                ->toMediaCollection('image');
        }

        return redirect()->route('bazars.index')->with('success', 'Bazar created.');
    }

    public function show(Bazar $bazar)
    {
        $this->authorize('view', $bazar);

        return new BazarResource($bazar);
    }

    public function update(BazarRequest $request, Bazar $bazar)
    {
        $this->authorize('update', $bazar);

        $bazar->update($request->validated());

        return new BazarResource($bazar);
    }

    public function destroy(Bazar $bazar)
    {
        $this->authorize('delete', $bazar);

        $bazar->delete();

        return response()->json();
    }
}
