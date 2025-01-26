<?php

declare(strict_types=1);

test('home page is accessible', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
    $response->assertSee('Hello, Mundo!');

});
