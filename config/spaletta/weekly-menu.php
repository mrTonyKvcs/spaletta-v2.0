<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2025.07.30. - 2025.08.01.',
    'saturday-date' => '2025.08.02.',
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
                    'name'  => 'Sárgadinnye krémleves, mandula, serrano, bazsalikom(8)',
                    'price' => 1560
                ],
                [
                    'name'  => 'Legényfogó leves(1,7,9)',
                    'price' => 1620
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Lasagna(1,3,7,9)',
                    'price' => 2590
                ],
                [
                    'name' => 'Indiai vajas csirke, basmati rizs(7)',
                    'price' => 2590
                ],
                [
                    'name' => 'Görögdinnye, saláta, feta, olívabogyó(7)',
                    'price' => 2290
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Crème brûlée(3,7)',
                    'price' => 1390
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'hide' => false,
        'price' => 5590,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Hagymaleves, kovászos kenyér kocka(1,4,10)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Gödöllői csirkecomb, burgonyapüré(1,3,7)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Baszk sajttorta, citromkrém(1,3,7)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
