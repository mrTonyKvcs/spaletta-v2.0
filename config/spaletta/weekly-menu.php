<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2025.08.13. - 2025.08.15.',
    'saturday-date' => '2025.08.16.',
    'hide' => true,
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
                    'name'  => 'Cukkini krémleves, marinált cukkini, tökmag(7)',
                    'price' => 1490
                ],
                [
                    'name'  => 'Bableves, lángolt kolbász, csipetke(1,3,7,9)',
                    'price' => 1580
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Rakott kel, tejföl(3,7)',
                    'price' => 2490
                ],
                [
                    'name' => 'Rántott csirkecomb filé, tonkatsu szósz, pirított zöldségek, ázsiai uborkasaláta(1,3,4,6,10,11)',
                    'price' => 2480
                ],
                [
                    'name' => 'Arancini, paradicsommártás, vadrizs(1,3,7,9)',
                    'price' => 2390
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Pavlova, barack, vaníliás tejszín(3,7)',
                    'price' => 1390
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'hide' => true,
        'price' => 5490,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Grízgaluska leves(1,3,9)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Rántott sertésszelet, petrezselymes burgonya, tejfölös uborkasaláta(1,3,7)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Meggyes cobbler, vaníliás tejszín(1,3,7)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
