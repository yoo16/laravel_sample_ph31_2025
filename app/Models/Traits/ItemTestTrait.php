<?php

namespace App\Models\Traits;

trait ItemTestTrait
{
    public $path = 'public/json/items.json';

    public function fetchAll()
    {
        $file = base_path($this->path);
        if (!file_exists($file)) {
            return [];
        }

        $json = file_get_contents($file);
        return json_decode($json);
    }

    public function findById(string $id)
    {
        $items = $this->fetchAll();
        if (empty($items)) return [];

        foreach ($items as $item) {
            if ($item->id == $id) {
                return $item;
            }
        }
    }

    public function searchByKeyword(string $keyword)
    {
        if (empty($keyword)) return;

        $items = $this->fetchAll();
        if (empty($items)) return [];

        $results = [];
        foreach ($items as $item) {
            if (stripos($item->name, $keyword) !== false) {
                $results[] = $item;
            }
        }
        return $results;
    }
}
