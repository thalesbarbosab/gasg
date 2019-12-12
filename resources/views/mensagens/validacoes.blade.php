@if (session('success'))
    <div id="message" class="errmsg">
        <div class="alert alert-success alert-success"  class="errmsgdiv" >
            {{ session('success') }}
      </div>
    </div>
@endif
@if (session('error'))
    <div id="message" class="errmsg">
        <div class="alert alert-danger alert-danger"  class="errmsgdiv" >
            {{ session('error') }}
      </div>
    </div>
@endif
