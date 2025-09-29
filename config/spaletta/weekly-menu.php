<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2025.10.01. - 2025.10.03.',
    'saturday-date' => '2025.10.04.',
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
                    'name'  => 'Grízgaluska leves(1,3,9)',
                    'price' => 1480
                ],
                [
                    'name'  => 'Korhely leves(7)',
                    'price' => 1580
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Mustáros flekken, steak burgonya, lyoni hagyma(1,10)',
                    'price' => 2580
                ],
                [
                    'name' => 'Csirkepaprikás, galuska(1,3,7)',
                    'price' => 2580
                ],
                [
                    'name' => 'Vöröslencse dahl, pirított karfiol, naan(1,7)',
                    'price' => 2380
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Almásrétes, vanília sodó(1,3,7)',
                    'price' => 1380
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
                        'name'  => 'Magyaros gombaleves, reszelt tészta(1,3)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Rakottburgonya, csemege uborka(3,7)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Chiapuding, barack, kardamom(8)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
