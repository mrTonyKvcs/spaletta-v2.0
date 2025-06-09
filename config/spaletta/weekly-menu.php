<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2025.06.11. - 2025.06.13.',
    'saturday-date' => '2025.06.14.',
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
                    'name'  => 'Hideg paradicsomleves, sztracsatella, bazsalikom(7,9)',
                    'price' => 1450
                ],
                [
                    'name'  => 'Frankfurti leves(1,7)',
                    'price' => 1480
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Rakottburgonya(3,7)',
                    'price' => 2640
                ],
                [
                    'name' => 'Joghurtos csirkenyárs, zöldsaláta(7,8,11)',
                    'price' => 2580
                ],
                [
                    'name' => 'Tökfőzelék, kápia, paprika',
                    'price' => 2360
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Tápióka puding, eper, rebarbara, kókusz(1,7)',
                    'price' => 1320
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
                        'name'  => 'Nyári zöldségleves(9)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Lasagne(1,3,7,9)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Piskótatekercs, barack, merengue(1,3)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
