@extends('layouts.main')
@section('container')
    {{-- Hero Section --}}
    <section class="pt-20">
        <div class="container">
            <div class="flex flex-wrap">
                <div id="page" class="w-full self-center px-4 lg:w-1/2">
                    <h1 class="font-semibold text-primary text-3xl md:text-4xl">Hello Friends!</h1>
                    <h2 class="text-warning font-medium text-lg mb-3 lg:text-xl">Welcome to my website.</h2>
                    <p class="text-slate-500 leading-relaxed mb-8">So in this website you'll find all of my portfolio,
                        interested?
                    </p>
                    <a href="/about" class="btn-primary px-8">Contact
                        Me</a>
                </div>
                <div class="w-full self-end px-4 lg:w-1/2">
                    <div class="relative mt-10 lg:mt-9 lg:right-0">
                        <img src="img/people1.png" alt="" class="max-w-full mx-auto">
                        <span class="absolute bottom-0 -z-10 left-1/2 -translate-x-1/2 md:scale-110 lg:scale-120">
                            <svg width="400" height="400" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#3730a3"
                                    d="M41.3,-65.2C54,-56,65.3,-45.5,71.7,-32.5C78.1,-19.4,79.5,-3.9,79,12.5C78.4,28.9,75.9,46.2,66.5,58.3C57.1,70.4,40.9,77.3,25.4,77.9C9.9,78.6,-4.9,72.9,-20.9,69.2C-36.9,65.4,-53.9,63.5,-62,53.9C-70,44.3,-69,27,-70.6,10.6C-72.2,-5.7,-76.4,-21.3,-71.6,-33C-66.7,-44.7,-52.8,-52.6,-39.4,-61.6C-26,-70.5,-13,-80.4,0.6,-81.4C14.2,-82.4,28.5,-74.4,41.3,-65.2Z"
                                    transform="translate(100 100) scale(1.1)" />
                            </svg>
                        </span>
                    </div>

                </div>
            </div>
        </div>
    </section>
    {{-- End Hero Section --}}
@endsection
