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


		<form action="{{ url('answers5') }}" method="POST" enctype="multipart/form-data" class="w-full max-w-lg">
			@csrf

			<div class="px-6 py-4">
				<div class="text-xl mb-2">

					<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
						質問
					</label>
					<div class="appearance-none block w-full text-gray-700 rounded py-3 px-4 mb-3 leading-tight text-sm">
					    つくりたい動画のイメージを教えてください。
					</div>
					<input name="question" value="" type="hidden">

					<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
						回答
					</label>
					<!--<input name="answer" value=""-->
					<!--	class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none bg-gray-100 focus:border-gray-500"-->
					<!--	type="text" placeholder="">-->

					
					
					

					<div class="flex">
		    <div class="inline-block flex items-center mr-4">
		    <input
        type="checkbox"
        name="answers[0]"
        id="checkbox1"
        class="hidden peer"/>
      <label
      	class="inline-block bg-gray-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-400 mr-2 border-2 border-gray-200 cursor-pointer peer-checked:border-blue-600 hover:text-gray-600 peer-checked:text-gray-600 hover:bg-gray-50"
        for="checkbox1">
        #ポップ
      </label>
      </div>
      
      
      		    <div class="inline-block flex items-center mr-4">
		    <input
        type="checkbox"
        name="answer[1]"
        id="checkbox2"
        class="hidden peer"/>
      <label
      	class="inline-block bg-gray-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-400 mr-2 border-2 border-gray-200 cursor-pointer peer-checked:border-blue-600 hover:text-gray-600 peer-checked:text-gray-600 hover:bg-gray-50"
        for="checkbox2">
        #ドラマチック
      </label>
      </div>
      
      
      </div>
					<div class="flex">
      		    <div class="inline-block flex items-center mr-4">
		    <input
        type="checkbox"
        name="answer[2]"
        id="checkbox3"
        class="hidden peer"/>
      <label
      	class="inline-block bg-gray-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-400 mr-2 border-2 border-gray-200 cursor-pointer peer-checked:border-blue-600 hover:text-gray-600 peer-checked:text-gray-600 hover:bg-gray-50"
        for="checkbox3">
        #ハートウォーミング
      </label>
      </div>

      		    <div class="inline-block flex items-center mr-4">
		    <input
        type="checkbox"
        name="answer[3]"
        id="checkbox4"
        class="hidden peer"/>
      <label
      	class="inline-block bg-gray-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-400 mr-2 border-2 border-gray-200 cursor-pointer peer-checked:border-blue-600 hover:text-gray-600 peer-checked:text-gray-600 hover:bg-gray-50"
        for="checkbox4">
        #ジョイフル
      </label>
      </div>
      </div>
					<div class="flex">
      		    <div class="inline-block flex items-center mr-4">
		    <input
        type="checkbox"
        name="answer[4]"
        id="checkbox5"
        class="hidden peer"/>
      <label
      	class="inline-block bg-gray-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-400 mr-2 border-2 border-gray-200 cursor-pointer peer-checked:border-blue-600 hover:text-gray-600 peer-checked:text-gray-600 hover:bg-gray-50"
        for="checkbox5">
        #クール
      </label>
      </div>



      		    <div class="inline-block flex items-center mr-4">
		    <input
        type="checkbox"
        name="answer[5]"
        id="checkbox6"
        class="hidden peer"/>
      <label
      	class="inline-block bg-gray-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-400 mr-2 border-2 border-gray-200 cursor-pointer peer-checked:border-blue-600 hover:text-gray-600 peer-checked:text-gray-600 hover:bg-gray-50"
        for="checkbox6">
        #エモーショナル
      </label>
      </div>


      </div>
					<div class="flex">


      		    <div class="inline-block flex items-center mr-4">
		    <input
        type="checkbox"
        name="answer[6]"
        id="checkbox7"
        class="hidden peer"/>
      <label
      	class="inline-block bg-gray-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-400 mr-2 border-2 border-gray-200 cursor-pointer peer-checked:border-blue-600 hover:text-gray-600 peer-checked:text-gray-600 hover:bg-gray-50"
        for="checkbox7">
        #ナチュラル
      </label>
      </div>
      		    <div class="inline-block flex items-center mr-4">
		    <input
        type="checkbox"
        name="answer[7]"
        id="checkbox8"
        class="hidden peer"/>
      <label
      	class="inline-block bg-gray-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-400 mr-2 border-2 border-gray-200 cursor-pointer peer-checked:border-blue-600 hover:text-gray-600 peer-checked:text-gray-600 hover:bg-gray-50"
        for="checkbox8">
        #ファッショナブル
      </label>
      </div>


      </div>
					<div class="flex">

      		    <div class="inline-block flex items-center mr-4">
		    <input
        type="checkbox"
        name="answer[8]"
        id="checkbox9"
        class="hidden peer"/>
      <label
      	class="inline-block bg-gray-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-400 mr-2 border-2 border-gray-200 cursor-pointer peer-checked:border-blue-600 hover:text-gray-600 peer-checked:text-gray-600 hover:bg-gray-50"
        for="checkbox9">
        #ロマンチック
      </label>
      </div>
      		    <div class="inline-block flex items-center mr-4">
		    <input
        type="checkbox"
        name="answer[9]"
        id="checkbox10"
        class="hidden peer"/>
      <label
      	class="inline-block bg-gray-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-400 mr-2 border-2 border-gray-200 cursor-pointer peer-checked:border-blue-600 hover:text-gray-600 peer-checked:text-gray-600 hover:bg-gray-50"
        for="checkbox10">
        #スマイル
      </label>
      </div>
      
            </div>
					<div class="flex">

      		    <div class="inline-block flex items-center mr-4">
		    <input
        type="checkbox"
        name="answer[10]"
        id="checkbox11"
        class="hidden peer"/>
      <label
      	class="inline-block bg-gray-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-400 mr-2 border-2 border-gray-200 cursor-pointer peer-checked:border-blue-600 hover:text-gray-600 peer-checked:text-gray-600 hover:bg-gray-50"
        for="checkbox11">
        #撮って出しエンドロール
      </label>
      </div>
      
      
            </div>
					<div class="flex">

      		    <div class="inline-block flex items-center mr-4">
		    <input
        type="checkbox"
        name="answer[11]"
        id="checkbox12"
        class="hidden peer"/>
      <label
      	class="inline-block bg-gray-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-400 mr-2 border-2 border-gray-200 cursor-pointer peer-checked:border-blue-600 hover:text-gray-600 peer-checked:text-gray-600 hover:bg-gray-50"
        for="checkbox12">
        #記録ビデオ
      </label>
      </div>
      		    <div class="inline-block flex items-center mr-4">
		    <input
        type="checkbox"
        name="answer[12]"
        id="checkbox13"
        class="hidden peer"/>
      <label
      	class="inline-block bg-gray-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-400 mr-2 border-2 border-gray-200 cursor-pointer peer-checked:border-blue-600 hover:text-gray-600 peer-checked:text-gray-600 hover:bg-gray-50"
        for="checkbox13">
        #寄せ書きビデオ
      </label>
      </div>

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