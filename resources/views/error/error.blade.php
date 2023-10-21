                     @if(session()->has('message'))
                         <div class="alert alert-primary">
                          {{ session()->get('message') }}
                        </div>
                      @elseif(session()->has('error'))
                         <div class="alert alert-primary">
                              {{ session()->get('error') }}
                         </div>
                      @endif