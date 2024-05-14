<?php

namespace Callmeaf\Permission\Http\Requests\V1\Api;

use Illuminate\Foundation\Http\FormRequest;

class RoleIndexRequest extends FormRequest
{
    /**
     * Determine if the role is authorized to make this request.
     */
    public function authorize(): bool
    {
        return app(config('callmeaf-role.form_request_authorizers.role'))->index();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return validationManager(rules: [
            'name' => [],
            'name_fa' => [],
        ],filters: [
            ...app(config("callmeaf-role.validations.role"))->index(),
            ...config('callmeaf-base.default_searcher_validation'),
        ]);
    }

}
