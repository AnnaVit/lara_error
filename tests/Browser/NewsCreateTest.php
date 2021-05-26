<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NewsCreateTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testCreateNews()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/news/create')
                    ->assertSee(__('labels.create_news'))

                    ->type('article[title]', '')
                    ->press('Save')
                    ->assertSee('The article.title field is required.')

                    ->type('article[title]', '12345')
                    ->press('Save')
                    ->assertSee('The article.title must be at least 10 characters.')

                    ->type('article[content]', '')
                    ->press('Save')
                    ->assertSee('The article.content field is required.')

                    ->type('article[title]', 'Test title')
                    ->type('article[content]', 'Test content')
                    ->select('article[news_category]', 'IT')
                    ->press('Save')
                    ->assertSee(__('labels.data_saved'));
        });
    }
}
