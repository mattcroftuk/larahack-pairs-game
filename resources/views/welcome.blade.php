@extends('layouts.master')

@section('body')

    <div class="flex flex-col">
        <div class="min-h-screen bg-pattern bg-center bg-smoke-light flex items-center justify-center leading-tight p-6 pb-16">
            <div>
                <div>
                    <h1 class="text-center font-semibold text-3xl tracking-tight mb-1">{{ config('app.name') }}</h1>
                </div>

                <h2 class="mt-12 font-light text-3xl sm:text-4xl text-center mb-4">
                    A Simple Pairs Game
                </h2>

                <div class="mt-12 sm:flex sm:justify-center">
                    <a class="no-underline mt-8 sm:mt-0 mx-auto sm:mx-2 max-w-xs rounded-full text-center leading-none font-semibold block px-8 py-3 border-2 border-brand-dark bg-brand-dark text-white" href="/play">
                        Play
                    </a>
                    <a class="no-underline mt-8 sm:mt-0 mx-auto sm:mx-2 max-w-xs rounded-full text-center leading-none font-semibold block px-8 py-3 border-2 border-brand-dark text-grey-dark" href="https://github.com/mattcroftuk/larahack-pairs-game" target="_blank">
                        Github Repository
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection