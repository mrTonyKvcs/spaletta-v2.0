<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2024.02.07. - 2024.02.09.',
    'saturday-date' => '2024.02.10.',
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
                    'name'  => 'Tojásleves, posírozott tojás, paprika olaj',
                    'price' => 1300
                ],
                [
                    'name'  => 'Gulyásleves',
                    'price' => 1600
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Malaccsászár, hideg-csípős káposzta, szecsuáni bors',
                    'price' => 2600
                ],
                [
                    'name' => 'Csirkepörkölt, túróspecli',
                    'price' => 2500
                ],
                [
                    'name' => 'Rizottó, paradicsom, szardella',
                    'price' => 2300
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Máglyarakás',
                    'price' => 1400
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'price' => 5400,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Bárány raguleves, tárkony, roppanós zöldségek',
                        'price' => 1400
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Sült oldalas, kelkáposzta, burgonya',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Palacsinta, meggy, vanília sodó',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
