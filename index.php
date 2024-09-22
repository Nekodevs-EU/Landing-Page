<?php include 'inc/decoration.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NekoDevs</title>
  <link href="/src/styles/output.css" rel="stylesheet">
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
  <?php include 'inc/meta.php';?>
</head>

<body>
  <!-- component -->
  <div class="relative isolate overflow-hidden bg-gray-900">
    <svg class="absolute inset-0 -z-10 h-full w-full stroke-white/10 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]" aria-hidden="true">
      <defs>
        <pattern id="983e3e4c-de6d-4c3f-8d64-b9761d1534cc" width="200" height="200" x="50%" y="-1" patternUnits="userSpaceOnUse">
          <path d="M.5 200V.5H200" fill="none" />
        </pattern>
      </defs>
      <svg x="50%" y="-1" class="overflow-visible fill-gray-800/20">
        <path d="M-200 0h201v201h-201Z M600 0h201v201h-201Z M-400 600h201v201h-201Z M200 800h201v201h-201Z" stroke-width="0" />
      </svg>
      <rect width="100%" height="100%" stroke-width="0" fill="url(#983e3e4c-de6d-4c3f-8d64-b9761d1534cc)" />
    </svg>
    <div class="absolute left-[calc(50%-4rem)] top-10 -z-10 transform-gpu blur-3xl sm:left-[calc(50%-18rem)] lg:left-48 lg:top-[calc(50%-30rem)] xl:left-[calc(50%-24rem)]" aria-hidden="true">
      <div class="aspect-[1108/632] w-[69.25rem] bg-gradient-to-r from-[#80caff] to-[#4f46e5] opacity-20" style="clip-path: polygon(73.6% 51.7%, 91.7% 11.8%, 100% 46.4%, 97.4% 82.2%, 92.5% 84.9%, 75.7% 64%, 55.3% 47.5%, 46.5% 49.4%, 45% 62.9%, 50.3% 87.2%, 21.3% 64.1%, 0.1% 100%, 5.4% 51.1%, 21.4% 63.9%, 58.9% 0.2%, 73.6% 51.7%)"></div>
    </div>
    <div class="mx-auto max-w-7xl px-6 pb-24 pt-10 sm:pb-32 lg:flex lg:px-8 lg:py-40">
      <div class="mx-auto max-w-2xl flex-shrink-0 lg:mx-0 lg:max-w-xl lg:pt-8">
        <div class="mt-24 sm:mt-32 lg:mt-16">
          <a href="/news" class="inline-flex space-x-6">
            <span class="rounded-full bg-indigo-500/10 px-3 py-1 text-sm font-semibold leading-6 text-cyan-500 ring-1 ring-inset ring-indigo-500/20">What's new</span>
          </a>
        </div>
        <h1 class="mt-10 text-4xl font-bold tracking-tight text-white sm:text-6xl">Pawsitively Innovative Software Solutions!</h1>
        <p class="mt-6 text-lg leading-8 text-gray-300">At Nekodevs, we create purr-fectly crafted apps and websites that blend our love for cats with innovative technology. Join us in making the digital world a pawsitive place!</p>
        <div class="mt-10 flex items-center gap-x-6">
          <a href="/projects" class="rounded-md bg-purple-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-purple-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-400">Our projects</a>
          <a href="#our-team" class="text-sm font-semibold leading-6 text-white">Who's behind this? <span aria-hidden="true">→</span></a>
        </div>
      </div>
      <div class="mx-auto mt-16 flex max-w-2xl sm:mt-24 lg:ml-10 lg:mr-0 lg:mt-0 lg:max-w-none lg:flex-none xl:ml-32">
        <div class="max-w-3xl flex-none sm:max-w-5xl lg:max-w-none">
          <img src="/src/assets/img/github.png" alt="App screenshot" width="2432" height="1442" class="w-[76rem] rounded-md bg-white/5 shadow-2xl ring-1 ring-white/10">
        </div>
      </div>
    </div>
  </div>

  <section class="relative py-16 dark:bg-gray-900 bg-gray-800 border-t-2 border-b-2 border-gray-700" id="our-team">
    <div class="absolute inset-0">
      <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
        <defs>
          <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="100%">
            <stop offset="0%" style="stop-color:rgb(102,51,153);stop-opacity:0.9" />
            <stop offset="100%" style="stop-color:rgb(75,0,130);stop-opacity: 0.9em;" />
          </linearGradient>
          <filter id="blur" x="-50%" y="-50%" width="200%" height="200%">
            <feGaussianBlur in="SourceGraphic" stdDeviation="40" />
          </filter>
          <pattern id="grid" width="40" height="40" patternUnits="userSpaceOnUse">
            <path d="M 40 0 L 0 0 0 40" fill="none" stroke="rgba(255, 255, 255, 0.1)" stroke-width="1" />
          </pattern>
        </defs>
        <rect width="100%" height="100%" fill="url(#grid)" />
        <circle cx="30%" cy="30%" r="20%" fill="url(#grad1)" filter="url(#blur)" opacity="0.5" />
        <circle cx="70%" cy="70%" r="25%" fill="url(#grad1)" filter="url(#blur)" opacity="0.5" />
        <circle cx="50%" cy="50%" r="15%" fill="url(#grad1)" filter="url(#blur)" opacity="0.5" />
      </svg>
    </div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <h2 class="text-3xl font-bold text-white dark:text-gray-900">Meet Our Team</h2>
      <p class="text-1xl font-bold text-white dark:text-gray-900">Meet the cats behind our code</p>
      <div class="mt-12 grid grid-cols-1 gap-6 sm:grid-cols-2">
        <div class="p-6 bg-gray-900 dark:bg-gray-700 rounded-lg shadow-lg">
          <div class="flex items-center justify-center h-24 w-24 rounded-full bg-purple-600">
            <img src="/src/assets/img/french-femboi.png" alt="French Femboi" class="h-24 w-24 p-0 rounded-full">
          </div>
          <h3 class="mt-4 text-lg font-medium text-white dark:text-gray-900">French Femboi</h3>
          <p class="mt-2 text-base text-gray-300 dark:text-gray-500">Developer</p>
          <p class="mt-2 text-base text-gray-500 dark:text-gray-500">Dart, PHP, JS, CSS, HTML, batch, NodeJS</p>
          <a href="https://github.com/french-femboi" class="mt-4 text-base text-purple-500 hover:text-purple-400">View GitHub profile</a>
        </div>
        <div class="p-6 bg-gray-900 dark:bg-gray-700 rounded-lg shadow-lg">
          <div class="flex items-center justify-center h-24 w-24 rounded-full bg-purple-600">
            <img src="/src/assets/img/elpoep.png" alt="French Femboi" class="h-24 w-24 p-0 rounded-full">
          </div>
          <h3 class="mt-4 text-lg font-medium text-white dark:text-gray-900">elpoep</h3>
          <p class="mt-2 text-base text-gray-300 dark:text-gray-500">Developer</p>
          <p class="mt-2 text-base text-gray-500 dark:text-gray-500">c, game maker language, css, html, some javascript</p>
          <a href="https://github.com/elpoeprod" class="mt-4 text-base text-purple-500 hover:text-purple-400">View GitHub profile</a>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-gray-900 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <h2 class="text-3xl font-bold text-white">What's so special?</h2>
      <div class="mt-12 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
        <div class="p-6 bg-gray-800 rounded-lg shadow-lg">
          <div class="flex items-center justify-center h-12 w-12 rounded-md bg-purple-600 shadow-purple">
            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path d="M19 12H5" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
              <path d="M12 19l-7-7 7-7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
            </svg>
          </div>
          <h3 class="mt-4 text-lg font-medium text-white">Commited to open-source</h3>
          <p class="mt-2 text-base text-gray-300">We are commited to keeping all our projects open source.</p>
        </div>
        <div class="p-6 bg-gray-800 rounded-lg shadow-lg">
          <div class="flex items-center justify-center h-12 w-12 rounded-md bg-purple-600 shadow-purple" style="color: white;">
            :3
          </div>
          <h3 class="mt-4 text-lg font-medium text-white">Meow meow</h3>
          <p class="mt-2 text-base text-gray-300">Just some random developer cats who like to type on their keyboards all day long.</p>
        </div>
        <div class="p-6 bg-gray-800 rounded-lg shadow-lg">
          <div class="flex items-center justify-center h-12 w-12 rounded-md bg-purple-600 shadow-purple">
            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
            </svg>
          </div>
          <h3 class="mt-4 text-lg font-medium text-white">Powered by Donations</h3>
          <p class="mt-2 text-base text-gray-300">Most of our websites are not behind a paywall.</p>
        </div>
      </div>
    </div>
  </section>

  <?php include 'inc/footer.php';?>
  <?php include 'inc/scripts-bottom.php';?>

</body>

</html>