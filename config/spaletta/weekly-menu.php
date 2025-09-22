<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2025.09.25. - 2025.09.26.',
    'saturday-date' => '2025.09.27.',
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
                    'name'  => 'Olasz zöldségleves, arancini(7,9)',
                    'price' => 1580
                ],
                [
                    'name'  => 'Palóc leves(1,7)',
                    'price' => 1680
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Keménylebbencs, kolbász, csemege uborka(1,3)',
                    'price' => 2480
                ],
                [
                    'name' => 'Csirkés tortilla, hasáb, salsa(1,7)',
                    'price' => 2580
                ],
                [
                    'name' => 'Pirított laska, hummus, sós citrom(11)',
                    'price' => 2380
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Füge, narancs, kesudió, mascarpone(7,8)',
                    'price' => 1480
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'hide' => false,
        'price' => 5380,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Kolbászos burgonyaleves',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Juhtúrós sztrapacska, savanyított lilahagyma(1,3,7)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Barackos pite, tejszínhab(1,3,7)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
