<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Raja info</title>
</head>
<body class="h-full flex justify-center items-center">
    <div class="max-w-2xl">
        <a href="/">Tagasi</a>
        <div class="text-2xl font-bold"></div>
        <div class="flex mt-4">
            <div class="">
                Raja nimi:  <span class="font-bold">{{$data->raja_nimi}} </span>
                Raja asukoht: <span class="font-bold">{{ $data->raja_asukoht }}</span>
            </div> 
        </div>
    </div>
</body>
</html>