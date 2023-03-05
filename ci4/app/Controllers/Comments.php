<?php

namespace App\Controllers;

use App\Models\CommentsModel;

class Comments extends BaseController
{
    public function index()
    {
        $model = model(CommentsModel::class);

        helper('form');

        $data = [
            'comments'  => $model->getComments(),
            'title' => 'Comment Section',
        ];

        // Checks whether the form is submitted.
        if (! $this->request->is('post')) {
            // The form is not submitted, so returns the form.
            return view('templates/header', $data)
            . view('comments/index')
            . view('templates/footer');
        }

        $post = $this->request->getPost(['name', 'email']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($post, [
            'name' => 'required|max_length[255]|min_length[3]',
            'email' => 'required|max_length[255]|min_length[3]',
        ])) {
            // The validation fails, so returns the form.
            return view('templates/header', $data)
            . view('comments/index')
            . view('templates/footer');
        }
    
        $model->save([
            'name' => $post['name'],
            'email' => $post['email'],
        ]);

        return view('templates/header', $data)
        . view('comments/success')
        . view('templates/footer');
        //end of create
        
        }//index

    
    }//class