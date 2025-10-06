<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2025.10.08. - 2025.10.10.',
    'saturday-date' => '2025.10.11.',
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
                    'name'  => 'Májgombóc leves(1,3,9)',
                    'price' => 1580
                ],
                [
                    'name'  => 'Brokkoli krémleves, kovászos kenyér, cheddar(1,7)',
                    'price' => 1490
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Fokhagymás pecsenye, hagymás törtburgonya, csemege uborka(10)',
                    'price' => 2580
                ],
                [
                    'name' => 'Rántott csirkecomb filé, rizibizi(1,3,7)',
                    'price' => 2530
                ],
                [
                    'name' => 'Thai, pirított zöldséges tészta(1,4,5,6,11)',
                    'price' => 2480
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Meggyes-mákos palacsinta(1,3,7)',
                    'price' => 1380
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'hide' => false,
        'price' => 5480,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Frankfurti leves(1,7)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Zúzapörkölt, galuska, piacos savanyúság(1,3,10)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Vargabéles, gyümölcsragu(1,3,7)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
