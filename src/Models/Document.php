<?php
namespace Bildvitta\IssJuridico\Models;

use Bildvitta\IssJuridico\Traits\UsesJuridicoDB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Document extends Model
{
    use SoftDeletes, UsesJuridicoDB;

    protected $connection = 'iss-juridico';

    public function signer_documents(): HasMany
    {
        return $this->hasMany(SignerDocument::class, 'document_id', 'id');
    }
}