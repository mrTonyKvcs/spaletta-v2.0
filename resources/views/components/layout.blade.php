<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>@hasSection('title') @yield('title') | Spaletta Kecskemét – Étterem és Sörház @else Spaletta Kecskemét – Étterem és Sörház @endif</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta property="og:title" content="Spaletta Kecskemét – Étterem és Sörház"> 
        @hasSection('meta_data')
            @yield('meta_data')
        @else
            <meta property="og:description" content="A kecskeméti Spaletta Étterem & Sörház kiváló alapanyagokból készült ételekkel, házi készítésű tésztákkal és prémium minőségű sörök széles választékával várja vendégeit.">
            <meta property="og:url" content="https://spalettaetterem.com/"> 
        @endif
        <meta property="og:type" content="website">
        <meta property="robots" content="index, follow">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="shortcut icon" type="image/x-icon" href="{{ URL::to('/') . '/favicon.ico' }}" />

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script charset="utf-8">
            function autoRefresh() {
                setTimeout("location.reload(true);", 60000);
            }

            function timer(expiry) {
  return {
    expiry: expiry,
    remaining:null,
    init() {
      this.setRemaining()
      setInterval(() => {
        this.setRemaining();
        console.log(this.expiry)
      }, 1000);
    },
    setRemaining() {
        console.log(new Date().getDate())
        // const parse = Date.parse('04 Dec 2021 00:12:00 GMT')
        // this.expiry = parse
      const diff = this.expiry - new Date().getTime();
      this.remaining =  parseInt(diff / 1000);
    },
    days() {
      return {
      	value:this.remaining / 86400,
        remaining:this.remaining % 86400
      };
    },
    hours() {
      return {
      	value:this.days().remaining / 3600,
        remaining:this.days().remaining % 3600
      };
    },
    minutes() {
    	return {
      	value:this.hours().remaining / 60,
        remaining:this.hours().remaining % 60
      };
    },
    seconds() {
    	return {
      	value:this.minutes().remaining,
      };
    },
    format(value) {
      return ("0" + parseInt(value)).slice(-2)
    },
    time(){
    	return {
      	days:this.format(this.days().value),
        hours:this.format(this.hours().value),
        minutes:this.format(this.minutes().value),
        seconds:this.format(this.seconds().value),
      }
    },
  }
}

        </script>
        @livewireScripts
    </head>
<body>
    <header>
        <livewire:navbar></livewire>
        {{-- @include('partials.new-navbar') --}}
    </header>
    <main class="z-10 bg-white shadow-lg mb-160">
        {{-- <div class="timer" x-data="timer(new Date().setDate(new Date().getDate() + 1))" x-init="init();">
            <h1 x-text="time().days"></h1>
            <h1 x-text="time().hours"></h1>
            <h1 x-text="time().minutes"></h1>
            <h1 x-text="time().seconds"></h1>
          </div> --}}
       {{ $slot }}
    </main>
    <footer class="light-gray-bg footer-parallax">
        @include('partials.footer')
    </footer>
</body>
</html>
