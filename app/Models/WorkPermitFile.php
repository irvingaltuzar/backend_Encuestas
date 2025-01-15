<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Storage;
class WorkPermitFile extends Model
{
	protected $table = 'work_permit_file';

	protected $primaryKey = 'id';

	public $autoincrement = true;

	public $timestamps = false;

    protected $guarded = [];
	protected $appends = ['file_url'];

	
	public function getFileUrlAttribute()
	{

		return $this->cat_documents_workpermit_id ? Storage::disk('public')->url("WorkPermits/{$this->work_permit_id}/{$this->file}") : null;
	}

	protected $casts = [
        'cat_documents_workpermit_id' => 'integer',
    ];
}
