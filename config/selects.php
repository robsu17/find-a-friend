<?php
return [
    'options' => [
        'ageSelect' => [
            'id' => 'age',
            'name' => 'age',
            'label' => 'Idade',
            'options' => [
                [
                    'text' => 'filhote ',
                    'value' => 'filhote'
                ],
                [
                    'text' => 'jovem',
                    'value' => 'jovem'
                ],
                [
                    'text' => 'adulto',
                    'value' => 'adulto'
                ],
            ]
        ],
        'sizeSelect' => [
            'id' => 'size',
            'name' => 'size',
            'label' => 'Porte',
            'options' => [
                [
                    'text' => 'pequeno ',
                    'value' => 'pequeno'
                ],
                [
                    'text' => 'medio',
                    'value' => 'medio'
                ],
                [
                    'text' => 'grande',
                    'value' => 'grande'
                ],
            ]
        ],
        'energySelect' => [
            'id' => 'energy',
            'name' => 'energy',
            'label' => 'Nivel de energia',
            'options' => [
                [
                    'text' => 'baixo ',
                    'value' => 'baixo'
                ],
                [
                    'text' => 'medio ',
                    'value' => 'medio'
                ],
                [
                    'text' => 'alto',
                    'value' => 'alto'
                ],
            ]
        ],
        'dependencySelect' => [
            'id' => 'dependency',
            'name' => 'dependency',
            'label' => 'Nivel de dependência',
            'options' => [
                [
                    'text' => 'baixo (precisa de companhia sempre)',
                    'value' => 'baixo'
                ],
                [
                    'text' => 'medio (precisa de companhia mas pode ficar sozinho)',
                    'value' => 'medio'
                ],
                [
                    'text' => 'alto (totalmente independente)',
                    'value' => 'alto'
                ],
            ]
        ],
        'ambienceSelect' => [
            'id' => 'ambience',
            'name' => 'ambience',
            'label' => 'Ambiente',
            'options' => [
                [
                    'text' => 'espaço pequeno',
                    'value' => 'pequeno'
                ],
                [
                    'text' => 'espaço medio',
                    'value' => 'medio'
                ],
                [
                    'text' => 'espaço amplo',
                    'value' => 'amplo'
                ],
            ]
        ]
    ]
];
