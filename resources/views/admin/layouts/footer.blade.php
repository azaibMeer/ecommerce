<footer class="page-footer" role="contentinfo">
   <div class="d-flex align-items-center flex-1 text-muted">
      @php
        use Carbon\Carbon;
      @endphp
      <span class="hidden-md-down fw-700">
      © {{Carbon::now()->format('Y')}} 
      @if(isset($setting->developed_by))
            <a href="{{url('http://www.technidersolutions.com/')}}" class='text-primary fw-500' title='gotbootstrap.com' target='_blank'>{{$setting->developed_by}}</a></span>
      @endif
   </div>
</footer>