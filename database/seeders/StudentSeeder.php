<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['nis' => '0012345', 'name' => 'Putri Amelia', 'classroom' => 'X IPA 1', 'birth_date' => '2010-04-12', 'average_score' => 87.50, 'is_active' => true, 'address' => 'Jl. Kenari No. 3', 'parent_phone' => '0813-2222-3333'],
            ['nis' => '0012346', 'name' => 'Bagus Setiawan', 'classroom' => 'X IPA 1', 'birth_date' => '2010-09-30', 'average_score' => 79.25, 'is_active' => true, 'address' => null, 'parent_phone' => '0813-2222-3334'],
            ['nis' => '0012350', 'name' => 'Lina Marlina', 'classroom' => 'X IPS 1', 'birth_date' => '2009-12-05', 'average_score' => 82.00, 'is_active' => false, 'address' => 'Pindah sekolah', 'parent_phone' => '0813-2222-3335'],
        ];

        // Loop untuk menggenapi menjadi 16 data bervariasi
        for ($i = 4; $i <= 16; $i++) {
            $data[] = [
                'nis' => '00123' . (50 + $i),
                'name' => 'Siswa Contoh ' . $i,
                'classroom' => $i % 2 == 0 ? 'XI IPA 2' : 'X IPS 1',
                'birth_date' => '2010-01-' . sprintf("%02d", $i),
                'average_score' => 75.00 + $i,
                'is_active' => true,
                'address' => 'Alamat Contoh No. ' . $i,
                'parent_phone' => '0812-3456-78' . sprintf("%02d", $i),
            ];
        }

        foreach ($data as $item) {
            Student::create($item);
        }
    }
}
