<?php

it('dd exists', function (): void {
    expect(function_exists('dd'))->toBeTrue();
});
