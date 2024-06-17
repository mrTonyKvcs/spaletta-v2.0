<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2024.06.19. - 2024.06.21.',
    'saturday-date' => '2024.06.22.',
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
                    'name'  => 'Hideg meggyleves, fűszeres szikkasztott meggy (7)',
                    'price' => 1300
                ],
                [
                    'name'  => 'Zöldbab leves, lángolt kolbász (7)',
                    'price' => 1400
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Flekken, parázs burgonya, lyoni hagyma (1,10)',
                    'price' => 2400
                ],
                [
                    'name' => 'Zöldfűszeres csirkemell, saláta, gránátalma (1,3,7)',
                    'price' => 2300
                ],
                [
                    'name' => 'Spenót, tahini, posírozott tojás (3,11)',
                    'price' => 1800
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Citrom tart, olíva olaj (1,3,7)',
                    'price' => 1100
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'price' => 4700,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => '“Tojásleves” (3,4,6,9)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Rántott szelet, burgonyapüré, almakompót (1,3,7)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Almás pite, karamell (1,3,7)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
