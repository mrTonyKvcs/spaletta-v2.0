<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2024.04.17. - 2024.04.19.',
    'saturday-date' => '2024.04.20.',
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
                    'name'  => 'Hagymaleves',
                    'price' => 1300
                ],
                [
                    'name'  => 'Újburgonya leves, lángolt kolbász (9)',
                    'price' => 1500
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Ropogós császár, recsegős burgonya, coleslaw (1,3,7,10)',
                    'price' => 2500
                ],
                [
                    'name' => 'Chilis csirkenyárs, zöldsaláta (6)',
                    'price' => 2400
                ],
                [
                    'name' => 'Cukkíni tócsni, csepegtetett tejföl, kapor (1,3,7)',
                    'price' => 2200
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Brownie, házi vanília fagylalt (1,3,7)',
                    'price' => 1100
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'price' => 5400,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Húsleves, cérnametélt, zöldségek (1,3,9)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Lasagna (1,3,7,9)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Eper, mascarpone, pisztácia (7)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
