<?php

namespace App\Http\Controllers;
use App\Models\Data;
use Illuminate\Http\Request;
class DataController extends Controller
{
    public function index()
    {
        return view('welcome', ['data' => Data::orderBy('id', 'DESC')->get()]);
    }

    public function addData(Request $req)
    {
        // $req->validate([
        //     'firstname' => 'required',
        //     'lastname' => 'required',
        //     'email' => 'required|unique',
        //     'password' => 'required',
        // ]);

        $data = new Data();
        $data->firstname = $req->firstname;
        $data->lastname = $req->lastname;
        $data->email = $req->email;
        $data->password = $req->password;
        $data->save();
        // return $data;

        return response()->json([
            'status' => 'success',
        ]);
    }

    public function updateData(Request $req)
    {
        // $req->validate(
        //     [
        //     'up_firstname' =>'required'.$req->up_id,
        //     'up_lastname' =>'required',
        //     'up_email' =>'required',
        //     'up_password' =>'required'
           
        //     ],
        //     [
        //         'up_firstname' =>'First Name is Required',
        //         'up_lastname' =>'Last Name is Required',
        //         'up_email' =>'Email is Required',
        //         'up_password' =>'Password is Required'
        //     ]
        //     );

            Data::where('id', $req->up_id)->update ([
                'firstname'=>$req->up_firstname,
                'lastname'=>$req->up_lastname,
                'email'=>$req->up_email, 
                'password'=>$req->up_password,
                ]);
        // return $data;

        return response()->json([
            'status' => 'success',
        ]);
    }

    public function deleteData(Request $req) {
        Data:: find($req->data_id) ->delete();
        return response () -> json ([
        'status' => 'success',
        ]);
        }
}
