 <ul class="booklist"  id="paginated-list" data-current-page="1" aria-live="polite">
            
            @foreach($data as $book)
            
            <li class="bookcard" id="{{ $book->category }}">
                
                <div class="imgbookcard">
                <img src="/img/{{ $book->cover_book }}" alt="">
                </div>
                <div class="descbookcard">
                    <h5>{{ $book->title }}</h5>
                    <p>{{ $book->writter }}</p>
                    <p>
                       
                            @if($book->category == $book->categoryID)
                                {{ $book->categoryName }}
                            @endif
                        {{-- @endforeach --}}
                    </p>
                </div>
                <div class="buttonread">
                    <p>Read</p>
                </div>
            </li> 
            @endforeach

        </ul>
