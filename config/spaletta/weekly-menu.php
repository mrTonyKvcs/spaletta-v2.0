<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2024.08.07. - 2024.08.09.',
    'saturday-date' => '2024.08.10.',
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
                    'name'  => 'Kukorica krémleves, csicseriborsó, garam masala',
                    'price' => 1190
                ],
                [
                    'name'  => 'Tom yum, csirkemell (1,4.6)',
                    'price' => 1490
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Ropogós császár, paradicsomos káposzta (6,9)',
                    'price' => 2490
                ],
                [
                    'name' => 'Rántott csirkecomb filé, burgonyapüré, barack kompót (1,3,7)',
                    'price' => 2390
                ],
                [
                    'name' => 'Görögdinnye saláta, feta, olíva, menta (7)',
                    'price' => 2090
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Madártej, kesudió grillázs (1,3,7,8)',
                    'price' => 1090
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'price' => 4790,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Kovászos uborka leves, kapor (7)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Csirke hortobágyi (1,3,7)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Mákos bobajka (1,3,7)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
