<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2025.09.17. - 2025.09.19.',
    'saturday-date' => '2025.09.20.',
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
                    'name'  => 'Lencsegulyás, tejföl(7,9)',
                    'price' => 1540
                ],
                [
                    'name'  => 'Sütőtök krémleves, tökmag pesto(7)',
                    'price' => 1420
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Székelykáposzta(7)',
                    'price' => 2560
                ],
                [
                    'name' => 'Csirkecomb filé zöldfűszeres párizsi bundában, rizibizi(1,3,7)',
                    'price' => 2560
                ],
                [
                    'name' => 'Gombás rizottó, pecorino(7)',
                    'price' => 2450
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Diós házi pappardelle, sárgabarack(1,3,7,8)',
                    'price' => 1330
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'hide' => false,
        'price' => 5300,
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
                        'name' => 'Töltött csirkecomb, burgonyapüré(1,3,7)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Túrófánk, gyümölcsragu(1,3,7)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
