<div class="container pt-10 pb-9 backdrop-filter backdrop-brightness-100 backdrop-blur-3xl mx-auto">
    <nav class="flex justify-between">
        <a href="/" class="justify-start">
            <img src="{{ URL::asset('images\logo.png') }}" alt="logo">
        </a>
        <div class="justify-center">
            <div class="dropdown inline-block relative">
                <button class="text-gray-400 py-2 pr-9 rounded inline-flex items-center">
                    <span class="mr-1">Accueil</span>
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                    </svg>
                </button>
                <ul class="dropdown-menu absolute hidden text-gray-700 pt-1">
                    <li class=""><a
                            class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap"
                            href="/#about">A propos.</a></li>
                    <li class=""><a
                            class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap"
                            href="/#services">Nos Services</a>
                    </li>
                    <li class=""><a
                            class="rounded-b bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap"
                            href="/#offers">Pourquoi nous?</a></li>
                </ul>
            </div>
            <a href="/Blog" class="py-2 pr-9 mt-5 text-gray-400	">Blog</a>
            <a href="/#contact" class="pr-9 mt-5 text-gray-400	py-2">Contact</a>
        </div>
        <div class="justify-end">
            <div class="flex justify-content-between">
                <a href="/Connexion" class="pr-3 mt-5 text-gray-400	">Connexion</a>
                <div class=" mt-4">
                    <a href="/Inscription"
                        class="text-white rounded-full py-3 px-6 bg-gradient-to-r from-green-400 to-blue-500
                        hover:from-pink-500 hover:to-yellow-500">Créez
                        un compte</a>
                </div>
            </div>
        </div>
    </nav>
    <div>

    </div>
</div>
