@extends('layout.user')
@section('content')

<div class="parent">
    <div class="title"><h4> Top #3 Book of the Weeks</h2></div>
    <div class="wrapperr">
        <div class="leftwrap">
            <img id="img1" style="opacity: 1" src="{{ asset('assets/img/berserk.jpg') }}" alt="">
            <img id="img2" style="opacity: 0" src="{{ asset('assets/img/vagabond.jpg') }}" alt="">
            <img id="img3" style="opacity: 0" src="{{ asset('assets/img/vinland.jpg') }}" alt="">
        </div>
        <div class="rightwrap">
            <h5>Berserk</h5>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui, porro!
                Repellendus eveniet quasi adipisci.
            </p>
            <div class="btn btn-warning">Read More</div>
            <p>
               - Kentaro Miura
            </p>
        </div>
        <div class="bottomwrap">
            <p id="item1">1</p>
            <p id="item2">2</p>
            <p id="item3">3</p>
        </div>
    </div>
</div>

<div class="parent2">
    <div class="title2"><h4>List of Books</h4></div>

    <div id="bookData">

        <ul class="booklist"  id="paginated-list" data-current-page="1" aria-live="polite">
            
            @foreach($books as $book)
            
            <li class="bookcard" id="{{ $book['category'] }}">
                
                <div class="imgbookcard">
                <img src="/img/{{ $book['cover_book'] }}" alt="">
                </div>
                <div class="descbookcard">
                    <h5>{{ $book['title'] }}</h5>
                    <p>{{ $book['writter'] }}</p>
                    <p>
                        @forelse($categories as $category)
                            @if($book['category'] == $category['categoryID'])
                                {{ $category['categoryName'] }}
                            @endif
                        @endforeach
                    </p>
                </div>
                <div class="buttonread">
                    <a href="{{ route('readBook', $book->bookID) }}">Read</a>
                </div>
            </li> 
            @endforeach

        </ul>

    <nav class="pagination-container">
        <button class="pagination-button" id="prev-button" aria-label="Previous page" title="Previous page">
          &lt;
        </button>
    
        <div id="pagination-numbers">
            
        </div>
    
        <button class="pagination-button" id="next-button" aria-label="Next page" title="Next page">
          &gt;
        </button>
      </nav>
</div>

</div>


<div class="footer">
    <div class="footercontent">
        <div class="footerleft">
            <h3>E-book</h3>
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

        var berserk = document.getElementById('item1');
        var vagabond = document.getElementById('item2');
        var vinland = document.getElementById('item3');
        

        
        berserk.onclick = function() {
            document.getElementById("img1").style.opacity = "1";
            document.getElementById("img2").style.opacity = "0";
            document.getElementById("img3").style.opacity = "0";
        }

        vagabond.onclick = function() {
            document.getElementById("img1").style.opacity = "0";
            document.getElementById("img2").style.opacity = "1";
            document.getElementById("img3").style.opacity = "0";
            
        }
        
        vinland.onclick = function() {
            document.getElementById("img1").style.opacity = "0";
            document.getElementById("img2").style.opacity = "0";
            document.getElementById("img3").style.opacity = "1";
        }
        </script>


</script>

@endsection