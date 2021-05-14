<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
{
    /**
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'first_name' => $this->first_name,
            'company_id' => $this->company_id,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'phone' => $this->phone,
        ];
    }
}
