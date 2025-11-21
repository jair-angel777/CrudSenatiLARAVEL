<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
class UserControler extends Controller
{
    public function index(): View {
        $users = $this->getAllUser();
        return view("user", [   "users"=> $users ]);
    }

    public function getAllUser(){
        $users = DB::select("SELECT *  FROM user");
        return $users;
        
    }

    public function edit(){
        return view("edit");
    }
    
    public function update(){
        $data = $_POST;

        $update = DB::update("UPDATE User Set name = ?, lastname = ? WHERE id = ?", [ $data['name'], $data['lastname'],$data['id']]);

        return view('user', [ 'users' => $this->getAllUser() ]);

    }

    public function create(): View {
        return view(' create');
    }

    public function store(): View {
        $data = $_POST;

        DB::insert("INSERT INTO user(id, name, lastname) VALUES (?,?,?)",
        [ $data['id'], $data['name'],$data['lastname']]);
        return view('user', ['users'=> $this->getAllUser() ]);
    }

    public function delete(){
        $id = $_GET['id'];
        DB::delete("DELETE FROM user Where id = $id");
        return view('user', ['users'=> $this->getAllUser() ]);
    }

    

    

}
