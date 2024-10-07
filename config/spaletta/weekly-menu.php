<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2024.10.09. - 2024.10.11.',
    'saturday-date' => '2024.10.12.',
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
                    'name'  => 'Gesztenyeleves, kandírozott, fűszeres gesztenye(7)',
                    'price' => 1250
                ],
                [
                    'name'  => 'Jókai bableves, csipetke(1,3,7,9)',
                    'price' => 1350
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Rakott kel, csepegtetett tejföl(3,7)',
                    'price' => 2350
                ],
                [
                    'name' => 'Szezámos rántott csirkemell, petrezselymes burgonya(1,3,11)',
                    'price' => 2250
                ],
                [
                    'name' => 'Krumplis tészta, savanyú cékla(1,3)',
                    'price' => 1950
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Almás pite, vanília fagylalt(1,3,7)',
                    'price' => 990
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'price' => 5150,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Orjaleves, lúdgége, zöldségek(1,3,9)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Disznótoros pecsenye, hagymás tört burgonya, ecetes almapaprika(10)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Somlói(1,3,7,8)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
