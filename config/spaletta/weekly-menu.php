<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2025.11.05. - 2025.11.07.',
    'saturday-date' => '2025.11.08.',
    'hide' => false,
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
                    'name'  => 'Tarhonyaleves(1,3)',
                    'price' => 1380
                ],
                [
                    'name'  => 'Tom yum, csirkemell(1,4,6)',
                    'price' => 1550
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Hentes tarja, burgonyapüré(1,6,7)',
                    'price' => 2580
                ],
                [
                    'name' => 'Indiai vajas csirke, jázmin rizs(7,8)',
                    'price' => 2520
                ],
                [
                    'name' => 'Sült répa, cékla, tahinis joghurt, dió(7,8)',
                    'price' => 2480
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Gesztenyepüré, meggy, tejszín(7)',
                    'price' => 1380
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'hide' => false,
        'price' => 5640,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Gombakrémleves, sonkás krokett(1,3,7)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Disznótoros, hagymás tört burgonya, savanyúság(10)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Madártej, pisztácia(3,7,8)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
