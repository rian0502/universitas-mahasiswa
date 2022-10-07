<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Students;

class AdminController extends BaseController
{
    public function index()
    {
        $data = [
            'sidebar' => 'Dashboard'
        ];
        return view('onlyAdmin/index',$data);
    }

    public function students(){
        $students = new Students();
        $data = [
            'sidebar' => 'Students',
            'students' => $students->findAll(),
        ];
        return view('onlyAdmin/students',$data);
    }
    public function delete(){
        $students = new Students();

    }
}
