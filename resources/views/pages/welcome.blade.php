<x-guest-layout>
    <section class="mt-0 mb-12">
        <h1 class="text-5xl font-extrabold dark:text-white">Welcome to Shop Front</h1>
    </section>

    <div class="flex flex-wrap max-w-7/8 mx-auto">
        <section
            class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="https://commons.wikimedia.org/wiki/File:Mes_pompes_de_s%C3%A9cu.JPG">
                <img src="{{ route('image.show', ['imageName' => 'mes_pompes_de_sécu.jpg']) }}"
                     alt="mes_pompes_de_sécu"
                     class="mx-auto pb-1 rounded-t-lg">
            </a>

            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        Used Safety Boots
                    </h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Original description in French:
                    <span lang="fr_FR">Mes chaussures de sécurité</span>. With credit to
                    <a href="https://commons.wikimedia.org/wiki/File:Mes_pompes_de_s%C3%A9cu.JPG">
                        Classiccardinal
                    </a>, <a href="https://creativecommons.org/licenses/by-sa/4.0">CC BY-SA 4.0</a>,
                    via Wikimedia Commons
                </p>

                <a href="#"
                   class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                         fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </section>
    </div>
</x-guest-layout>
