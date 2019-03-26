<?php

namespace App\Http\Resources\Task;

use Illuminate\Http\Resources\Json\JsonResource;

class TaskResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'title'=>$this->title,
            'description_content'=>$this->description,
            'deadline_date'=>$this->deadline,
            'status'=>$this->status==0? "uncompleted":"completed"
        ];
    }
}
