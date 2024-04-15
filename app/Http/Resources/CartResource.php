<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CartResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'accountId' => $this->accountId,
            'courseId' => $this->courseId,
            'amount' => $this->amount,
            'note' => $this->note,
            'course' => new CourseResource($this->course),
        ];
    }
}
