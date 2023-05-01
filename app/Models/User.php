<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Yajra\DataTables\Facades\DataTables;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

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
        'email_verified_at' => 'datetime',
    ];



    //REQUESTED METHODS;
    public function getUsersByRole($role){
        $data = User::where('role',$role);
        return Datatables::of($data)
            ->addColumn('action', function($row){
                $actionBtn = '<a href="javascript:void(0)" data-path="'.route('administration.general.delete',[$row->id,$row->role]).'" data-role="'.$row->role.'"  class="delete delete-entity btn btn-danger btn-sm">Delete</a>';
                return $actionBtn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function deleteUser($id,$role){
        $data=User::where(['id'=>$id,'role'=>$role])->delete();
        if($data){
            return 'success';
        }
        return 'failed';
    }
}
