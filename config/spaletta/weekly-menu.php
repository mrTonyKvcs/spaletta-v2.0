<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2025.06.19. - 2025.06.20.',
    'saturday-date' => '2025.06.21.',
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
                    'name'  => 'Ajo blanco, sárgadinnye, serrano(8)',
                    'price' => 1680
                ],
                [
                    'name'  => 'Erdélyi csorba(1,3,7,9)',
                    'price' => 1680
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Chilisbab, házi tortilla',
                    'price' => 2670
                ],
                [
                    'name' => 'Rántott csirkemáj, petrezselymes burgonya, csemegeuborka(1,3,10)',
                    'price' => 2590
                ],
                [
                    'name' => 'Rizottó, szikkasztott paradicsom, pesto(7,8)',
                    'price' => 2450
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Pannacotta, mangó, kókusz(7)',
                    'price' => 1400
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'hide' => false,
        'price' => 5600,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Hideg meggyleves, granny smith(7)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Cigánypecsenye, steak burgonya(1,10)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Citromos piskóta, mézes mascarpone, áfonya(1,3,7)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
