<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2025.11.19. - 2025.11.21.',
    'saturday-date' => '2025.11.22.',
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
                    'name'  => 'Babgulyás,csipetke(1,3,9)',
                    'price' => 1560
                ],
                [
                    'name'  => 'Grízgaluska leves(1,3)',
                    'price' => 1440
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Mustáros flekken,steak burgonya,lyoni hagyma(1,10)',
                    'price' => 2540
                ],
                [
                    'name' => 'Rántott csirkemáj, waldorf saláta(1,3,7,8,9,10)',
                    'price' => 2460
                ],
                [
                    'name' => 'Borsópörkölt,galuska(1,3)',
                    'price' => 2380
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Túrógombóc,tejföl(1,3,7)',
                    'price' => 1360
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'hide' => false,
        'price' => 5380,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Tyúkhúsleves,cérnametélt(1,3,9)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Székelykáposzta,tejföl(7)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Almás palacsinta,vanília sodó(1,3,7)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
