<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class SeriesForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('seriesName', 'text', [
            	'label' => 'Series Name',
                'rules' => 'required'
            ])
            ->add('seriesDesc', 'text', [
                'rules' => 'required',
                'label' => 'Series Description'
            ])
            ->add('thumbnail', 'text', [
                'rules' => 'required',
                'label' => 'Image Name'
            ]);
    }
}
