<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public $clientModel;
    public function __construct()
    {
        $this->clientModel=new CLient();
    }

    public function index(Request $request)
    {
        try {
            if ($request->ajax()) {
                $response=$this->clientModel->getClients();
                return $response;
            }
            return view('modules.client-management/listing');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function destroy($id){
        try {
            return $this->clientModel->deleteClient($id);
        } catch (\Throwable $th) {
            throw $th;
        }
    }


    public function store(Request $request){
        $this->validate($request, [
            'first_name'   => 'required|min:3',
            'last_name'   => 'required|min:3',
            'middle_name'   => 'required|min:3',
            'nick_name'   => 'required|min:3',
            'address'   => 'required|min:3',
            'city'   => 'required|min:3',
            'state'   => 'required|min:2',
            'zip_code'   => 'required|min:3',
            'dob'   => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'agent_id' => 'required|exists:users,id',
            'isActive' => 'required|boolean'
        ]);
        try {
            return $this->clientModel->creatClient($request->all());
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
