<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2024.07.31. - 2024.08.02.',
    'saturday-date' => '2024.08.03.',
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
                    'name'  => 'Görögdinnye, barack, lime',
                    'price' => 1090
                ],
                [
                    'name'  => 'Gulyásleves, csipetke (1,3,9)',
                    'price' => 1390
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Brassói, kovászos uborka (1)',
                    'price' => 2390
                ],
                [
                    'name' => 'Marokkói csirke tagine, basmati rizs',
                    'price' => 2390
                ],
                [
                    'name' => 'Langyos tökfőzelék, sült kápia paprika, kapor',
                    'price' => 2090
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Palacsinta, mák, meggy (1,3,7)',
                    'price' => 1190
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'price' => 5000,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Tyúkhúsleves, cérnametélt, zöldségek (1,3,9)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Rizseshús, csalamádé (10)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Túrós-barackos derelye (1,3,7)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
