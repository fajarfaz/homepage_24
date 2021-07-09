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
    
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- Styles -->
        <style type="text/css">
        body{
            font-family: 'Quicksand', sans-serif;
            font-weight: 300;
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
    <body class="antialiased " >
        @guest
        <div class=" w-max-xl min-h-screen px-0  bg-cover bg-no-repeat bg-fixed bg-center text-gray-500 overflow-y-hidden" style="background-image: url({{ asset('image/bk.svg') }});" >           
           <div class="grid grid-rows-8 xl:max-w-5xl lg:max-w-4xl md:max-w-2xl m-auto text-center py-0 md:py-12 font-semibold text-base md:text-lg gap-4 h-full h-max-screen"  >
          

           <div class="py-2 md:px-0 px-4 container border-7 border-blue-400 rounded-none md:rounded-2xl mx-auto " data-aos="fade-down">
           <div class=" rounded-2xl grid grid-cols-5 p-4 rounded-2xl gap-8" >
            <div class="md:block hidden relative rounded-l-2xl px-4 py-2 text-left col-span-2 bg-cover bg-center bg-no-repeat " data-aos="fade-left" style=" background-image:linear-gradient(to left, rgba(245, 246, 252, 0.52), rgb(78 131 218)),
            url('https://images.pexels.com/photos/3987020/pexels-photo-3987020.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500');;" >
            <div class="flex flex-col space-y-2 h-full text-white">
              <label class=" text-xl">24Slides <span class="font-normal">Malang</span></label>

              <label class="text-white text-3xl md:pt-56 lg:pt-64 xl:pt-48 z-10 border-l-2 border-white pl-2">Instant access just by logging in to use all existing apps</label>
              <label class="z-10 font-normal text-center">- IT Support -</label>
             </div>
               <div style="transform: skewY(-6deg);transform-origin: top left;" class="absolute w-full h-3/6 bg-gradient-to-tr from-blue-400 to blue-700 rounded-bl-xl bottom-0 left-0 "></div>
               <div style="transform: skewY(6deg);transform-origin: top left;" class="absolute w-full h-3/6 bg-gradient-to-tr from-purple-400 to purple-700 rounded-bl-xl bottom-16 right-0 shadow-lg"></div>
              
            </div>
           
            <div class="col-span-5 md:col-span-3 text-left grid grid-rows-3 lg:grid-rows-4 pt-4 mx-auto" data-aos="fade-right"> 
                <div class="flex flex-col my-5 ">
                <label class="text-4xl text-gray-700 font-semibold">Log in to your account</label>
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
                      <x-jet-input class="bg-gray-50 shadow-md appearance-none border-2 border-gray-300 hover:bg-white rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" id="email"  type="email" name="email" :value="old('email')" required autofocus placeholder="email@domain.com" />
                  </div>
              </div>
              <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                  <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
                    Password
                  </label>
                
                </div>
                <div class="md:w-2/3">
                          <x-jet-input class="bg-gray-50 shadow-md appearance-none border-2 border-gray-300 hover:bg-white rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-password" type="password" name="password" required autocomplete="current-password" placeholder="******************" />
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
                  <x-jet-button class=" shadow-md bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded w-full text-base">
                      {{ __('Sign in') }}
                  </x-jet-button>
            </div>
            </div>
            <div class="bottom-0 absolute flex justify-between items-center w-full space-x-2">
                <div class="flex-auto border border-gray-300 rounded-xl w-full"></div>
            <label class="flex-shrink-0 text-base w-auto ">Forgot your Password?<a href="{{ route('password.request') }}" class="text-blue-500 hover:text-blue-700 duration-300"> Reset here </a></label>
            </div>
            </form>
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
            <button class="bg-blue-500 shadow-lg text-white rounded-3xl w-max font-semibold mx-auto px-9 tracking-wider py-3 w-auto justify-self-end mt-4 hover:bg-blue-700 duration-300 animate-bounce">Open latest app</button>
           </div>

           <div class="p-2 bg-gradient-to-tr from-blue-500 to-purple-400 rounded-2xl mx-auto" data-aos="fade-down">
           <div class="row-span-2 rounded-2xl grid md:grid-rows-4 grid-rows-3 md:px-10 px-4 pb-0 md:pb-10 bg-white pt-4 bg-cover bg-no-repeat bg-bottom bg-white " >
             <div class="grid grid-rows-2 md:grid-cols-2 items-center justify-items-start">
                <div class="flex flex-col text-left border-b">
                  <label class="text-3xl font-black text-gray-700 leading-tight">Application Board</label> 
                  <label class="text-gray-500 tracking-wide">We have 2 App Detected</label> 
              </div>
              <div class="flex flex-row justify-self-end space-x-2 items-center">
                 <input type="search"  id="myInputSearch" onkeyup="searching1()"  class="bg-gray-50 rounded-full py-1 pl-5 w-full md:w-48 border-2 tracking-wide font-normal focus:outline-none focus:ring focus:border-blue-300 border-gray-400 duration-300 hover:border-blue-400 pr-2" placeholder="Search">
               <div class="flex-shrink-0 bg-blue-400 hover:bg-blue-500 duration-300 cursor-pointer text-white rounded-full md:w-12 md:h-12 text-xl w-9 h-9 md:text-2xl shadow-lg items-center flex">
               <i class="far fa-bell m-auto"></i>
                </div>
        
               <img src="https://images.pexels.com/photos/7853219/pexels-photo-7853219.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="flex-shrink-0 object-cover w-9 h-9 md:h-12 md:w-12 rounded-full shadow-lg">
              
               
               
              </div>
            </div>
            <div class="overflow-x-auto row-span-3 ">
             <div class="flex space-x-6 md:space-x-12 items-center mx-auto px-1 md:px-4 hide-scroll py-6" id="myUL">
               
                
                <li class="flex-shrink-0 bg-gray-700 flex text-white flex-col rounded-xl justify-between tracking-wide  bg-cover bg-no-repeat bg-center shadow-xl h-80 w-64 relative hover-trigger" data-aos="fade-up"
                data-aos-duration="1500" data-aos-easing="ease-in-sine" style="background-image:url({{ asset('image/attend.svg') }});" > 
                    <div class="absolute rounded-xl px-4 py-2 hover-target h-full w-full flex  items-center" style="background: #0f0f0f7d;" >
                        
                        <a href="#" class="relative px-6 py-2 border-4 border-white text-2xl font-bold rounded-xl mx-auto tracking-widest uppercase duration-300 hover:bg-gray-700">Open App
                         <label class="absolute -bottom-7 right-1 text-xs tracking-wide font-normal">
                            <span class="bg-green-400 rounded-full p-1 absolute animate-ping -left-3"> </span>
                            <span class="bg-green-400 rounded-full p-1 absolute -left-3"></span>
                            24 Online Now</label>
                        </a>
                      
                       
                    </div>

                    <label class="absolute capitalize text-sm text-gray-500 -top-5 left-2"> Last Update: <span class="text-gray-700">Today</span></label>
                    <div class="flex-auto flex flex-col rounded-xl px-5 pt-4 font-light text-left text-sm bg-gradient-to-b from-gray-900 to-transparent">
                    <h1 class="font-extrabold text-xl tracking-widest uppercase">Attendance App</h1>
                    <label class="text-gray-100 ">Application for work recording</label>
                    </div>

                    <div class="flex-auto flex flex-col rounded-xl px-5 pb-4 font-light text-left text-sm space-y-1 bg-gradient-to-t from-gray-900 to-transparent justify-end">
                       <label class="font-bold text-base">Start Recording Your Work</label>
                       <div class="flex justify-between items-center">
                           <label>Last Login</label>
                           <label class="border-2 rounded-xl px-2 py-1 text-xs">Today</label>
                       </div>
                   </div>               
                </li>

            
                <li class="flex-shrink-0 bg-gray-700 flex text-white flex-col rounded-xl justify-between tracking-wide  bg-cover bg-no-repeat bg-center shadow-xl h-80 w-64 relative hover-trigger" data-aos="fade-up"
                data-aos-duration="1500" data-aos-easing="ease-in-sine" style="background-image:url({{ asset('image/catering.svg') }});" > 
                    <div class="absolute rounded-xl px-4 py-2 hover-target h-full w-full flex  items-center" style="background: #0f0f0f7d;" >
                         
                        <a href="#" class="relative px-6 py-2 border-4 border-white text-2xl font-bold rounded-xl mx-auto tracking-widest uppercase duration-300 hover:bg-gray-700">Open App
                         <label class="absolute -bottom-7 right-1 text-xs tracking-wide  font-normal">
                            <span class="bg-green-400 rounded-full p-1 absolute animate-ping -left-3"> </span>
                            <span class="bg-green-400 rounded-full p-1 absolute -left-3"></span>
                            24 Online Now</label>
                        </a>
                       
                    </div>

                    <label class="absolute capitalize text-sm text-gray-500 -top-5 left-2"> Last Update: <span class="text-gray-700">Today</span></label>
                    <div class="flex-auto flex flex-col rounded-xl px-5 pt-4 font-light text-left text-sm bg-gradient-to-b from-gray-900 to-transparent">
                    <h1 class="font-extrabold text-xl tracking-widest uppercase">Catering App</h1>
                    <label class="text-gray-100 ">Application for order catering</label>
                    </div>

                    <div class="flex-auto flex flex-col rounded-xl px-5 pb-4 font-light text-left text-sm space-y-1 bg-gradient-to-t from-gray-900 to-transparent justify-end">
                       <label class="font-bold text-base">Let's order your favorite catering menu</label>
                       <div class="flex justify-between items-center">
                           <label>Last Login</label>
                           <label class="border-2 rounded-xl text-xs px-2 py-1">18/6/2021</label>
                       </div>
                   </div>
                </li>
                    
                  <li class="flex-shrink-0 bg-gray-700 flex text-white flex-col rounded-xl justify-between tracking-wide  bg-cover bg-no-repeat bg-center shadow-xl h-80 w-64 relative py-4 relative" data-aos="fade-up"
                data-aos-duration="1500" data-aos-easing="ease-in-sine" style="background: linear-gradient(330.01deg, rgba(0, 0, 0, 0.104) 5.9%, rgba(0, 0, 0, 0.2) 56.11%, rgba(255, 255, 255, 0.2) 89.06%), #67ABF9;">                   

                    <label class="absolute capitalize text-sm text-gray-500 -top-5 left-2"> Last Update: <span class="text-gray-700">Today</span></label>
                   
                    <label class="font-bold text-2xl tracking-widest text-center">COMING SOON!</label>      
                    <h1 class="font-bold text-xl tracking-widest text-center">Snipe-IT App</h1>
                    <label class="font-bold text-xl tracking-widest text-center text-gray-100">24/06/2021</label>
                   
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
