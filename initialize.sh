#!/bin/bash

# DB configuration
DB_DATABASE='school-manager'
DB_USERNAME='root'
DB_PASSWORD='Admin.12'

# Model configuration
models=(SubjectGroup Term Document Refrence Subject Room Schedule Mark Rank Achievement Student Teacher Lesson Course StudentCourses)
init_models=1
seeders=(SubjectGroupsTableSeeder TermsTableSeeder DocumentsTableSeeder RefrencesTableSeeder SubjectsTableSeeder RoomsTableSeeder SchedulesTableSeeder MarksTableSeeder RanksTableSeeder AchievementsTableSeeder StudentsTableSeeder TeachersTableSeeder LessonsTableSeeder CoursesTableSeeder)
make_seeders=1
# Init database
init_data_seeder=0

init_model_migration() {
    echo "Initializing model and migration..."
    if [[ $init_models -eq 1 && $models ]]; then
        for model in ${models[@]}; do
            echo "php artisan make:model ${model} -m -c"
            php artisan make:model ${model} -m -c
        done
    fi
    if [[ $make_seeders -eq 1 && $seeders ]]; then
        for seeder in ${seeders[@]}; do
            echo "php artisan make:seeder ${seeder}"
            php artisan make:seeder ${seeder}
            if [[ $init_data_seeder -eq 1 ]]; then
                echo "php artisan db:seed --class=${seeder}"
                php artisan db:seed --class=${seeder}
            fi
        done
    fi
    echo "End initializing model and migration!"
}

config() {
    echo "Configure..."
    echo "composer update"
    composer update
    cp .env.example .env
    sed -i "s|DB_DATABASE=homestead|DB_DATABASE=${DB_DATABASE}|g" .env
    sed -i "s|DB_USERNAME=homestead|DB_USERNAME=${DB_USERNAME}|g" .env
    sed -i "s|DB_PASSWORD=secret|DB_PASSWORD=${DB_PASSWORD}|g" .env
    echo "php artisan key:generate"
    php artisan key:generate
    echo "Configuration successfully!"
}

run() {
    config
    echo ""
    init_model_migration
}

run