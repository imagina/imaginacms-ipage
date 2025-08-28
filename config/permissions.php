<?php

return [
    'ipage.pages' => [
        'manage' => [
            'title' =>  'ipage::pages.manage.title',
            'description' => 'ipage::pages.manage.description',
            'onlyFor' => ['super-admin'],
            'defaultAccess' => []
        ],
        'index' => [
            'title' =>  'ipage::pages.list.title',
            'description' => 'ipage::pages.list.description',
            'onlyFor' => [],
            'defaultAccess' => []
        ],
        'create' => [
            'title' =>  'ipage::pages.create.title',
            'description' => 'ipage::pages.create.description',
            'onlyFor' => ['super-admin'],
            'defaultAccess' => []
        ],
        'edit' => [
            'title' =>  'ipage::pages.edit.title',
            'description' => 'ipage::pages.edit.description',
            'onlyFor' => ['super-admin'],
            'defaultAccess' => []
        ],
        'destroy' => [
            'title' =>  'ipage::pages.destroy.title',
            'description' => 'ipage::pages.destroy.description',
            'onlyFor' => ['super-admin'],
            'defaultAccess' => []
        ],
        'restore' => [
            'title' =>  'ipage::pages.restore.title',
            'description' => 'ipage::pages.restore.description',
            'onlyFor' => ['super-admin'],
            'defaultAccess' => []
        ]
    ],
];
