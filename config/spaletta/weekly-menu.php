<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2024.12.18. - 2024.12.20.',
    'saturday-date' => '2024.12.21.',
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
                    'name'  => 'Kókusztejes karfiolleves, égetett karfiol',
                    'price' => 1320
                ],
                [
                    'name'  => 'Csülkös bableves, csipetke, tejföl(1,3,7,9)',
                    'price' => 1480
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Körömpörkölt, köményes főtt burgonya, csemege uborka',
                    'price' => 2570
                ],
                [
                    'name' => 'Borzas csirkemell, fűszeres tejföl, jázmin rizs(1,3,7)',
                    'price' => 2570
                ],
                [
                    'name' => 'Rántott padlizsán, chermoula, rukkola(1,3)',
                    'price' => 2380
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Túrós tejespite, baracklekvár(1,3,7)',
                    'price' => 1240
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'price' => 5350,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Frankfurti leves (1,7)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Halfasírt, zöldborsófőzelék (1,3,4,7)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Kukorica prósza, szilvalekvár(3,7)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
