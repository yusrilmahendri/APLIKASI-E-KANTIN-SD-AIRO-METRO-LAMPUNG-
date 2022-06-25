<div class="page-content">
  <div class="container">
    <div class="resume-container">
      <div class="shadow-1-strong bg-white my-5" id="intro">
        <div class="bg-info text-white">
          <div class="cover bg-image">
            <img src="{{asset('backend/images/bg_sd.jpg') }}"/>
              <div class="mask" style="background-color: rgba(0, 0, 0, 0.7);backdrop-filter: blur(2px);">
                <div class="text-center p-5">
                  <div class="avatar p-1">
                </div>

            <div class="header-bio mt-3">
              <div data-aos="zoom-in" data-aos-delay="0">
                <h2 class="h1" style="margin-top: 100px;">
                  {{ Auth::user()->name }}
                </h2>
                <br>
                 <p>JUMLAH SALDO ANDA</p>
                   <h2 class="h2">
                    Rp. {{ Auth::user()->jumlah_saldo }}
                   </h2>
              </div>
            </div>
         </div>
       </div>
     </div>
   </div>
</div>
