<?php

namespace Callmeaf\Permission\Http\Requests\V1\Api;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RoleUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $roleId = $this->route('role')->id;
        return validationManager(rules: [
            'name' => ['string','min:3','max:255',Rule::unique(config('callmeaf-role.model'),'name')->ignore($roleId)],
            'name_fa' => ['string','min:3','max:255',Rule::unique(config('callmeaf-role.model'),'name_fa')->ignore($roleId)],
        ],filters: config("callmeaf-role.validations.update"));
    }

}
