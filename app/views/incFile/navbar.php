<nav class="bg-white border-gray-200 dark:bg-gray-900 ">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
  <a href="<?= URLROOT ?>" class="flex items-center space-x-3 rtl:space-x-reverse cursor-pointer">
      <span class="self-center text-[1.1rem] font-semibold whitespace-nowrap dark:text-violet-400">WIKI-X</span>
  </a>
  <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
              <div class="<?php if(!empty($_SESSION["username"])){
                echo "hidden";
              } ?>">
                <a href="<?= URLROOT."pages/login" ?>" 
                        class="hidden md:inline-flex items-center gap-[5px] w-full px-6 py-3 mb-2 mr-2 text-sm  font-medium text-gray-900  border border-gray-200 rounded-lg  focus:outline-none hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-inherit  dark:text-violet-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        <img class="w-[20px] h-[20px]" src="<?= URLROOT."/imgs/login.png" ?>" alt="hero image">
                        LOGIN
                </a>
              </div>
              <div class="<?php if(empty($_SESSION["username"])){
                echo "hidden";
              } ?>">
                    <div class="flex gap-[10px] h-[50px] items-center">
                        <img class="w-[50px] h-[50px]" src="<?= URLROOT ?>/imgs/<?= $_SESSION["userImg"] ?>" alt="">
                        <button id="showProfile" data-dropdown-toggle="dropdownInformation" class="text-white bg-blue-700 hover:bg-violet-600  focus:outline-none  font-medium rounded-lg text-sm px-[1rem] h-[80%]  text-center inline-flex items-center dark:bg-violet-400 dark:hover:bg-violet-600 " type="button">Profile<svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/> </svg>
                        </button>
                    </div>
              </div>
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
        <a href="#" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-violet-400 md:dark:hover:text-violet-400 dark:text-white dark:hover:bg-gray-700 dark:hover:text-violet-400 md:dark:hover:bg-transparent dark:border-gray-700">TAGS</a>
      </li>
    </ul>
  </div>
  </div>

  <div id="dropdown" class="absolute hidden z-10 right-[17%] top-[8%] bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
    <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                          <div>
                            <div><?= $_SESSION["username"] ?></div>
                          </div>
                        </div>
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownInformationButton">
                          <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">My Wikis</a>
                          </li>
                          <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit Profile</a>
                          </li>

                        </ul>
                        <div class="py-2">
                          <a href="<?= URLROOT ?>/pages/logout" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
     </div>             
  </div>
</nav>