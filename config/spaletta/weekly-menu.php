<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2025.03.26. - 2025.03.28.',
    'saturday-date' => '2025.03.29.',
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
                    'name'  => 'Medvehagymás burgonyaleves, túróspogácsa(1,3,7)',
                    'price' => 1460
                ],
                [
                    'name'  => 'Szecsuáni csípős-savanyú leves(1,3,6,11)',
                    'price' => 1590
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Brassói, csemegeuborka(1,10)',
                    'price' => 2690
                ],
                [
                    'name' => 'Joghurtos csirkenyárs, tavaszi saláta(5,7,9,11)',
                    'price' => 2620
                ],
                [
                    'name' => 'Borsófőzelék, medvehagyma, onsen tojás(3,7)',
                    'price' => 2530
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Máglyarakás(1,3,7,8)',
                    'price' => 1360
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'price' => 5890,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Grízgaluska leves(1,3,9)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Hentes tarja, burgonyapüré(1,7,10)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Mascarpone, pisztácia, málna(7,8)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
