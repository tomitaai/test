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
		            MailmasterUpload
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



		<form action="{{ url('mailmasters') }}" method="POST" class="w-full max-w-lg">
			@csrf

			<div class="px-6 py-4">
				<div class="text-xl mb-2">

					<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
						通知の種類
					</label>
					<input name="mail_name" value=""
						class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none bg-gray-100 focus:border-gray-500"
						type="text" placeholder="">

					<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
						通知のタイトル
					</label>
					<input name="title" value=""
						class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none bg-gray-100 focus:border-gray-500"
						type="text" placeholder="">

					<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
						通知の本文が書かれたbladeファイルのタイトル
					</label>
					<input name="body" value=""
						class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none bg-gray-100 focus:border-gray-500"
						type="text" placeholder="">
					

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