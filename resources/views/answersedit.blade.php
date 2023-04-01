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
		            Edit
		        </h2>
            </div>
        </div>
  	</x-slot>
    <!--ヘッダー[END]-->
            
        <!-- バリデーションエラーの表示に使用-->
        <x-errors id="errors" class="bg-blue-500 rounded-lg">{{$errors}}</x-errors>
        <!-- バリデーションエラーの表示に使用-->
        
	<div class="max-w-sm rounded overflow-hidden shadow-lg mx-auto my-8 border border-gray-200 bg-white">

  
   <form action="{{ url('answers/update') }}" method="POST" class="w-full max-w-lg">
                @csrf
  
  <div class="px-6 py-4">
    <div class="text-xl mb-2">
        
		<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
			質問
		</label>
		<div class="appearance-none block w-full text-gray-700 rounded py-3 px-4 mb-3 leading-tight text-sm">
		    {{ $answer->question }}
		</div>
		<input name="question" value="{{ $answer->question }}" type="hidden">
		
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                        回答
                      </label>
        <input name="answer" value="{{ $answer->answer }}" 
        class="appearance-none block w-full h-40 break-words inline-block text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none bg-gray-100 focus:border-gray-500" type="text" placeholder="">
        </div>



                  <div class="flex flex-col">
                      <div class="text-gray-700 text-center px-4 py-2 m-2">
                             <x-button class="bg-blue-500 rounded-lg">更新</x-button>
                      </div>
                   </div>
                <!-- id値を送信 -->
                <input type="hidden" name="id" value="{{$answer->id}}">
                <!--/ id値を送信 -->
            </form>
</div>


</x-app-layout>