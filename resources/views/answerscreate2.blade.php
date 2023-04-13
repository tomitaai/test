<x-app-layout>

	<!--ヘッダー[START]-->
	<x-slot name="header">
        	<div class="flex justify-center">
		        <h2 class="font-extrabold text-2xl bg-clip-text text-transparent bg-[radial-gradient(ellipse_at_bottom_right,_var(--tw-gradient-stops))] from-indigo-400 via-white-100 to-orange-500">
		            Hearing Sheet
		        </h2>
			</div>
	</x-slot>
	<!--ヘッダー[END]-->

	<!-- バリデーションエラーの表示に使用-->
	<x-errors id="errors" class="bg-blue-500 rounded-lg">{{$errors}}</x-errors>
	<!-- バリデーションエラーの表示に使用-->
		<div class="bg-[radial-gradient(ellipse_at_bottom_right,_var(--tw-gradient-stops))] from-indigo-400 via-slate-100 to-orange-500">




	<div class="py-6 sm:py-8 lg:py-12">
  <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
    <!-- text - start -->
    <div class="mb-10 md:mb-16">

      <p class="mx-auto max-w-screen-md text-center text-white md:text-lg">
      	ご家族にとってピッタリな動画を提案します。
      </br>いまの気持ちを教えてください。</p>
      <p class="mx-auto max-w-screen-md text-center text-white md:text-xs">
      	あとで回答する場合は、空欄のまま進んでください。</p>      
    </div>
    <!-- text - end -->
	
	
	
	
	<div class="max-w-sm rounded overflow-hidden shadow-lg mx-auto my-8 border border-gray-200 bg-white">

		<form action="{{ url('answers2') }}" method="POST" enctype="multipart/form-data" class="w-full max-w-lg">
			@csrf

			<div class="px-6 py-4">
				<div class="text-xl mb-2">

					<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
						質問
					</label>
					<div class="appearance-none block w-full text-gray-700 rounded py-3 px-4 mb-3 leading-tight text-sm">
					    お子様がハマっていることを教えてください。
					</div>
					<input name="question" value="どんな動画を作成したいですか？" type="hidden">

					<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
						回答
					</label>
					<input name="answer" value=""
						class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none bg-gray-100 focus:border-gray-500"
						type="text" placeholder="">

					
				</div>
			</div>


	<div class="flex flex-col">
	    <div class="text-gray-700 text-center px-4 py-2 m-2">
			<x-button class="bg-blue-500 rounded-lg">アップロード</x-button>
		</div>

		<!--<div class="text-gray-700 text-center px-4 py-2 m-2">-->
		<!--	<x-button class="bg-blue-500 rounded-lg">あとで回答する</x-button>-->
		<!--</div>-->
	</div>
	</form>
</div>
</div>
</x-app-layout>