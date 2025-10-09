<?php
namespace Bildvitta\IssJuridico\Models;

use Bildvitta\IssJuridico\Traits\UsesJuridicoDB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SignerDocument extends Model
{
    use SoftDeletes, UsesJuridicoDB;

    protected $connection = 'iss-juridico';

}