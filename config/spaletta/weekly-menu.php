<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2025.02.05. - 2025.02.07.',
    'saturday-date' => '2025.02.08.',
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
                    'name'  => 'Grízgaluska leves (1,3,9)',
                    'price' => 1380
                ],
                [
                    'name'  => 'Frankfurti leves (1,7)',
                    'price' => 1520
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Ragacsos sertés tarja, hideg csípőskáposzta (1,4,6,11)',
                    'price' => 2640
                ],
                [
                    'name' => 'Rántott ponty filé, waldorf saláta (1,3,4,7,8,9,10,11)',
                    'price' => 2760
                ],
                [
                    'name' => 'Pad thai, tofu (3,4,5,6)',
                    'price' => 2420
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Posírozott körte, mascarpone, sós karamell (7,11)',
                    'price' => 1350
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'price' => 5380,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Magyaros gombaleves, reszelt tészta (1,3,7)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Rántott csirkemáj, burgonyapüré, csemege uborka (1,3,7,10)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Diós-prézlis nudli, baracklekvár (1,3,7,8)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
