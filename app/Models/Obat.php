<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    protected $fillable = [
        'nama',
        'jenis',
        'harga',
        'stok',
        'deskripsi'
    ];

    /**
     * Return static sample data for demonstration since migrations are skipped.
     */
    public static function getSampleData()
    {
        return [
            [
                'id' => 1,
                'nama' => 'Paracetamol',
                'jenis' => 'Tablet',
                'harga' => 5000,
                'stok' => 100,
                'deskripsi' => 'Obat penurun demam dan pereda nyeri.'
            ],
            [
                'id' => 2,
                'nama' => 'Amoxicillin',
                'jenis' => 'Kapsul',
                'harga' => 12000,
                'stok' => 50,
                'deskripsi' => 'Antibiotik untuk infeksi bakteri.'
            ],
            [
                'id' => 3,
                'nama' => 'OBH Combi',
                'jenis' => 'Sirup',
                'harga' => 15000,
                'stok' => 30,
                'deskripsi' => 'Obat batuk berdahak.'
            ],
            [
                'id' => 4,
                'nama' => 'Antasida Doen',
                'jenis' => 'Tablet Kunyah',
                'harga' => 4000,
                'stok' => 80,
                'deskripsi' => 'Obat sakit maag dan lambung.'
            ],
            [
                'id' => 5,
                'nama' => 'Betadine',
                'jenis' => 'Cairan Terapi',
                'harga' => 25000,
                'stok' => 20,
                'deskripsi' => 'Antiseptik untuk luka luar.'
            ],
        ];
    }
}
