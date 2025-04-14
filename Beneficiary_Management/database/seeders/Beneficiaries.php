<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Beneficiaries as BeneficiaryTable;


class Beneficiaries extends Seeder
{

    /**
     * Run the database seeds
     */
    public function run(): void
    {
        BeneficiaryTable::factory()
        ->createManyQuietly(1000000);

    }
}
