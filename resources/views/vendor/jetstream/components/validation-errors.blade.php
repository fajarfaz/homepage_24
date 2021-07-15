@if ($errors->any())

<div class="overflow-auto " style="background-color: rgba(0,0,0,0.5)" x-show="wrongModal" :class="{ 'absolute inset-0 z-40 flex items-center justify-center': wrongModal }" >

 <div class="absolute bg-white w-11/12 h-72 md:max-w-md mx-auto rounded shadow-lg py-4 text-center inset-0 px-6 my-auto" x-show="wrongModal" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="ease-in duration-300" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">

                <!--Title-->
                <div class="flex justify-end items-center pb-3 text-gray-800">                    
                    <div class="cursor-pointer z-50" @click="wrongModal = false">
                        <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                            <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                        </svg>
                    </div>
                </div>

                <!-- content -->
                <div class="flex flex-col text-center items-center pb-4">
                    <i class="far fa-times-circle bg-gray-50 text-red-400 text-6xl rounded-full"></i>
                    <p class="text-2xl font-bold text-red-500 tracking-wide mt-4">Login Failed</p>
                    <p class="text-gray-600 font-semibold mt-0 mb-6"> 
                      @foreach ($errors->all() as $error)
                      {{ $error }}
                      @endforeach
                  </p>
                  <button class="modal-close bg-red-400 text-white px-7 py-2 rounded-lg hover:bg-red-500 duration-300 font-semibold tracking-wider focus:outline-none" @click="wrongModal = false" >Try Again</button>
              </div>           

                <!--Footer-->
              

            </div>
</div>

@endif

