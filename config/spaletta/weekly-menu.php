<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2025.07.23. - 2025.07.25.',
    'saturday-date' => '2025.07.26.',
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
                    'name'  => 'Karfiol krémleves, pirított karfiol, zöld curry, mogyoró(4,8)',
                    'price' => 1540
                ],
                [
                    'name'  => 'Gulyásleves, csipetke(1,3,9)',
                    'price' => 1640
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Tarhonyás hús, almapaprika(1,3,10)',
                    'price' => 2570
                ],
                [
                    'name' => 'Aszalt paradicsommal, mozzarellával töltött rántott csirkemell, rukkolás burgonyapüré(1,3,7)',
                    'price' => 2590
                ],
                [
                    'name' => 'Grillezett camembert, zöldsaláta, mangó, kesudió(7,8)',
                    'price' => 2490
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Túrófánk, vaníliás tejföl(1,3,7)',
                    'price' => 1470
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'hide' => false,
        'price' => 5690,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Tejfölös zöldbableves(1,7)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Brassói, csemegeuborka(10)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Barack, mandulás strőzel, mascarpone, méz(1,7,8)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
