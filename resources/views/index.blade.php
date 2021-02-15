<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body class="text-gray-700 bg-white dark:text-gray-200 dark:bg-gray-800">
  {{-- 導航條 --}}
  <header id="header" class="static lg:fixed w-full bg-white dark:bg-gray-800 z-40 left-0 top-0">
    <div x-data="menu()" class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
      <div class="py-6 flex flex-row items-center justify-between">
        <a href="{{ route('index') }}" class="flex items-center text-2xl font-semibold text-gray-900 dark:text-white focus:outline-none">
          <img src="/images/slogo.svg" class="inline-block h-8 mr-2" alt="{{ config('app.name') }}">
          <span>{{ config('app.name') }}</span>
        </a>
        <button class="md:hidden focus:outline-none" @click="open = !open">
          <span x-show="!open"><x-heroicon-o-menu class="w-6 h-6" /></span>
          <span x-show="open"><x-heroicon-o-x class="w-6 h-6" /></span>
        </button>
      </div>
      <nav :class="{ 'flex': open, 'hidden': !open }" class="flex-col flex-grow hidden pb-4 md:pb-0 md:flex md:justify-end md:flex-row">
        <a href="javascript: void(0)" class="nav-item" @click="goto('service')">服務優勢</a>
        <a href="javascript: void(0)" class="nav-item" @click="goto('case')">精選案例</a>
        <a href="javascript: void(0)" class="nav-item" @click="open = false">優惠價格</a>
        <a href="javascript: void(0)" class="nav-item" @click="open = false">聯絡我們</a>
      </nav>
    </div>
  </header>

  {{-- Banner --}}
  <section id="banner" class="lg:mt-20 bg-gradient-to-br from-gray-50 to-gray-200 dark:from-gray-900 dark:to-gray-700">
    <div class="max-w-screen-lg relative mx-auto px-6 py-10">
      <div class="text-sm md:text-base lg:text-lg">
          對於社會消費結構的快速變遷以及世界潮流迅速的變化，{{ config('app.name') }}擁有動察先機的獨到想法及一雙觀察敏睿的雙眼，可以精準的分析出您所需的資訊，給予您適當的建議，我們喜愛結交朋友，我們彼此可以隻是聊聊天、交流交流國際觀、亦可以互相交換資源，很高興認識您。
      </div>
      <img src="images/banner.png" class="w-full" alt="{{ config('app.name') }}">
    </div>
  </section>

  {{-- 服務優勢 --}}
  <a name="service"></a>
  <section id="service" class="max-w-screen-lg mx-auto p-4 pb-12">
    <div class="flex items-center justify-start lg:justify-center text-2xl font-semibold my-10">
      <x-heroicon-o-code class="w-10 h-10 mr-2 text-red-600" /> 網壕運服務優勢
    </div>

    <div class="grid grid-cols-2 lg:grid-cols-4 gap-2 lg:gap-4">
      <div class="shadow-lg dark:bg-gray-500 w-full flex flex-col py-10 justify-center items-center">
        <img src="/images/f1.png" class="w-20 mx-auto mb-3" alt="創意系統規劃">
        <span class="text-md">創意系統規劃</span>
      </div>
      <div class="shadow-lg dark:bg-gray-500 w-full flex flex-col py-10 justify-center items-center">
        <img src="/images/f2.png" class="w-20 mx-auto mb-3" alt="線上客製化">
        <span class="text-md">線上客製化</span>
      </div>
      <div class="shadow-lg dark:bg-gray-500 w-full flex flex-col py-10 justify-center items-center">
        <img src="/images/f3.png" class="w-20 mx-auto mb-3" alt="電子商務">
        <span class="text-md">電子商務</span>
      </div>
      <div class="shadow-lg dark:bg-gray-500 w-full flex flex-col py-10 justify-center items-center">
        <img src="/images/f4.png" class="w-20 mx-auto mb-3" alt="網站設計">
        <span class="text-md">網站設計</span>
      </div>
    </div>
  </section>

  {{-- 精選案例 --}}
  <a name="case"></a>
  <section id="case" class="bg-gray-100 dark:bg-gray-400 p-4">
    <div class="max-w-screen-lg mx-auto py-12">
      <div class="flex items-center justify-start lg:justify-center text-2xl font-semibold">
        <x-heroicon-o-code class="w-10 h-10 mr-2 text-red-600" /> 網壕運精選案例
      </div>

      <div class="my-10">
        <img src="/images/sketch.png" class="w-full" alt="草圖">
        <img src="/images/sketch-logo.png" class="w-32 mx-auto my-3 mb-6" alt="草圖">
        <div class="hidden sm:block">
          <p class="font-medium dark:text-white">草圖網歡迎各種創作類型的設計師上架自已的創作作品，對於設計師而言我們是0風險0成本的品牌孵化平臺，每賣出一件您的創作商品即能得到實際的現金收益，草圖網是自有生産資源，完完全全確保用戶收到的商品品質會得到有效保障，相對於隻有前端操作冇有後臺服務管理的APP，草圖的B2B體係更加的豐滿，對於創作者及消費者都是一種非常便利選購及購買的平臺。</p>
          <a href="#" class="text-red-500 dark:text-red-600 text-lg font-semibold mt-4 block text-center">詳情進入 ></a>
        </div>
      </div>

      <hr>

      <div class="my-10">
        <a href="https://sketch.4family.co" target="_blank">
          <img src="/images/weiziding.png" class="w-full" alt="微自定">
          <img src="/images/weiziding-logo.png" class="w-32 mx-auto my-3 mb-6" alt="微自定">
        </a>
        <div class="hidden sm:block">
          <p class="font-medium dark:text-white">微自定線上附帶下單鏈接的平臺，公司自有生産線，屬於你的加工廠。高分辨率的手機殼DIY印錶機，智能印刷。實現計算機數據輸出到機器上，直接把彩色圖案在你的物品上噴印。</p>
          <p class="font-medium dark:text-white">代理合作流程:客服1V1對接→申請成為代理→諮詢獲取資料 →開始出售→自行下單→完成 0加盟門檻、0代理費、0庫存</p>
          <a href="https://sketch.4family.co" target="_blank" class="text-red-500 dark:text-red-600 text-lg font-semibold mt-4 block text-center">詳情進入 ></a>
        </div>
      </div>

      <hr>

      <div class="my-10">
        <img src="/images/pixxeon.png" class="w-full" alt="PIXXEON">
        <img src="/images/pixxeon-logo.png" class="w-32 mx-auto my-3 mb-6" alt="PIXXEON">
        <div class="hidden sm:block">
          <p class="font-medium dark:text-white">If you have the customers or fans, we have the solution to help your brand flourish. We've created a manufacturing and supply chain management solution so you don't have to. We've also created a sleek and intuitive online and mobile supported platform with an API that allows your fans and customers to place orders from your website.</p>
          <p>&nbsp;</p>
          <p class="font-medium dark:text-white">Pixxeon's API works in the backround for you. So what is it doing?​Your website will now have an online store to place orders from.​You can decide which items are for sale or customers can upload custom designs, fan art or both! You decide and we provide.​Our platform connects you to the best possible shipping routes and our manufacturing headquarters in beautiful Shenzhen China, where we personally oversee strict quality controls on every single order. This is all behind the scenes so you don't have to worry about a thing.</p>
          <p>&nbsp;</p>
          <p class="font-medium dark:text-white">Now that you have the highest quality manufacturing, the fastest shipping and most intuitive platform , all YOU need, is to let fans and customers know you're open for business!</p>
          <a href="#" class="text-red-500 dark:text-red-600 text-lg font-semibold mt-4 block text-center">詳情進入 ></a>
        </div>
      </div>

      <hr>

      <div class="text-2xl text-center my-10">其他精選案例</div>

      <div x-data="mycase()" class="grid grid-cols-2 lg:grid-cols-3 gap-3 lg:gap-5">
        <template x-for="(item, index) in cases" :key="index">
          <a :href="item.href" :target="item.target" class="relative">
            <img :src="item.img" class="w-full" :alt="item.name">
            <div x-text="item.name" class="absolute bottom-0 left-0 w-full bg-black bg-opacity-50 text-white text-center lg:py-4"></div>
          </a>
        </template>
      </div>
    </div>
  </section>

  <div class="fixed right-2 bottom-2 opacity-80">
    <a href="javascript: switchTheme()"><x-heroicon-s-light-bulb id="themeSwitcher" class="text-gray-600 mb-1 w-12 h-12" /></a>
    <a href="#"><x-heroicon-s-arrow-circle-up class="w-12 h-12" /></a>
  </div>

  <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
