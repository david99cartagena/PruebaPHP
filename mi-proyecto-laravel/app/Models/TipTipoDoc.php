<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TipTipoDoc
 * 
 * @property int $TIP_ID
 * @property string|null $TIP_NOMBRE
 * @property string|null $TIP_PREFIJO
 * 
 * @property Collection|DocDocumento[] $doc_documentos
 *
 * @package App\Models
 */
class TipTipoDoc extends Model
{
	protected $table = 'tip_tipo_doc';
	protected $primaryKey = 'TIP_ID';
	public $timestamps = false;

	protected $fillable = [
		'TIP_NOMBRE',
		'TIP_PREFIJO'
	];

	public function doc_documentos()
	{
		return $this->hasMany(DocDocumento::class, 'DOC_ID_TIPO');
	}
}
