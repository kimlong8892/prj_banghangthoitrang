<?php
return [
    [
        'title' => 'Dashboard',
        'route' => 'admin.home',
    ],
    [
        'title' => 'Product Management',
        'list_child' => [
            [
                'title' => 'List product',
                'route' => 'admin.product.index'
            ],
            [
                'title' => 'Create product',
                'route' => 'admin.product.create'
            ]
        ]
    ]
];
