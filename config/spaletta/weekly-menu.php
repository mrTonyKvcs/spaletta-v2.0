<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2023.04.13. - 2023.04.15.',
    'saturday-date' => '2023.02.25.',
    'menu' => [
        // 'first-courses' => [
        //     'name' => 'Előétel',
        //     'items' => [
        //         [
        //             'name'  => 'Kacsás gyoza, hoisin, káposzta',
        //             'price' => 1200
        //         ]
        //     ]
        // ],
        'soup' => [
            'name' => 'Leves',
            'items' => [
                [
                    'name'  => 'Ázsiai húsleves',
                    'price' => 1400
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Paradicsomos újkáposzta, ropogós pontyfarok',
                    'price' => 2600
                ],
                [
                    'name' => 'Rántott csirkecomb filé, medvehagymás burgonyapüré',
                    'price' => 2500
                ],
                [
                    'name' => 'Borsós, spárgás tagliatelle',
                    'price' => 2400
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Gyümölcsrizs, eper, karamell',
                    'price' => 1300
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
