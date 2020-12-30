<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

use Hash;

class ChangePasswordController extends Controller
{
  
    public function edit($id)
    {
        return view('change_password.edit', ['id' => $id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'password' => 'required|min:7|confirmed'
        ]);

       

        $data['password'] = Hash::make($data['password']);
        $user = User::findOrFail($id)
            ->fill($data)
            ->save();

        return redirect()->route('users.show', ['user' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
}
