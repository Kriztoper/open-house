<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class RegisterForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('first_name', 'text', [
            	'label' => 'First Name',
                'rules' => 'required'
            ])
            ->add('last_name', 'text', [
                'rules' => 'required',
                'label' => 'Last Name'
            ])
            ->add('student_number', 'number', [
                'rules' => 'required|min:9|max:9',
                'label' => 'Student Number'
            ])
            ->add('password', 'text', [
                'rules' => 'required|min:6',
                'label' => 'Password'
            ]);
    }
}
