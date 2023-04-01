<x-app-layout>

	<!--ヘッダー[START]-->
	<x-slot name="header">
		<div class="flex justify-between">
			<div class="flex">
				<div class="sticky top-0 shrink-0">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                    </a>
                </div>
        	</div>
	        <div class="sm:flex sm:items-center">
		        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
		            Questionnaire
		        </h2>
            </div>
        </div>
  	</x-slot>
    <!--ヘッダー[END]-->
            
        <!-- バリデーションエラーの表示に使用-->
       <x-errors id="errors" class="bg-blue-500 rounded-lg">{{$errors}}</x-errors>
        <!-- バリデーションエラーの表示に使用-->
        

    <!--全エリア[START]-->


                @foreach ($answers as $answer)
                    <x-collection2 id="{{ $answer->id }}" question="{{ $answer->question }}" answer="{{ $answer->answer }}"></x-collection2>
                @endforeach




 <!--全エリア[END]-->

<div class="bg-white">
  <!-- nav - start -->
  <nav class="sticky bottom-0 mx-auto flex w-full justify-between gap-8 border-t bg-white px-10 py-4 text-xs sm:max-w-md sm:rounded-t-xl sm:border-transparent sm:text-sm sm:shadow-2xl">
    <a href={{ url('/dashboard') }} class="flex flex-col items-center gap-1 text-indigo-500">
      <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
        <path d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
        <path d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
      </svg>

      <span>Home</span>
    </a>

    <a href={{ url('/notifications') }} class="flex flex-col items-center gap-1 text-gray-400 transition duration-100 hover:text-gray-500 active:text-gray-600">
<svg class="h-6 w-6" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<style type="text/css">
	.st0{fill:#9D9C9C;}
</style>
<g>
	<path class="st0" d="M496.6,68.8H15.4C6.9,68.8,0,75.8,0,84.3v30.4l256,171.5l256-171.6V84.3C512,75.8,505.1,68.8,496.6,68.8z"/>
	<path class="st0" d="M0,178v203.4c0,34.1,27.6,61.8,61.8,61.8h388.4c34.1,0,61.8-27.6,61.8-61.8V178L256,349.6L0,178z"/>
</g>
</svg>      

      <span>message</span>
    </a>

    <a href="{{ url('/postscreate') }}" class="flex flex-col items-center gap-1 text-gray-400 transition duration-100 hover:text-gray-500 active:text-gray-600">
<svg class="h-6 w-6" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<style type="text/css">
	.st0{fill:#A5A5A5;}
</style>
<g>
	<path class="st0" d="M427.3,244.2c0.2-2.6,0.3-5.2,0.3-7.9c0-55.2-44.8-100-100-100c-17,0-33,4.3-47.1,11.8
		c-15.1-42.6-55.8-73.2-103.6-73.2c-60.7,0-110,49.2-110,110c0,11.4,1.7,22.4,5,32.8C29.8,234.3,0,275.2,0,323.2
		c0,62.6,50.8,113.4,113.4,113.4H406c3,0.3,6.1,0.4,9.2,0.4c53.5,0,96.8-43.3,96.8-96.8C512,290.9,475,250.2,427.3,244.2z
		 M311.7,296.2h-20.5c-6,0-11,4.9-11,11v58.1c0,6-4.9,11-11,11h-26.6c-6,0-11-4.9-11-11v-58.1c0-6-4.9-11-11-11h-20.5
		c-6,0-8-3.9-4.3-8.8l53.4-70.4c3.7-4.8,9.6-4.8,13.3,0l53.4,70.4C319.7,292.3,317.8,296.2,311.7,296.2z"/>
</g>
</svg>

      <span>Upload</span>
    </a>


    <a href="{{ url('/profile') }}" class="flex flex-col items-center gap-1 text-gray-400 transition duration-100 hover:text-gray-500 active:text-gray-600">
<svg class="h-6 w-6" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<style type="text/css">
	.st0{fill:#BABABA;}
</style>
<g>
	<path class="st0" d="M497.6,215.2l-55.3-13.1c-4-13.9-9.5-27.3-16.4-39.7l29.9-48.3c4.6-7.4,3.5-16.9-2.7-23.1l-32-32
		c-6.1-6.1-15.7-7.2-23.1-2.7l-48.3,29.9c-12.5-6.9-25.8-12.3-39.7-16.4l-13.1-55.4C294.9,6,287.3,0,278.6,0h-45.2
		c-8.7,0-16.2,6-18.2,14.4l-13.1,55.4c-13.9,4-27.3,9.5-39.7,16.4l-48.3-29.9c-7.4-4.5-16.9-3.4-23.1,2.7L59,91
		c-6.1,6.1-7.2,15.7-2.7,23.1l29.9,48.3c-6.9,12.5-12.3,25.8-16.4,39.7l-55.4,13.1C6,217.2,0,224.7,0,233.4v45.2
		c0,8.7,6,16.2,14.4,18.2l55.4,13.1c4,13.9,9.5,27.3,16.4,39.7l-29.9,48.3c-4.5,7.4-3.4,17,2.7,23.1l32,32
		c6.1,6.1,15.7,7.3,23.1,2.7l48.3-29.9c12.5,6.9,25.8,12.3,39.7,16.4l13.1,55.4c2,8.5,9.5,14.4,18.2,14.4h45.2
		c8.7,0,16.2-6,18.2-14.4l13.1-55.4c13.9-4,27.3-9.5,39.7-16.4l48.3,29.9c7.4,4.6,16.9,3.5,23.1-2.7l32-32
		c6.1-6.1,7.2-15.7,2.7-23.1l-29.9-48.3c6.9-12.5,12.3-25.8,16.4-39.7l55.4-13.1c8.5-2,14.4-9.5,14.4-18.2v-45.2
		C512,224.7,506,217.2,497.6,215.2z M256,303.1c-26,0-47.1-21.1-47.1-47.1s21.1-47.1,47.1-47.1c26,0,47.1,21.1,47.1,47.1
		S282,303.1,256,303.1z"/>
</g>
</svg>

      <span>Settings</span>
    </a>


  </nav>
  <!-- nav - end -->
</div>

</x-app-layout>