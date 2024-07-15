<?php

namespace App\Http\Controllers;

use App\Models\Notify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreNotifyRequest;
use App\Http\Requests\UpdateNotifyRequest;

class NotifyController extends Controller
{

    public function markAllRead(Request $request)
    {
        $userId = Auth::id();

        Notify::where('user_id', $userId)->update(['is_read' => true]);

        return response()->json(['success' => 'All notifications marked as read']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreNotifyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Notify $notify)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Notify $notify)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNotifyRequest $request, Notify $notify)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Notify $notify)
    {
        //
    }
}
