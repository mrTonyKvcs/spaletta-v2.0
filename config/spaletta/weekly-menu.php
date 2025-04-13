<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2025.04.16. - 2025.04.17.',
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
                    'name'  => 'Palócleves (7,9)',
                    'price' => 1490
                ],
                [
                    'name'  => 'Körtekrémleves, karamell, mandula (7,8)',
                    'price' => 1290
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Rakott karfiol, tejföl (7)',
                    'price' => 2680
                ],
                [
                    'name' => 'Pirított csirkemell, zöld saláta, fűszeres csicseriborsó, tojásos dressing (1,3,10)',
                    'price' => 2620
                ],
                [
                    'name' => 'Tempurált zöldség, joghurt,tahini (1,7)',
                    'price' => 2440
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Palacsinta, eper, vanília espuma (1,3,7)',
                    'price' => 1290
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'hide' => true,
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
