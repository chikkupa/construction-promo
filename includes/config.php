<?php

declare(strict_types=1);

$site = [
    'name' => 'HavenBuild',
    'tagline' => 'Homes built, sealed, styled, and powered',
    'city' => 'Your City',
    'phone_display' => '+91 90000 00000',
    'phone_tel' => '+919000000000',
    'whatsapp' => '919000000000',
    'service_area' => 'Residential projects across Your City',
];

$db = [
    'host' => '127.0.0.1',
    'name' => 'havenbuild',
    'user' => 'root',
    'pass' => '',
    'charset' => 'utf8mb4',
];

$services = [
    [
        'slug' => 'home-construction',
        'name' => 'Home construction',
        'menu' => 'Construction',
        'image' => 'images/construction.jpg',
        'alt' => 'A brick house frame with workers on site',
        'gallery' => [
            ['src' => 'images/hero-home.jpg', 'alt' => 'A finished stone and timber house in evening light'],
        ],
        'tint' => 'clay',
        'icon' => 'home',
        'promise' => 'New homes, extensions, and renovations shaped around how you live.',
        'summary' => 'From an extra room to a full house, the structure, finishes, and sequence of work are agreed before anyone starts.',
        'included' => [
            'A layout conversation before drawings are locked',
            'Civil work from foundation or slab through finishes',
            'One written quote that lists what is included',
        ],
        'jobs' => ['Independent houses', 'Floor and room extensions', 'Kitchen and full-home renovations'],
    ],
    [
        'slug' => 'waterproofing',
        'name' => 'Waterproofing',
        'menu' => 'Waterproofing',
        'image' => 'images/waterproofing.jpg',
        'alt' => 'A terrace roof being waterproofed',
        'gallery' => [
            ['src' => 'images/waterproofing-bath.jpg', 'alt' => 'A shower base being sealed before tiling'],
        ],
        'tint' => 'teal',
        'icon' => 'drop',
        'promise' => 'Terrace, bathroom, basement, and wall damp treated at the source.',
        'summary' => 'Leaks are traced before coating goes on, so the repair matches the way water is actually getting in.',
        'included' => [
            'Inspection of the leak path',
            'Surface preparation before any coating',
            'A note of every area that was treated',
        ],
        'jobs' => ['Terrace and roof slabs', 'Bathrooms and wet areas', 'Basements and damp walls'],
    ],
    [
        'slug' => 'interior-design',
        'name' => 'Interior design',
        'menu' => 'Interiors',
        'image' => 'images/interior.jpg',
        'alt' => 'A sunlit living room with a linen sofa',
        'gallery' => [
            ['src' => 'images/interior-kitchen.jpg', 'alt' => 'A warm kitchen with oak cabinets and a stone counter'],
        ],
        'tint' => 'sage',
        'icon' => 'layout',
        'promise' => 'Layouts, materials, and finishes you can approve before work begins.',
        'summary' => 'Rooms are planned for daily use first: storage, light, and movement, then the materials that suit them.',
        'included' => [
            'A layout based on how the room is used',
            'Material and finish suggestions',
            'A finish schedule you can sign off',
        ],
        'jobs' => ['Living and bedroom layouts', 'Kitchen and wardrobe planning', 'Material and colour selection'],
    ],
    [
        'slug' => 'painting',
        'name' => 'Painting',
        'menu' => 'Painting',
        'image' => 'images/painting.jpg',
        'alt' => 'A painter rolling a fresh coat on an interior wall',
        'gallery' => [
            ['src' => 'images/painting-exterior.jpg', 'alt' => 'The outside of a house being painted cream'],
        ],
        'tint' => 'sand',
        'icon' => 'brush',
        'promise' => 'Interior and exterior painting with proper prep, not just a fresh coat.',
        'summary' => 'Surfaces are cleaned, filled, and primed so the finish stays even on walls that have already lived a little.',
        'included' => [
            'Surface prep, primer, and finish coats',
            'Floors and furniture covered before work',
            'Interior walls, ceilings, and exterior faces',
        ],
        'jobs' => ['Full interior repaints', 'Exterior weather coats', 'Wood and metal touch-ups'],
    ],
    [
        'slug' => 'solar',
        'name' => 'Solar panel installation',
        'menu' => 'Solar',
        'image' => 'images/solar.jpg',
        'alt' => 'Solar panels on a tiled residential roof',
        'gallery' => [
            ['src' => 'images/solar-install.jpg', 'alt' => 'A technician checking the cables on a rooftop solar array'],
        ],
        'tint' => 'gold',
        'icon' => 'sun',
        'promise' => 'Rooftop residential systems sized to the roof and the bill.',
        'summary' => 'The roof is checked first. Panel count follows how much power the house uses, not a packaged guess.',
        'included' => [
            'Roof assessment and panel layout',
            'System size based on household use',
            'Installation and a walkthrough of the setup',
        ],
        'jobs' => ['Rooftop home systems', 'Inverter and wiring to the board', 'Small expansions of an existing array'],
    ],
];
