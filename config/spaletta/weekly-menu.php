<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2025.10.15. - 2025.10.17.',
    'saturday-date' => '2025.10.18.',
    'hide' => false,
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
                    'name'  => 'Sárgaborsó krémleves, lángolt kolbász(7)',
                    'price' => 1380
                ],
                [
                    'name'  => 'Tárkonyos csirkeraguleves(1,7,9,10)',
                    'price' => 1480
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Rakott kel, tejföl(3,7)',
                    'price' => 2480
                ],
                [
                    'name' => 'Rántott zöldfűszeres csirkemell, sült zöldséges bulgur(1,3,7)',
                    'price' => 2580
                ],
                [
                    'name' => 'Sütőtökös rizottó(7)',
                    'price' => 2380
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Képviselőfánk, málnaragu(1,3,7)',
                    'price' => 1380
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'hide' => false,
        'price' => 5480,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Kókusztejes répaleves, misos sült répa(6)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Brassói, csemegeuborka(10)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Tejespite, baracklekvár(1,3,7)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
