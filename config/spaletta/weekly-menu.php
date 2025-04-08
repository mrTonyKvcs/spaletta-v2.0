<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2025.04.09. - 2025.04.11.',
    'saturday-date' => '2025.04.12.',
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
                    'name'  => 'Gulyásleves, csipetke(1,3,9)',
                    'price' => 1640
                ],
                [
                    'name'  => 'Tavaszi zöldségleves, burgonyagombóc(1,3,9)',
                    'price' => 1490
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Bácskai rizseshús, csemegeuborka(1,10)',
                    'price' => 2590
                ],
                [
                    'name' => 'Posírozott csirkecomb filé, tom yum, pak choy(1,4,6)',
                    'price' => 2620
                ],
                [
                    'name' => 'Rántott sajt, rizi bizi, tartár(1,3,7,10)',
                    'price' => 2460
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Mákos nudli, szilvalekvár(1,3,7)',
                    'price' => 1340
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'price' => 5680,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Almaleves, pácolt zöldalma(7)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Lasagne(1,3,7,9)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Eper, mascarpone, cantuccini, kávé(1,3,7,8)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
