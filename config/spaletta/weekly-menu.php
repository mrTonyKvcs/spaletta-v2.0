<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2024.10.16. - 2024.10.18.',
    'saturday-date' => '2024.10.19.',
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
                    'name'  => 'Grízgaluska leves (1,3)',
                    'price' => 1050
                ],
                [
                    'name'  => 'Korhelyleves, füstölt csülök, kolbász, tejföl (1,7)',
                    'price' => 1150
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Fokhagymás pirított borjúmáj, burgonyapüré, káposztasaláta (7)',
                    'price' => 2350
                ],
                [
                    'name' => 'Halfasírt, paradicsomos káposzta (1,3,4)',
                    'price' => 2350
                ],
                [
                    'name' => 'Laskapaprikás, galuska (1,3,7)',
                    'price' => 2250
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Túrógombóc, édes tejföl, eper ragu (1,3,7)',
                    'price' => 1150
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'price' => 5100,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Keleti kacsaleves, kacsa húsos tésztabatyu, roppanós zöldségek (1,4,6)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Cordon bleu, rizi-bizi (1,3,7)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Szilvás gombóc, szilva ragu (1,3,7)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
