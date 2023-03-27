<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2023.03.30. - 2023.04.01.',
    'saturday-date' => '2023.02.25.',
    'menu' => [
        'first-courses' => [
            'name' => 'Előétel',
            'items' => [
                [
                    'name'  => 'Vitello tonnato',
                    'price' => 1400
                ]
            ]
        ],
        'soup' => [
            'name' => 'Leves',
            'items' => [
                [
                    'name'  => 'Sárgaborsó krémleves, karamellizált hagymával',
                    'price' => 1200
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Házi tagliatelle medvehagyma pesztóval',
                    'price' => 2300
                ],
                [
                    'name' => 'Füstön sült „hentes” sertéskaraj, burgonyapüré',
                    'price' => 2500
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Túróspalacsinta',
                    'price' => 1100
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
