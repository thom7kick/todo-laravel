<?php
 
use Illuminate\Database\Seeder;
 
class TasksTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('tasks')->delete();
 
        $tasks = array(
            ['id' => 1, 
             'name' => 'First Task',
             'slug' => 'task-1',
             'project_id' => 1,
             'completed' => false,
             'description' => 'My first task',
             'created_at' => new DateTime,
             'updated_at' => new DateTime],

            ['id' => 2, 
             'name' => 'Second Task', 
             'slug' => 'task-2', 
             'project_id' => 2, 
             'completed' => false, 
             'description' => 'My first task', 
             'created_at' => new DateTime,
             'updated_at' => new DateTime],

            ['id' => 3, 
             'name' => 'Third Task', 
             'slug' => 'task-3', 
             'project_id' => 3,
             'completed' => false, 
             'description' => 'My first task',
             'created_at' => new DateTime, 
             'updated_at' => new DateTime],
            
            ['id' => 4,
             'name' => 'Fourth Task', 
             'slug' => 'task-4', 
             'project_id' => 4, 
             'completed' => true, 
             'description' => 'My second task', 
             'created_at' => new DateTime, 
             'updated_at' => new DateTime],
            
            ['id' => 5, 
             'name' => 'Fifth Task', 
             'slug' => 'task-5', 
             'project_id' => 1, 
             'completed' => true, 
             'description' => 'My third task', 
             'created_at' => new DateTime, 
             'updated_at' => new DateTime],
            
            ['id' => 6, 
             'name' => 'Sixth Task', 
             'slug' => 'task-6', 
             'project_id' => 2, 
             'completed' => true, 
             'description' => 'My fourth task', 
             'created_at' => new DateTime, 
             'updated_at' => new DateTime],
            
            ['id' => 7, 
             'name' => 'Sevent Task', 
             'slug' => 'task-7', 
             'project_id' => 1, 
             'completed' => false, 
             'description' => 'My fifth task', 
             'created_at' => new DateTime, 
             'updated_at' => new DateTime],
        );
 
        DB::table('tasks')->insert($tasks);
    }
 
}