@extends('layouts.main')
@section('container')
    {{-- About --}}
    <section class="mt-20 pt-20 pb-32 bg-blue-100">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-10 lg:w-1/2">
                    <h3 class="font-bold mb-2 text-primary text-xl md:text-2xl text-center lg:text-left">About Me</h3>
                    <h2
                        class="font-light mb-2 leading-relaxed text-lg text-gray-700 md:text-2xl lg:max-w-md text-center lg:text-left">
                        # Never
                        stop
                        trying so
                        you
                        <span
                            class="before:block before:absolute before:-inset-1 before:skew-y-3 before:bg-sky-400 relative inline-block hover:before:bg-sky-500 before:transition before:duration-300">
                            <span class="relative text-white">could be</span>
                        </span>
                        the best. - <span class="font-serif text-black underline"> Adam Levine.</span>
                    </h2>
                    <p class="text-gray-600 text-base max-w-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Sint
                        molestias
                        saepe nobis deserunt
                        harum quae omnis.</p>
                </div>
                <div class="w-full px-4 lg:w-1/2 h-full">
                    <h3 class="font-bold mb-2 text-primary text-xl md:text-2xl text-center lg:text-left">Connect
                        with me
                    </h3>
                    <p class="text-gray-600 text-base mb-5 lg:max-w-lg">Lorem ipsum dolor sit amet consectetur
                        adipisicing
                        elit.
                        Aliquam, dolorum laboriosam
                        architecto
                        provident exercitationem sit culpa.</p>
                    <div class="flex items-center">
                        <a href="" target="_blank"
                            class="flex w-9 h-9 mr-3 rounded-full justify-center items-center text-blue-900 hover:bg-primary hover:text-white transition duration-300 hover:shadow-md">
                            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <title>Facebook</title>
                                <path
                                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </a>
                        <a href="" target="_blank"
                            class="flex w-9 h-9 mr-3 rounded-full justify-center items-center text-slate-900 hover:bg-slate-900 hover:text-white transition duration-300 hover:shadow-md">
                            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <title>Instagram</title>
                                <path
                                    d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                            </svg>
                        </a>
                        <a href="" target="_blank"
                            class="flex w-9 h-9 mr-3 rounded-full justify-center items-center text-slate-900 hover:bg-slate-900 hover:text-white transition duration-300 hover:shadow-md">
                            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <title>GitHub</title>
                                <path
                                    d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
                            </svg>
                        </a>
                        <a href="" target="_blank"
                            class="flex w-9 h-9 mr-3 rounded-full justify-center items-center text-slate-900 hover:bg-slate-900 hover:text-white transition duration-300 hover:shadow-md">
                            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <title>TikTok</title>
                                <path
                                    d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End About --}}

    {{-- Contact --}}
    <section class="pb-16 bg-blue-200">
        <div class="container">
            <div class="flex flex-col ">
                <div class="w-full max-w-xl mx-auto text-center mb-16">
                    <h2 class="font-bold text-3xl md:text-4xl text-primary pt-16 mb-2">Contact Me</h2>
                    <p class="font-medium text-md text-slate-500">Lorem ipsum dolor, sit amet consectetur adipisicing
                        elit.
                        Dolores in
                        aspernatur
                        corporis perspiciatis
                        quibusdam explicabo deserunt sapiente ea consectetur qui?</p>
                </div>
                <form action="" id="contact-us">
                    <div class="w-full lg:w-2/3 mx-auto">
                        <div class="w-full px-4 mb-8 mx-auto">
                            <label for="email" class="text-base font-bold text-warning">Email</label>
                            <input type="email" name="email" id="email"
                                class="w-full bg-gray-200 text-slate-900 p-3 rounded-md focus:outline-none focus:ring-blue-600 focus:ring-2 focus:border-primary">
                        </div>
                        <div class="w-full px-4 mb-8 mx-auto">
                            <label for="name" class="text-base font-bold text-warning">Name</label>
                            <input type="text" name="name" id="name"
                                class="w-full bg-gray-200 text-slate-900 p-3 rounded-md focus:outline-none focus:ring-blue-600 focus:ring-2 focus:border-primary">
                        </div>
                        <div class="w-full px-4 mb-8 mx-auto">
                            <label for="messages" class="text-base font-bold text-warning">Messages</label>
                            <textarea name="messages" id="messages"
                                class="w-full h-28 p-3 bg-gray-200 text-slate-900 rounded-md focus:outline-none focus:ring-blue-600 focus:ring-2 focus:border-primary"></textarea>
                        </div>
                        <div class="w-full px-4 mb-8 mx-auto text-center">
                            <button class="btn-primary px-20">Contact us</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    {{-- End Contact --}}
@endsection
