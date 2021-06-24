@extends('layouts.guest')

@section('page_title')
    Pappo
@endsection

@section('content_guest')
<section id="home">
    <div class="home-img flex">
        <div class="l">
            <img src="./img/l.svg" alt="">
        </div>
        <div class="r">
            <img src="./img/r.svg" alt="">
        </div>
    </div>
    <div class="title">
        <p>EHI AMIGO COSA TI VA DI MANGIARE OGGI?</p>
    </div>
    <div class="btn-home">
        <a href="#plates">SCEGLI QUALCOSA <i class="fas fa-utensils"></i></a>
    </div>
</section>
<section>
    <div id="root">
        <div class="category-card" v-for="category in categories">
            <button>
                @{{category.name}}
            </button>
        </div>
        <div class="restaurants">
            <h1>I PIU' PAPPATI</h1>
            <div class="category-card" v-for="restaurant in restaurants">
                <button>
                    @{{restaurant.name}}
                </button>
            </div>
        </div>
    </div>
</section>

@endsection
