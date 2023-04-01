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
		            Children
		        </h2>
            </div>
        </div>
  	</x-slot>
    <!--ヘッダー[END]-->

	<!-- バリデーションエラーの表示に使用-->
	<x-errors id="errors" class="bg-blue-500 rounded-lg">{{$errors}}</x-errors>
	<!-- バリデーションエラーの表示に使用-->
	
<div class="grid grid-cols-1">
	<div class="max-w-sm rounded overflow-hidden shadow-lg mx-auto my-8">

		<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
			<div class="p-6 bg-white border-b border-gray-500 font-bold">
				子どもの名前登録
			</div>
		</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>





		<form action="{{ url('children') }}" method="POST" class="w-full max-w-lg">
			@csrf

			<div class="px-6 py-4">
				<div class="text-xl mb-2">
					<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
						子どもの名前
					</label>


<table class="table table-bordered" id="dynamic">  
<tr>  
<td><input type="text" name="child_names[0]" placeholder="" class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" /></td>  
<td><button type="button" name="add" id="add" class="btn btn-success text-gray-700 text-xs">追加</button></td>  
</tr>  
</table> 


<script type="text/javascript">
var i = 0;
$("#add").click(function(){
++i;
$("#dynamic").append('<tr><td><input type="text" name="child_names['+i+']" placeholder="" class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" /></td><td><button type="button" class="btn btn-danger remove text-gray-700 text-xs">削除</button></td></tr>');
});
$(document).on('click', '.remove', function(){  
$(this).parents('tr').remove();
});  
</script>



	<div class="flex flex-col">
		<div class="text-gray-700 text-center px-4 py-2 m-2">
			<x-button class="bg-blue-500 rounded-lg">アップロード</x-button>
		</div>
	</div>
	</form>



</x-app-layout>