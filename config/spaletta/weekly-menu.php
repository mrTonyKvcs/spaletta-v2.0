<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2023.03.22. - 2023.03.25.',
    'saturday-date' => '2023.02.25.',
    'menu' => [
        'first-courses' => [
            'name' => 'Előétel',
            'items' => [
                [
                    'name'  => 'Sült cékla, joghurt,dió,koriander',
                    'price' => 1200
                ]
            ]
        ],
        'soup' => [
            'name' => 'Leves',
            'items' => [
                [
                    'name'  => 'Ázsiai húsleves, rizstészta, zöldségek',
                    'price' => 1300
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Zöldborsó főzelék, medvehagyma, petrezselyem, sajtos bundáskenyér',
                    'price' => 2200
                ],
                [
                    'name' => 'Ragacsos sertéstarja, jázminrizs, pakchoi',
                    'price' => 2600
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Túróspalacsinta',
                    'price' => 1200
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'price' => 5000,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Húsleves vajas daragaluskával',
                        'price' => 1300
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Sertéskaraj orly módra, snidlinges burgonyapüré',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Csörögefánk áfonyamártással',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
