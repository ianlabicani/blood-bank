<?php

namespace App\Http\Controllers;

use App\Models\WhiteBloodCell;
use App\Http\Requests\StoreWhiteBloodCellRequest;
use App\Http\Requests\UpdateWhiteBloodCellRequest;

class WhiteBloodCellController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $whiteBloodCells = WhiteBloodCell::with('donor')->paginate(10);
        $totalByType = WhiteBloodCell::all()->groupBy('type')->map(function ($group) {
            return $group->sum('quantity');
        });

        $allCellTypes = ['granulocytes', 'lymphocytes', 'monocytes', 'eosinophils', 'basophils'];

        $totalByType = collect($allCellTypes)->mapWithKeys(function ($type) use ($totalByType) {
            return [$type => $totalByType->get($type, 0)];
        });

        return view('user.white-blood-cells.index', compact('whiteBloodCells', 'totalByType'));
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
    public function store(StoreWhiteBloodCellRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(WhiteBloodCell $whiteBloodCell)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WhiteBloodCell $whiteBloodCell)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWhiteBloodCellRequest $request, WhiteBloodCell $whiteBloodCell)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WhiteBloodCell $whiteBloodCell)
    {
        //
    }
}
