<?php

namespace Tests\Feature\Categories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategryMainTest extends TestCase
{
    public function testIndex()
    {


        $response = $this->get('category/index');
        $response->assertStatus(200);
        $response->assertJson([

            [
                'id' => 1,
                'name' => 'Category 1',
                'discrption' => 'Category 1 Description',
            ],
            [
                'id' => 2,
                'name' => 'Category 2',
                'discrption' => 'Category 2 Description',
            ],
            [
                'id' => 3,
                'name' => 'Category 3',
                'discrption' => 'Category 3 Description',
            ],

        ]);
    }
}
