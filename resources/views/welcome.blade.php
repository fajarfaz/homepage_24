<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500,700,800" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
        <script src="{{ mix('js/app.js') }}" defer></script>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- Styles -->
        <style type="text/css">
        body{
            font-family: 'Quicksand', sans-serif;
            font-weight: 300;
        }
        .start-label{
             font-family: 'Poppins', sans-serif;
            font-weight: 700;
        }
        .hover-trigger .hover-target {
         visibility: hidden;
         opacity: 0;
         transition: visibility 0s, opacity 0.5s linear;

        }

        .hover-trigger:hover .hover-target {
            visibility: visible;
            opacity: 1;
        }

        .hide-scroll {  
            overflow-y: scroll; /* Add the ability to scroll */
            overflow-x: scroll;
        }

        /* Hide scrollbar for Chrome, Safari and Opera */
        .hide-scroll::-webkit-scrollbar {
            display: none;
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        .hide-scroll {
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;  /* Firefox */
        }

        .container {         
         
          box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2);         
          background-color: rgba(255, 255, 255, .15);
          backdrop-filter: blur(5px);
      }

    

        </style>
     

       
    </head>
    <body class="antialiased " x-data="{ 'showModal': true }" >

        

            @if (session('status'))
            <!--Notif Success-->
            <div class="bg-white w-11/12 md:max-w-2xl rounded-xl shadow-lg py-4 text-left px-6 fixed bottom-10 left-10 z-30 " x-show="showModal" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="ease-in duration-300" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">

                <!--Title-->
                <div class="flex justify-between items-center pb-3 text-gray-800">
                    <p class="text-xl font-bold"><i class="fas fa-check-circle text-green-400"></i> Successfully</p>
                    <div class="cursor-pointer z-50" @click="showModal = false">
                        <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                            <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                        </svg>
                    </div>
                </div>

                <!-- content -->
                <p class="text-gray-600 font-semibold">{{ session('status') }}</p>                

                <!--Footer-->
              

            </div>
            <!--/Notif Success -->
            @else
            
            <!--Dialog-->
            <div class="bg-white w-11/12 md:max-w-2xl rounded-xl shadow-lg py-4 text-left px-6 fixed bottom-10 left-10 z-30 md:inline hidden" x-show="showModal" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="ease-in duration-300" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">

                <!--Title-->
                <div class="flex justify-between items-center pb-3 text-gray-800">
                    <p class="text-xl font-bold"><i class="fas fa-check-circle text-green-400 mr-2"></i> Attention</p>
                    <div class="cursor-pointer z-50" @click="showModal = false">
                        <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                            <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                        </svg>
                    </div>
                </div>

                <!-- content -->
                <p class="text-gray-600 font-semibold">We ask for permission to access cookies and gps location from your device for smooth application, Thanks.</p>                

                <!--Footer-->
              

            </div>
            <!--/Dialog -->
            @endif
        

        @guest
        <div class=" w-max-xl min-h-screen px-0  bg-cover bg-no-repeat bg-fixed bg-center text-gray-500 overflow-y-hidden" style="background-image: url({{ asset('image/bk.svg') }});" >           
           <div class="grid grid-rows-8 xl:max-w-5xl lg:max-w-4xl md:max-w-2xl m-auto text-center py-0 md:py-12 font-semibold text-base md:text-lg gap-4 h-screen"  >
          

           <div class="py-2  md:px-0 px-4 container border-7 border-blue-400 rounded-none md:rounded-2xl mx-auto h-full" data-aos="fade-down">
           <div class=" rounded-2xl grid grid-cols-5 py-4 px-6 rounded-2xl gap-8 h-full" >
            <div class="md:block hidden relative rounded-l-2xl px-4 py-2 text-left col-span-2 bg-cover bg-center bg-no-repeat pb-14" data-aos="fade-left" style=" background-image:linear-gradient(to left, rgba(245, 246, 252, 0.52), rgb(78 131 218)),
            url('https://images.pexels.com/photos/3987020/pexels-photo-3987020.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500');;" >
            <div class="flex flex-col space-y-2 h-full text-white">
              <label class=" text-xl">24Slides <span class="font-normal">Malang</span></label>

              <label class="text-white text-3xl md:pt-56 lg:pt-64 xl:pt-48 z-10 border-l-2 border-white pl-2"  data-aos="fade-right" data-aos-delay="300">Instant access just by logging in to use all existing apps</label>
              <label class="z-10 font-normal text-center"  data-aos="fade-up" data-aos-delay="400">- IT Support -</label>
             </div>
               <div style="transform: skewY(-6deg);transform-origin: top left;" class="absolute w-full h-3/6 bg-gradient-to-tr from-blue-400 to blue-700 rounded-bl-xl bottom-0 left-0 " ></div>
               <div style="transform: skewY(6deg);transform-origin: top left;" class="absolute w-full h-3/6 bg-gradient-to-tr from-purple-400 to purple-700 rounded-bl-xl bottom-16 right-0 shadow-lg"></div>
              
            </div>
           <div  x-data="{ forgotPass: false }" class="col-span-5 md:col-span-3 relative">
            <div x-show="!forgotPass" x-transition class="h-full text-left grid grid-rows-3 lg:grid-rows-4 pt-4 mx-auto" data-aos="fade-right"> 
                <div class="flex flex-col my-auto md:my-5">
                <label class="text-4xl text-gray-700 start-label tracking-wide">Get's Started.</label>
                <label class="mt-1">Please sign to continue access <span class="text-red-500">24</span><span class="text-blue-900">Slides</span> management apps</label>
                </div>
                <div class="row-span-3 py-3 relative">

                    <form class="w-full max-w-sm " method="POST" action="{{ route('login') }}">
                    @csrf
                      <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
                    Email
                  </label>
                    </div>
                    <div class="md:w-2/3">
                      <x-jet-input class="bg-gray-50 shadow-md appearance-none border-2 border-gray-300 hover:bg-white rounded w-full py-2 px-3 text-gray-700 leading-wide focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" id="email"  type="email" name="email" :value="old('email')" required autofocus placeholder="email@domain.com" />
                  </div>
              </div>
              <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                  <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
                    Password
                  </label>
                
                </div>
                <div class="md:w-2/3">
                          <x-jet-input class="bg-gray-50 shadow-md appearance-none border-2 border-gray-300 hover:bg-white rounded w-full py-2 px-3 text-gray-700 leading-wide focus:outline-none focus:bg-white focus:border-blue-500" id="inline-password" type="password" name="password" required autocomplete="current-password" placeholder="******************" />
                      </div>
                  </div>
                  <div class="md:flex md:items-center mb-2 ">
                    <label class="md:w-1/3"> </label>
                    <label class="md:w-2/3 block text-gray-500 font-bold flex items-center">
                      <x-jet-checkbox class="mr-2 leading-tight h-4 w-4 rounded-2xl" id="remember_me" name="remember" />
                      <span class="text-base">
                            Remember me
                        </span>
                    </label>
                   
                </div>
            <div class="md:flex md:items-center">
                <div class="md:w-1/3"></div>
                <div class="md:w-2/3">
                  <x-jet-button class=" shadow-md bg-blue-500 hover:bg-blue-400 focus:outline-none text-white font-bold py-2 px-4 rounded w-full text-base ">
                      {{ __('Sign in') }}
                  </x-jet-button>
            </div>
            </div>
            </form>
            <div class="bottom-0 inline-flex md:absolute flex justify-between items-center w-full md:space-x-2 md:space-y-0 space-y-2" >
            <div class="flex-auto border border-gray-300 rounded-xl w-full md:inline-flex hidden" ></div>
            <label class="flex-shrink-0 text-base w-auto flex flex-col mx-auto md:flex-row">Forgot your Password?<button @click="forgotPass = !forgotPass" :aria-expanded="forgotPass ? 'true' : 'false'" :class="{ 'active': forgotPass }" class="text-blue-500 hover:text-blue-700 duration-300 font-semibold ml-2 focus:outline-none"> Reset here </button></label>
            </div>            
                </div>

            </div>

            <div x-show="forgotPass" x-transition class="absolute h-full inset-0 text-left">
                <div class="static grid grid-rows-2 lg:grid-rows-3 mx-auto  aos-init aos-animate h-full pt-4" data-aos="fade-right"">
                <div class="flex flex-col my-auto md:my-5">
                    <label class="text-4xl text-gray-700 start-label tracking-wide ">Reset password.</label>
                    <label class="mt-3">Just let us know your email address and we will email you a password reset link that will allow you to choose a new one</label>
                </div>
                <div class="row-span-3 py-0 md:py-3 relative">

                    <form class="w-full max-w-sm " method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="md:flex md:items-center my-6 h-10">
                            <x-jet-validation-errors class="mb-4" />
                            <div class="md:w-1/3">
                                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-email-reset">
                                    Email
                                </label>
                            </div>
                            <div class="md:w-2/3">
                              <x-jet-input class="bg-gray-50 shadow-md appearance-none border-2 border-gray-300 hover:bg-white rounded w-full py-2 px-3 text-gray-700 leading-wide focus:outline-none focus:bg-white focus:border-blue-500" id="inline-email-reset" type="email" name="email" :value="old('email')"  required autofocus placeholder="email@domain.com" />
                          </div>
                      </div>


                      <div class="md:flex md:items-center">
                        <div class="md:w-1/3"></div>
                        <div class="md:w-2/3">
                          <x-jet-button class="md:mt-0 mt-10 shadow-md bg-blue-500 hover:bg-blue-400  focus:outline-none text-white font-bold py-2 px-4 rounded w-full text-base ">
                              {{ __('Send Request') }}
                          </x-jet-button>
                      </div>
                  </div>
              </form>
              <div class="bottom-0 inline-flex md:absolute flex justify-between items-center w-full md:space-x-2 md:space-y-0 space-y-2" >
                <div class="flex-auto border border-gray-300 rounded-xl w-full md:inline-flex hidden" ></div>
                    <label class="flex-shrink-0 text-base w-auto flex flex-col mx-auto md:flex-row">Do you have Account?<button @click="forgotPass = !forgotPass" :aria-expanded="forgotPass ? 'true' : 'false'" :class="{ 'active': forgotPass }" class="text-blue-500 hover:text-blue-700 duration-300 font-semibold ml-2 focus:outline-none"> Login here </button></label></label>
                </div>            
            </div>

        </div> 
                    
            </div>
            </div>


           </div>
           </div>

           </div>

            
        
        </div>
        @endguest

        @auth
        <div class=" w-max-xl min-h-screen md:px-0 px-2 bg-cover bg-no-repeat bg-center text-gray-500 overflow-y-auto bg-fixed" style="background-image: url({{ asset('image/bk.svg') }});" >
           
           <div class="grid grid-rows-8 xl:max-w-5xl lg:max-w-4xl md:max-w-2xl m-auto text-center py-12 font-semibold text-base md:text-lg gap-4 h-full" >

           <div class="grid flex-col w-auto space-y-1 max-w-2xl mx-auto gap-4 mb-8" data-aos="fade-up">
           <div class="flex w-auto flex-col md:flex-row space-x-0 md:space-x-2 items-center mx-auto">
                <img src="{{ asset('image/logo2.png') }}" class="w-36 md:w-48" >
                <label class="text-3xl md:text-5xl font-bold text-gray-700 "> Management App</label>
            </div>
            <label class="tracking-wider ">This is the local homepage for all apps from <span class="text-red-500">24</span><span class="text-blue-900">Slides</span>,<br> Choose the application you need</label>
            <a @if(Cache::has('latest_url_' . auth()->user()->id)) href="//{{cache('latest_url_' . auth()->user()->id)}}" @else href="#" @endif class="bg-blue-500 shadow-lg text-white rounded-3xl w-max font-semibold mx-auto px-9 tracking-wider py-3 w-auto justify-self-end mt-4 hover:bg-blue-700 duration-300 animate-bounce focus:outline-none">Open latest app</a>
           </div>

           <div class="p-2 bg-gradient-to-tr from-blue-500 to-purple-400 rounded-2xl mx-auto" data-aos="fade-down">
           <div class="row-span-2 rounded-2xl grid md:grid-rows-4 grid-rows-3 md:px-10 px-4 pb-0 md:pb-10 bg-white pt-4 bg-cover bg-no-repeat bg-bottom bg-white " >
             <div class="grid grid-rows-2 md:grid-cols-2 items-center justify-items-start">
                <div class="flex flex-col text-left border-b">
                  <label class="text-3xl font-black text-gray-700 leading-tight">Application Board</label> 
                  <label class="text-gray-500 tracking-wide">We have <span class="text-blue-600">3</span> App Detected</label> 
              </div>
              <div class="flex flex-row justify-self-end space-x-4 items-center">
                 <input type="search"  id="myInputSearch" onkeyup="searching1()"  class="bg-gray-50 rounded-full py-1 pl-5 w-full md:w-48 border-2 tracking-wide font-normal focus:outline-none focus:ring focus:border-blue-300 border-gray-400 duration-300 hover:border-blue-400 pr-2" placeholder="Search app..">
             
                 <i class="relative fas fa-bell m-auto flex-shrink-0  duration-300 cursor-pointer text-gray-600 text-3xl  items-center hover:text-blue-500 duration-300">
                     <span class="absolute p-1 border-white border-2 bg-blue-400 rounded-full top-0 -right-1"></span>
                      <span class="absolute p-1 border-white border-2 bg-blue-400 rounded-full top-0 -right-1 animate-ping"></span>
                 </i>
               
        
              
             
           
                <div class="relative" x-data="{ isOpen: false}">
                    <button 
                            @click="isOpen = !isOpen" 
                            @keydown.escape="isOpen = false" 
                            class="flex items-center focus:outline-none" 
                    >
                        <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" class="w-9 h-9 md:w-10 md:h-10  shadow-lg rounded-full hover:shadow-xl duration-300">
                        <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="30" height="30"><path d="M15.3 9.3a1 1 0 0 1 1.4 1.4l-4 4a1 1 0 0 1-1.4 0l-4-4a1 1 0 0 1 1.4-1.4l3.3 3.29 3.3-3.3z" class="heroicon-ui"></path></svg>
                    </button>
                    <ul x-show="isOpen"
                        @click.away="isOpen = false"
                        class="absolute font-normal bg-white shadow-lg overflow-hidden rounded w-48 border mt-2 py-1 right-0 z-20 text-base"
                    >
                        <li>
                            <a href="{{ route('profile.show') }}" class="flex items-center px-3 py-3 hover:bg-gray-200">
                                <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="text-gray-600"><path d="M12 12a5 5 0 1 1 0-10 5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm9 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H8a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v2z" class="heroicon-ui"></path></svg>
                                <span class="ml-2">Profile</span>
                            </a>
                        </li>
                        <!--
                        <li class="border-b border-gray-400">
                            <a href="#" class="flex items-center px-3 py-3 hover:bg-gray-200">
                                <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="text-gray-600"><path d="M9 4.58V4c0-1.1.9-2 2-2h2a2 2 0 0 1 2 2v.58a8 8 0 0 1 1.92 1.11l.5-.29a2 2 0 0 1 2.74.73l1 1.74a2 2 0 0 1-.73 2.73l-.5.29a8.06 8.06 0 0 1 0 2.22l.5.3a2 2 0 0 1 .73 2.72l-1 1.74a2 2 0 0 1-2.73.73l-.5-.3A8 8 0 0 1 15 19.43V20a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2v-.58a8 8 0 0 1-1.92-1.11l-.5.29a2 2 0 0 1-2.74-.73l-1-1.74a2 2 0 0 1 .73-2.73l.5-.29a8.06 8.06 0 0 1 0-2.22l-.5-.3a2 2 0 0 1-.73-2.72l1-1.74a2 2 0 0 1 2.73-.73l.5.3A8 8 0 0 1 9 4.57zM7.88 7.64l-.54.51-1.77-1.02-1 1.74 1.76 1.01-.17.73a6.02 6.02 0 0 0 0 2.78l.17.73-1.76 1.01 1 1.74 1.77-1.02.54.51a6 6 0 0 0 2.4 1.4l.72.2V20h2v-2.04l.71-.2a6 6 0 0 0 2.41-1.4l.54-.51 1.77 1.02 1-1.74-1.76-1.01.17-.73a6.02 6.02 0 0 0 0-2.78l-.17-.73 1.76-1.01-1-1.74-1.77 1.02-.54-.51a6 6 0 0 0-2.4-1.4l-.72-.2V4h-2v2.04l-.71.2a6 6 0 0 0-2.41 1.4zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" class="heroicon-ui"></path></svg>
                                <span class="ml-2">Settings</span>
                            </a>
                        </li>-->
                        <li>

                            <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="flex items-center px-3 py-3 hover:bg-gray-200">
                                <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" class="text-gray-600"><path d="M0 0h24v24H0z" fill="none"></path><path d="M10.09 15.59L11.5 17l5-5-5-5-1.41 1.41L12.67 11H3v2h9.67l-2.58 2.59zM19 3H5c-1.11 0-2 .9-2 2v4h2V5h14v14H5v-4H3v4c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"></path></svg><span class="ml-2">Logout</span>
                            </a>
                            </form>
                        </li>
                    </ul>
                </div>
          
  
              
               
               
              </div>
            </div>
            <div class="overflow-x-auto row-span-3 ">
             <div class="flex space-x-6 md:space-x-12 items-center mx-auto px-1 md:px-4 hide-scroll py-6" id="myUL">
               
                
                <li class="flex-shrink-0 bg-gray-700 flex text-white flex-col rounded-xl justify-between tracking-wide  bg-cover bg-no-repeat bg-center shadow-xl h-80 w-64 relative hover-trigger hover:shadow-3xl cursor-pointer" data-aos="fade-up" style="background-image:url({{ asset('image/attend.jpeg') }});" > 
                    <div class="absolute rounded-xl px-4 py-2 hover-target h-full w-full flex  items-center" style="background: #0f0f0f7d;" >
                        
                        <a href="http://attendance.pahlawandesignstudio.com/" class="relative px-6 py-2 border-4 border-white text-2xl font-bold rounded-xl mx-auto tracking-widest uppercase duration-300 hover:bg-gray-900">Open App
                         <label class="absolute -top-6 right-1 text-xs tracking-wide font-normal">
                            <span class="bg-green-400 rounded-full p-1 absolute animate-ping -left-3"> </span>
                            <span class="bg-green-400 rounded-full p-1 absolute -left-3"></span>
                            {{$attendOnline}} Online</label>
                        </a>
                      
                       
                    </div>

                    <label class="absolute capitalize text-sm text-gray-500 -top-5 left-2"> Last Update: <span class="text-gray-700">Today</span></label>
                    <div class="flex-auto flex flex-col rounded-xl px-5 pt-4 font-light text-left text-sm bg-gradient-to-b from-gray-900 to-transparent">
                    <h1 class="font-extrabold text-xl tracking-widest uppercase">Attendance App</h1>
                    <label class="text-gray-100 ">Application for work recording</label>
                    </div>

                    <div class="flex-auto flex flex-col rounded-xl px-5 pb-4 font-light text-left text-sm space-y-1 bg-gradient-to-t from-gray-900 to-transparent justify-end">
                       <label class="font-bold text-base">Start Recording Your Work</label>
                       <label class="font-bold text-sm"><i class="fas fa-check-circle text-green-400"></i> Integrated login</label>
                       <div class="flex justify-between items-center">
                           <label>Last Login</label>
                           <label class="border-2 rounded-xl px-2 py-1 text-xs">{{Carbon\Carbon::parse(auth()->user()->last_seen)->diffForHumans()}}</label>
                       </div>
                   </div>               
                </li>

            
                <li class="flex-shrink-0 bg-gray-700 flex text-white flex-col rounded-xl justify-between tracking-wide  bg-cover bg-no-repeat bg-center shadow-xl h-80 w-64 relative hover-trigger hover:shadow-3xl cursor-pointer" data-aos="fade-up" data-aos-delay="300" style="background-image:url({{ asset('image/catering.jpeg') }});" > 
                    <div class="absolute rounded-xl px-4 py-2 hover-target h-full w-full flex  items-center" style="background: #0f0f0f7d;" >
                         
                        <a href="http://catering.pahlawandesignstudio.com/" class="relative px-6 py-2 border-4 border-white text-2xl font-bold rounded-xl mx-auto tracking-widest uppercase duration-300 hover:bg-gray-900">Open App
                         <label class="absolute -top-6 right-1 text-xs tracking-wide  font-normal">
                            <span class="bg-green-400 rounded-full p-1 absolute animate-ping -left-3"> </span>
                            <span class="bg-green-400 rounded-full p-1 absolute -left-3"></span>
                            {{$cateringOnline}} Online</label>
                        </a>
                       
                    </div>

                    <label class="absolute capitalize text-sm text-gray-500 -top-5 left-2"> Last Update: <span class="text-gray-700">Today</span></label>
                    <div class="flex-auto flex flex-col rounded-xl px-5 pt-4 font-light text-left text-sm bg-gradient-to-b from-gray-900 to-transparent">
                    <h1 class="font-extrabold text-xl tracking-widest uppercase">Catering App</h1>
                    <label class="text-gray-100 ">Application for order catering</label>
                    </div>

                    <div class="flex-auto flex flex-col rounded-xl px-5 pb-4 font-light text-left text-sm space-y-1 bg-gradient-to-t from-gray-900 to-transparent justify-end">
                       <label class="font-bold text-base">Let's order your favorite catering menu</label>
                        <label class="font-bold text-sm"><i class="fas fa-check-circle text-green-400"></i> Integrated login</label>
                       <div class="flex justify-between items-center">
                           <label>Last Login</label>
                           <label class="border-2 rounded-xl text-xs px-2 py-1">{{Carbon\Carbon::parse(auth()->user()->last_seen)->diffForHumans()}}</label>
                       </div>
                   </div>
                </li>
                    
                <li class="flex-shrink-0 bg-gray-700 flex text-white flex-col rounded-xl justify-between tracking-wide  bg-cover bg-no-repeat bg-center shadow-xl h-80 w-64 relative hover-trigger hover:shadow-3xl cursor-pointer" data-aos="fade-up" data-aos-delay="600"
                style="background-image:url({{ asset('image/snipe.jpg') }});" > 
                <div class="absolute rounded-xl px-4 py-2 hover-target h-full w-full flex  items-center" style="background: #0f0f0f7d;" >

                    <a href="http://snipe-it.pahlawandesignstudio.com/" class="relative px-6 py-2 border-4 border-white text-2xl font-bold rounded-xl mx-auto tracking-widest uppercase duration-300 hover:bg-gray-900">Open App
                       <label class="absolute -top-6 right-1 text-xs tracking-wide  font-normal">
                        <span class="bg-green-400 rounded-full p-1 absolute animate-ping -left-3"> </span>
                        <span class="bg-green-400 rounded-full p-1 absolute -left-3"></span>
                    24 Online</label>
                </a>

            </div>

            <label class="absolute capitalize text-sm text-gray-500 -top-5 left-2"> Last Update: <span class="text-gray-700">Today</span></label>
            <div class="flex-auto flex flex-col rounded-xl px-5 pt-4 font-light text-left text-sm bg-gradient-to-b from-gray-900 to-transparent">
                <h1 class="font-extrabold text-xl tracking-widest uppercase">Snipe-IT App</h1>
                <label class="text-gray-100 ">Application for IT asset management </label>
            </div>

            <div class="flex-auto flex flex-col rounded-xl px-5 pb-4 font-light text-left text-sm space-y-1 bg-gradient-to-t from-gray-900 to-transparent justify-end">
             <label class="font-bold text-base">Start checking your office equipment</label>
             <label class="font-bold text-sm"><i class="fas fa-times-circle text-red-500"></i> Login not integrated</label>
             <div class="flex justify-between items-center">
                 <label>Last Login</label>
                 <label class="border-2 rounded-xl text-xs px-2 py-1">18/6/2021</label>
             </div>
         </div>
     </li>
               

             </div>
             </div>
            
           </div>
           </div>

           </div>

            
        
        </div>
        @endauth

        <script type="text/javascript">
              function searching1() {

               var input, filter, ul, li, a, i, txtValue;
               input = document.getElementById("myInputSearch");
               filter = input.value.toUpperCase();
               ul = document.getElementById("myUL");
               li = ul.getElementsByTagName("li");
               for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName("h1")[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.visibility = "visible";
                    li[i].style.opacity = "1";
                    li[i].style.display = ""
                  
                } else {
                    li[i].style.visibility = "hidden";
                    li[i].style.opacity = "0";
                    li[i].style.transition = "visibility 0s, opacity 0.5s linear";
                    li[i].style.display = "none"
                }
            }
            }
        </script>
         <script>
            AOS.init({
              duration: 1200,
          })
          

      </script>
    </body>
</html>
