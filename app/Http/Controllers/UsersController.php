<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use function GuzzleHttp\Promise\all;


class UsersController extends Controller
{
    public function index()
    {

        $users = User::all();

        return view('user.index', [
            'users' => $users
        ]);
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
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $user = User::find($id);

        return view('user.show', [
            'user' => $user
            ]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view('user.edit', [
            'user' => $user
        ]);
    }


    public function update(Request $request, $id)
    {
        $data = $request->only(['name', 'email']);

        $user = User::find($id);
        $user->update($data);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @returm \Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        $user = User::find($id);

        $user->delete();

        return redirect()->back();
    }
}
