<?php

use Illuminate\Database\Seeder;

class ImageTargetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('image_targets')->insert([
            [
                'id' => 1,
                'generated_id' => 'd302e05fb844446585e2bd58fbdf0c7e',
                'name' => 'Tester',
                'width' => 1024,
                'metadata' => 'Tester',
                'fbx_file' => 'https://storage.googleapis.com/bimstore-eye/A.fbx',
                'created_at' => date_create('now')->format('Y-m-d H:i:s'),
                'updated_at' => date_create('now')->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'generated_id' => 'bba03cdacd784c1792806225260bc110',
                'name' => 'Cube',
                'width' => 300,
                'metadata' => 'Cube',
                'fbx_file' => 'https://storage.googleapis.com/bimstore-eye/B.fbx',
                'created_at' => date_create('now')->format('Y-m-d H:i:s'),
                'updated_at' => date_create('now')->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 3,
                'generated_id' => 'ce40e375233645aa9f59c4a973ee341f',
                'name' => 'Capsule',
                'width' => 300,
                'metadata' => 'Capsule',
                'fbx_file' => 'https://storage.googleapis.com/bimstore-eye/C.fbx',
                'created_at' => date_create('now')->format('Y-m-d H:i:s'),
                'updated_at' => date_create('now')->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 4,
                'generated_id' => 'd302e05fb844446585e2bd58fbdf0c7e',
                'name' => 'Brick002',
                'width' => 300,
                'metadata' => 'Brick002',
                'fbx_file' => 'https://storage.googleapis.com/bimstore-eye/D.fbx',
                'created_at' => date_create('now')->format('Y-m-d H:i:s'),
                'updated_at' => date_create('now')->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 5,
                'generated_id' => 'd302e05fb844446585e2bd58fbdf0c7e',
                'name' => 'Rock',
                'width' => 300,
                'metadata' => 'Rock',
                'fbx_file' => 'https://storage.googleapis.com/bimstore-eye/E.fbx',
                'created_at' => date_create('now')->format('Y-m-d H:i:s'),
                'updated_at' => date_create('now')->format('Y-m-d H:i:s'),
            ]
        ]);
    }
}
