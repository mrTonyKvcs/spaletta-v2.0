<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2025.09.03. - 2025.09.05.',
    'saturday-date' => '2025.09.06.',
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
                    'name'  => 'Bakonyi betyárleves, burgonyagombóc(1,3,7,9)',
                    'price' => 1560
                ],
                [
                    'name'  => 'Karfiol leves(7)',
                    'price' => 1390
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Cigánypecsenye, steak burgonya, csemege uborka(1,10)',
                    'price' => 2570
                ],
                [
                    'name' => 'Rántott csirkemáj, rizibizi, tormás majonéz(1,3,7,10)',
                    'price' => 2490
                ],
                [
                    'name' => 'Zöldséges lasagne, pesto(1,3,7,8)',
                    'price' => 2530
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Szilvás palacsinta(1,3,7,8)',
                    'price' => 1350
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'hide' => false,
        'price' => 5490,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Frankfurti leves(1,7)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Rizseshús, piacos savanyúságok(10)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Meggyes pite, vaníliás tejszín(1,3,7)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
