<?php
/*
 * kirby 3 plugin - Disable Google's FLoC tracking
 *
 */

 Kirby::plugin('bvdputte/flocoff', [
    'options' => [
        'enabled' => true
    ],
    'hooks' => [
        'route:before' => function (): void {
            if (option('bvdputte.flocoff.enabled')) {
                kirby()->response()->header('Permissions-Policy', 'interest-cohort=()', true);
            }
        }
    ]
]);
