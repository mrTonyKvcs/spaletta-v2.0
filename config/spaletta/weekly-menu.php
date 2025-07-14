<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2025.07.16. - 2025.07.18.',
    'saturday-date' => '2025.07.19.',
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
                    'name'  => 'Minestrone, arborio, parmezán(7,9)',
                    'price' => 1530
                ],
                [
                    'name'  => 'Csirkemáj gombóc leves(1,3,9)',
                    'price' => 1590
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Lassan sült sertéstarja “temesvári”, galuska(1,3,7)',
                    'price' => 2590
                ],
                [
                    'name' => 'Rakott csirkecomb filé, cukkini tócsni, fokhagymás tejföl(1,3,7)',
                    'price' => 2590
                ],
                [
                    'name' => 'Vegán töltött paprika(1)',
                    'price' => 2390
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Hideg, mandulatejes tejberizs, meggy, tonkabab(8)',
                    'price' => 1430
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'hide' => false,
        'price' => 5780,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Almaleves, szikkasztott meggy, mandula(7,8)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Ropogós császár, borsófőzelék(7)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Madártej, pisztácia, málna(3,7,8)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
