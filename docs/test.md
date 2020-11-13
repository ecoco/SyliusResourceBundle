# Testing

Details on how to run the tests can be found in the [github workflow](https://github.com/Sylius/SyliusResourceBundle/actions?query=workflow%3ABuild)

If needed restrict to a version of symfony for example `4.4.*` or `5.1.*` (check to workflow file for the current versions)

    composer global require --no-progress --no-scripts --no-plugins "symfony/flex:^1.10"
    composer config extra.symfony.require "{{ symfony version }}"
    (cd src/Component && composer config extra.symfony.require "{{ symfony-version }}")

Install dependencies

    composer update 
    (cd src/Component && composer update)

Prepare test application

    (cd src/Bundle/test && app/console doctrine:database:create)
    (cd src/Bundle/test && app/console doctrine:schema:create)

Run analysis

    composer analyse
    (cd src/Component && composer validate --strict)
        
name: Run component tests

    run: (cd src/Component && vendor/bin/phpspec run)

Run bundle tests

    run: composer test
