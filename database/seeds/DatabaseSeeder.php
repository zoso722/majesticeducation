<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        \DB::table('tipos')->insert([
            0 => [
                'id'        => 1,
                'tipo'      => 'Administrador',
                'created_at' => '2019-05-27 00:00:00',
                'updated_at' => '2019-05-27 00:00:00'
            ],
            1 => [
                'id'    => 2,
                'tipo'  => 'Profesor',
                'created_at' => '2019-05-27 00:00:00',
                'updated_at' => '2019-05-27 00:00:00'
            ],
            2 => [
                'id'    => 3,
                'tipo'  => 'Alumno',
                'created_at' => '2019-05-27 00:00:00',
                'updated_at' => '2019-05-27 00:00:00'
            ]
        ]);

        \DB::table('users')->insert([
            0 => [
                'id'        => 1,
                'tipo_id'   => 2,
                'clave'     => 'P0001',
                'password'   => bcrypt('P0001'),
                'created_at' => '2019-05-27 00:00:00',
                'updated_at' => '2019-05-27 00:00:00'
            ],
            1 => [
                'id'        => 2,
                'tipo_id'   => 2,
                'clave'     => 'P0002',
                'password'   => bcrypt('P0002'),
                'created_at' => '2019-05-27 00:00:00',
                'updated_at' => '2019-05-27 00:00:00'
            ],
            2 => [
                'id'        => 3,
                'tipo_id'   => 3,
                'clave'     => 'A0001',
                'password'   => bcrypt('A0001'),
                'created_at' => '2019-05-27 00:00:00',
                'updated_at' => '2019-05-27 00:00:00'
            ],
            3 => [
                'id'        => 4,
                'tipo_id'   => 3,
                'clave'     => 'A0002',
                'created_at' => '2019-05-27 00:00:00',
                'password'   => bcrypt('A0002'),
                'updated_at' => '2019-05-27 00:00:00'
            ],
        ]);

        \DB::table('libros')->insert([
            0 => [
                'id'            => 1,
                'tipo'       => 1, 
                'clave'         => '000119A',
                'titulo'        => 'Tecnologías de la Información y la Comunicación',
                'sinopsis'      => 'Actividades para trabajar habilidades sociemocionales, lecturas con temas integradores, dossier con los ejercicios de esfuerzo, material adicional en plataforma.',
                'created_at' => '2019-05-27 00:00:00',
                'updated_at' => '2019-05-27 00:00:00' //DGETI, 1er semestre
            ],
            1 => [
                'id'            => 2,
                'tipo'       => 2, 
                'clave'         => '000219A',
                'titulo'        => 'Tecnologías de la Información y la Comunicación',
                'sinopsis'      => 'Actividades para trabajar habilidades sociemocionales, lecturas con temas integradores, dossier con los ejercicios de esfuerzo, material adicional en plataforma.',
                'created_at' => '2019-05-27 00:00:00',
                'updated_at' => '2019-05-27 00:00:00' //DGETI, 1er semestre
            ],
            2 => [
                'id'            => 3,
                'tipo'       => 1, 
                'clave'         => '000319A',
                'titulo'        => 'Best of English 3',
                'sinopsis'      => 'Para bachillerato tecnológico: actividades, lecturas literarias, ejercicios para ejercitar las 4 habilidades y alcanzar un nivel B2 del MCC. Con audios y apoyo adicional en plataforma.',
                'created_at' => '2019-05-27 00:00:00',
                'updated_at' => '2019-05-27 00:00:00' //DGETI, 3er semestre
            ],
            3 => [
                'id'            => 4,
                'tipo'       => 2, 
                'clave'         => '000419A',
                'titulo'        => 'Best of English 3',
                'sinopsis'      => 'Para bachillerato tecnológico: actividades, lecturas literarias, ejercicios para ejercitar las 4 habilidades y alcanzar un nivel B2 del MCC. Con audios y apoyo adicional en plataforma.',
                'created_at' => '2019-05-27 00:00:00',
                'updated_at' => '2019-05-27 00:00:00' //DGETI, 3er semestre
            ],
            4 => [
                'id'            => 5,
                'tipo'       => 1, 
                'clave'         => '000519A',
                'titulo'        => 'Química 1',
                'sinopsis'      => 'Actividades para trabajar habilidades socioemocinales, lecturas con temas integradores, dossier con los ejercicios de esfuerzo, material adicional en plataforma.',
                'created_at' => '2019-05-27 00:00:00',
                'updated_at' => '2019-05-27 00:00:00' //DGETI, 1er semestre
            ],
            5 => [
                'id'            => 6,
                'tipo'       => 2, 
                'clave'         => '000619A',
                'titulo'        => 'Química 1',
                'sinopsis'      => 'Actividades para trabajar habilidades socioemocionales, lecturas con temas integradores, dossier con los ejercicios de esfuerzo, material adicional en plataforma.',
                'created_at' => '2019-05-27 00:00:00',
                'updated_at' => '2019-05-27 00:00:00' //DGETI, 1er semestre
            ],
            6 => [
                'id'            => 7,
                'tipo'       => 1, 
                'clave'         => '000719A',
                'titulo'        => 'Manejo de aplicaciones por Medios Digitales',
                'sinopsis'      => 'Acordes a los programas de CONALEP, actividades de refuerzo a los programas <<Yo no abandono>> y <<Constrúye T>>. Con apoyos y ejercicios en plataforma.',
                'created_at' => '2019-05-27 00:00:00',
                'updated_at' => '2019-05-27 00:00:00' //CONALEP, 2do semestre
            ],
            7 => [
                'id'            => 8,
                'tipo'       => 2, 
                'clave'         => '000819A',
                'titulo'        => 'Manejo de aplicaciones por Medios Digitales',
                'sinopsis'      => 'Acordes a los programas de CONALEP, actividades de refuerzo a los programas <<Yo no abandono>> y <<Constrúye T>>. Con apoyos y ejercicios en plataforma.',
                'created_at' => '2019-05-27 00:00:00',
                'updated_at' => '2019-05-27 00:00:00' //CONALEP, 2do semestre
            ],
            8 => [
                'id'            => 9,
                'tipo'       => 1, 
                'clave'         => '000919A',
                'titulo'        => 'Manual de actividades experimentales de Química 3',
                'sinopsis'      => 'Para el trabajo en laboratorio, sigue paso a paso el método científico, con información para tus investigaciones, medidas de precaución, manejo de residuos y material adicional en plataforma.',
                'created_at' => '2019-05-27 00:00:00',
                'updated_at' => '2019-05-27 00:00:00' //CCH, DGB, Cecyt-IPN, 2, 3, 5 semestre
            ],
            9 => [
                'id'            => 10,
                'tipo'       => 2, 
                'clave'         => '001019A',
                'titulo'        => 'Manual de actividades experimentales de Química 3',
                'sinopsis'      => 'Para el trabajo en laboratorio, sigue paso a paso el método científico, con información para tus investigaciones, medidas de precaución, manejo de residuos y material adicional en plataforma.',
                'created_at' => '2019-05-27 00:00:00',
                'updated_at' => '2019-05-27 00:00:00' //CCH, DGB, Cecyt-IPN, 2, 3, 5 semestre
            ],
        ]);
        
        \DB::table('subsistemas')->insert([
            0 => [
                'id'        => 1,
                'subsistema'     => 'DGB',
                'created_at' => '2019-05-27 00:00:00',
                'updated_at' => '2019-05-27 00:00:00'
            ],
            0 => [
                'id'        => 2,
                'subsistema'     => 'EPOEM',
                'created_at' => '2019-05-27 00:00:00',
                'updated_at' => '2019-05-27 00:00:00'
            ],
            0 => [
                'id'        => 3,
                'subsistema'     => 'DGETI',
                'created_at' => '2019-05-27 00:00:00',
                'updated_at' => '2019-05-27 00:00:00'
            ],
            0 => [
                'id'        => 4,
                'subsistema'     => 'CONALEP',
                'created_at' => '2019-05-27 00:00:00',
                'updated_at' => '2019-05-27 00:00:00'
            ],
            0 => [
                'id'        => 5,
                'subsistema'     => 'Colegio de Bachilleres',
                'created_at' => '2019-05-27 00:00:00',
                'updated_at' => '2019-05-27 00:00:00'
            ],
            0 => [
                'id'        => 6,
                'subsistema'     => 'Cecyt-IPN',
                'created_at' => '2019-05-27 00:00:00',
                'updated_at' => '2019-05-27 00:00:00'
            ],
            0 => [
                'id'        => 7,
                'subsistema'     => 'CCH',
                'created_at' => '2019-05-27 00:00:00',
                'updated_at' => '2019-05-27 00:00:00'
            ],
        ]);

        \DB::table('semestres')->insert([
            0 => [
                'id'        => 1,
                'semestre'     => 'Semestre 1',
                'created_at' => '2019-05-27 00:00:00',
                'updated_at' => '2019-05-27 00:00:00'
            ],
            1 => [
                'id'        => 2,
                'semestre'     => 'Semestre 2',
                'created_at' => '2019-05-27 00:00:00',
                'updated_at' => '2019-05-27 00:00:00'
            ],
            2 => [
                'id'        => 3,
                'semestre'     => 'Semestre 3',
                'created_at' => '2019-05-27 00:00:00',
                'updated_at' => '2019-05-27 00:00:00'
            ],
            3 => [
                'id'        => 4,
                'semestre'     => 'Semestre 4',
                'created_at' => '2019-05-27 00:00:00',
                'updated_at' => '2019-05-27 00:00:00'
            ],
            4 => [
                'id'        => 5,
                'semestre'     => 'Semestre 5',
                'created_at' => '2019-05-27 00:00:00',
                'updated_at' => '2019-05-27 00:00:00'
            ],
            5 => [
                'id'        => 6,
                'semestre'     => 'Semestre 6',
                'created_at' => '2019-05-27 00:00:00',
                'updated_at' => '2019-05-27 00:00:00'
            ],
        ]);

        \DB::table('libro_semestre_subsistema')->insert([
            0 => [
                'id'            => 1,
                'subsistema_id' => 3,
                'semestre_id'   => 1,
                'libro_id'      => 1,
                'created_at' => '2019-05-27 00:00:00',
                'updated_at' => '2019-05-27 00:00:00'
            ],
            1 => [
                'id'            => 2,
                'subsistema_id' => 3,
                'semestre_id'   => 1,
                'libro_id'      => 2,
                'created_at' => '2019-05-27 00:00:00',
                'updated_at' => '2019-05-27 00:00:00'
            ],
            2 => [
                'id'            => 3,
                'subsistema_id' => 3,
                'semestre_id'   => 3,
                'libro_id'      => 3,
                'created_at' => '2019-05-27 00:00:00',
                'updated_at' => '2019-05-27 00:00:00'
            ],
            3 => [
                'id'            => 4,
                'subsistema_id' => 3,
                'semestre_id'   => 3,
                'libro_id'      => 4,
                'created_at' => '2019-05-27 00:00:00',
                'updated_at' => '2019-05-27 00:00:00'
            ],
            4 => [
                'id'            => 5,
                'subsistema_id' => 3,
                'semestre_id'   => 1,
                'libro_id'      => 5,
                'created_at' => '2019-05-27 00:00:00',
                'updated_at' => '2019-05-27 00:00:00'
            ],
            5 => [
                'id'            => 6,
                'subsistema_id' => 3,
                'semestre_id'   => 1,
                'libro_id'      => 6,
                'created_at' => '2019-05-27 00:00:00',
                'updated_at' => '2019-05-27 00:00:00'
            ],
            6 => [
                'id'            => 7,
                'subsistema_id' => 4,
                'semestre_id'   => 2,
                'libro_id'      => 7,
                'created_at' => '2019-05-27 00:00:00',
                'updated_at' => '2019-05-27 00:00:00'
            ],
            7 => [
                'id'            => 8,
                'subsistema_id' => 4,
                'semestre_id'   => 2,
                'libro_id'      => 8,
                'created_at' => '2019-05-27 00:00:00',
                'updated_at' => '2019-05-27 00:00:00'
            ],
            8 => [
                'id'            => 9,
                'subsistema_id' => 7,
                'semestre_id'   => 2,
                'libro_id'      => 9,
                'created_at' => '2019-05-27 00:00:00',
                'updated_at' => '2019-05-27 00:00:00'
            ],
            9 => [
                'id'            => 10,
                'subsistema_id' => 7,
                'semestre_id'   => 2,
                'libro_id'      => 10,
                'created_at' => '2019-05-27 00:00:00',
                'updated_at' => '2019-05-27 00:00:00'
            ],
            10 => [
                'id'            => 11,
                'subsistema_id' => 7,
                'semestre_id'   => 3,
                'libro_id'      => 9,
                'created_at' => '2019-05-27 00:00:00',
                'updated_at' => '2019-05-27 00:00:00'
            ],
            11 => [
                'id'            => 12,
                'subsistema_id' => 7,
                'semestre_id'   => 3,
                'libro_id'      => 10,
                'created_at' => '2019-05-27 00:00:00',
                'updated_at' => '2019-05-27 00:00:00'
            ],
            12 => [
                'id'            => 13,
                'subsistema_id' => 7,
                'semestre_id'   => 5,
                'libro_id'      => 9,
                'created_at' => '2019-05-27 00:00:00',
                'updated_at' => '2019-05-27 00:00:00'
            ],
            13 => [
                'id'            => 14,
                'subsistema_id' => 7,
                'semestre_id'   => 5,
                'libro_id'      => 10,
                'created_at' => '2019-05-27 00:00:00',
                'updated_at' => '2019-05-27 00:00:00'
            ],
            14 => [
                'id'            => 15,
                'subsistema_id' => 1,
                'semestre_id'   => 2,
                'libro_id'      => 9,
                'created_at' => '2019-05-27 00:00:00',
                'updated_at' => '2019-05-27 00:00:00'
            ],
            15 => [
                'id'            => 16,
                'subsistema_id' => 7,
                'semestre_id'   => 2,
                'libro_id'      => 10,
                'created_at' => '2019-05-27 00:00:00',
                'updated_at' => '2019-05-27 00:00:00'
            ],
            16 => [
                'id'            => 17,
                'subsistema_id' => 1,
                'semestre_id'   => 3,
                'libro_id'      => 9,
                'created_at' => '2019-05-27 00:00:00',
                'updated_at' => '2019-05-27 00:00:00'
            ],
            17 => [
                'id'            => 18,
                'subsistema_id' => 1,
                'semestre_id'   => 3,
                'libro_id'      => 10,
                'created_at' => '2019-05-27 00:00:00',
                'updated_at' => '2019-05-27 00:00:00'
            ],
            18 => [
                'id'            => 19,
                'subsistema_id' => 1,
                'semestre_id'   => 5,
                'libro_id'      => 9,
                'created_at' => '2019-05-27 00:00:00',
                'updated_at' => '2019-05-27 00:00:00'
            ],
            19 => [
                'id'            => 20,
                'subsistema_id' => 1,
                'semestre_id'   => 5,
                'libro_id'      => 10,
                'created_at' => '2019-05-27 00:00:00',
                'updated_at' => '2019-05-27 00:00:00'
            ],
            20 => [
                'id'            => 21,
                'subsistema_id' => 6,
                'semestre_id'   => 2,
                'libro_id'      => 9,
                'created_at' => '2019-05-27 00:00:00',
                'updated_at' => '2019-05-27 00:00:00'
            ],
            21 => [
                'id'            => 22,
                'subsistema_id' => 6,
                'semestre_id'   => 2,
                'libro_id'      => 10,
                'created_at' => '2019-05-27 00:00:00',
                'updated_at' => '2019-05-27 00:00:00'
            ],
            22 => [
                'id'            => 23,
                'subsistema_id' => 6,
                'semestre_id'   => 3,
                'libro_id'      => 9,
                'created_at' => '2019-05-27 00:00:00',
                'updated_at' => '2019-05-27 00:00:00'
            ],
            23 => [
                'id'            => 24,
                'subsistema_id' => 6,
                'semestre_id'   => 3,
                'libro_id'      => 10,
                'created_at' => '2019-05-27 00:00:00',
                'updated_at' => '2019-05-27 00:00:00'
            ],
            24 => [
                'id'            => 25,
                'subsistema_id' => 6,
                'semestre_id'   => 5,
                'libro_id'      => 9,
                'created_at' => '2019-05-27 00:00:00',
                'updated_at' => '2019-05-27 00:00:00'
            ],
            25 => [
                'id'            => 26,
                'subsistema_id' => 6,
                'semestre_id'   => 5,
                'libro_id'      => 10,
                'created_at' => '2019-05-27 00:00:00',
                'updated_at' => '2019-05-27 00:00:00'
            ],
        ]);
    }
}
