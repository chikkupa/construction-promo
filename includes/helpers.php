<?php

declare(strict_types=1);

require_once __DIR__ . '/config.php';

function e($value)
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

function service_names(): array
{
    global $services;

    return array_column($services, 'name');
}

function find_service(string $name): ?array
{
    global $services;

    foreach ($services as $service) {
        if ($service['name'] === $name) {
            return $service;
        }
    }

    return null;
}

function whatsapp_url(): string
{
    global $site;

    return 'https://wa.me/' . $site['whatsapp'];
}

function service_href(array $service): string
{
    return $service['slug'] . '.php';
}

function icon(string $name): string
{
    $icons = [
        'home' => '<svg viewBox="0 0 48 48" aria-hidden="true"><path d="M8 22.5 24 8l16 14.5V40a2 2 0 0 1-2 2H30v-12H18v12H10a2 2 0 0 1-2-2V22.5Z" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linejoin="round"/></svg>',
        'drop' => '<svg viewBox="0 0 48 48" aria-hidden="true"><path d="M24 6s12 14 12 22a12 12 0 0 1-24 0c0-8 12-22 12-22Z" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linejoin="round"/></svg>',
        'layout' => '<svg viewBox="0 0 48 48" aria-hidden="true"><rect x="8" y="8" width="14" height="20" rx="2" fill="none" stroke="currentColor" stroke-width="2.4"/><rect x="26" y="8" width="14" height="12" rx="2" fill="none" stroke="currentColor" stroke-width="2.4"/><rect x="26" y="24" width="14" height="16" rx="2" fill="none" stroke="currentColor" stroke-width="2.4"/><rect x="8" y="32" width="14" height="8" rx="2" fill="none" stroke="currentColor" stroke-width="2.4"/></svg>',
        'brush' => '<svg viewBox="0 0 48 48" aria-hidden="true"><path d="M30 8c6 6 4 14-2 18l-4 2-6 8c-1.4 2-4.4 1.6-5.2-.6-.8-2 .4-4 2.2-5.2l8-6 2-4c4-6 12-6 5-12Z" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linejoin="round"/><path d="M18 34c2 4 1 8-2 8" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"/></svg>',
        'sun' => '<svg viewBox="0 0 48 48" aria-hidden="true"><circle cx="24" cy="24" r="7" fill="none" stroke="currentColor" stroke-width="2.4"/><path d="M24 8v4M24 36v4M8 24h4M36 24h4M12.5 12.5l2.8 2.8M32.7 32.7l2.8 2.8M12.5 35.5l2.8-2.8M32.7 15.3l2.8-2.8" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"/></svg>',
        'years' => '<svg viewBox="0 0 48 48" aria-hidden="true"><rect x="8" y="12" width="32" height="28" rx="3" fill="none" stroke="currentColor" stroke-width="2.4"/><path d="M8 20h32M16 8v8M32 8v8M18 28h4M26 28h4M18 34h4" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"/></svg>',
    ];

    return isset($icons[$name]) ? $icons[$name] : '';
}
