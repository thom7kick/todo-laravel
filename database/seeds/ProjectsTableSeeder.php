
<?php
 
use Illuminate\Database\Seeder;
 
class ProjectsTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('projects')->delete();
 
        $projects = array(
            ['id' => 1, 
             'name' => 'First Project ', 
             'slug' => 'project1', 
             'created_at' => new DateTime, 
             'updated_at' => new DateTime],

             ['id' => 2, 
             'name' => 'Second Project', 
             'slug' => 'project-2', 
             'created_at' => new DateTime, 
             'updated_at' => new DateTime],

            ['id' => 3, 
             'name' => 'Third Project', 
             'slug' => 'project-3', 
             'created_at' => new DateTime, 
             'updated_at' => new DateTime],

            ['id' => 4, 
             'name' => 'Fourth Project', 
             'slug' => 'project-4', 
             'created_at' => new DateTime, 
             'updated_at' => new DateTime],
            ['id' => 5, 
             'name' => 'Fifth Project ', 
             'slug' => 'project-5', 
             'created_at' => new DateTime, 
             'updated_at' => new DateTime],

            );
            
 
        DB::table('projects')->insert($projects);
    }
 
}