<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2024.08.14. - 2024.08.16.',
    'saturday-date' => '2024.08.31.',
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
                    'name'  => 'Citromleves, kardamom, citrus sorbet (7)',
                    'price' => 1290
                ],
                [
                    'name'  => 'Burgonyaleves, lángolt kolbász(9)',
                    'price' => 1390
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Zöldborsó főzelék, fasírt (1,3)',
                    'price' => 2390
                ],
                [
                    'name' => 'Grillezett csirkemell, görög saláta (7)',
                    'price' => 2290
                ],
                [
                    'name' => 'Káposztás tészta (1,3)',
                    'price' => 2090
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Túrógombóc, barack, tejföl (1,3,7)',
                    'price' => 1190
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'price' => 4950,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Húsleves, tészta, zöldségek (1,3,9)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Rántott szelet, burgonya püré, barack kompót (1,3,7)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Őszibarackos derelye, édes tejföl (1,3,7,8)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
