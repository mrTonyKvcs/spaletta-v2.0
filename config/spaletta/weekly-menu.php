<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2024.09.18. - 2024.09.20.',
    'saturday-date' => '2024.09.21.',
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
                    'name'  => 'Sütőtökleves, tökmag pesto (7)',
                    'price' => 1050
                ],
                [
                    'name'  => 'Gulyásleves, csipetke(1,3,9)',
                    'price' => 1280
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Töltött káposzta, tejföl(7)',
                    'price' => 2350
                ],
                [
                    'name' => 'Csirke biryani, basmati rizs(7)',
                    'price' => 2450
                ],
                [
                    'name' => 'Pirított laska, humusz, sumach',
                    'price' => 2080
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Mákos guba, vanília espuma(1,3,7)',
                    'price' => 980
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'price' => 4950,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Zöldbab leves',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Lasagna(1,3,7)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Vargabéles(1,3)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
