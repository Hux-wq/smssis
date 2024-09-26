<!DOCTYPE html>
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>

      <meta charset="utf-8">

      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>SIS: Student Information System</title>

      <link rel="icon" href="https://elc-public-images.s3.ap-southeast-1.amazonaws.com/bcp-olp-logo-mini2.png">

      @include('_partials.style')
      
  </head>

  <body class="antialiased">
      
  <!-- ======= Header ======= -->
  @include('_partials.header')


  <livewire:Content />


  
  <!-- Back to top Button -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('_partials.script')

  </body>

  </html>
