<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2023.10.04. - 2023.10.07.',
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
                    'name'  => 'Tárkonyos sertés raguleves, burgonyagombóc',
                    'price' => 1500
                ],
                [
                    'name'  => 'Kókusztejes répaleves, pirított fűszeres répa',
                    'price' => 1300
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Székelykáposzta',
                    'price' => 2500
                ],
                [
                    'name' => 'Zöldfűszeres csirkemell rántva, burgonyapüré',
                    'price' => 2400
                ],
                [
                    'name' => 'Vegán töltött paprika',
                    'price' => 2300
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Kukorica prósza, baracklekvár',
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
                        'price' => 1400
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
