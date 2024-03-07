<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Branch;
use Illuminate\Support\Facades\DB;

class BranchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try {
            DB::beginTransaction();

            $branches = [
                [
                    'id' => 1,
                    'name' => 'Jakarta',
                    'code' => 'jkt',
                    'description' => 'Kantor cabang Jakarta',
                    'time_zone' => 'WIB',
                ],
                [
                    'id' => 3,
                    'name' => 'Bandung',
                    'code' => 'bdg',
                    'description' => 'Kantor cabang Bandung',
                    'time_zone' => 'WIB',
                ],
            ];

            foreach ($branches as $branch) {
                Branch::firstOrCreate(
                    ['id' => $branch['id']],
                    ['name' => $branch['name'], 'code' => $branch['code'], 'description' => $branch['description'], 'time_zone' => $branch['time_zone'] ]
                );
            }

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }

    }
}
