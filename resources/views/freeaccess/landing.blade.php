@extends('layout.layout')
@section('content')


<div class="parent">
    <div class="parentshadow">
        <div class="contenttext">
        <h2>Better Solution For Your Choice Book</h2>
        <p>We can access book for online and free!</p>
        <a href="/register" class="register">Register</a>
        </div>
        <div class="footerparent">
            <img src="{{asset('assets/img/gramed.png')}}" alt="">
            <img src="{{asset('assets/img/belimo.png')}}" alt="">
            <img src="{{asset('assets/img/lifegroup.png')}}" alt="">
            <img style="height:50px" src="{{asset('assets/img/lilly.png')}}" alt="">
            <img style="height:50px" src="{{asset('assets/img/trustly.png')}}" alt="">
        </div>
    </div>
</div>

<div class="parent2">
    <div class="textabout"><h2>TOP 3 Book of the Week</h2></div>
    <div class="top3book">
        <div class="leftcontentt">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item" id="accordion-item1">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    #1 Berserk
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio cupiditate veniam omnis iusto fugiat natus repellat doloribus quis iste quam eveniet, officiis molestias alias molestiae corrupti asperiores dolorem aliquid nam! Nostrum incidunt consequatur aliquid deleniti fugiat ipsa nesciunt at officiis reprehenderit maxime inventore vero pariatur ratione dolore, sapiente cumque excepturi vel? Eligendi doloremque quod expedita laudantium, modi temporibus ut cumque est? Nostrum magni a repellendus debitis et inventore at, repellat nisi aliquid! Ipsum iste blanditiis numquam! Autem corporis eius ipsam atque? Illum, at similique voluptas quidem accusamus incidunt consequuntur deleniti ut dolor iure corrupti amet magnam libero adipisci dolore ipsa fuga non nostrum pariatur, accusantium quam harum praesentium nobis! Quia, molestias similique quod nemo minima non in et inventore blanditiis.</p>
                    </div>
                </div>
            </div>
                <div class="accordion-item" id="accordion-item2">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    #2 Vagabond
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio cupiditate veniam omnis iusto fugiat natus repellat doloribus quis iste quam eveniet, officiis molestias alias molestiae corrupti asperiores dolorem aliquid nam! Nostrum incidunt consequatur aliquid deleniti fugiat ipsa nesciunt at officiis reprehenderit maxime inventore vero pariatur ratione dolore, sapiente cumque excepturi vel? Eligendi doloremque quod expedita laudantium, modi temporibus ut cumque est? Nostrum magni a repellendus debitis et inventore at, repellat nisi aliquid! Ipsum iste blanditiis numquam! Autem corporis eius ipsam atque? Illum, at similique voluptas quidem accusamus incidunt consequuntur deleniti ut dolor iure corrupti amet magnam libero adipisci dolore ipsa fuga non nostrum pariatur, accusantium quam harum praesentium nobis! Quia, molestias similique quod nemo minima non in et inventore blanditiis.</p>
                    </div>
                </div>
                </div>
                <div class="accordion-item">
                <h2 class="accordion-header" id="accordion-item3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    #3 Vinland
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio cupiditate veniam omnis iusto fugiat natus repellat doloribus quis iste quam eveniet, officiis molestias alias molestiae corrupti asperiores dolorem aliquid nam! Nostrum incidunt consequatur aliquid deleniti fugiat ipsa nesciunt at officiis reprehenderit maxime inventore vero pariatur ratione dolore, sapiente cumque excepturi vel? Eligendi doloremque quod expedita laudantium, modi temporibus ut cumque est? Nostrum magni a repellendus debitis et inventore at, repellat nisi aliquid! Ipsum iste blanditiis numquam! Autem corporis eius ipsam atque? Illum, at similique voluptas quidem accusamus incidunt consequuntur deleniti ut dolor iure corrupti amet magnam libero adipisci dolore ipsa fuga non nostrum pariatur, accusantium quam harum praesentium nobis! Quia, molestias similique quod nemo minima non in et inventore blanditiis.</p>
                    </div>
                </div>
                </div>
            </div>
            
        </div>

        <div class="rightcontentt">
            <img id="sideimg1"  style="opacity: 1" src="{{ asset('assets/img/berserk.jpg') }}" alt="">
            <img id="sideimg2"  style="opacity: 0" src="{{ asset('assets/img/vagabond.jpg') }}" alt="">
            <img id="sideimg3"  style="opacity: 0" src="{{ asset('assets/img/vinland.jpg') }}" alt="">
        </div>
    </div>


</div>

<div class="footer">
    <div class="footercontent">
        <div class="footerleft">
            <h3>Ebook</h3>
            <p>
                Jl. Mencari Cinta Sejati
                Bogor Timur 16720
            </p>
            <p>
                <strong>Phone :</strong> +1 2345 6678 99
            </p>
            <p>
                <strong>Email :</strong> kenpashaandaru@smkwikrama.sch.id
            </p>
        </div>
        <div class="footermiddle"><h3>Our Social Networks</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio!
            </p>
            <ul class="listsocial">
                <a target="_blank" href="https://www.linkedin.com/in/ken-pasha-andaru-697aa921b/"><li><i class="fa-brands fa-linkedin-in"></i></li></a>
                <a target="_blank" href="https://github.com/Kueyy"><li><i class="fa-brands fa-github"></i></li></a>
                <a target="_blank" href="https://www.instagram.com/_kenn404/"><li><i class="fa-brands fa-instagram"></i></li></a>
            </ul>
            </div>
        <div class="footerright"></div>
    </div>
    <div class="footercopyright">
        <p>Copyright &copy; 2022 - Keen</p>
    </div>
</div>








    <script>

        var berserk = document.getElementById('accordion-item1');
        var vagabond = document.getElementById('accordion-item2');
        var vinland = document.getElementById('accordion-item3');
        
        berserk.onclick = function() {
            document.getElementById("sideimg1").style.opacity = "1";
            document.getElementById("sideimg2").style.opacity = "0";
            document.getElementById("sideimg3").style.opacity = "0";
        }

        vagabond.onclick = function() {
            document.getElementById("sideimg1").style.opacity = "0";
            document.getElementById("sideimg2").style.opacity = "1";
            document.getElementById("sideimg3").style.opacity = "0";
            
        }
        
        vinland.onclick = function() {
            document.getElementById("sideimg1").style.opacity = "0";
            document.getElementById("sideimg2").style.opacity = "0";
            document.getElementById("sideimg3").style.opacity = "1";
        }
        </script>


@endsection
