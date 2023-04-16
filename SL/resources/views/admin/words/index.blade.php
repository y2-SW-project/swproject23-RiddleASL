@extends('layouts.app')

@section('content')
<meta name="_token" content="{{ csrf_token() }}">
    <div class="container">
        <div class="row pt-3">
            <p class="p-0 m-0 pb-2 text-white text-center fw-bold text-uppercase">Use our word bank to learn words! If your word isnt there, feel free to add it or contact us to have it added!</p>
            <div class="col-5 text-white bg-bg-l p-1 rounded" style='max-height: 26.5rem'>
                <div class="input-group mb-2 bg-bg-l p-2" >
                    <input type="text" class="form-control" placeholder="Search..." id='search' name='search'>
                </div>
                <div class="bg-bg rounded p-2" style='min-height: 22rem'>
                    <table>
                        <tbody class="text-white" id='wordBody'>
    
                        </tbody>
                    </table>
                </div>
                @if (Auth::check())
            @if (auth()->user()->isAdmin)
                    <div class="row">
                        <div class="col-6 m-0 pt-3">
                            <a href="{{ route('words.create') }}"><button class="btn btn-outline-bg-l fs-6 border border-3 border-bg-l"><i class="bi bi-plus-circle"></i> Add Word</button></a>
                        </div>
                    </div>
                @endif
            @endif
            </div>
            <div class="col-7 rounded ps-2">
                <div class="bg-bg-l p-1 rounded text-white" style='min-height: 30rem'>
                    @if ($sign)
                        <div class="bg-bg rounded p-1">
                            <p class='text-center'><iframe class='rounded' width='auto' height="300px" src="https://www.youtube.com/embed/{{ $sign->video }}?playlist={{ $sign->video }}&autoplay=1&loop=1" allowfullscreen=''></iframe></p>
                            <div class="ps-3">
                                <h2>Definition</h2>
                                <p class="ps-5"><span class="text-muted">|</span> {{ $sign->definition }}</p>
                                <h2>Pronunciation</h2>
                                <p class="ps-5"><span class="text-muted">|</span> {{ $sign->pronunciation }}</p>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <hr class="border border-2 rounded border-bg-l">

        <div class="row text-white pb-3">
            <div class="col-6 rounded pt-2">
                <div class="bg-bg-l p-1 rounded">
                    <h2 class="text-center">Deaf History</h2>
                    <div class="p-1 bg-bg rounded mt-2">
                        <p>
                            In the early 1800's, Thomas Hopkins Gallaudet, a hearing minister and a graduate of Yale University met and became friends with a young Deaf girl named Alice. Gallaudet took an interest in teaching the girl and succeeded at teaching her a few words. The girl's father Dr. Mason Cogswell, encouraged Gallaudet to become involved with the establishment of a school for the Deaf.
                            <br><br>
                            So, in 1815 Gallaudet headed for Europe in search of methods for teaching the Deaf.
                            <br><br>
                            He approached a number of program directors, (the Braidwood schools, the London Asylum, etc.), but none of them were willing to share their techniques with Gallaudet.
                            <br><br>
                            Fortunately while in England Gallaudet met up with the director of a Paris school for the Deaf, a man by the name of Sicard.
                            <br><br>
                            Sicard was there with two of his deaf pupils, Jean Massieu and Laurent Clerc who were also teachers at the school in Paris. They were in England giving demonstrations on how to teach the deaf by using sign language. The Paris school, which had been founded by the Abbe Charles Michel de L'Epee in 1771, was using French Sign Language in combination with a set methodically developed signs.
                            <br><br>
                            Gallaudet persuaded Clerc to return with him to the States and in 1817 the first American school for the deaf was established in the city of Hartford, Connecticut.
                            Over time, the signs used at that school, plus the signs that were already being used by Deaf people in America evolved into what we now know as American Sign Language.
                            <br><br>
                            It is important to note that sign language was being used here in America before Gallaudet and Clerc set up the school. One example (that you might want to research more) took place in Martha's Vineyard. At one time many Deaf people lived there and all or almost all of the townsfolk knew how to sign whether or not they were Deaf!
                        </p>

                        <a href="https://www.lifeprint.com/asl101/pages-layout/history1.htm"><button class="btn btn-bg-l text-white">More information</button></a>
                    </div>
                </div>
            </div>
            <div class="col-6 rounded pt-2">
                <div class="bg-bg-l p-1 rounded">
                    <h2 class="text-center">Deaf Culture</h2>
                    <div class="p-1 bg-bg rounded mt-2">
                        <p>
                            Deaf Culture consists of the norms, beliefs, values, and "mores"* shared by members of the Deaf Community. 
                            <br><br>
                            Note: the term "mores" means: "The accepted traditional customs, moral attitudes, manners and ways of a particular social group." -- dictionary.com
                            <br><br>
                            Culturally Deaf people in America use American Sign Language. We love to swap stories about Gallaudet University, and the various state residential schools for the Deaf. We value deaf children and our Deaf heritage. We hate the thought of anything that would destroy our Deaf world. We believe that it is fine to be Deaf. If given the chance to become hearing, most of us would choose to remain Deaf. We tend to congregate around the kitchen table rather than the living room sofa because the lighting is better in the kitchen. Our good-byes take nearly forever, and our hello's often consist of serious hugs. When two of us meet for the first time we tend to exchange detailed biographies and describe our social circles in considerable depth.
                            <br><br>
                            In general, the global "Deaf Community" consists of those Deaf and hard of hearing people throughout the world who use sign language and share in Deaf culture. Hearing family members, friends, interpreters, and others are also part of this community to the extent that they use sign language and share in the culture.
                            As used here in America, the term "Deaf Community" refers to Deaf and hard-of-hearing people, (along with our families, friends, and others), who use ASL and who are culturally Deaf. Being culturally Deaf means sharing the beliefs, values, traditions, moral attitudes, manners, and ways of the Deaf community.
                            <br><br>
                            The Deaf World refers to all "d"eaf-(physically) and hard-of-hearing people and the people with whom we regularly interact. For example: teachers of the Deaf, interpreters, audiologists, social workers, religious workers, parents, siblings, etc. They are all part of the Deaf World but not necessarily members of the Deaf Community. Note: Even though I make a distinction here between the Deaf World and the Deaf Community you can be sure that there are many writers / bloggers who consider those two terms to be interchangeable. Such individuals use the term "Deaf World" to refer to Deaf Community. It is a non-issue really. I'm simply striving to point out that a "community" involves a degree of sharing and interactivity that is more intimate than a "world." 
                        </p>

                        <a href="https://www.lifeprint.com/asl101/pages-layout/culture1.htm"><button class="btn btn-bg-l text-white">More information</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        $('#search').on('keyup',function(){
            $value=$(this).val();
            console.log($value);
            $.ajax({
                type : 'get',
                url : '{{URL::to('search')}}',
                data:{'search':$value},
                success:function(data){
                $('#wordBody').html(data);
                }
            });
        });
    </script>
    <script type="text/javascript">
        $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
    </script>
@endsection