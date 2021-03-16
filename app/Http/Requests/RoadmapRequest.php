<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoadmapRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|max:50',
            'body' => 'required|max:500',
            'estimated_time' => 'required|max:300',
            'level' => 'required|max:3',
        ];
    }

    public function attributes()
    {
        return [
            'title' => 'ロードマップ名',
            'body' => '説明',
            'estimated_time' => '学習時間目安',
            'level' => '学習レベル',
        ];
    }
}
