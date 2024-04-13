<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'startDate' => $this->startDate,
            'price' => $this->price,
            'imageURL' => $this->imageURL,
            'demoVideo' => $this->demoVideo,
            'note' => $this->note,
            'isDeleted' => $this->isDeleted,
            'createdAt' => $this->created_at->toDateString(), 
            'updatedAt' => $this->updated_at->toDateString(),
            'category' => [
                'id' => $this->category->id,
                'categoryName' => $this->category->categoryName,
                'isDeleted' => $this->category->isDeleted,
            ],
        ];
    }
}
