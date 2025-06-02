<?php

return [
    'title'     => 'Déli Ajánló',
    'menu-date' => '2025.06.04. - 2025.06.06.',
    'saturday-date' => '2025.06.07.',
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
                    'name'  => 'Ribizli-málna, túrógombóc(1,3,7)',
                    'price' => 1390
                ],
                [
                    'name'  => 'Babkrémleves, füstölt kolbász, csipetke, tejföl(1,3,7,9)',
                    'price' => 1470
                ]
            ]
        ],
        'main-courses' => [
            'name' => 'Főétel',
            'items' => [
                [
                    'name' => 'Tarhonyás hús, csemege uborka(1,3,10)',
                    'price' => 2640
                ],
                [
                    'name' => 'Csirkeburger, hasábburgonya, fokhagymás majonéz(1,3,7)',
                    'price' => 2780
                ],
                [
                    'name' => 'Rizottó, spárga, borsó(7)',
                    'price' => 2490
                ],
            ]
        ],
        'desserts' => [
            'name' => 'Desszert',
            'items' => [
                [
                    'name' => 'Almás-rebarbarás pite, tejszín(1,3,7)',
                    'price' => 1280
                ]
            ]
        ]
    ],
    'saturday-menu' => [
        'hide' => false,
        'price' => 5490,
        'items' => [
            'soup' => [
                'name' => 'Leves',
                'items' => [
                    [
                        'name'  => 'Tojásleves, fűszeres, pirított kovászos kenyér kocka(1,3,9)',
                        'price' => 1500
                    ]
                ]
            ],
            'main-courses' => [
                'name' => 'Főétel',
                'items' => [
                    [
                        'name' => 'Bbq sertésoldalas, steakburgonya, coleslaw(1,3,6,7,10)',
                        'price' => 2500
                    ],
                ]
            ],
            'desserts' => [
                'name' => 'Desszert',
                'items' => [
                    [
                        'name' => 'Tiramisu(1,3,7)',
                        'price' => 1200
                    ]
                ]
            ]
        ]
    ],
];
