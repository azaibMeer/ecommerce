@if(session()->has('success'))
    <div class="alert alert-primary">
    {{ session()->get('success') }}
    </div>
@elseif(session()->has('error'))
    <div class="alert alert-primary">
      {{ session()->get('error') }}
    </div>
@elseif(session()->has('message'))
    <div class="alert alert-primary">
      {{ session()->get('message') }}
    </div>
@endif