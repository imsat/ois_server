<?php

use App\BankAccount;
use App\FinancialOrganization;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        FinancialOrganization::truncate();
        BankAccount::truncate();

        factory(FinancialOrganization::class, 10)->create();
        factory(BankAccount::class, 100)->create();

    }
}
