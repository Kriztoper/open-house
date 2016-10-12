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
                'rules' => 'required|Alpha'
            ])
            ->add('last_name', 'text', [
                'rules' => 'required|Alpha',
                'label' => 'Last Name'
            ])
            ->add('student_number', 'text', [
                'rules' => 'required|Numeric',
                'label' => 'Student Number'
            ])
            ->add('password', 'password', [
                'rules' => 'required|min:6',
                'label' => 'Password'
            ])
            ->add('register', 'submit', [
                'label' => 'Register',
                'attr'  => ['class' => 'btn btn-primary']
            ]);
    }
}
