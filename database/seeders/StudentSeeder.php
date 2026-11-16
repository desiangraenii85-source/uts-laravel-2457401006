<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        // 16 Data Siswa dengan nama asli bervariasi
        $data = [
            ['nis' => '0012345', 'name' => 'Putri Amelia', 'classroom' => 'X IPA 1', 'birth_date' => '2010-04-12', 'average_score' => 87.50, 'is_active' => true, 'address' => 'Jl. Kenari No. 3', 'parent_phone' => '0813-2222-3333'],
            ['nis' => '0012346', 'name' => 'Bagus Setiawan', 'classroom' => 'X IPA 1', 'birth_date' => '2010-09-30', 'average_score' => 79.25, 'is_active' => true, 'address' => null, 'parent_phone' => '0813-2222-3334'],
            ['nis' => '0012350', 'name' => 'Lina Marlina', 'classroom' => 'X IPS 1', 'birth_date' => '2009-12-05', 'average_score' => 82.00, 'is_active' => false, 'address' => 'Pindah sekolah', 'parent_phone' => '0813-2222-3335'],
            ['nis' => '0012351', 'name' => 'Rian Hidayat', 'classroom' => 'XI IPA 2', 'birth_date' => '2009-05-14', 'average_score' => 85.00, 'is_active' => true, 'address' => 'Jl. Merdeka No. 12', 'parent_phone' => '0812-4455-6677'],
            ['nis' => '0012352', 'name' => 'Siti Aminah', 'classroom' => 'X IPS 1', 'birth_date' => '2010-02-22', 'average_score' => 80.45, 'is_active' => true, 'address' => 'Gang Masjid No. 5', 'parent_phone' => '0857-1122-3344'],
            ['nis' => '0012353', 'name' => 'Dika Pratama', 'classroom' => 'XI IPA 2', 'birth_date' => '2009-11-08', 'average_score' => 78.90, 'is_active' => true, 'address' => 'Jl. Garuda No. 45', 'parent_phone' => '0813-9988-7766'],
            ['nis' => '0012354', 'name' => 'Eka Wijaya', 'classroom' => 'X IPA 1', 'birth_date' => '2010-07-19', 'average_score' => 91.20, 'is_active' => true, 'address' => 'Perumahan Indah Blok C', 'parent_phone' => '0821-3344-5566'],
            ['nis' => '0012355', 'name' => 'Fitriani Lestari', 'classroom' => 'X IPS 1', 'birth_date' => '2010-03-30', 'average_score' => 83.15, 'is_active' => true, 'address' => 'Jl. Mawar No. 8', 'parent_phone' => '0819-5566-7788'],
            ['nis' => '0012356', 'name' => 'Gilang Ramadhan', 'classroom' => 'XI IPA 2', 'birth_date' => '2009-09-15', 'average_score' => 76.50, 'is_active' => true, 'address' => 'Jl. Melati No. 21', 'parent_phone' => '0852-7788-9900'],
            ['nis' => '0012357', 'name' => 'Hana Nurhaliza', 'classroom' => 'X IPA 1', 'birth_date' => '2010-12-05', 'average_score' => 88.75, 'is_active' => true, 'address' => 'Jl. Anggrek No. 14', 'parent_phone' => '0812-8899-0011'],
            ['nis' => '0012358', 'name' => 'Ira Maya Sopha', 'classroom' => 'X IPS 1', 'birth_date' => '2010-01-25', 'average_score' => 81.00, 'is_active' => true, 'address' => 'Kampung Baru RT 02', 'parent_phone' => '0813-1122-4455'],
            ['nis' => '0012359', 'name' => 'Joko Tingkir', 'classroom' => 'XI IPA 2', 'birth_date' => '2009-06-17', 'average_score' => 79.30, 'is_active' => false, 'address' => 'Jl. Sukarno Hatta', 'parent_phone' => '0856-2233-5566'],
            ['nis' => '0012360', 'name' => 'Kurniawan Dwi', 'classroom' => 'X IPA 1', 'birth_date' => '2010-08-11', 'average_score' => 84.60, 'is_active' => true, 'address' => 'Jl. Pemuda No. 9', 'parent_phone' => '0822-4455-7788'],
            ['nis' => '0012361', 'name' => 'Lesti Kejora', 'classroom' => 'X IPS 1', 'birth_date' => '2010-10-02', 'average_score' => 86.10, 'is_active' => true, 'address' => 'Jl. Kejujuran No. 3', 'parent_phone' => '0812-5566-8899'],
            ['nis' => '0012362', 'name' => 'Muhammad Rizky', 'classroom' => 'XI IPA 2', 'birth_date' => '2009-04-03', 'average_score' => 89.90, 'is_active' => true, 'address' => 'Perum Melati Mas', 'parent_phone' => '0813-6677-9900'],
            ['nis' => '0012363', 'name' => 'Nadia Utami', 'classroom' => 'X IPA 1', 'birth_date' => '2010-05-29', 'average_score' => 92.50, 'is_active' => true, 'address' => 'Jl. Dahlia No. 17', 'parent_phone' => '0857-7788-0011'],
        ];

        foreach ($data as $item) {
            Student::create($item);
        }
    }
}
