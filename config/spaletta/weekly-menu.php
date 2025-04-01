<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2025.04.02. - 2025.04.04.',
    'saturday-date' => '2025.04.05.',
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
                    'name'  => 'Frankfurti leves(1,7)',
                    'price' => 1550
                ],
                [
                    'name'  => 'Tarhonya leves(1,3,9)',
                    'price' => 1420
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Rántott szelet, burgonyapüré(1,3,7)',
                    'price' => 2590
                ],
                [
                    'name' => 'Csirkepaprikas, galuska, uborkasaláta(1,3,7)',
                    'price' => 2590
                ],
                [
                    'name' => 'Pad thai(3,4,5)',
                    'price' => 2490
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Citromos piskóta, mascarpone, bazsalikom(1,3,7)',
                    'price' => 1380
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'price' => 5780,
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
                        'name' => 'Lecsós tarja, karikaburgonya(1)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Vargabéles(1,3,7)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
