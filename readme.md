# Kirby 3 Disable FLoC

Disables Google's FLoC tracking for your website's visitors by adding a 'Permissions-Policy' HTTP header.

More information about FLoC:

[What is Federated Learning of Cohorts (FLoC)?](https://web.dev/floc/)
[Federated Learning of Cohorts (FLoC)](https://github.com/WICG/floc)
[Google’s FLoC Is a Terrible Idea](https://www.eff.org/deeplinks/2021/03/googles-floc-terrible-idea)

## Installation

- unzip [master.zip](https://github.com/bvdputte/kirby-floc-off/archive/master.zip) as folder `site/plugins/kirby-floc-off` or
- `git submodule add https://github.com/bvdputte/kirby-floc-off.git site/plugins/kirby-floc-off`
- `composer require bvdputte/kirby-floc-off`

That's it. The plugin is already functional and activated and should exclude your website from FLoC tracking.

## Usage

This plugin adds an HTTP header to your Kirby 3 website that disables Google's "Federated Learning of Cohorts" tracking. The following header will be added:

`Permissions-Policy: interest-cohort=()`

## Options

1. Disable plugin:

```php
// config.php
return [
    'bvdputte.flocoff.enabled' => false
];
```

## Disclaimer

This plugin is provided "as is" with no guarantee. Use it at your own risk and always test it yourself before using it in a production environment. If you find any issues, please [create a new issue](https://github.com/bvdputte/kirby-floc-off/issues/new).

## License

[MIT](https://opensource.org/licenses/MIT)

It is discouraged to use this plugin in any project that promotes racism, sexism, homophobia, animal abuse, violence or any other form of hate speech.
