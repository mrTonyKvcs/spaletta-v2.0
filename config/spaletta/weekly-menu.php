<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2025.11.12. - 2025.11.14.',
    'saturday-date' => '2025.11.15.',
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
                    'name'  => 'Tojásleves(3,9)',
                    'price' => 1320
                ],
                [
                    'name'  => 'Nyírségi gombócleves(1,3,7)',
                    'price' => 1520
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Erdélyi rakott káposzta(7)',
                    'price' => 2580
                ],
                [
                    'name' => 'Rántott csirkemell, rizibizi, almakompót(1,3,7)',
                    'price' => 2520
                ],
                [
                    'name' => 'Harisszás karfiol, sült zöldségek, hummusz, sós citrom(11)',
                    'price' => 2460
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Meggyes pite, tejszín(1,3,7)',
                    'price' => 1380
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'hide' => false,
        'price' => 5480,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Borsóleves, reszelt tészta(1,3,7)',
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
                        'name' => 'Szilvás cobbler, tejszín(1,3,7)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
