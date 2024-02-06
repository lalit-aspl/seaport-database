<?php

namespace Seaport\Database;

class Marineindex
{
    const JSON_FILE_PATH = __DIR__ . '/new_sea_port.json';

    public static function database(): array
    {
        if (!file_exists(self::JSON_FILE_PATH)) {
            return [];
        }

        $data = file_get_contents(self::JSON_FILE_PATH);
        return json_decode($data, true) ?: [];
    }

    public static function index(): array
    {
        return self::database(); 
    }

    public static function search_by_country_code(string $en): array
    {
        $data = self::database();
        return array_filter($data, fn($port) => $port["COUNTRY_CODE"] === $en);
    } 

    public static function search_by_country_city(string $en, string $name): array
    {
        $data = self::database();
        return array_filter($data, fn($port) => $port["country"] === $en && $port["name"] === $name);
    }
}
