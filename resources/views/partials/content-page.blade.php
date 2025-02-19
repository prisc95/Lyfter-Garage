@php(the_content())

@if ($pagination)
  <nav class="page-nav" aria-label="Page">
    {!! $pagination !!}
  </nav>
  <div><h1>Hello</h1></div>
@endif
