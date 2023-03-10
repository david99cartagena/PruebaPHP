<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DocDocumento
 * 
 * @property int $DOC_ID
 * @property string|null $DOC_NOMBRE
 * @property int|null $DOC_CODIGO
 * @property string|null $DOC_CONTENIDO
 * @property int $DOC_ID_PROCESO
 * @property int $DOC_ID_TIPO
 * 
 * @property ProProceso $pro_proceso
 * @property TipTipoDoc $tip_tipo_doc
 *
 * @package App\Models
 */
class DocDocumento extends Model
{
	protected $table = 'doc_documento';
	protected $primaryKey = 'DOC_ID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'DOC_ID' => 'int',
		'DOC_CODIGO' => 'int',
		'DOC_ID_PROCESO' => 'int',
		'DOC_ID_TIPO' => 'int'
	];

	protected $fillable = [
		'DOC_NOMBRE',
		'DOC_CODIGO',
		'DOC_CONTENIDO',
		'DOC_ID_PROCESO',
		'DOC_ID_TIPO'
	];

	public function pro_proceso()
	{
		return $this->belongsTo(ProProceso::class, 'DOC_ID_PROCESO');
	}

	public function tip_tipo_doc()
	{
		return $this->belongsTo(TipTipoDoc::class, 'DOC_ID_TIPO');
	}
}
