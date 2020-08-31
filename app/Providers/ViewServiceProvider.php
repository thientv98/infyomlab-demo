<?php

namespace App\Providers;
use App\Models\User;
use App\Models\Level;
use App\Models\Question;
use App\Models\Role;

use Illuminate\Support\ServiceProvider;
use View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['quizzes.fields'], function ($view) {
            $roleItems = Role::pluck('title','id')->toArray();
            $view->with('roleItems', $roleItems);
        });
        View::composer(['quizzes.fields'], function ($view) {
            $userItems = User::pluck('name','id')->toArray();
            $view->with('userItems', $userItems);
        });
        View::composer(['level_role_configs.fields'], function ($view) {
            $roleItems = Role::pluck('title','id')->toArray();
            $view->with('roleItems', $roleItems);
        });
        View::composer(['level_role_configs.fields'], function ($view) {
            $levelItems = Level::pluck('title','id')->toArray();
            $view->with('levelItems', $levelItems);
        });
        View::composer(['answers.fields'], function ($view) {
            $questionItems = Question::pluck('title','id')->toArray();
            $view->with('questionItems', $questionItems);
        });
        View::composer(['questions.fields'], function ($view) {
            $roleItems = Role::pluck('title','id')->toArray();
            $view->with('roleItems', $roleItems);
        });
        //
    }
}