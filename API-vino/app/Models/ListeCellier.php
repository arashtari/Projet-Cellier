<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ListeCellier extends Model
{
    // Define the table name
    protected $table = 'vino__cellier';

    // Define the primary key column name
    protected $primaryKey = 'idPrimaire';

    // Define if the primary key is auto-incrementing
    public $incrementing = true;

    // Define the column names that can be mass assigned
    protected $fillable = [
        'id_bouteille',
        'date_achat',
        'garde_jusqua',
        'notes',
        'prix',
        'quantite',
        'millesime',
        'usager_id',
        'nom',
        'image',
        'code_saq',
        'pays',
        'description',
        'prix_saq',
        'url_saq',
        'url_img',
        'format',
        'type',
    ];

    // Define the column types
    protected $casts = [
        'id_bouteille' => 'integer',
        'date_achat' => 'date',
        'prix' => 'float',
        'quantite' => 'integer',
        'millesime' => 'integer',
        'usager_id' => 'integer',
        'pays' => 'integer',
        'prix_saq' => 'float',
        'type' => 'integer',
    ];

  
    public function bouteille()
    {
        return $this->belongsTo(VinoBouteille::class, 'id_bouteille', 'id');
    }

 
}
