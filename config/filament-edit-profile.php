<?php

return [
    'disk' => env('FILESYSTEM_DISK', 'public'),
    'visibility' => 'public', // or replace by filesystem disk visibility with fallback value
    'show_custom_fields' => true,
    'custom_fields' => [
        'no_hp' => [
            'type' => 'text',
            'label' => 'Nomor Hp',
            'placeholder' => 'Nomor Hp',
            'required' => true,
            'rules' => 'required|string|max:14',
        ],
        'alamat' => [
            'type' =>'textarea',
            'label' => 'Alamat',
            'placeholder' => 'Alamat',
            'rows' => '3',
            'required' => true,
        ],
        'jenis_kelamin' => [
            'type' => 'select',
            'label' => 'Jenis Kelamin',
            'placeholder' => 'Select',
            'required' => true,
            'options' => [
                'Laki - Laki' => 'Laki - Laki',
                'Perempuan' => 'Perempuan',
            ],
        ],
    ]
];