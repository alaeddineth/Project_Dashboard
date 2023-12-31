<?php

namespace App\Http\Requests;

use App\Task; // Replace with the appropriate model
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreTaskRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('task_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'title'        => [
                'required',
            ],
            'user_id'      => [
                'required',
                'integer',
            ],
            'project_id'   => [
                'required',
                'integer',
            ],
            'status'       => [
                'required',
            ],
            // Add any additional rules for your specific Task model
        ];
    }
}
