<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2025.10.29. - 2025.10.30.',
    'saturday-date' => '2025.10.31.',
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
                    'name'  => 'Gulyásleves, csipetke(1,3,9)',
                    'price' => 1480
                ],
                [
                    'name'  => 'Zöldcurrys karfiol leves, pirított karfiol, mogyoró(4,8)',
                    'price' => 1380
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Bácskai rizseshús, csemege uborka(10)',
                    'price' => 2580
                ],
                [
                    'name' => 'Alfredo csirke, házi tagliatelle(1,3,7)',
                    'price' => 2520
                ],
                [
                    'name' => 'Zöldségtempura, hummusz, dukkah(5,11)',
                    'price' => 2450
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Gundel palacsinta(1,3,7,8)',
                    'price' => 1380
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'hide' => true,
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
