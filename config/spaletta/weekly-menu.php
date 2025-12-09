<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2025.12.10. - 2025.12.12.',
    'saturday-date' => '2025.12.13.',
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
                    'name'  => 'Jókai bableves,lángolt kolbász,tejföl(1,7,9)',
                    'price' => 1540
                ],
                [
                    'name'  => 'Póréhagymás burgonyakrémleves, fűszeres kovászos kenyér(1,7)',
                    'price' => 1420
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Bakonyi sertés tarja,galuska(1,3,7)',
                    'price' => 2540
                ],
                [
                    'name' => 'Sült csirkeszárny, steak burgonya, coleslaw(1,3,4,6,7,10)',
                    'price' => 2470
                ],
                [
                    'name' => 'Rántott sajt, sült zöldségsaláta(1,3,7,9)',
                    'price' => 2420
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Posírozott körte, mascarpone, citromzselé,diós strőzel(1,7,8)',
                    'price' => 1380
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'hide' => true,
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
                        'name' => 'Rántott sertéskaraj, petrezselymes burgonya, csemege uborka(1,3,10)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Piskótatekercs, baracklekvár(1,3)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
