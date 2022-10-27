<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Students;

class AdminController extends BaseController
{
    public function index()
    {

        $students = new Students();
        $data = [
            'sidebar' => 'Dashboard',
            'jumlah' => $students->countAllResults(),
            'snmptn' => $students->where('jalur_masuk', 'SNMPTN')->countAllResults(),
            'sbmptn' => $students->where('jalur_masuk', 'SBMPTN')->countAllResults(),
            'mandiri' => $students->where('jalur_masuk', 'Mandiri')->countAllResults(),

        ];
        return view('onlyAdmin/index', $data);
    }

    public function students()
    {
        $students = new Students();
        $data = [
            'sidebar' => 'Students',
            'students' => $students->findAll(),
        ];
        return view('onlyAdmin/students', $data);
    }
    
    public function delete()
    {
        $students = new Students();
        if ($students->where('npm', $this->request->getPost('npm'))->delete()) {
            return redirect()->to('/admin/mahasiswa')->with('success', 'Data berhasil dihapus');
        } else {
            return redirect()->to('/admin/mahasiswa')->with('error', 'Data gagal dihapus');
        }
    }

    public function view()
    {
        $students = new Students();
        $data = [
            'sidebar' => 'Students',
            'student' => $students->getStudents($this->request->getPost('npm')),
        ];
        return view('onlyAdmin/student', $data);
    }


    public function edit($npm){
       
        $students = new Students();

        $data = [
            'sidebar' => 'Students',
            'student' => $students->where('npm', $npm)->first(),
            'validation' => \Config\Services::validation(),
        ];
        return view('onlyAdmin/edit', $data);
    }

    public function update()
    {
        $students = new Students();
        $data = [
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'NPM' => $this->request->getVar('npm'),
            'alamat' => $this->request->getVar('alamat'),
            'jurusan' => $this->request->getVar('jurusan'),
            'jalur_masuk' => $this->request->getVar('jalur_masuk'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];
        if($this->request->getFile('pas_foto')->getName() != ''){
            $data['pas_foto'] = $this->request->getFile('pas_foto')->getName();
            $file = $this->request->getFile('pas_foto');
            $file->move('uploads/');
            $students->where('NPM', $this->request->getVar('npm'))->set($data)->update();
        }else{
            $students->where('NPM', $this->request->getVar('npm'))->set($data)->update();
        }
        return redirect()->to('/admin/mahasiswa')->with('success', 'Data berhasil diubah');
       
    }
}