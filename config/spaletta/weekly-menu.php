<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2024.04.10. - 2024.04.12.',
    'saturday-date' => '2024.04.13.',
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
                    'name'  => 'Alma, sáfrány, friss gyümölcsök',
                    'price' => 1500
                ],
                [
                    'name'  => 'Szarvas raguleves (1,7,9)',
                    'price' => 1700
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Tarhonyás hús, csalamádé (1,3)',
                    'price' => 2700
                ],
                [
                    'name' => 'Csirkecomb filé, zöld curry, naan (1,4,7)',
                    'price' => 2600
                ],
                [
                    'name' => 'Tagliatelle, spárga, borsó (1,3,7)',
                    'price' => 2500
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Palacsinta, áfonya, vanília sodó (1,3,7)',
                    'price' => 1300
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'price' => 5400,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Húsleves, cérnametélt, zöldségek (1,3,9)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Töltött dagadó, paradicsomos újkáposzta (1,3)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Eper, vanília, habcsók (1,3,7)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
