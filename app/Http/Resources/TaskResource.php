<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TaskResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'status' => $this->status,
            'due_date' => $this->due_date,
            'assigned_to' => $this->whenLoaded('assignedTo', function () {
                return $this->assignedTo ? $this->assignedTo->name : null;
            }),
            'team' => $this->whenLoaded('team', function () {
                return $this->team ? $this->team->name : null;
            }),
            'created_by' => $this->whenLoaded('createdBy', function () {
                return $this->createdBy ? $this->createdBy->name : null;
            }),
            'created_at' => Carbon::parse($this->created_at)->toDateTimeString(),
        ];
    }
}
