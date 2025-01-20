<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2025.01.22. - 2025.01.24.',
    'saturday-date' => '2025.01.25.',
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
                    'name'  => 'Gulyásleves,csipetke(1,3,9)',
                    'price' => 1540
                ],
                [
                    'name'  => 'Karfiolleves,pirított karfiol,mogyoró(7,8)',
                    'price' => 1320
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Rakott burgonya,csepegtetett tejföl(3,7)',
                    'price' => 2500
                ],
                [
                    'name' => 'Füstön sült csirke hortobágyi(1,3,7)',
                    'price' => 2570
                ],
                [
                    'name' => 'Rizottó,roquefort,körte,dió(7,8)',
                    'price' => 2450
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Aranygaluska,vanília espuma(1,3,7,8)',
                    'price' => 1380
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'price' => 5430,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Ázsiai húsleves,kacsás wonton(1,4,6)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => '“Gödöllői” csirkecomb,burgonyapüré(1,3)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Almás pite, tejfölfagyi(1,3,7,8)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
