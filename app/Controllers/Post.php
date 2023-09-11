<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PostModel;

class Post extends Controller
{
    /**
     * index function
     */
    public function index()
    {
        
        //model initialize
        $postModel = new PostModel();

        
        //pager initialize
        $pager = \Config\Services::pager();

        $data = array(
            'posts' => $postModel->paginate(10, 'post'),
            'pager' => $postModel->pager
        );

        return view('post-index', $data);
    }
    
    /**
     * create function
     */
    public function create()
    {
        return view('PostViews/create');
    }

    /**
     * store function
     */
    public function store()
    {
        //load helper form and URL
        helper(['form', 'url']);
         
        //define validation
        $validation = $this->validate([
            'title' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Judul Post.'
                ]
            ],
            'content'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan konten Post.'
                ]
            ],
        ]);

        if(!$validation) {

            //render view with error validation message
            return view('post-create', [
                'validation' => $this->validator
            ]);

        } else {

             //model initialize
            $postModel = new PostModel();
            
            //insert data into database
            $postModel->insert([
                'title'   => $this->request->getPost('title'),
                'content' => $this->request->getPost('content'),
            ]);

            //flash message
            session()->setFlashdata('message', 'Post Berhasil Disimpan');

            return redirect()->to(base_url('post'));
        }

    }

    /**
     * Edit Function
     */
    public function edit($id){
        //model initializa
        $postModel = new PostModel();

        $data = array(
            'post' => $postModel->find($id)
        );

        return view('post-edit', $data);
    }

    /**
     * Update Function
     */
    public function update($id){
        //load helper form and URL
        helper(['form', 'url']);

        //define validation
        $validation = $this->validate([
            'title' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Judul Post.'
                ]
            ],
            'content'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan konten Post.'
                ]
            ],
        ]);
        
        if(!$validation) {

            //model initialize
            $postModel = new PostModel();

            //render view with error validation message
            return view('post-edit', [
                'post' => $postModel->find($id),
                'validation' => $this->validator
            ]);

        } else {

            //model initialize
            $postModel = new PostModel();
            
            //insert data into database
            $postModel->update($id, [
                'title'   => $this->request->getPost('title'),
                'content' => $this->request->getPost('content'),
            ]);

            //flash message
            session()->setFlashdata('message', 'Post Berhasil Diupdate');

            return redirect()->to(base_url('post'));
        }
    }

    public function delete($id){
        //model initialize
        $postModel = new PostModel();

        $post = $postModel->find($id);

        if($post){
            $postModel->delete($id);

            //flash message
            session()->setFlashdata('message', 'Post Berhasil Dihapus');

            return redirect()->to(base_url('post'));
        }
    }
}