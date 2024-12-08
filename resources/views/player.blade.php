<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player GEXSIN GALAXY</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white">
    <div class="container mx-auto py-10">
        <h1 class="text-4xl font-bold text-center mb-10">GEXSIN GALAXY</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- Player Card 1 -->
            <div class="bg-blue-600 rounded-lg shadow-md overflow-hidden">
                @foreach ($TeamProfiles as $item)
                <img src="{{$item->image_path }}" alt="Super Red" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-bold">{{$item->name }}</h2>
                    <p class="text-sm">{{$item->role }}</p>
                </div>
            </div>
</body>
</html>
