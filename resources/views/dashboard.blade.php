<x-app-layout>
    <x-slot name="header">
        <div class=" py-2.5 mb-1 px-5">
            <h1 class="font-bold text-xl text-blue-500">Tweety</h1>
        </div>
        <x-header-links></x-header-links>
        <a href="" class="p-3 text-center w-full text-white font-bold text-lg bg-blue-500 rounded-full">Tweet</a>
    </x-slot>

    <div class="border-gray-100 border-l border-r">
        <div class="px-4 border-b border-gray-100">
            <h2 class="py-4 text-xl font-bold">Home</h2>
        </div>
        <div class="flex items-start p-3">
            <img src="https://i.pravatar.cc/48" alt="" class="rounded-full mr-3">
            <div class="relative flex-1">
                <form action="" method="POST">
                    @csrf
                    <div contenteditable class="py-2.5 text-lg"></div>
                    <span class="py-2.5 text-lg absolute top-0 inset-x-0 pointer-events-none text-gray-300">Whats' happening?</span>
                    <div class="w-full flex items-center justify-between mt-3">
                        <div></div>
                        <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 text-md text-bold rounded-full">Tweet</button>
                    </div>
                </form>
            </div>
        </div>
        <hr class="border-t-8 border-gray-100">
        <article class="border-b border-gray-100 p-3 hover:bg-gray-50">
            <div class="flex items-start">
                <img src="https://i.pravatar.cc/48" alt="" class="rounded-full mr-3">
                <div class="flex-1 flex flex-col">
                    <div class="flex justify-between">
                        <div>
                            <a href="#" class="group">
                                <span class="font-bold text-md mr-1 group-hover:underline">Taylor Otwell</span>
                                <span class="text-md text-gray-500">@taylowotwell</span>
                            </a>
                            <span class="px-1 text-gray-500 text-md">&#183;</span>
                            <a href="" class="group">
                                <span class="text-md text-gray-500 group-hover:underline">1 hour</span>
                            </a>
                        </div>
                        <div>
                            <button><i class="fas fa-ellipsis-h"></i></button>
                        </div>
                    </div>
                    <div>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Praesentium libero minima quo, tempore eligendi earum officiis
                        blanditiis maiores rem beatae nostrum accusamus labore distinctio
                        sapiente, facilis animi, explicabo necessitatibus obcaecati!
                    </div>
                    <div class="flex">
                        <div class="flex space-x-8 -mx-3 mt-3">
                            <div class="flex items-center group">
                                <div class="mr-1 flex items-center justify-center rounded-full text-gray-500 text-md h-10 w-10 group-hover:bg-blue-50 group-hover:text-blue-500">
                                    <i class="far fa-comment"></i>
                                </div>
                                <span class="text-gray-500 text-xs group-hover:text-blue-500">12</span>
                            </div>
                            <div class="flex items-center group">
                                <div class="mr-1 flex items-center justify-center rounded-full text-gray-500 text-md h-10 w-10 group-hover:bg-blue-50 group-hover:text-blue-500">
                                    <i class="fas fa-retweet"></i>
                                </div>
                                <span class="text-gray-500 text-xs group-hover:text-blue-500">4</span>
                            </div>
                            <div class="flex items-center group">
                                <div class="mr-1 flex items-center justify-center rounded-full text-gray-500 text-md h-10 w-10 group-hover:bg-blue-50 group-hover:text-blue-500">
                                    <i class="far fa-heart"></i>
                                </div>
                                <span class="text-gray-500 text-xs group-hover:text-blue-500">128</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </div>

    <x-slot name="aside">
        <div class="px-1">
            <h2 class="py-4 text-xl font-bold">Friends</h2>
        </div>
        <x-friends-list></x-friends-list>
    </x-slot>
</x-app-layout>
