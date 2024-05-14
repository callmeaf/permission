<?php

namespace Callmeaf\Permission\Http\Requests\V1\Api;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RoleStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return app(config('callmeaf-role.form_request_authorizers.role'))->store();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return validationManager(rules: [
            'name' => ['string','min:3','max:255',Rule::unique(config('callmeaf-role.model'),'name')],
            'name_fa' => ['string','min:3','max:255',Rule::unique(config('callmeaf-role.model'),'name_fa')],
        ],filters: app(config("callmeaf-role.validations.role"))->store());
    }

}
