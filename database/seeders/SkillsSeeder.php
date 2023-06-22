<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    $competence1Id = DB::table('skills')->insertGetId([
        'name' => 'skill 1',
        'parent_id' => null,
        'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est quae harum repellat perspiciatis placeat facere atque illum eligendi reiciendis aliquam molestias beatae totam dolorum culpa quasi, voluptate recusandae ullam officia!',
        'level' => 'Softskill',
        'created_at' => now(),
        'updated_at' => now(),

    ]);

    $competence2Id = DB::table('skills')->insertGetId([
        'name' => 'skill 2',
        'parent_id' => null,
        'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est quae harum repellat perspiciatis placeat facere atque illum eligendi reiciendis aliquam molestias beatae totam dolorum culpa quasi, voluptate recusandae ullam officia!',
        'level' => 'Softskill',
        'created_at' => now(),
        'updated_at' => now(),

    ]);

    $competence2ChildId = DB::table('skills')->insertGetId([
        'name' => 'skill 2-1',
        'parent_id' => $competence2Id,
        'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est quae harum repellat perspiciatis placeat facere atque illum eligendi reiciendis aliquam molestias beatae totam dolorum culpa quasi, voluptate recusandae ullam officia!',
        'level' => 'Softskill',
        'created_at' => now(),
        'updated_at' => now(),

    ]);

    $competence3Id = DB::table('skills')->insertGetId([
        'name' => 'skill 3',
        'parent_id' => null,
        'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est quae harum repellat perspiciatis placeat facere atque illum eligendi reiciendis aliquam molestias beatae totam dolorum culpa quasi, voluptate recusandae ullam officia!',
        'level' => 'Universel',
        'created_at' => now(),
        'updated_at' => now(),

    ]);
    $competence3ChildId1 = DB::table('skills')->insertGetId([
        'name' => 'skill 3-1',
        'parent_id' => $competence3Id,
        'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est quae harum repellat perspiciatis placeat facere atque illum eligendi reiciendis aliquam molestias beatae totam dolorum culpa quasi, voluptate recusandae ullam officia!',
        'level' => 'Etude',
        'created_at' => now(),
        'updated_at' => now(),

    ]);

    $competence3ChildId2 = DB::table('skills')->insertGetId([
        'name' => 'skill 3-2',
        'parent_id' => $competence3Id,
        'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est quae harum repellat perspiciatis placeat facere atque illum eligendi reiciendis aliquam molestias beatae totam dolorum culpa quasi, voluptate recusandae ullam officia!',
        'level' => 'Etude',
        'created_at' => now(),
        'updated_at' => now(),

    ]);

    $competence4Id = DB::table('skills')->insertGetId([
        'name' => 'skill 4',
        'parent_id' => null,
        'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est quae harum repellat perspiciatis placeat facere atque illum eligendi reiciendis aliquam molestias beatae totam dolorum culpa quasi, voluptate recusandae ullam officia!',
        'level' => 'Etude',
        'created_at' => now(),
        'updated_at' => now(),

    ]);

    $competence4ChildId1 = DB::table('skills')->insertGetId([
        'name' => 'skill 4-1',
        'parent_id' => $competence4Id,
        'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est quae harum repellat perspiciatis placeat facere atque illum eligendi reiciendis aliquam molestias beatae totam dolorum culpa quasi, voluptate recusandae ullam officia!',
        'level' => 'Etude',
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    $competence4ChildId2 = DB::table('skills')->insertGetId([
        'name' => 'skill 4-2',
        'parent_id' => $competence4Id,
        'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est quae harum repellat perspiciatis placeat facere atque illum eligendi reiciendis aliquam molestias beatae totam dolorum culpa quasi, voluptate recusandae ullam officia!',
        'level' => 'Etude',
        'created_at' => now(),
        'updated_at' => now(),

    ]);

    $competence4ChildId3 = DB::table('skills')->insertGetId([
        'name' => 'skill 4-3',
        'parent_id' => $competence4Id,
        'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est quae harum repellat perspiciatis placeat facere atque illum eligendi reiciendis aliquam molestias beatae totam dolorum culpa quasi, voluptate recusandae ullam officia!',
        'level' => 'Etude',
        'created_at' => now(),
        'updated_at' => now(),

    ]);

    $competence4SubchildId1 = DB::table('skills')->insertGetId([
        'name' => 'skill 4-2-1',
        'parent_id' => $competence4ChildId2,
        'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est quae harum repellat perspiciatis placeat facere atque illum eligendi reiciendis aliquam molestias beatae totam dolorum culpa quasi, voluptate recusandae ullam officia!',
        'level' => 'Etude',
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    $competence5Id = DB::table('skills')->insertGetId([
        'name' => 'skill 5',
        'parent_id' => $competence1Id,
        'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est quae harum repellat perspiciatis placeat facere atque illum eligendi reiciendis aliquam molestias beatae totam dolorum culpa quasi, voluptate recusandae ullam officia!',
        'level' => 'Etude',
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    $competence5ChildId1 = DB::table('skills')->insertGetId([
        'name' => 'skill 5-1',
        'parent_id' => $competence5Id ,
        'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est quae harum repellat perspiciatis placeat facere atque illum eligendi reiciendis aliquam molestias beatae totam dolorum culpa quasi, voluptate recusandae ullam officia!',
        'level' => 'Etude',
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    $competence5ChildId2 = DB::table('skills')->insertGetId([
        'name' => 'skill 5-2',
        'parent_id' => $competence5Id,
        'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est quae harum repellat perspiciatis placeat facere atque illum eligendi reiciendis aliquam molestias beatae totam dolorum culpa quasi, voluptate recusandae ullam officia!',
        'level' => 'Etude',
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    $competence5ChildId3 = DB::table('skills')->insertGetId([
        'name' => 'skill 5-3',
        'parent_id' => $competence5Id,
        'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est quae harum repellat perspiciatis placeat facere atque illum eligendi reiciendis aliquam molestias beatae totam dolorum culpa quasi, voluptate recusandae ullam officia!',
        'level' => 'Etude',
        'created_at' => now(),
        'updated_at' => now(),

    ]);

    $competence5SubchildId1 = DB::table('skills')->insertGetId([
        'name' => 'skill 5-3-1',
        'parent_id' => $competence5ChildId3,
        'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est quae harum repellat perspiciatis placeat facere atque illum eligendi reiciendis aliquam molestias beatae totam dolorum culpa quasi, voluptate recusandae ullam officia!',
        'level' => 'Etude',
        'created_at' => now(),
        'updated_at' => now(),

    ]);

    $competence5SubchildId1 = DB::table('skills')->insertGetId([
        'name' => 'skill 5-3-2',
        'parent_id' => $competence5ChildId3,
        'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est quae harum repellat perspiciatis placeat facere atque illum eligendi reiciendis aliquam molestias beatae totam dolorum culpa quasi, voluptate recusandae ullam officia!',
        'level' => 'Etude',
        'created_at' => now(),
        'updated_at' => now(),

    ]);

}
}
