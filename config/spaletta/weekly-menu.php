<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2025.04.23. - 2025.04.25.',
    'saturday-date' => '2025.04.26.',
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
                    'name'  => 'Kókusztejes répaleves, sült répa',
                    'price' => 1330
                ],
                [
                    'name'  => 'Legényfogó leves, apró grízgaluska(1,3,7)',
                    'price' => 1460
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Tarhonyás hús, csalamádé(1,3,6,10)',
                    'price' => 2670
                ],
                [
                    'name' => 'Borzas csirkemell, rizibizi, fűszeres tejföl(1,3,7,)',
                    'price' => 2730
                ],
                [
                    'name' => 'Tökfőzelék, kápia, kapor',
                    'price' => 2480
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Pannacotta, eper, bazsalikom(7,8)',
                    'price' => 1340
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'hide' => false,
        'price' => 5460,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Currys karfiol leves(4)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Sertés cordon, burgonyapüré(1,3,7,)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Túrófánk, citrom krém(1,3,7,8)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
