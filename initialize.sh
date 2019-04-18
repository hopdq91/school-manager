#!/bin/bash

models=(Subject)
init_models=1
seeders=(RolesTableSeeder PermissionTableSeeder UsersTableSeeder ModelHasPermissionsTableSeeder ModelHasRolesTableSeeder RoleHasPermissionsTableSeeder)
init_seeders=0

init() {
    if [[ $init_models -eq 1 && $models ]]; then
        for model in ${models[@]}; do
            php artisan make:model ${model} -m -c
        done
    fi
    if [[ $init_seeders -eq 1 && $seeders ]]; then
        for seeder in ${seeders[@]}; do
            php artisan db:seed --class=${seeder}
        done
    fi
}

init