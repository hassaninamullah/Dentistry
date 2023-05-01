<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Yajra\DataTables\Facades\DataTables;

class Client extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'client_due_date' => 'datetime',
    ];

    protected $guarded = ['id', 'created_at', 'updated_at'];

    //REQUESTED METHODS;
    public function getClients(){
        $data = Client::orderBy('id', 'DESC');
        return Datatables::of($data)
            ->addColumn('status', function($row){
                if($row->isActive) {
                    return '<span class="btn btn-success">Active</span>';
                }else{
                    return '<span class="btn btn-danger">In Active</span>';
                }
            })
            ->addColumn('family', function($row){
                if($row->isClient) {
                    return true;
                }else{
                    return false;
                }
            })
            ->addColumn('trips', function($row){
                return 0;
            })
            ->addColumn('agent', function($row){
                $agent= User::where('id',$row->agent_id)->first();
                return $agent->name;
            })
            ->addColumn('action', function($row){
                $actionBtn = '<a href="javascript:void(0)" data-path="'.route('client.delete',[$row->id]).'"  class="delete delete-entity btn btn-danger btn-sm">Delete</a>';
                return $actionBtn;
            })
            ->rawColumns(['action','agent','status','trips'])
            ->make(true);
    }

    public function deleteClient($id){
        $data=Client::where('id',$id)->delete();
        if($data){
            return 'success';
        }
        return 'failed';
    }


    public function creatClient($payload){
        if(!isset($payload->isClient)){
            $payload['isClient']=0;
        }else{
            $payload['isClient']=1;
        }
        $data=Client::create($payload);
        return redirect('/auth/client/listing'); 
    }
}
