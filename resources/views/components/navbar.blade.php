<nav class="relative flex w-full flex-wrap justify-end" data-te-navbar-ref>
    <div class="flex w-full flex-wrap items-right justify-between pr-9 pt-9 lg:pr-24 lg:pt-24">
        <div>
        </div>
        <!-- Right elements -->
        <div class="relative flex">
            <ul class="list-style-none flex flex-row text-xl" data-te-navbar-nav-ref>
                <li data-te-nav-item-ref>
                    <a class="{{ request()->is('/') ? 'active [&.active]:text-blue-light' : 'text-hover' }}  hover:text-black"
                        href="/" data-te-nav-link-ref>Work</a>
                </li>
                <li class="pl-12" data-te-nav-item-ref>
                    <a class="{{ request()->is('about') ? 'active [&.active]:text-black' : 'text-white' }} hover:text-neutral-700"
                        href="/about" data-te-nav-link-ref>About</a>
                </li>
            </ul>
        </div>
        <!-- Right elements -->
    </div>
</nav>
