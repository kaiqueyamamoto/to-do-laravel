<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tasks = [
            ['title' => 'Aprendendo Laravel', 'completed' => false],
            ['title' => 'Explorando Vue.js', 'completed' => false],
            ['title' => 'Dominando Python', 'completed' => false],
            ['title' => 'Introdução ao React', 'completed' => false],
            ['title' => 'Conceitos básicos de Docker', 'completed' => false],
            ['title' => 'Entendendo APIs RESTful', 'completed' => false],
            ['title' => 'Práticas de Segurança em Desenvolvimento Web', 'completed' => false],
            ['title' => 'Usando Bootstrap para Design Responsivo', 'completed' => false],
            ['title' => 'Automatização com GitHub Actions', 'completed' => false],
            ['title' => 'Desenvolvimento de Jogos com Unity', 'completed' => false],
            ['title' => 'Machine Learning com TensorFlow', 'completed' => false],
            ['title' => 'Desenvolvimento Mobile com Flutter', 'completed' => false],
            ['title' => 'Gerenciamento de Projetos com Agile e Scrum', 'completed' => false],
        ];

        foreach ($tasks as $task) {
            DB::table('tasks')->insert([
                'title' => $task['title'],
                'completed' => $task['completed'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
