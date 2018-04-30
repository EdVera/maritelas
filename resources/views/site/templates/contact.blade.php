<div id="contacto" style="background-color:#dddddd">
  <div class="row nobottom valign-wrapper">
    <div class="col s12 m12 l6 center">
      <h1 style="font-weight:900;font-size:40px;color:#5d5d5d;margin: 35px 0 5px 0;">¡QUE QUIERES APRENDER!</h1>
      <div class="row nobottom" style="margin-top:20px">
        <div class="col s12 m6">
          <div class="row valign-wrapper nobottom">
            <div class="col s3"><i class="fa fa-phone right" aria-hidden="true" style="font-size: 33px;color:#5d5d5d"></i></div>
            <div class="col s9 left-align" style="padding-left:0">
              <p class="nobottom notop" style="color:#f3357f;font-size:18px;font-weight:900">LLÁMANOS AHORA <br><a style="color:#5d5d5d;font-weight:100;font-size:13px" href="tel:5588513585"> 5588513585 </a></p>
            </div>
          </div>
        </div>
        <div class="col s12 m6">
          <div class="row valign-wrapper nobottom">
            <div class="col s2" style="padding:0"><i class="fa fa-envelope-o left" aria-hidden="true" style="font-size: 33px;color:#5d5d5d"></i></div>
            <div class="col s10 left-align" style="padding-left:0">
              <p class="nobottom notop" style="color:#f3357f;font-size:18px;font-weight:900">ESCRÍBENOS <br><a style="color:#5d5d5d;font-weight:100;font-size:13px" href="mailto:direccion-comercial@gp.org.mx?Subject=Requiero"> contacto@maritelascountry.mx</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="row" id="contactform" style="padding:0 23px">
        <form id="form2">
          <div class="row nobottom">
            <div class="input-field col s6">
              <input name="name" placeholder="* Nombre" type="text" style="padding-left:5px;" required="">
            </div>
            <div class="input-field col s6">
              <input name="enterprise" placeholder="* Apellído" type="text" style="padding-left:5px;" required="">
            </div>
          </div>
          <div class="row nobottom">
            <div class="input-field col s6">
              <input class="validate" name="email" placeholder="* Correo electrónico" type="email" style="padding-left:5px;" required="">
            </div>
            <div class="input-field col s6">
              <input name="phone" placeholder="* Teléfono" type="text" style="padding-left:5px;" required="">
            </div>
          </div>
          <div class="row nobottom">
            <div class="input-field col s12">
              <input name="message" placeholder="* Mensaje" type="text" style="padding-left:5px;" required="">
            </div>
          </div>
          <div class="row">
            <div class="col s12 m6 input-field but" style="padding-right:0px">
              <button class="btn-flat transparent" type="submit" style="width:100%;color:#f3357f;font-weight:100;border:1px solid #f3357f; padding: 2px 2px;height:50px;font-size:20px">¡COMENZAR AHORA!</button>
            </div>
            <div class="col s12 m6" style="margin-top:14px;padding-right:0px">
              <a href="#">
                <div class="row valign-wrapper nobottom" style="background-color: #80c357;height:50px">
                  <div class="col s2">
                    <i class="fa fa-whatsapp fa-2x" style="color:white;font-size:2.6em"></i>
                  </div>
                  <div class="col s10">
                    <h6 class="nobottom notop white-text left-align" style="font-weight:900;margin-left:54px">WHATSAPP</h6>
                    <p style="font-size: 13px;font-weight:100;color:white;margin:0 0 0 48px">(442)3773461</p>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="col s12 m12 l6" id="wrapper">
      <div id="google_map">
        <iframe id="qro" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14934.03202158524!2d-100.44111977562712!3d20.648901508596094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjDCsDM4JzU2LjAiTiAxMDDCsDI1JzU2LjUiVw!5e0!3m2!1ses!2smx!4v1523416643375" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
        <iframe id="irapuato" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.951745061328!2d-101.37423878539242!3d20.67154210525353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842c7fb4b3a75dc5%3A0xd05f16c502b4458d!2sPlaza+Jacarandas!5e0!3m2!1ses!2smx!4v1523416722510" width="100%" height="500" frameborder="0" style="border:0;display:none" allowfullscreen></iframe>
      </div>
      <div class="row nobottom" id="over_map" style="padding: 0 0.75em;">
        <div class="col s6" style="padding:0 .75em;background-color:rgba(243,53,127,.9);">
          <ul class="collapsible z-depth-0" style="border:none;color:white">
            <li onclick="mapQro()" style="border:none">
              <div class="collapsible-header active transparent" style="border:none"><i class="material-icons">place</i>Querétaro</div>
              <div class="collapsible-body transparent" style="border:none;padding:2px">Plaza urban center jurica, planta alta frente a cinemex.</div>
            </li>
          </ul>

          {{-- <button class="" onclick="mapQro()" style="padding:0">
            {{-- <div style="background-color:rgba(243,53,127,.9); padding-top:3px;padding-bottom:3px"> --}}
              {{-- <h5 class="white-text center">QUERÉTARO</h5>
              <h6 id="txtQro" class="white-text center">Plaza urban center jurica, planta alta frente a cinemex</h6> --}}
            {{-- </div> --}}
          {{-- </button> --}}
        </div>
        <div class="col s6" style="padding:0 .75em;background-color:rgba(243,53,127,.9);">
          <ul class="collapsible z-depth-0" style="border:none;color:white">
            <li onclick="mapIrapuato()">
              <div class="collapsible-header transparent" style="border:none"><i class="material-icons">place</i>Irapuato</div>
              <div class="collapsible-body transparent" style="border:none;padding:2px">Plaza Jacarandas, Soriana, Av. Arboledas #1200 loc. 20B.</div>
            </li>
          </ul>
          {{-- <button class="" onclick="mapIrapuato()" style="padding:0"> --}}
            {{-- <div style="background-color:rgba(243,53,127,.9); padding-top:3px;padding-bottom:3px"> --}}
              {{-- <h5 class="white-text center">IRAPUATO</h5>
              <h6 id="txtIr" class="white-text center">Plaza Jacarandas, Soriana, Av. Arboledas #1200 loc. 20B.</h6> --}}
            {{-- </div> --}}
          {{-- </button> --}}
        </div>
      </div>
    </div>
  </div>
</div>
