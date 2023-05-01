<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdministrationController extends Controller
{
    public $userModel;
    public function __construct()
    {
        $this->userModel=new User();
    }

    public function agents(Request $request)
    {
        try {
            if ($request->ajax()) {
                $response=$this->userModel->getUsersByRole('agent');
                return $response;
            }
            return view('modules.roles/agents');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function commissions(Request $request)
    {
        try {
            if ($request->ajax()) {
                $response=$this->userModel->getUsersByRole('agent');
                return $response;
            }
            return view('modules.commissions/commission');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function applicants(Request $request)
    {
        try {
            if ($request->ajax()) {
                $response=$this->userModel->getUsersByRole('applicant');
                return $response;
            }
            return view('modules.roles/applicants');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function systemUsers(Request $request)
    {
        try {
            if ($request->ajax()) {
                $response=$this->userModel->getUsersByRole('system-user');
                return $response;
            }
            return view('modules.roles/system-users');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function agencyProfiles(Request $request)
    {
        try {
            if ($request->ajax()) {
                $response=$this->userModel->getUsersByRole('agency');
                return $response;
            }
            return view('modules.roles/agency-profiles');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function suppliers(Request $request)
    {
        try {
            if ($request->ajax()) {
                $response=$this->userModel->getUsersByRole('supplier');
                return $response;
            }
            return view('modules.suppliers/supplier');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function destroyAdministrations($id,$role){
        try {
            return $this->userModel->deleteUser($id,$role);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

}
