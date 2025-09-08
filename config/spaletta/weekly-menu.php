<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2025.09.10. - 2025.09.12.',
    'saturday-date' => '2025.09.13.',
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
                    'name'  => 'Tarhonyaleves(1,3,9)',
                    'price' => 1390
                ],
                [
                    'name'  => 'Tárkonyos csirkeraguleves(1,7,9,10)',
                    'price' => 1540
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Fokhagymás sertésdagadó, paradicsomos káposzta(1)',
                    'price' => 2590
                ],
                [
                    'name' => 'Ragacsos csirkenyárs, sült zöldséges bulgur(1,4,5,6,9,11)',
                    'price' => 2590
                ],
                [
                    'name' => 'Rántott sajt, waldorf saláta(1,3,7,8,9,10)',
                    'price' => 2490
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Barackos cobbler, vaníliás tejszín(1,3,7)',
                    'price' => 1320
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'hide' => false,
        'price' => 5490,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Fahéjas almaleves, dió(7,8)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Sertés cordon, burgonyapüré(1,3,7)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Rizsfelfújt, gyümölcsök(3,7)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
