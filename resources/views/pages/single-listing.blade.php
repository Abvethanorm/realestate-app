@extends('layouts.app')
@section('content')
<div class="single-listing">
    <div class="single-listing__banner">
        <img src="https://tacostreetlocating.com/wp-content/uploads/2019/11/clark-1-1024x683.jpg" alt="" class="single-listing__banner__img">
        <div class="tour__container">
            <div class="tour__subcontainer">
                <form action="" class="tour__form">
                    <span class="tour__title">Schedule a Tour Date</span>
                    <div class="tour__option">In Person</div>
                    <div class="tour__option">Virtual</div>
                    <div class="tour__date__container">
                        <span class="tour__date__label">Date</span>
                        <div class="tour__date">July 8th, 2023</div>
                        <span class="tour__date__label">Time</span>
                        <div class="tour__date">12PM</div>
                    </div>
                    <div class="demographics__container">
                        <input type="text" placeholder="Email" class="client__info">
                        <input type="text" placeholder="Phone Number"  class="client__info">
                    </div>
                    <button class="tour__date__btn" type="submit">BOOK NOW!</button>
                </form>
            </div>
        </div>
    </div>
    <section class="listing__bio container " >
        <div class="row">
            <div class="col-md-6">
                <h1 class="listing__bio__title">285 FAFO RD.</h1>
                <span class="listing__bio__stats">
                       {{-- bed icon svg --}}
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M32 32c17.7 0 32 14.3 32 32V320H288V160c0-17.7 14.3-32 32-32H544c53 0 96 43 96 96V448c0 17.7-14.3 32-32 32s-32-14.3-32-32V416H352 320 64v32c0 17.7-14.3 32-32 32s-32-14.3-32-32V64C0 46.3 14.3 32 32 32zm144 96a80 80 0 1 1 0 160 80 80 0 1 1 0-160z"/></svg> 3
                </span>
                <span class="listing__bio__stats">
                      {{-- bath icon svg --}}
                      <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M96 77.3c0-7.3 5.9-13.3 13.3-13.3c3.5 0 6.9 1.4 9.4 3.9l14.9 14.9C130 91.8 128 101.7 128 112c0 19.9 7.2 38 19.2 52c-5.3 9.2-4 21.1 3.8 29c9.4 9.4 24.6 9.4 33.9 0L289 89c9.4-9.4 9.4-24.6 0-33.9c-7.9-7.9-19.8-9.1-29-3.8C246 39.2 227.9 32 208 32c-10.3 0-20.2 2-29.2 5.5L163.9 22.6C149.4 8.1 129.7 0 109.3 0C66.6 0 32 34.6 32 77.3V256c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H96V77.3zM32 352v16c0 28.4 12.4 54 32 71.6V480c0 17.7 14.3 32 32 32s32-14.3 32-32V464H384v16c0 17.7 14.3 32 32 32s32-14.3 32-32V439.6c19.6-17.6 32-43.1 32-71.6V352H32z"/></svg> 4
                </span>
                <span class="listing__bio__stats">  {{-- sqft icon svg --}}
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M469.3 19.3l23.4 23.4c25 25 25 65.5 0 90.5l-56.4 56.4L322.3 75.7l56.4-56.4c25-25 65.5-25 90.5 0zM44.9 353.2L299.7 98.3 413.7 212.3 158.8 467.1c-6.7 6.7-15.1 11.6-24.2 14.2l-104 29.7c-8.4 2.4-17.4 .1-23.6-6.1s-8.5-15.2-6.1-23.6l29.7-104c2.6-9.2 7.5-17.5 14.2-24.2zM249.4 103.4L103.4 249.4 16 161.9c-18.7-18.7-18.7-49.1 0-67.9L94.1 16c18.7-18.7 49.1-18.7 67.9 0l19.8 19.8c-.3 .3-.7 .6-1 .9l-64 64c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0l64-64c.3-.3 .6-.7 .9-1l45.1 45.1zM408.6 262.6l45.1 45.1c-.3 .3-.7 .6-1 .9l-64 64c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0l64-64c.3-.3 .6-.7 .9-1L496 350.1c18.7 18.7 18.7 49.1 0 67.9L417.9 496c-18.7 18.7-49.1 18.7-67.9 0l-87.4-87.4L408.6 262.6z"/></svg> 7000</span>
            </div>
            <div class="listing__bio__description__container">
                <p class="listing__bio__description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id, porro sed molestiae nulla illo excepturi quaerat iste. Eius, molestias exercitationem. Molestiae, repudiandae tempora sequi odit dolore natus dolores ratione officiis.</p>
                <h1 class="listing__bio__am__title">AMENENITIES</h1>
                <ul class="listing__bio__amens">
                    <li class="listing__bio__amen">Bigg Booty Hoes</li>
                    <li class="listing__bio__amen">Bigg Booty Hoes</li>
                    <li class="listing__bio__amen">Bigg Booty Hoes</li>
                    <li class="listing__bio__amen">Bigg Booty Hoes</li>
                    <li class="listing__bio__amen">Bigg Booty Hoes</li>
                    <li class="listing__bio__amen">Bigg Booty Hoes</li>

                </ul>
            </div>
            <div class="col-md-6">
                <div class="listing__bio__realtor">
                    <h2 class="listing__bio__realtor__title">Rowen Barret Jr.</h2>
                    <p class="listing__bio__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil libero earum dignissimos ea consectetur repudiandae quae accusamus, nulla deserunt optio aspernatur veritatis facilis quia sit sunt debitis officia soluta neque.</p>
                </div>
                <div class="listing__bio__image__container">
                  <div class="interior__grid">
                    <img  src="https://cdn-bnokp.nitrocdn.com/QNoeDwCprhACHQcnEmHgXDhDpbEOlRHH/assets/images/optimized/rev-0c79eba/www.decorilla.com/online-decorating/wp-content/uploads/2020/08/Modern-Apartment-Decor-.jpg" alt="" class="interior">
                    <img  src="https://cdn.onekindesign.com/wp-content/uploads/2014/09/Minimalist-Apartment-Design-01-1-Kindesign.jpg" alt="" class="interior">
                    <img  src="https://cf.ltkcdn.net/interiordesign/images/std/234220-800x515r1-manhattan-apartment-style-decorating-tips.webp" alt="" class="interior">
                    <img  src="https://thouswell.com/wp-content/uploads/2017/02/layered-style-west-village-apartment-2.jpg" alt="" class="interior">
                  </div>
                </div>
            </div>
        </div>
    </section>
    
</div>
@endsection
