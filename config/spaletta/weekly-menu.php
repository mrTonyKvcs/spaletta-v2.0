<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2024.10.02. - 2024.10.04.',
    'saturday-date' => '2024.10.05.',
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
                    'name'  => 'Birsalma leves, mandula, körte(7,8)',
                    'price' => 1050
                ],
                [
                    'name'  => 'Palóc, kapor, tejföl(1,7)',
                    'price' => 1290
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Brassói, csalamádé(1,10)',
                    'price' => 2450
                ],
                [
                    'name' => 'Ragacsos csirkecomb filé, zöldséges rizs, pácolt gyömbér(1,4,6,11)',
                    'price' => 2350
                ],
                [
                    'name' => 'Rántott sajt, őszi saláta, tartár(1,3,7,9)',
                    'price' => 2150
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Aranygaluska, vanília sodó(1,3,7,8)',
                    'price' => 1100
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
                        'name'  => 'Ázsiai húsleves, húsos wonton, zöldségek(1,4,6,9)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Juhtúrós sztrapacska, kolozsvári, savanyított lilahagyma(1,3,7)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Tejberizs, pisztácia, citrom(7,8)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
