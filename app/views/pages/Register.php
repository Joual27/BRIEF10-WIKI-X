<?php require APPROOT . '/views/incFile/header.php'; ?>


<div class="min-h-screen bg-gray-100 text-gray-900 flex justify-center items-center">
    <div class="max-w-screen-xl h-[70vh] sm:m-10 bg-white rounded-lg shadow sm: flex justify-center flex-1">
        <div class="lg:w-1/2 xl:w-5/12 p-6 sm:p-12">
            <div>
                <p class="text-center text-violet-400 font-bold text-[1.25rem]">WIKI-X</p>
            </div>
            <div class="mt-6 flex flex-col items-center">
                <h1 class="text-2xl xl:text-2xl font-bold">
                    Sign Up
                </h1>
                <div class="w-full flex-1 mt-5">
                    

                    <div class="mx-auto max-w-xs">
                    <form id="signupForm" method="POST" action="">
                            <input type="hidden" name="csrf_token" id="csrf_token" value="<?= $_SESSION["csrf_token"] ?>">
                            <div class="mt-[0.75rem]">
                                <input
                                    id="email"
                                    name="email"
                                    class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                                    type="email"
                                    placeholder="Email"
                                />
                                <span id="emailError" class="text-red-500"></span>
                            </div>

                            <div class="mt-[0.75rem]">
                                <input
                                    id="username"
                                    name="username"
                                    class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                                    type="text"
                                    placeholder="Enter Your Username"
                                />
                                <span id="usernameError" class="text-red-500"></span>
                            </div>

                            <div class="mt-[0.75rem]">
                                <input
                                    id="password"
                                    name="password"
                                    class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                                    type="password"
                                    placeholder="Password"
                                />
                                <span id="passwordError" class="text-red-500"></span>
                            </div>

                            <div class="mt-[0.75rem]">
                                <input
                                    id="password_confirmation"
                                    name="password_confirmation"
                                    class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                                    type="password"
                                    placeholder="Confirm Password"
                                />
                                <span id="passwordConfirmationError" class="text-red-500"></span>
                            </div>

                            <a href="<?= URLROOT ."pages/login"?>" class="text-gray-500 mt-[0.5rem] block underline">
                                Already have an account? Log In
                            </a>

                            <button
                                class="mt-5 tracking-wide font-semibold bg-indigo-500 text-gray-100 w-full py-4 rounded-lg hover:bg-indigo-700 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                                <svg class="w-6 h-6 -ml-2" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
                                    <circle cx="8.5" cy="7" r="4" />
                                    <path d="M20 8v6M23 11h-6" />
                                </svg>
                                <span class="ml-3">
                                    Sign Up
                                </span>
                            </button>
                            <span id="formError" class="text-red-500 font-medium mt-[0.5rem]"></span>
                            <a href="<?= URLROOT ?>" class="text-gray-500 mt-[0.5rem] block underline">
                                Back To Home Page
                            </a>
                    </form>

                    </div>
                </div>
            </div>
        </div>
        <div class="flex-1 bg-indigo-100 text-center hidden lg:flex">
            <div class="m-12 xl:m-16 w-full bg-contain bg-center bg-no-repeat"
                style="background-image: url('https://storage.googleapis.com/devitary-image-host.appspot.com/15848031292911696601-undraw_designer_life_w96d.svg');">
            </div>
        </div>
    </div>
</div>

<script defer src="<?php echo URLROOT?>/js/FormValidator.js"></script>

<?php require APPROOT . '/views/incFile/footer.php'; ?>
