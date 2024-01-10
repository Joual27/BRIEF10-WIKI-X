<?php require APPROOT . '/views/incFile/header.php'; ?>

<section class="dark:bg-gray-900 min-h-[100vh]">
<nav class="bg-white border-gray-200 dark:bg-gray-900 ">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
  <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
      <span class="self-center text-[1.1rem] font-semibold whitespace-nowrap dark:text-violet-400">WIKI-X</span>
  </a>
  <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
              <a href="<?= URLROOT."/pages/login" ?>" target="_blank"
                    class="hidden md:inline-flex items-center gap-[5px] w-full px-6 py-3 mb-2 mr-2 text-sm  font-medium text-gray-900  border border-gray-200 rounded-lg  focus:outline-none hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-inherit  dark:text-violet-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                    <img class="w-[20px] h-[20px]" src="<?= URLROOT."/imgs/login.png" ?>" alt="hero image">
                    LOGIN
            </a>
      <button  id="navToggler" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" >
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
  </div>
  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
    <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
      <li>
        <a href="#" class="block py-2 px-3 md:p-0 text-white bg-violet-400 rounded md:bg-transparent md:text-blue-700 md:dark:text-violet-400" aria-current="page">Home</a>
      </li>
      <li>
        <a href="#" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-violet-400 md:dark:hover:text-violet-400 dark:text-white dark:hover:bg-gray-700 dark:hover:text-violet-400 md:dark:hover:bg-transparent dark:border-gray-700">WIKIS</a>
      </li>
      <li>
        <a href="#" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-violet-400 md:dark:hover:text-violet-400 dark:text-white dark:hover:bg-gray-700 dark:hover:text-violet-400 md:dark:hover:bg-transparent dark:border-gray-700">CATEGORIES</a>
      </li>
      <li>
        <a href="#" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-violet-400 md:dark:hover:text-violet-400 dark:text-white dark:hover:bg-gray-700 dark:hover:text-violet-400 md:dark:hover:bg-transparent dark:border-gray-700">STATS</a>
      </li>
    </ul>
  </div>
  </div>
</nav>

    <div class="grid text-center max-w-screen-xl pt-20 pb-8 mt-[2rem] mx-auto xl:text-left lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28 "> 
        <div class="px-[4%] md: mr-auto place-self-center lg:col-span-7 ">
            <h1
                class=" max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-4xl xl:text-5xl dark:text-white">
                WikiVerse: Unveiling Knowledge <br>&amp; Empowering Minds
            </h1>

            <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">This
                  Embark on a journey of discovery with WIKI-X, your gateway to a vast universe of knowledge. Explore, contribute, and learn together as we illuminate the paths of curiosity. Join our community where information meets inspiration, and together, we shape a world enriched by shared wisdom.
            </p>

            <div class= "w-[50%] mx-auto mt-[4rem] flex justify-center flex-col gap-[5px] md:w-[50%] lg:flex-row lg:justify-start lg:mx-0">
                <a href="<?= URLROOT."/pages/login" ?>" target="_blank"
                    class="inline-flex items-center gap-[5px]  w-full px-8 py-3 mb-2 mr-2 text-sm font-medium text-gray-900  border border-gray-200 rounded-lg sm:w-auto focus:outline-none hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-inherit dark:text-violet-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                    <img class="w-[20px] h-[20px]" src="<?= URLROOT."/imgs/login.png" ?>" alt="hero image">
                    LOGIN
                </a>
                <a href="<?= URLROOT."/pages/register" ?>" target="_blank"
                    class="inline-flex items-center gap-[5px]  w-full px-8 py-3 mb-2 mr-2 text-sm font-medium text-gray-900  border border-gray-200 rounded-lg sm:w-auto focus:outline-none hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-inherit dark:text-violet-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                    <img class="w-[20px] h-[20px]" src="<?= URLROOT."/imgs/register.png" ?>" alt="hero image">
                    REGISTER
                </a>
            </div>
        </div>

        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
            <img src="<?= URLROOT."/imgs/hero-image.png" ?>" alt="hero image">
        </div>

    </div>
</section>

<?php require APPROOT . '/views/incFile/footer.php'; ?>