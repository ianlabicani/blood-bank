<?php

namespace App\Http\Controllers;

use App\Models\RedBloodCell;
use App\Http\Requests\StoreRedBloodCellRequest;
use App\Http\Requests\UpdateRedBloodCellRequest;

class RedBloodCellController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $redBloodCells = RedBloodCell::with('donor')->get();
        $totalByType = $redBloodCells->groupBy('type')->map(function ($group) {
            return $group->sum('quantity');
        });

        $allBloodTypes = ['A', 'A+', 'A-', 'B', 'B+', 'B-', 'AB', 'AB+', 'AB-', 'O', 'O+', 'O-'];

        $totalByType = collect($allBloodTypes)->mapWithKeys(function ($type) use ($totalByType) {
            return [$type => $totalByType->get($type, 0)];
        });

        return view('user.red-blood-cells.index', compact('redBloodCells', 'totalByType'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRedBloodCellRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(RedBloodCell $redBloodCell)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RedBloodCell $redBloodCell)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRedBloodCellRequest $request, RedBloodCell $redBloodCell)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RedBloodCell $redBloodCell)
    {
        //
    }
}
