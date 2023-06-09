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
		            Proposal
		        </h2>
            </div>
        </div>
	</x-slot>
	<!--ヘッダー[END]-->


	<div class="py-6 sm:py-8 lg:py-12">
	    <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
	<!-- text - start -->
    <div class="mb-10">
      <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-2xl">プロポーザルシート</h2>

      <p class="mx-auto max-w-screen-md text-center text-gray-500 text-base">
      	ときが過ぎても"ぬくもり"を感じられる動画には、</br>
      	素敵な素材が必要です。撮影時のポイントや</br>
      	撮影していただきたいショットを紹介します。
      	</p>
      	</div>
    <!-- text - end -->
    
    <div class="rounded overflow-hidden shadow-lg mx-auto m-6 mt-border border-gray-200 bg-white">

        <div class="rounded flex h-full items-center mb-3">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
            <path d="M22 4L12 14.01l-3-3"></path>
          </svg>
          <span class="title-font font-medium">Point （ご出産直後）</span>
        </div>

        <p class="text-base text-gray-700 text-sm">
            ご出産おめでとうございます！長い期間、お腹のなかにいたお子様とついにご対面できましたね。お子様と対面したときのお気持ちをぜひお聞かせください。</br></br>
            命名書とともにご家族揃ってお写真を撮影するのも記念になり、おすすめです！
        </p>
      </div>
    </div>
    </div>

	<div class="mx-auto max-w-screen-2xl px-4">
    
    <!--<div class="flex items-center justify-center">-->
    <!--  <div class="flex flex-col items-end">-->
    <!--    <img-->
    <!--      class="object-cover mb-6 rounded shadow-lg h-28 h-48 w-48"-->
    <!--      src="https://images.pexels.com/photos/3184287/pexels-photo-3184287.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260"-->
    <!--      alt=""-->
    <!--    />-->
    <!--    <img class="object-cover w-20 h-20 rounded shadow-lg sm:h-32 xl:h-40 sm:w-32 xl:w-40" src="https://images.pexels.com/photos/3182812/pexels-photo-3182812.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" alt="" />-->
    <!--  </div>-->
    <!--  <div class="px-3">-->
    <!--    <img class="object-cover w-40 h-40 rounded shadow-lg sm:h-64 xl:h-80 sm:w-64 xl:w-80" src="https://images.pexels.com/photos/3182739/pexels-photo-3182739.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;w=500" alt="" />-->
    <!--  </div>-->
    <!--</div>-->
  </div>


  <nav class="sticky bottom-0 mx-auto flex w-full justify-between gap-8 border-t bg-white px-10 py-4 text-xs sm:max-w-md sm:rounded-t-xl sm:border-transparent sm:text-sm sm:shadow-2xl">
    <a href={{ url('/dashboard') }} class="flex flex-col items-center gap-1 text-indigo-500">
      <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
        <path d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
        <path d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
      </svg>

      <span>Home</span>
    </a>
    
    <a href={{ url('/answers') }} class="flex flex-col items-center gap-1 text-gray-400 transition duration-100 hover:text-gray-500 active:text-gray-600">
      <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
        <path fill-rule="evenodd" d="M9 4.5a.75.75 0 01.721.544l.813 2.846a3.75 3.75 0 002.576 2.576l2.846.813a.75.75 0 010 1.442l-2.846.813a3.75 3.75 0 00-2.576 2.576l-.813 2.846a.75.75 0 01-1.442 0l-.813-2.846a3.75 3.75 0 00-2.576-2.576l-2.846-.813a.75.75 0 010-1.442l2.846-.813A3.75 3.75 0 007.466 7.89l.813-2.846A.75.75 0 019 4.5zM18 1.5a.75.75 0 01.728.568l.258 1.036c.236.94.97 1.674 1.91 1.91l1.036.258a.75.75 0 010 1.456l-1.036.258c-.94.236-1.674.97-1.91 1.91l-.258 1.036a.75.75 0 01-1.456 0l-.258-1.036a2.625 2.625 0 00-1.91-1.91l-1.036-.258a.75.75 0 010-1.456l1.036-.258a2.625 2.625 0 001.91-1.91l.258-1.036A.75.75 0 0118 1.5zM16.5 15a.75.75 0 01.712.513l.394 1.183c.15.447.5.799.948.948l1.183.395a.75.75 0 010 1.422l-1.183.395c-.447.15-.799.5-.948.948l-.395 1.183a.75.75 0 01-1.422 0l-.395-1.183a1.5 1.5 0 00-.948-.948l-1.183-.395a.75.75 0 010-1.422l1.183-.395c.447-.15.799-.5.948-.948l.395-1.183A.75.75 0 0116.5 15z" clip-rule="evenodd" />
      </svg>

      <span>Sheet</span>
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

    <a href="{{ url('/posts') }}" class="flex flex-col items-center gap-1 text-gray-400 transition duration-100 hover:text-gray-500 active:text-gray-600">
      <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
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