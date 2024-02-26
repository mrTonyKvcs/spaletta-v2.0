<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2024.02.28. - 2024.03.01.',
    'saturday-date' => '2024.03.02.',
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
                    'name'  => 'Gombaleves',
                    'price' => 1400
                ],
                [
                    'name'  => 'Nyírségi gombóc leves',
                    'price' => 1700
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Rántott szelet, burgonyapüré, tonkatsu szósz',
                    'price' => 2600
                ],
                [
                    'name' => 'Rácponty',
                    'price' => 2500
                ],
                [
                    'name' => 'Pestos tagliatelle, paradicsom, parmezán',
                    'price' => 2300
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Olivás piskóta, mák, meggy, tejszín',
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
                        'name' => 'Bolognai',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Szalagos fánk, baracklekvár',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
