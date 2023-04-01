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
	
	
	
	<div class="py-6 sm:py-8 lg:py-12">
  <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
    <!-- text - start -->
    <div class="mb-10 md:mb-16">
      <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">ヒアリングシート</h2>

      <p class="mx-auto max-w-screen-md text-center text-gray-500 md:text-lg">
      	ご家族にとってピッタリな動画を提案します。
      </br>いまの気持ちを教えてください。</p>
      <p class="mx-auto max-w-screen-md text-center text-gray-500 md:text-xs">
      	あとで回答する場合は、空欄のまま進んでください。</p>

    </div>
    <!-- text - end -->
	
	
	
	
	<div class="max-w-sm rounded overflow-hidden shadow-lg mx-auto my-8 border border-gray-200 bg-white">


		<form action="{{ url('answers4') }}" method="POST" enctype="multipart/form-data" class="w-full max-w-lg">
			@csrf

			<div class="px-6 py-4">
				<div class="text-xl mb-2">

					<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
						質問
					</label>
					<div class="appearance-none block w-full text-gray-700 rounded py-3 px-4 mb-3 leading-tight text-sm">
					    いま、お子様に伝えたい言葉、想いは何ですか？
					</div>
					<input name="question" value="いま、お子様に伝えたい言葉、想いは何ですか？" type="hidden">

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
</x-app-layout>