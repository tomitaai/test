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
	<div class="max-w-sm rounded overflow-hidden shadow-lg mx-auto my-8 border border-gray-200 bg-white">
      
    <div class="px-6 py-4">
      <div class="font-bold text-xl mb-2">
        {{ $answer->question }}
      </div>
      <p class="text-gray-600 text-base text-right">
        {{ $answer->answer }}
      </p>

    </div>
  </div>


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


    <a href="{{ url('/answers') }}" class="flex flex-col items-center gap-1 text-gray-400 transition duration-100 hover:text-gray-500 active:text-gray-600">
<svg version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<style type="text/css">
	.st0{fill:#A9A9A9;}
</style>
<g>
	<path class="st0" d="M84.5,84.5V512H512V84.5H84.5z M220.7,184.8c24,0,43.5,19.5,43.5,43.5s-19.5,43.5-43.5,43.5
		s-43.5-19.5-43.5-43.5C177.2,204.2,196.7,184.8,220.7,184.8z M463.9,407.2c-1.5,2.8-4.4,4.5-7.6,4.5H140.2c-3.2,0-6-1.7-7.5-4.5
		c-1.5-2.8-1.4-6.2,0.4-8.8l55.3-84.3c3.7-5.6,9.7-9.2,16.4-9.6c6.7-0.5,13.2,2.2,17.6,7.2l38.2,43.2l69.1-105.2
		c4-6,10.7-9.7,17.9-9.7c7.2,0,14,3.6,17.9,9.6l98.1,148.7C465.3,401.1,465.4,404.5,463.9,407.2z"/>
	<polygon class="st0" points="450.5,0 0,0 0,450.5 46.1,450.5 46.1,46.1 450.5,46.1 	"/>
</g>
</svg>

      <span>List</span>
    </a>
    
    <a href={{ url('answersedit/'. $answer->id ) }} class="flex flex-col items-center gap-1 text-gray-400 transition duration-100 hover:text-gray-500 active:text-gray-600">
<svg class="h-6 w-6" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<style type="text/css">
	.st0{fill:#ABA6A6;}
</style>
<g>
	<path class="st0" d="M494.6,55.8l-38.3-38.3c-23.3-23.3-61-23.3-84.2,0l-35.9,35.9l122.6,122.6l35.9-35.9
		C517.8,116.7,517.8,79,494.6,55.8z"/>
	<polygon class="st0" points="0,389.4 0,512 122.6,512 425.2,209.3 302.7,86.8 	"/>
</g>
</svg>

      <span>Edit</span>
    </a>
    
    
    


  </nav>
  <!-- nav - end -->
</div>
    
        
</x-app-layout>