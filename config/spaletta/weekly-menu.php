<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2025.03.12. - 2025.03.14.',
    'saturday-date' => '2025.03.15.',
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
                    'name'  => 'Orjaleves, zöldségek, cérnametélt(1,3,9)',
                    'price' => 1700
                ],
                [
                    'name'  => 'Erdei gyümölcsleves(7)',
                    'price' => 1550
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Cigánypecsenye, steak burgonya(1,10)',
                    'price' => 2690
                ],
                [
                    'name' => 'Kapros túróval töltött csirkemell, jázmin rizs(1,3,7)',
                    'price' => 2690
                ],
                [
                    'name' => 'Tagliatelle, cukkini, borsó, menta(1,3,7)',
                    'price' => 2550
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Madártej, sós karamell(3,7)',
                    'price' => 1400
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'price' => 5680,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Tárkonyos burgonyaleves',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Chilisbab, tortilla',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Barackos cobbler(1,3,7)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
