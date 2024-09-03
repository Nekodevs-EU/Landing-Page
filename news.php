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

<body class="bg-gray-900">
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
        <h1 class="mt-10 text-4xl font-bold tracking-tight text-white sm:text-6xl">News</h1>
        <p class="mt-6 text-lg leading-8 text-gray-300">Look at the freshest news from NekoDevs</p>
      </div>
    </div>
  </div>

    <div class="container mx-auto px-6 py-10">
        <h2 class="text-2xl font-bold text-white mb-6">Project List</h2>
        <div class="bg-gray-800 rounded-lg shadow-lg overflow-hidden">
            <table class="w-full border border-gray-700">
                <thead>
                    <tr>
                        <th class="py-3 px-4 bg-gray-900 text-left text-xs font-semibold text-gray-300 uppercase tracking-wider">Name</th>
                        <th class="py-3 px-4 bg-gray-900 text-left text-xs font-semibold text-gray-300 uppercase tracking-wider">Description</th>
                        <th class="py-3 px-4 bg-gray-900 text-left text-xs font-semibold text-gray-300 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="py-3 px-4 border-b border-gray-700 text-gray-300">Welcome to NekoDevs!</td>
                        <td class="py-3 px-4 border-b border-gray-700 text-gray-300">Haii haii, and welcome to our new developer studio...</td>
                        <td class="py-3 px-4 border-b border-gray-700">
                            <a href="https://nekodevs.eu" class="text-gray-300 hover:text-gray-100">View Article</a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

  <?php include 'inc/footer.php';?>
  <?php include 'inc/scripts-bottom.php';?>

</body>

</html>