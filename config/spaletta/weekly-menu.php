<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2024.12.04. - 2024.12.06.',
    'saturday-date' => '2024.12.07.',
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
                    'name'  => 'Zeller krémleves, misos pirított zeller(1,5,6,7,9)',
                    'price' => 1380
                ],
                [
                    'name'  => 'Bakonyi betyárleves, csipetke(1,3,7,10)',
                    'price' => 1450
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Rántott szelet, burgonyapüré, barack kompót(1,3,7)',
                    'price' => 2570
                ],
                [
                    'name' => 'Roston sült csirkecomb, sült zöldségek, borsmártás(1,5,6,7)',
                    'price' => 2580
                ],
                [
                    'name' => 'Házi tagliatelle, paradicsom, rukkola(1,3,7)',
                    'price' => 2380
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Buggyantott birsalma, pisztáciás morzsa, mascarpone(1,7,8)',
                    'price' => 1340
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'price' => 5450,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Langyos barack leves, fűszeres mogyoró(5,7,8)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Lasagna(1,3,7,9)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Mákos guba, vanília espuma(1,3,7)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
