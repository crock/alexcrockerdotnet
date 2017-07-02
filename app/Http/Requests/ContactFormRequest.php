<?php

namespace app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
        $this->sanitize();

        return [
            'name' => 'required|max:20',
            'email' => 'required|email',
            'phone' => 'nullable',
            'message' => 'required|max:5000',
            'dateSent' => 'nullable|date'
        ];
    }

    public function sanitize()
    {
        $input = $this->all();

        // Convert URLs to HTML anchors
//        if (preg_match("#https?://#", $input['url']) === 0) {
//            $input['url'] = 'http://'.$input['url'];
//        }

        $input['name'] = filter_var($input['name'], FILTER_SANITIZE_STRING);
        $input['message'] = filter_var($input['message'], FILTER_SANITIZE_STRING);

        $this->replace($input);
    }
}
