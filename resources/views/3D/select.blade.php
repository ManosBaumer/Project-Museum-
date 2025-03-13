<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cover Spline Watermark</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        html, body {
            margin: 0;
            padding: 0;
            overflow: hidden;
            height: 100%;
            width: 100%;
        }
        .background {
            width: 100%;
            height: 100%;
            position: relative;
        }
        .watermark-cover {
            position: absolute;
            bottom: 20px;
            right: 20px;
            width: 140px;
            height: 37px;
            background: white;
            border-radius: 10px;
            z-index: 10;
        }
    </style>
</head>
<body class="bg-black">
    <script type="module" src="https://unpkg.com/@splinetool/viewer@1.9.76/build/spline-viewer.js"></script>
    <div class="background">


        <spline-viewer url="https://prod.spline.design/d3cvDdY0IxktsOTF/scene.splinecode"></spline-viewer>



        <a class="watermark-cover pl-[30px] p-[5px] hover:bg-black hover:text-white" href="/home">← go back</a>
    
    </div>
</body>
</html>
