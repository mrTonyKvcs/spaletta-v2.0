<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2024.10.30. - 2024.10.31.',
    'saturday-date' => '2024.11.02.',
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
                    'name'  => 'Frankfurti leves (1,7)',
                    'price' => 1180
                ],
                [
                    'name'  => 'Sütőtök krémleves, tökmag, feta (7)',
                    'price' => 1050
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Bbq oldalas, steak burgonya, coleslaw (1,3,7,10)',
                    'price' => 2490
                ],
                [
                    'name' => 'Csirke Alfredo, tagliatelle (1,3,7)',
                    'price' => 2350
                ],
                [
                    'name' => 'Rántott karfiol, gomba, jázminrizs, tartár (1,3,7,10)',
                    'price' => 1990
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Körtés tarte tatin (1,3,7)',
                    'price' => 1090
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'price' => 5090,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Gulyásleves, csipetke (1,3,9)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Túrós csusza (1,3,7)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Körte, citromhab, granola (3,5,7)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
