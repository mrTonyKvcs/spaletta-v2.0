<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2025.05.28. - 2025.05.30.',
    'saturday-date' => '2025.05.24.',
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
                    'name'  => 'Eperleves, mascarpone, bazsalikom(7)',
                    'price' => 1450
                ],
                [
                    'name'  => 'Májgombóc leves(1,3,9)',
                    'price' => 1490
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Zöldborsó főzelék, fasírt(1,3,7)',
                    'price' => 2570
                ],
                [
                    'name' => 'Tagliatelle, lazac, spárga(1,3,4,7)',
                    'price' => 2560
                ],
                [
                    'name' => 'Rántott tök, jázminrizs, tartár, dukkah(1,3,5,7,11)',
                    'price' => 2380
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Epres vietnámi palacsinta, mézes joghurt(7)',
                    'price' => 1230
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'hide' => false,
        'price' => 5290,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Orjaleves, cérnametélt(1,4,9)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Rántott csirkeszárny, petrezselymes burgonya, csemegeuborka(1,3,10)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Tejespite, levendulás baracklekvár(1,3,7)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
