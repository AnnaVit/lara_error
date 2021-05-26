<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CategoryCreateTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testCategoryCreate()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('admin/news/')
                    ->assertSee(__('labels.create_category'))

                    ->clickLink(__('labels.create_category'))
                    ->assertSee('Список категорий')

                    ->clickLink(__('labels.create_category'))
                    ->assertSee(__('labels.new_category'))

                    ->type('name_category', '')
                    ->press(__('labels.save'))
                    ->assertSee('The name category field is required.')

                    ->type('name_category', '111111111111111111111111111111111111111111111111111111')
                    ->press(__('labels.save'))
                    ->assertSee('The name category must not be greater than 30 characters.')
                ;
        });
    }
}
