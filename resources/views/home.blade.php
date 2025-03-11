<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .reactive-div {
            width: 100%;
            height: 41vh; /* 35% of the viewport height */
            background: rgba(0, 0, 0, 0.8);
            position: absolute;
            bottom: 0;
            border-top-left-radius: 5vh;
            border-top-right-radius: 5vh;
            box-shadow: 0 0px 20px rgba(0, 0, 0, 1);
        }

        #scroll-container::-webkit-scrollbar {
            height: 0.7vh;
        }

        #scroll-container::-webkit-scrollbar-track {
            background: #6a6a6a; /* Track color */
            border-radius: 20px; /* Rounded track */
        }

        #scroll-container::-webkit-scrollbar-thumb {
            background: #ffffff; /* Thumb color */
            border-radius: 20px; /* Rounded thumb */
        }

        #scroll-container::-webkit-scrollbar-thumb:hover {
            background: #ff6200; /* Darker thumb on hover */
        }

        /* Remove scrollbar buttons (arrows) */
        #scroll-container::-webkit-scrollbar-button {
            display: none; /* Hide arrows */
            width: 0;
            height: 0;
        }

        #buttons:hover{
            background-color: rgba(255, 255, 255, 0.12);
            color: white;

        }
        select{
            appearance: none;
            background-none;
        }
    </style>
</head>
<body style=" background: url('/images/background.png') no-repeat center center fixed;
            background-size: cover; padding: 0px;">
    @include('layouts.nav')

    <div class="reactive-div">
        <div class="w-[100%] h-[10vh] content-center pl-[12vh] pt-[1vh] pb-[2vh] space-x-[14vw]">
            <a href="" class="bg-white w-[10vw] h-[5vh] p-[1.5vh] pl-[8vh] pr-[8vh] text-[1.7vh] rounded-[1.3vh] " id="buttons">Custom tour</a>

            <h class=" text-white font-extrabold text-[4vh]">Explore Tours</h>

            <a href="" class="bg-white w-[10vw] h-[5vh] p-[1.5vh] pl-[7vh] pr-[7vh] text-[1.7vh] rounded-[1.3vh] " id="buttons">Favourites</a>

            <select name="sort" class="form-control p-[1.5vh] pl-[2vh] pr-[2vh] rounded-[1.3vh] text-[1.7vh] content-center text-center">
                <option value="">Sort By   ↓</option>
                <option value="name_asc" {{ request('sort') == 'name_asc' ? 'selected' : '' }}>Name A-Z</option>
                <option value="name_desc" {{ request('sort') == 'name_desc' ? 'selected' : '' }}>Name Z-A</option>
                <option value="exhibits_asc" {{ request('sort') == 'exhibits_asc' ? 'selected' : '' }}>Exhibits desc</option>
                <option value="exhibits_desc" {{ request('sort') == 'exhibits_desc' ? 'selected' : '' }}>Exhibits asc</option>
            </select>
        </div>


        <div class=" w-[100%] h-[28vh] overflow-x-auto absolute bottom-[5%] " id="scroll-container">
            <div class="flex space-x-[3vw] pl-[1.5vw]" style="width: max-content;">
                @for ($i = 0; $i < 8; $i++)
                    <div class="w-[25vw] h-[25vh] bg-gray-300 rounded-[3.5vh] shadow-md flex-shrink-0"></div>
                @endfor
            </div>
        </div>
    </div>

</body>
</html>
