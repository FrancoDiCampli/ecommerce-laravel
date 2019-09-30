<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Selling &mdash; Website by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

  </head>
    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

        <div class="site-wrap">

          @include('partials.mobile')

          @include('partials.navbar')



            {{-- Header  --}}

            @include('partials.header')



            {{-- End header  --}}

            @include('partials.hero')

            {{-- Popular products  --}}
            @include('partials.popular')


             {{-- Notification By Email     --}}
            @include('partials.notification')

         @include('partials.featured')

         @include('partials.aboutus')

         @include('partials.team')

         @include('partials.promo')

         @include('partials.services')

         @include('partials.testimonials')

         @include('partials.blog')


         @include('partials.contact')


         @include('partials.footer')

        </div> <!-- .site-wrap -->

        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
