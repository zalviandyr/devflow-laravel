<?php

namespace App\Http\Traits;

trait MediaTrait
{
    public function updateMediaFromRequest(string $file, string $collection)
    {
        foreach ($this->media as $item) {
            if ($item->collection_name === $collection) {
                $this->deleteMedia($item->id);
            }
        }

        $this->addMediaFromRequest($file)->toMediaCollection($collection);
    }
}
