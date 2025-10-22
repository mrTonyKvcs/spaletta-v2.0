<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2025.10.22. - 2025.10.24.',
    'saturday-date' => '2025.10.25.',
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
                    'name'  => 'Vietnámi kacsaleves,kacsás wonton(1,4,6)',
                    'price' => 1530
                ],
                [
                    'name'  => 'Zellerkrémleves, misos sült zeller(6,7,9)',
                    'price' => 1450
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Burgonyafőzelék, fasírt(1,3,7)',
                    'price' => 2480
                ],
                [
                    'name' => 'Borzas csirkemell, jázminrizs, fokhagymás tejföl(1,3,7)',
                    'price' => 2540
                ],
                [
                    'name' => 'Grillezett camembert, őszi saláta, körte(7,8)',
                    'price' => 2420
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Kukorica prósza, szilva, fahéj(3,7)',
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
                        'name'  => 'Orjaleves, cérnametélt, zöldségek(1,3,9)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Bakonyi sertés tarja, túrós csusza(1,3,7)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Aranygaluska, vanília sodó(1,3,7,8)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
