<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2024.04.03. - 2024.04.05.',
    'saturday-date' => '2024.04.06.',
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
                    'name'  => 'Zöldborsó velouté, ricotta, sós citrom(7)',
                    'price' => 1600
                ],
                [
                    'name'  => 'Gulyásleves, csiprtke(1,3,9)',
                    'price' => 1800
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Temesvári sertés tarja, specli, kapor(1,3,7)',
                    'price' => 2700
                ],
                [
                    'name' => 'Füstön sült csirkemell, tavaszi saláta',
                    'price' => 2600
                ],
                [
                    'name' => 'Tojásos nokedli, ecetes saláta(1,3,7,10)',
                    'price' => 2400
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Churros, csoki(1,3,7)',
                    'price' => 1300
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'price' => 5300,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Húsleves, cérnametélt, zöldségek(1,3,9)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Rántott szelet, rizibizi, körtekompót(1,3,7)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Pannacotta, áfonya(7)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
