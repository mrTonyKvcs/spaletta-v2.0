<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2024.05.01. - 2024.05.03.',
    'saturday-date' => '2024.05.04.',
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
                    'name'  => 'Bárány raguleves, spárga, sós citrom (1,7,9,10)',
                    'price' => 1500
                ],
                [
                    'name'  => 'Alma-meggy leves, fahéjas tejföl sorbet (7)',
                    'price' => 1300
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Tavaszi töltöttkáposzta (7)',
                    'price' => 2300
                ],
                [
                    'name' => 'Roston sült csirkecomb filé, pakchoy, tom yum (4,6)',
                    'price' => 2200
                ],
                [
                    'name' => 'Karalábé „főzelék” (1,7,9)',
                    'price' => 2000
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Madártej, misos karamell (3,6,7)',
                    'price' => 1300
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'price' => 5200,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Tavaszi zöldségleves (9)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Rántott ponty, petrezselymes burgonya, tartár (1,3,4,7,10)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Almás rétes, vanília espuma (1,3,7)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
