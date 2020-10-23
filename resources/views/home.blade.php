<?php
use \App\Http\Controllers\MealsController;
?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="http://andybarrington.co.uk/public/css/style.css">

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    MealPlan
                </div>

                <h3>Adult Meals</h3>
                <div class="days flex">
                    
                    @for ($i = 0; $i < 7; $i++)  
                        @if ($adultmeal[$i]->user_category != 'adults')
                            <div class="day">
                                <div class="mealTitle">{{ $adultmeal[$i]->meal_title }}</div>
                            </div>

                            @else                        
                                <div class="day ">
                                    <div class="mealTitle">{{ $adultmeal[$i]->meal_title }}</div>
                                   <div class="kidsmeal mealTitle">{{ $kidsmeal[$i]->meal_title }}</div>
                                </div>    
                        @endif
                    @endfor
                </div>

            </div>
        </div>
    </body>
</html>
