<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons|Roboto@100;300;500" rel="stylesheet">  

        <!-- Styles -->
        <style type="text/css">
        body{
            font-family: Roboto;
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

        </style>
     

       
    </head>
    <body class="antialiased">
        <div class="w-max-xl min-h-screen bg-cover bg-no-repeat bg-center text-gray-500 overflow-y-auto" style="background-image: url({{ asset('image/bk.svg') }});">
           
           <div class="grid grid-rows-8 xl:max-w-5xl lg:max-w-4xl md:max-w-2xl m-auto text-center py-12 font-semibold text-lg gap-4 h-full">

           <div class="grid flex-col w-auto space-y-1 max-w-2xl mx-auto gap-4">
           <div class="flex w-auto flex-row space-x-2 items-center mx-auto">
                <img src="{{ asset('image/logo2.png') }}" class="w-48" >
                <label class="text-5xl font-bold text-gray-700">  Management App</label>
            </div>
            <label class="tracking-wider leading-tight">This is the local homepage of the application from <span class="text-red-500">24</span><span class="text-blue-900">Slides</span>,<br> Choose the application you need</label>
            <button class="bg-blue-500 shadow-lg text-white rounded-3xl w-max font-semibold mx-auto px-9 tracking-wider py-3 w-auto justify-self-end mt-4 hover:bg-blue-700 duration-300">Open latest app</button>
           </div>

           <div class="row-span-2 border-4 border-blue-400 rounded-2xl grid grid-rows-4 px-10 pb-10 bg-white mt-6 bg-cover bg-no-repeat bg-bottom bg-white" >
             <div class="grid grid-cols-2 items-center justify-items-start">
                <div class="flex flex-col text-left border-b">
                  <label class="text-3xl font-black text-gray-700 leading-tight">Application Board</label> 
                  <label class="text-gray-500 tracking-wide">We have 2 App Detected</label> 
              </div>
              <div class="flex flex-row justify-self-end space-x-2 items-center">
                 <div class="bg-red-300 rounded-full py-1 px-3 w-48">S</div>
               <div class="bg-red-300 rounded-full py-1 px-3 h-12 w-12 items-center">B</div>
        
               <img src="https://images.pexels.com/photos/7853219/pexels-photo-7853219.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="object-cover h-12 w-12 rounded-full " >
              
               
               
              </div>
            </div>
             <div class="row-span-3 flex space-x-12 items-center mx-auto px-4 hide-scroll ">
                <div class="bg-gray-700 flex text-white flex-col rounded-xl justify-between tracking-wide  bg-cover bg-no-repeat bg-center shadow-2xl h-80 w-64 relative hover-trigger" style="background-image:url({{ asset('image/attend.svg') }});">
                    <div class="absolute rounded-xl px-4 py-2 hover-target h-full w-full flex  items-center" style="background: #0f0f0f7d;">
                        <a href="#" class="relative px-6 py-2 border-4 border-white text-2xl font-bold rounded-xl mx-auto tracking-widest uppercase ">Open App
                         <label class="absolute -bottom-7 right-1 text-xs tracking-wide font-normal">
                            <span class="bg-green-400 rounded-full p-1 absolute animate-ping -left-3"> </span>
                            <span class="bg-green-400 rounded-full p-1 absolute -left-3"></span>
                            24 Online Now</label>
                        </a>
                       
                    </div>

                    <label class="absolute capitalize text-sm text-gray-500 -top-5 left-2"> Last Update: <span class="text-gray-700">Today</span></label>
                    <div class="flex-auto flex flex-col rounded-xl px-5 pt-4 font-light text-left text-sm bg-gradient-to-b from-gray-900 to-transparent">
                    <label class="font-extrabold text-xl tracking-widest uppercase">Attendance App</label>
                    <label class="text-gray-100 ">Application for work recording</label>
                    </div>

                    <div class="flex-auto flex flex-col rounded-xl px-5 pb-4 font-light text-left text-sm space-y-1 bg-gradient-to-t from-gray-900 to-transparent justify-end">
                       <label class="font-bold text-base">Start Recording Your Work</label>
                       <div class="flex justify-between items-center">
                           <label>Last Login</label>
                           <label class="border-2 rounded-xl px-2">Today</label>
                       </div>
                   </div>
                </div>
                
                <div class="bg-gray-700 flex text-white flex-col rounded-xl justify-between tracking-wide  bg-cover bg-no-repeat bg-center shadow-2xl h-80 w-64 relative hover-trigger" style="background-image:url({{ asset('image/catering.svg') }});">
                    <div class="absolute rounded-xl px-4 py-2 hover-target h-full w-full flex  items-center" style="background: #0f0f0f7d;">
                        <a href="#" class="relative px-6 py-2 border-4 border-white text-2xl font-bold rounded-xl mx-auto tracking-widest uppercase ">Open App
                         <label class="absolute -bottom-7 right-1 text-xs tracking-wide font-normal">
                            <span class="bg-green-400 rounded-full p-1 absolute animate-ping -left-3"> </span>
                            <span class="bg-green-400 rounded-full p-1 absolute -left-3"></span>
                            24 Online Now</label>
                        </a>
                       
                    </div>

                    <label class="absolute capitalize text-sm text-gray-500 -top-5 left-2"> Last Update: <span class="text-gray-700">Today</span></label>
                    <div class="flex-auto flex flex-col rounded-xl px-5 pt-4 font-light text-left text-sm bg-gradient-to-b from-gray-900 to-transparent">
                    <label class="font-extrabold text-xl tracking-widest uppercase">Catering App</label>
                    <label class="text-gray-100 ">Application for order catering</label>
                    </div>

                    <div class="flex-auto flex flex-col rounded-xl px-5 pb-4 font-light text-left text-sm space-y-1 bg-gradient-to-t from-gray-900 to-transparent justify-end">
                       <label class="font-bold text-base">Lets Order Our Menus</label>
                       <div class="flex justify-between items-center">
                           <label>Last Login</label>
                           <label class="border-2 rounded-xl px-2">18/6/2021</label>
                       </div>
                   </div>
                </div>
                  <div class="bg-gray-700 flex text-white flex-col rounded-xl justify-between tracking-wide  bg-cover bg-no-repeat bg-center shadow-2xl h-80 w-64 relative py-4" style="background: linear-gradient(330.01deg, rgba(0, 0, 0, 0.104) 5.9%, rgba(0, 0, 0, 0.2) 56.11%, rgba(255, 255, 255, 0.2) 89.06%), #67ABF9;">                    

                    <label class="absolute capitalize text-sm text-gray-500 -top-5 left-2"> Last Update: <span class="text-gray-700">Today</span></label>
                   
                    <label class="font-bold text-2xl tracking-widest text-center">COMING SOON!</label>      
                    <label class="font-bold text-xl tracking-widest text-center">Snipe-IT App</label>
                    <label class="font-bold text-xl tracking-widest text-center text-gray-100">24/06/2021</label>
                   
                </div>
               

             </div>
            
           </div>
           </div>

            
        
        </div>
    </body>
</html>
