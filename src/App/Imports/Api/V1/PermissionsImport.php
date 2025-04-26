<?php

namespace Callmeaf\Permission\App\Imports\Api\V1;

use Callmeaf\Base\App\Services\Importer;
use Callmeaf\Permission\App\Enums\PermissionStatus;
use Callmeaf\Permission\App\Repo\Contracts\PermissionRepoInterface;
use Illuminate\Support\Collection;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class PermissionsImport extends Importer implements ToCollection,WithChunkReading,WithStartRow,SkipsEmptyRows,WithValidation,WithHeadingRow
{
    private PermissionRepoInterface $permissionRepo;

    public function __construct()
    {
        $this->permissionRepo = app(PermissionRepoInterface::class);
    }

    public function collection(Collection $collection)
    {
        $this->total = $collection->count();

        foreach ($collection as $row) {
            $this->permissionRepo->freshQuery()->create([
                // 'status' => $row['status'],
            ]);
            ++$this->success;
        }
    }

    public function chunkSize(): int
    {
        return \Base::config('import_chunk_size');
    }

    public function startRow(): int
    {
        return 2;
    }

    public function rules(): array
    {
        $table = $this->permissionRepo->getTable();
        return [
            // 'status' => ['required',Rule::enum(PermissionStatus::class)],
        ];
    }

}
