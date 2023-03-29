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
		            Upload
		        </h2>
            </div>
        </div>
	</x-slot>
	<!--ヘッダー[END]-->

	<!-- バリデーションエラーの表示に使用-->
	<x-errors id="errors" class="bg-blue-500 rounded-lg">{{$errors}}</x-errors>
	<!-- バリデーションエラーの表示に使用-->
	<div class="max-w-sm rounded overflow-hidden shadow-lg mx-auto my-8 border border-gray-200 bg-white">

		<!--<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">-->
		<!--	<div class="p-6 bg-white border-b border-gray-500 font-bold">-->
		<!--		素材のアップロード-->
		<!--	</div>-->
		<!--</div>-->



		<form action="{{ url('posts') }}" method="POST" enctype="multipart/form-data" class="w-full max-w-lg">
			@csrf

			<div class="px-6 py-4">
				<div class="text-xl mb-2">

					<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
						素材
					</label>
					<input name="material"
						class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none bg-gray-100"
						type="file" placeholder="">


					<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
						イベント名
					</label>
					<input name="event_name" value=""
						class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none bg-gray-100 focus:border-gray-500"
						type="text" placeholder="">

					<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
						撮影日
					</label>
					<input name="shooting_date" type="date" value="<?php echo date('Y-m-j');?>"
						class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none bg-gray-100 focus:border-gray-500"
						placeholder="">


		<div class="form-group mb-3">
					<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
						掲載希望
					</label>

					
					
    <div class="form-check form-check-inline px-4">
        <input type="radio" name="pubrequest" class="form-check-input" id="pubrequest1" value="1" {{ old ('pubrequest') == '掲載を希望する' ? 'checked' : '' }} checked>
        <label for="pubrequest1" class="form-check-label text-sm text-gray-900">掲載を希望する</label>
    </div>
    <div class="form-check form-check-inline px-4">
        <input type="radio" name="pubrequest" class="form-check-input" id="pubrequest2" value="2" {{ old ('pubrequest') == 'システムにおまかせ' ? 'checked' : '' }}>
        <label for="pubrequest2" class="form-check-label text-sm text-gray-900">システムにおまかせ</label>
    </div>
    </label>
</div>

					
					<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
						子どものタグ付け
					</label>
					
					
					<div class="flex">
		    @foreach ($children as $key => $child)
		    <div class="inline-block flex items-center mr-4">
		    <input
        type="checkbox"
        name="children[]"
        value="{{ $key }}"
        id="checkbox{{ $key }}"
        class="hidden peer"/>
      <label
      	class="inline-block bg-gray-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-400 mr-2 border-2 border-gray-200 cursor-pointer peer-checked:border-blue-600 hover:text-gray-600 peer-checked:text-gray-600 hover:bg-gray-50"
        for="checkbox{{ $key }}">
        #{{ $child }} 
      </label>
      </div>
				@endforeach
			</div>




				</div>
			</div>


	<div class="flex flex-col">
		<div class="text-gray-700 text-center px-4 py-2 m-2">
			<x-button class="bg-blue-500 rounded-lg">アップロード</x-button>
		</div>
	</div>
	</form>
</div>
</x-app-layout>