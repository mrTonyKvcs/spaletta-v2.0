<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2023.09.27. - 2023.09.30.',
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
                    'name'  => 'Körteleves, körte sorbet, kesudió',
                    'price' => 1300
                ],
                [
                    'name'  => 'Gulyásleves, csipetke',
                    'price' => 1500
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Rakott kel, tejföl',
                    'price' => 2400
                ],
                [
                    'name' => 'Tagliatelle, lazac, aszalt paradicsom',
                    'price' => 2300
                ],
                [
                    'name' => 'Sütőtökös rizottó, pecorinó',
                    'price' => 2100
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Olivás piskóta, gyömbéres szilvaragu, mandula, tejszín',
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
