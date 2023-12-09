<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Swiper demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- Demo styles -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        section {
            position: relative;
            width: 100%;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #29332b;
            overflow: hidden;
        }

        .swiper-container {
            width: 100%;
            margin: 0 auto;

            /* padding-top: 50px;
            padding-bottom: 50px; */
        }

        .swiper-slide {
            display: flex;
            justify-content: space-between;
            /* text-align: center; */
            background-position: center;
            background-size: cover;
            width: 500px;
            height: 500px;
            background: #250821;
            box-shadow: 0 0 0.5rem #39ff14;
            filter: blur(4px);
            border-radius: 10px;
        }

        .swiper-slide-active {
            filter: blur(0px);
            background: #29332b;

        }

        .testimonialBox {
            position: relative;
            max-width: 500px;
            max-height: 300px;
            padding: 40px;
            padding-top: 70px;
            color: white;
            /* font-weight: bold; */
        }

        .testimonialBox .quote {
            position: absolute;
            top: 20px;
            left: 30px;
            transform: rotate(180deg);
        }

        .testimonialBox .comment {
            height: 250px;
            overflow: auto;
            scrollbar-width: thin;
            scrollbar-color: #39ff14 #29332b;
        }

        .comment::-webkit-scrollbar {
            width: 0.5rem;
        }

        .comment::-webkit-scrollbar-track {
            background: #29332b;
        }

        .comment::-webkit-scrollbar-thumb {
            background: #39ff14;
            border-radius: 5rem;
        }

        .testimonialBox .details {
            margin-top: 20px;
        }

        .testimonialBox .details h3 {
            font-size: 16px;
            font-weight: 400;
            letter-spacing: 1px;
            color: #39ff14;
            line-height: 1.1em;
        }

        .testimonialBox .details h3 span {
            font-size: 12px;
            color: #39ff14;
            /* font-weight: bold; */
        }

        @media (max-width: 600px) {

            .swiper-slide {
                width: 400px;
                height: 500px;
            }
        }

        @media (max-width: 500px) {

            .swiper-slide {
                width: 300px;
                height: 500px;
            }
        }

        @media (max-width: 350px) {

            .swiper-slide {
                width: 200px;
                height: 500px;
            }
        }
    </style>
</head>

<body>
    <!-- Swiper -->
    <section>
        <div class="swiper-container mySwiper">
            <div class="swiper-wrapper">
                @foreach ($comments as $comment)
                    <div class="swiper-slide">
                        <div class="testimonialBox">
                            <img src="images/quote.png" class="quote">
                            <div class="content">
                                <div class="comment">
                                    <p>{{ $comment->comment }}</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam esse deserunt
                                        optio
                                        ex
                                        deleniti consequuntur nulla, dolore dolores error iure, obcaecati veniam magni!
                                        Fugiat alias quod culpa nihil aperiam accusamus.
                                        lorLorem ipsum dolor sit amet consectetur adipisicing elit. Quam esse deserunt
                                        optio
                                        ex
                                        deleniti consequuntur nulla, dolore dolores error iure, obcaecati veniam magni!
                                        Fugiat alias quod culpa nihil aperiam accusamus.
                                        lorLorem ipsum dolor sit amet consectetur adipisicing elit. Quam esse deserunt
                                        optio
                                        ex
                                        deleniti consequuntur nulla, dolore dolores error iure, obcaecati veniam magni!
                                        Fugiat alias quod culpa nihil aperiam accusamus.
                                        lorLorem ipsum dolor sit amet consectetur adipisicing elit. Quam esse deserunt
                                        optio
                                        ex
                                        deleniti consequuntur nulla, dolore dolores error iure, obcaecati veniam magni!
                                        Fugiat alias quod culpa nihil aperiam accusamus.
                                        lor
                                        deleniti consequuntur nulla, dolore dolores error iure, obcaecati veniam magni!
                                        Fugiat alias quod culpa nihil aperiam accusamus.
                                        lorLorem ipsum dolor sit amet consectetur adipisicing elit. Quam esse deserunt
                                        optio
                                        ex
                                        deleniti consequuntur nulla, dolore dolores error iure, obcaecati veniam magni!
                                        Fugiat alias quod culpa nihil aperiam accusamus.
                                        lorLorem ipsum dolor sit amet consectetur adipisicing elit. Quam esse deserunt
                                        optio
                                        ex
                                        deleniti consequuntur nulla, dolore dolores error iure, obcaecati veniam magni!
                                        Fugiat alias quod culpa nihil aperiam accusamus.
                                        lor
                                        deleniti consequuntur nulla, dolore dolores error iure, obcaecati veniam magni!
                                        Fugiat alias quod culpa nihil aperiam accusamus.
                                        lorLorem ipsum dolor sit amet consectetur adipisicing elit. Quam esse deserunt
                                        optio
                                        ex
                                        deleniti consequuntur nulla, dolore dolores error iure, obcaecati veniam magni!
                                        Fugiat alias quod culpa nihil aperiam accusamus.
                                        lorLorem ipsum dolor sit amet consectetur adipisicing elit. Quam esse deserunt
                                        optio
                                        ex
                                        deleniti consequuntur nulla, dolore dolores error iure, obcaecati veniam magni!
                                        Fugiat alias quod culpa nihil aperiam accusamus.
                                        lor
                                    </p>
                                </div>
                                <div class="details">
                                    <h3>{{ $comment->first_name }}
                                        {{ $comment->last_name }}<br><br><span>{{ $comment->current_company }}({{ $comment->current_position }})</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            coverflowEffect: {
                rotate: 30,
                stretch: 0,
                depth: 100,
                modifier: 2,
                slideShadows: true,
            },
            loop: true,
        });
    </script>
</body>

</html>
