<x-guest-layout>
    <header class="mt-0 mb-12">
        <h1 class="text-5xl font-extrabold dark:text-white">Welcome to Shop Front</h1>
    </header>

    <section class="flex flex-wrap max-w-7/8 mx-auto gap-4">

        <article class="max-w-sm rounded-lg overflow-hidden shadow-lg bg-white">

            <a href="https://commons.wikimedia.org/wiki/File:Mes_pompes_de_s%C3%A9cu.JPG">
                <img src="{{ route('image.show', ['imageName' => 'mes_pompes_de_sécu.jpg']) }}"
                     alt="mes_pompes_de_sécu"
                     class="mx-auto pb-1 rounded-t-lg">
            </a>

            <section class="px-6 py-4">
                <header>
                    <h4 class="font-bold text-xl mb-2">
                        Used Safety Boots
                    </h4>
                </header>

                <div>
                    <p class="text-gray-700 text-base">
                        Original description in French:
                        <span lang="fr_FR">Mes chaussures de sécurité</span>. With credit to
                        <a href="https://commons.wikimedia.org/wiki/File:Mes_pompes_de_s%C3%A9cu.JPG">
                            Classiccardinal
                        </a>, <a href="https://creativecommons.org/licenses/by-sa/4.0">CC BY-SA 4.0</a>,
                        via Wikimedia Commons
                    </p>

                    <div class="mt-4 px-2 text-right">
                        <span class="text-2xl font-bold">$19.99</span>
                    </div>
                </div>

                <footer class="px-2 pt-4 pb-2 flex justify-between items-center">
                    <a href="#" class="text-blue-500 hover:text-blue-700">More Details</a>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Add to Cart
                    </button>
                </footer>
            </section>

        </article>

    </section>
</x-guest-layout>
