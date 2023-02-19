<?php

namespace App\Http\Controllers;

use App\Models\User;
use ProtoneMedia\Splade\SpladeTable;

class UsersController extends Controller
{
    //list users
    public function index()
    {
        $query = User::query()->with('roles');
        $users= SpladeTable::for($query)
            ->column('name', 'Name')
            ->column('email', 'Email')
            ->column('roles.name', 'Role')
            ->withGlobalSearch('search', ['name', 'email'])
            ->paginate(10);
        return view('entities.users.index', compact('users'));
    }
    //show user
    public function show($uuid)
    {
        $user = User::where('uuid', $uuid)->first();
        return view('entities.users.show', compact('user'));
    }
}
