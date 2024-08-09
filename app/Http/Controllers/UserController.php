<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        // $users = DB::table("users")
        //     ->crossJoin("orders", "users.id", "=", "orders.user_id")
        //     ->select('users.id', 'users.name', 'users.email', 'orders.product_name', 'orders.product_category') // Adjust the columns you want to select
        //     ->get();
        // $users = DB::table("users")
        // ->crossJoin('orders', function(JoinClause $join) {
        //     $join->on('users.id','=','orders.user_id')
        //     ->where('orders.user_id','<=',24);
        // })->get();

        // $users = User::with('phone')->find('42');
        $users = User::with('phone')->get();
        return $users[0];
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
