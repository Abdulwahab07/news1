<?php

use Illuminate\Database\Seeder;
use App\Privilege;

class PrivilegeSeeder extends Seeder
{
    protected $privileges = [
        [
            'privilege_name' => 'Read',
            'privilege_code' => 'R'
        ],
        [
            'privilege_name' => 'Write',
            'Privilege_code' => 'W'
        ],
        [
            'privilege_name' => 'Modify',
            'privilege_code' => 'M'
        ],
        [
            'privilege_name' => 'Delete',
            'privilege_code' => 'D'
        ]
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //  Privilege::truncate();

        foreach ($this->privileges as $privilege){
            $pri = new Privilege($privilege);

            $pri->save();
        }
    }
}
