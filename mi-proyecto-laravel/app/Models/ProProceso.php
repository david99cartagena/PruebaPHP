<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProProceso
 * 
 * @property int $PRO_ID
 * @property string|null $PRO_PREFIJO
 * @property string|null $PRO_NOMBRE
 * 
 * @property Collection|DocDocumento[] $doc_documentos
 *
 * @package App\Models
 */
class ProProceso extends Model
{
	protected $table = 'pro_proceso';
	protected $primaryKey = 'PRO_ID';
	public $timestamps = false;

	protected $fillable = [
		'PRO_PREFIJO',
		'PRO_NOMBRE'
	];

	public function doc_documentos()
	{
		return $this->hasMany(DocDocumento::class, 'DOC_ID_PROCESO');
	}
}
