<?php

namespace App\Http\Requests\People;

use App\Http\Requests\AuthorizedRequest;

class NotesRequest extends AuthorizedRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'body' => 'required|string',
            'is_favorited' => 'boolean|required',
        ];
    }
}
