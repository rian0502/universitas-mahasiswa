<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Students;
class StudentsController extends BaseController
{

    public function index()
    {
        //
        $stdnt = new Students();
        if($this->request->getVar('search')){
            $data = [
                'title' => 'Students',
                'students' => $stdnt->like('name', $this->request->getVar('search'))->
                                    orLike('NPM', $this->request->getVar('search'))->
                                    orLike('email', $this->request->getVar('search'))->
                                    orLike('jurusan', $this->request->getVar('search'))->
                                    orLike('jalur_masuk', $this->request->getVar('search'))->paginate(10, 'students'),
                'pager' => $stdnt->pager,
                'input' => $this->request->getVar('search'),
                'nomor' => nomor($this->request->getVar('page_students'),10),
                
            ];

            return view('students/index', $data);
        }else{
            $data = [
                'title' => 'Students',
                'students' => $stdnt->paginate(10, 'students'),
                'input' => null,
                'pager' => $stdnt->pager,
                'nomor' => nomor($this->request->getVar('page_students'),10),
            ];
     
            return view('students/index', $data);
        }
    }

    public function pendaftaran(){
        session();
        $data = [
            "title" => "Pendaftaran",
            'validation' => \Config\Services::validation(),
        ];
        return view('pendaftaran',$data);
    }

    public function store()
    {
        $students = new Students();

        $faker = \Faker\Factory::create('id_ID');
        $data = [
            'name' => $this->request->getVar('name'),
            'NPM' => $faker->unique()->numberBetween(1000000000, 9999999999),
            'email' => $this->request->getVar('email'),
            'alamat' => $this->request->getVar('alamat'),
            'jurusan' => $this->request->getVar('jurusan'),
            'jalur_masuk' => $this->request->getVar('jalur_masuk'),
            'pas_foto' => $this->request->getFile('foto'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];
   
        $validated = $this->validate([
            'name' => [
                'rules' => 'required|min_length[4]',
                'errors' => [
                    'required' => 'Nama harus diisi',
                    'min_length' => 'Nama minimal 4 karakter'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Email harus diisi',
                    'valid_email' => 'Email tidak valid'
                ]
            ],
            'jurusan' => [
                'rules' => 'required|min_length[4]',
                'errors' => [
                    'required' => 'Jurusan harus diisi',
                    'min_length' => 'Jurusan minimal 4 karakter'
                ]
            ],
            'alamat' => [
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required' => 'Alamat harus diisi',
                    'min_length' => 'Alamat minimal 4 karakter'
                ]

            ],
            'jalur_masuk' => [
                'rules' => 'required|in_list[SNMPTN,SBMPTN,Mandiri]',
                'errors' => [
                    'required' => 'Jalur Masuk harus diisi',
                    'in_list' => 'Jalur Masuk tidak valid'
                ]

            ],
            'foto' => [
                'rules' => 'uploaded[foto]|max_size[foto,1024]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Foto harus di Upload',
                    'max_size' => 'Ukuran foto terlalu besar',
                    'is_image' => 'Yang anda pilih bukan Foto',
                    'mime_in' => 'Yang anda pilih bukan Foto'
                ]
            ]
        ]);
        if ($validated) {
            $foto = $this->request->getFile('foto');
            $data['pas_foto'] = $foto->getName();
            $foto->move("uploads/");
            $students->insert($data);
            return redirect()->to('/students');
        } else {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('/pendaftaran'))->withInput();
        }
    }

}
