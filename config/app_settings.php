<?php

return [

    // All the sections for the settings page
    'sections' => [
        'app' => [
            'title' => 'General Settings',
            'descriptions' => '', // (optional)
            'icon' => 'fa fa-cog', // (optional)

            'inputs' => [
                [
                    'name' => 'app_name', // unique key for setting
                    'type' => 'text', // type of input can be text, number, textarea, select, boolean, checkbox etc.
                    'label' => 'Nome do Aplicação', // label for input
                    // optional properties
                    'placeholder' => 'Nome da Aplicação', // placeholder for input
                    'class' => 'form-control', // override global input_class
                    'style' => '', // any inline styles
                    'rules' => 'required|min:2|max:20', // validation rules for this input
                    'value' => config('app.name'), // any default value
                    'hint' => 'Você pode definir o nome do aplicativo aqui' // help block text for input
                ],
                [
                    'name' => 'app_currency',
                    'type' => 'text',
                    'label' => 'Moeda do aplicativo',
                    'placeholder' => 'Moeda do aplicativo',
                    'class' => 'form-control',
                    'style' => '', // any inline styles
                    'rules' => 'required|max:10', // validation rules for this input
                    'value' => '$', // any default value
                    'hint' => 'Use seu símbolo de moeda como $',
                ],
                [
                    'name' => 'logo',
                    'type' => 'image',
                    'label' => 'Carregar logo',
                    'hint' => 'O tamanho de imagem recomendado é 150px x 150px',
                    'rules' => 'image|max:500',
                    'disk' => 'public', // which disk you want to upload
                    'path' => 'logos', // path on the disk,
                    'preview_class' => 'miniatura',
                    'preview_style' => 'height:40px'
                ]
                   ,
                [
                    'name' => 'favicon',
                    'type' => 'image',
                    'label' => 'Carregar favicon',
                    'hint' => 'O tamanho de imagem recomendado é 16px x 16px or 32px x 32px',
                    'rules' => 'image|max:500',
                    'disk' => 'public', // which disk you want to upload
                    'path' => 'logos', // path on the disk,
                    'preview_class' => 'miniatura',
                    'preview_style' => 'height:40px'
                ],
            ]
        ],
        'email' => [
            'title' => 'Configurações de e-mail',
            'descriptions' => '',
            'icon' => 'fa fa-envelope',

            'inputs' => [
                [
                    'name' => 'from_email',
                    'type' => 'email',
                    'label' => 'Do email',
                    'placeholder' => 'E-mail da Aplicação',
                    'rules' => 'required|email',
                ],
                [
                    'name' => 'from_name',
                    'type' => 'text',
                    'label' => 'Nome do E-mail',
                    'placeholder' => 'Nome do E-mail',
                ]
            ]
        ]
    ],

    // Setting page url, will be used for get and post request
    'url' => 'settings',

    // Any middleware you want to run on above route
    'middleware' => ['auth'],

    // View settings
    // 'setting_page_view' => 'app_settings::settings_page',
    'setting_page_view' => 'settings',
    'flash_partial' => 'app_settings::_flash',

    // Setting section class setting
    'section_class' => 'card mb-3',
    'section_heading_class' => 'card-header',
    'section_body_class' => 'card-body',

    // Input wrapper and group class setting
    'input_wrapper_class' => 'form-group',
    'input_class' => 'form-control',
    'input_error_class' => 'has-error',
    'input_invalid_class' => 'is-invalid',
    'input_hint_class' => 'form-text text-muted',
    'input_error_feedback_class' => 'text-danger',

    // Submit button
    'submit_btn_text' => 'Salvar configurações',
    'submit_success_message' => 'As configurações foram salvas.',

    // Remove any setting which declaration removed later from sections
    'remove_abandoned_settings' => false,

    // Controller to show and handle save setting
    'controller' => '\App\Http\Controllers\SettingController',

    // settings group
    'setting_group' => function() {
        // return 'user_'.auth()->id();
        return 'default';
    }
];
