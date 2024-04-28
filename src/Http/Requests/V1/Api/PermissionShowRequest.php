<?php

namespace Callmeaf\Permission\Http\Requests\V1\Api;

use Illuminate\Foundation\Http\FormRequest;

class PermissionShowRequest extends FormRequest
{
    /**
     * Determine if the role is authorized to make this request.
     */
    public function authorize(): bool
    {
        return app(config('callmeaf-permission.form_request_authorizers.permission'))->show();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return validationManager(rules: [

        ],filters: config("callmeaf-permission.validations.show"));
    }

}
