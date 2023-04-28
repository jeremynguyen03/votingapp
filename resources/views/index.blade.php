<x-app-layout>
    {{-- Begiin .filters --}}
    <div class="filters flex space-x-6">
        <div class="w-1/3">
            <select name="category" id="category" class="w-full border-none rounded-xl px-4 py-2">
                <option value="Category One">Category One</option>
                <option value="Category One">Category Two</option>
                <option value="Category One">Category Three</option>
                <option value="Category One">Category Four</option>
            </select>
        </div>
        <div class="w-1/3">
            <select name="other_filters" id="other_filters" class="w-full border-none rounded-xl px-4 py-2">
                <option value="Filter One">Filter One</option>
                <option value="Filter Two">Filter Two</option>
                <option value="Filter Three">Filter Three</option>
                <option value="Filter Four">Filter Four</option>
            </select>
        </div>
        <div class="w-2/3 relative">
            <input type="search" placeholder="Find an Idea"
                   class="w-full rounded-xl bg-white px-4 py-2 pl-8 border-none placeholder-gray-900">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                     class="w-4 h-4 text-gray-700">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"/>
                </svg>
            </div>
        </div>
    </div>{{-- end .filters --}}

    <div class="ideas-container space-y-6 my-6">{{-- Begiin .ideas-container --}}
        {{-- Begin .idea-container --}}
        <div class="idea-container bg-white rounded-xl flex hover:shadow-card cursor-pointer transition duration-250 ease-in">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>
                <div class="mt-8">
                    <button
                        class="w-20 bg-gray-200 border border-gray-200
                        hover:border-gray-400 transition duration-250 ease-in
                        font-bold text-xss uppercase rounded-xl px-4 py-3">
                        Vote
                    </button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
                         class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">Lorem ipsum dolor sit amet.</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid animi beatae commodi
                        consectetur cumque cupiditate doloribus ducimus eaque, eligendi incidunt magnam nulla placeat,
                        quae quaerat quibusdam quidem ratione repellendus, repudiandae rerum vel velit veritatis
                        voluptatem. Ab adipisci dolore eaque error, exercitationem hic nam, nihil perspiciatis suscipit
                        veritatis voluptatem voluptatum?
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category One</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 comments</div>
                        </div>

                        <div class="flex items-center space-x-2">
                            <div class="bg-gray-200 text-xxs font-bold uppercase leading-none
                            rounded-full text-center w-28 h-7 py-2 px-4">Open
                            </div>
                            <button
                                class="bg-gray-100 hover:bg-gray-200 rounded-full h-7
                                transition duration-250 ease-in py-2 px-4 relative">
                                <svg fill="currentColor" width="24" height="6">
                                    <path
                                        d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"
                                        style="color: rgba(163, 163, 163, .5)"/>
                                </svg>
                                <ul class="hidden absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8 shadow-dialog">
                                    <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Mark as Spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Delete Post</a></li>
                                </ul>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>{{-- end idea-container --}}
        {{-- Begin .idea-container --}}
        <div class="idea-container bg-white rounded-xl flex hover:shadow-card cursor-pointer transition duration-250 ease-in">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-blue text-2xl">66</div>
                    <div class="text-gray-500">Votes</div>
                </div>
                <div class="mt-8">
                    <button
                        class="w-20 bg-gray-200 bg-blue text-white border border-gray-200
                        hover:border-gray-400 transition duration-250 ease-in
                        font-bold text-xss uppercase rounded-xl px-4 py-3">
                        Vote
                    </button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
                         class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">Lorem ipsum dolor sit amet.</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquid aspernatur delectus
                        dolore dolorem dolorum ea esse est et eum facere id illo illum impedit in laudantium magni modi,
                        nam nisi numquam obcaecati pariatur quasi ratione reiciendis repellendus reprehenderit similique
                        sit suscipit tempora tempore temporibus unde ut voluptatum? Ab, accusamus animi dignissimos
                        dolorem eum iure laudantium, modi natus omnis porro praesentium qui quis repudiandae soluta sunt
                        ut voluptates! Ad consequuntur doloribus eligendi, excepturi illum iste neque nulla porro sunt.
                        Aliquam assumenda earum, eius eligendi est eum laborum magni non quos repudiandae tempora unde
                        vel vero? Expedita id laborum quae sed.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category One</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 comments</div>
                        </div>

                        <div class="flex items-center space-x-2">
                            <div class="bg-gray-200 text-xxs font-bold uppercase leading-none
                            rounded-full text-center w-28 h-7 py-2 px-4 bg-yellow text-white">In Progress
                            </div>
                            <button
                                class="bg-gray-100 hover:bg-gray-200 rounded-full h-7
                                transition duration-250 ease-in py-2 px-4 relative">
                                <svg fill="currentColor" width="24" height="6">
                                    <path
                                        d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"
                                        style="color: rgba(163, 163, 163, .5)"/>
                                </svg>
                                <ul class="hidden absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8 shadow-dialog">
                                    <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Mark as Spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Delete Post</a></li>
                                </ul>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>{{-- end idea-container --}}
        {{-- Begin .idea-container --}}
        <div class="idea-container bg-white rounded-xl flex hover:shadow-card cursor-pointer transition duration-250 ease-in">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">32</div>
                    <div class="text-gray-500">Votes</div>
                </div>
                <div class="mt-8">
                    <button
                        class="w-20 bg-gray-200 border border-gray-200
                        hover:border-gray-400 transition duration-250 ease-in
                        font-bold text-xss uppercase rounded-xl px-4 py-3">
                        Vote
                    </button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
                         class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">Lorem ipsum dolor sit amet.</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad amet aspernatur assumenda corporis
                        debitis dicta distinctio dolore dolores ea enim, impedit, laudantium maiores nihil obcaecati
                        omnis placeat porro quae quia repellendus repudiandae, sed ut vitae. Accusamus alias eaque eum
                        fugiat, magnam minus modi natus! Beatae eligendi et nostrum saepe voluptates?
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category One</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 comments</div>
                        </div>

                        <div class="flex items-center space-x-2">
                            <div class="bg-gray-200 text-xxs font-bold uppercase leading-none
                            rounded-full text-center w-28 h-7 py-2 px-4 bg-red text-white">Closed
                            </div>
                            <button
                                class="bg-gray-100 hover:bg-gray-200 rounded-full h-7
                                transition duration-250 ease-in py-2 px-4 relative">
                                <svg fill="currentColor" width="24" height="6">
                                    <path
                                        d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"
                                        style="color: rgba(163, 163, 163, .5)"/>
                                </svg>
                                <ul class="hidden absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8 shadow-dialog">
                                    <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Mark as Spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Delete Post</a></li>
                                </ul>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>{{-- end idea-container --}}
        {{-- Begin .idea-container --}}
        <div class="idea-container bg-white rounded-xl flex hover:shadow-card cursor-pointer transition duration-250 ease-in">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">22</div>
                    <div class="text-gray-500">Votes</div>
                </div>
                <div class="mt-8">
                    <button
                        class="w-20 bg-gray-200 border border-gray-200
                        hover:border-gray-400 transition duration-250 ease-in
                        font-bold text-xss uppercase rounded-xl px-4 py-3">
                        Vote
                    </button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
                         class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">Lorem ipsum dolor sit amet.</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad aliquid blanditiis consectetur
                        cum dicta dolorum ducimus ea enim error fugiat harum in ipsa ipsum iusto magnam magni minus,
                        molestiae necessitatibus nemo pariatur perferendis placeat porro, praesentium quasi qui rem
                        repellat repellendus rerum saepe tempora unde vel vitae. Ab, hic.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category One</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 comments</div>
                        </div>

                        <div class="flex items-center space-x-2">
                            <div class="bg-gray-200 text-xxs font-bold uppercase leading-none
                            rounded-full text-center w-28 h-7 py-2 px-4 bg-green text-white">Implemented
                            </div>
                            <button
                                class="bg-gray-100 hover:bg-gray-200 rounded-full h-7
                                transition duration-250 ease-in py-2 px-4 relative">
                                <svg fill="currentColor" width="24" height="6">
                                    <path
                                        d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"
                                        style="color: rgba(163, 163, 163, .5)"/>
                                </svg>
                                <ul class="hidden absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8 shadow-dialog">
                                    <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Mark as Spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Delete Post</a></li>
                                </ul>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>{{-- end idea-container --}}
    </div>{{-- end .ideas-container --}}

</x-app-layout>
