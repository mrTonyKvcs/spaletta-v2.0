<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2024.02.21. - 2024.02.23.',
    'saturday-date' => '2024.02.24.',
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
                    'name'  => 'Almaleves, birsalma kompót',
                    'price' => 1400
                ],
                [
                    'name'  => 'Palóc leves',
                    'price' => 1600
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Bakonyi, zsemlegombóc',
                    'price' => 2600
                ],
                [
                    'name' => 'Indiai vajas csirke, basmati rizs',
                    'price' => 2500
                ],
                [
                    'name' => 'Káposztás tészta',
                    'price' => 2400
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => '“Tiramisu”, cantuccini, amaretto',
                    'price' => 1300
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'price' => 5200,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Húsleves, cérnametélt, zöldségek',
                        'price' => 1400
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Pacalpörkölt, burgonya',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Somlói',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
