<?php

test('test submit', function () {
    $page = visit('/');

    $page->click('Test')
        ->assertSee('Hello from JS!')
        ->screenshot();
});
