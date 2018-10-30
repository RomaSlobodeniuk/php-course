<?php

require_once '../helpers/functions.php';

$array = [
    333,
    [
        2 => 23,
        [
            '111',
            NULL,
            11123,
            8 => '123',
            '666'
        ],
        [
            '1',
            '12',
            [
                'aaa' => 93
            ],
            '8999',
            8 => '123',
            '666'
        ]
    ]
];

function loopArray($array) {
    foreach ($array as $key => $value) {
        if (is_array($value)) {
            loopArray($value);
        } else {
            debug("key = \"$key\"; value = \"$value\"");
        }
    }
}