<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg width="192" height="64" viewBox="0 0 192 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23.56 23.176H13.96V17.848H40.6V23.176H31.048V49H23.56V23.176ZM41.9309 25.768H49.0829L53.4029 42.616L58.0109 25.768H64.8749L69.6749 42.616L73.8029 25.768H80.6189L73.0349 49H65.9309L61.3229 33.304L56.8109 49H49.7069L41.9309 25.768ZM95.7516 49.48C87.5276 49.48 83.4156 46.968 83.4156 41.944V33.592C83.4156 30.68 84.3436 28.568 86.1996 27.256C88.0876 25.944 90.9836 25.288 94.8876 25.288C98.5676 25.288 101.256 25.928 102.952 27.208C104.68 28.456 105.544 30.584 105.544 33.592V39.256H90.4716V41.368C90.4716 42.712 90.9516 43.672 91.9116 44.248C92.8716 44.824 94.5996 45.112 97.0956 45.112C99.3996 45.112 101.992 44.776 104.872 44.104V48.568C102.024 49.176 98.9836 49.48 95.7516 49.48ZM98.8716 35.272V31.912C98.8716 31.144 98.5516 30.568 97.9116 30.184C97.3036 29.8 96.2636 29.608 94.7916 29.608C93.0956 29.608 91.9596 29.8 91.3836 30.184C90.7756 30.6 90.4716 31.176 90.4716 31.912V35.272H98.8716ZM122.564 49.48C114.34 49.48 110.228 46.968 110.228 41.944V33.592C110.228 30.68 111.156 28.568 113.012 27.256C114.9 25.944 117.796 25.288 121.7 25.288C125.38 25.288 128.068 25.928 129.764 27.208C131.492 28.456 132.356 30.584 132.356 33.592V39.256H117.284V41.368C117.284 42.712 117.764 43.672 118.724 44.248C119.684 44.824 121.412 45.112 123.908 45.112C126.212 45.112 128.804 44.776 131.684 44.104V48.568C128.836 49.176 125.796 49.48 122.564 49.48ZM125.684 35.272V31.912C125.684 31.144 125.364 30.568 124.724 30.184C124.116 29.8 123.076 29.608 121.604 29.608C119.908 29.608 118.772 29.8 118.196 30.184C117.588 30.6 117.284 31.176 117.284 31.912V35.272H125.684ZM149.329 49.48C148.145 49.48 147.153 49.432 146.353 49.336C145.553 49.24 144.753 49.048 143.953 48.76C143.057 48.472 142.321 48.072 141.745 47.56C141.201 47.048 140.753 46.344 140.401 45.448C140.017 44.52 139.825 43.448 139.825 42.232V30.088H135.121V25.768H139.825V19.048H146.833V25.768H153.217V30.088H146.833V41.032C146.833 42.152 146.929 43 147.121 43.576C147.313 44.12 147.681 44.52 148.225 44.776C148.769 45 149.601 45.112 150.721 45.112C151.169 45.112 152.001 45.032 153.217 44.872V49.24C151.713 49.4 150.417 49.48 149.329 49.48ZM163.836 48.808L154.572 25.768H162.204L167.436 42.184L172.188 25.768H179.436L166.716 58.984H159.612L163.836 48.808Z" fill="#1DA1F2"/>
                    </svg>
                </div>

                <div class="text-center">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>

                <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                </div>
            </div>
        </div>
    </body>
</html>
