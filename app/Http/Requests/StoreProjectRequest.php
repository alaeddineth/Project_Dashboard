<?php

namespace App\Http\Requests;
use Illuminate\Validation\Rule;

use App\Project; // Replace with the appropriate model
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreProjectRequest extends FormRequest
{
    public function authorize()
    {
       // abort_if(Gate::denies('project_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'titre' => [
                'required',
                'string',
            ],
            'Description' => [
                'required',
                'string',
            ],
            'DateDebut' => [
                'required',
                'date',
            ],
            'DateFin' => [
                'required',
                'date',
            ],
            'Budget' => [
                'required',
                'string',
            ],
            'competences' => [
                'required',
                'string',
            ],
            'etat' => [
               
                'string',
                Rule::in(['pending']), // Add your desired default value here
            ],
    
        ];
    }

}
