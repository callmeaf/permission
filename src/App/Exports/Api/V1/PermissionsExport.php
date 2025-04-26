<?php

namespace Callmeaf\Permission\App\Exports\Api\V1;

use Callmeaf\Permission\App\Models\Permission;
use Callmeaf\Permission\App\Repo\Contracts\PermissionRepoInterface;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithCustomChunkSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Excel;

class PermissionsExport implements FromCollection,WithHeadings,Responsable,WithMapping,WithCustomChunkSize
{
    use Exportable;

    /**
     * It's required to define the fileName within
     * the export class when making use of Responsable.
     */
    private $fileName = '';

    /**
     * Optional Writer Type
     */
    private $writerType = Excel::XLSX;

    /**
     * Optional headers
     */
    private $headers = [
        'Content-Type' => 'text/csv',
    ];

    private PermissionRepoInterface $permissionRepo;
    public function __construct()
    {
        $this->permissionRepo = app(PermissionRepoInterface::class);
        $this->fileName = $this->fileName ?: \Base::exportFileName(model: $this->permissionRepo->getModel()::class,extension: $this->writerType);
    }

    public function collection()
    {
        if(\Base::getTrashedData()) {
            $this->permissionRepo->trashed();
        }

        $this->permissionRepo->latest()->search();

        if(\Base::getAllPagesData()) {
            return $this->permissionRepo->lazy();
        }

        return $this->permissionRepo->paginate();
    }

    public function headings(): array
    {
        return [
           // 'status',
        ];
    }

    /**
     * @param Permission $row
     * @return array
     */
    public function map($row): array
    {
        return [
            // $row->status?->value,
        ];
    }

    public function chunkSize(): int
    {
        return \Base::config('export_chunk_size');
    }
}
