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
                    'name'  => 'Kókusztejes répaleves, gyömbér, fűszeres kesudió',
                    'price' => 1600
                ],
                [
                    'name'  => 'Ázsiai húsleves, soba tészta, zöldségek',
                    'price' => 1700
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Burgonyafőzelék, lángolt kolbász, tárkony',
                    'price' => 2500
                ],
                [
                    'name' => 'Csirkemell, rizstészta, gombák',
                    'price' => 2600
                ],
                [
                    'name' => 'Grill gomolya, saláta, mangó',
                    'price' => 2400
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Pavlova, gyümölcsök, tejszín',
                    'price' => 1400
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
                        'name'  => 'Zeller leves, misos sült zeller, pirított magok',
                        'price' => 1400
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Spaletta brassói',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Gyümölcsrizs, granny smith, sós karamell',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
