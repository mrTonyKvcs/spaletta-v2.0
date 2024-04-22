<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2024.04.24. - 2024.04.26.',
    'saturday-date' => '2024.04.27.',
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
                    'name'  => 'Zöldborsó velouté, spárga, ricotta (7)',
                    'price' => 1300
                ],
                [
                    'name'  => 'Szecsuáni csípős-savanyú leves (3,4,6)',
                    'price' => 1400
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Sertés cordon, rizibizi (1,3,7)',
                    'price' => 2500
                ],
                [
                    'name' => 'Konfitált kacsazúza, káposztás tészta (1,3)',
                    'price' => 2400
                ],
                [
                    'name' => 'Rizottó, spárga, balzsamecet (7)',
                    'price' => 2200
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Nudli, eper, bazsalikom (1,3,7)',
                    'price' => 1200
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'price' => 5100,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Karfiolleves, pirított karfiol (7)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Csirkepörkölt, galuska, tejfölös uborkasaláta (1,3,7)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Túrógombóc, eper (1,3,7)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
