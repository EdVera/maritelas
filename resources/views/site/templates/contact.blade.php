<div id="contacto" style="background-color:#dddddd">
  <div class="row nobottom valign-wrapper">
    <div class="col s12 m12 l6 center">
      <h1 style="font-weight:900;font-size:40px;color:#5d5d5d;margin: 35px 0 5px 0;">¡QUE QUIERES APRENDER!</h1>
      <div class="row nobottom" style="margin-top:20px">
        <div class="col s12 m6">
          <div class="row valign-wrapper nobottom">
            <div class="col s3"><i class="fa fa-phone right" aria-hidden="true" style="font-size: 33px;color:#5d5d5d"></i></div>
            <div class="col s9 left-align" style="padding-left:0">
              <p class="nobottom notop" style="color:#f3357f;font-size:18px;font-weight:900">LLÁMANOS AHORA <br>
                <a id="phonelink" target="_blank" style="color:#5d5d5d;font-weight:100;font-size:13px" href="tel:4626071044"> 4626071044 </a>
              </p>
            </div>
          </div>
        </div>
        <div class="col s12 m6">
          <div class="row valign-wrapper nobottom">
            <div class="col s3 m2" style="padding:0"><i class="fa fa-envelope-o right" aria-hidden="true" style="font-size: 33px;color:#5d5d5d"></i></div>
            <div class="col s9 m10 left-align" style="padding-left:10">
              <p class="nobottom notop" style="color:#f3357f;font-size:18px;font-weight:900">ESCRÍBENOS <br>
                <a id="maillink" target="_blank" style="color:#5d5d5d;font-weight:100;font-size:13px" href="mailto:direccion-comercial@gp.org.mx?Subject=Requiero"> contacto@maritelascountry.mx</a></p>
            </div>
          </div>
        </div>
      </div>
      {{-- Contact Form --}}
      <div class="row" id="contactform" style="padding:0 23px">
        {!! Form::open(['route' => 'contact.contact', 'id' => 'form-contact', 'method' => 'POST']) !!}
          <div class="row nobottom">
            <div class="input-field col s6">
              <input name="contact[name]" placeholder="* Nombre" type="text" style="padding-left:5px;" required="">
            </div>
            <div class="input-field col s6">
              <input name="contact[lastName]" placeholder="* Apellído" type="text" style="padding-left:5px;" required="">
            </div>
          </div>
          <div class="row nobottom">
            <div class="input-field col s6">
              <input class="validate" name="contact[email]" placeholder="* Correo electrónico" type="email" style="padding-left:5px;" required="">
            </div>
            <div class="input-field col s6">
              <input name="contact[phone]" placeholder="* Teléfono" type="text" style="padding-left:5px;" required="">
            </div>
          </div>
          <div class="row nobottom">
            <div class="input-field col s12">
              <input name="contact[message]" placeholder="* Mensaje" type="text" style="padding-left:5px;" required="">
            </div>
          </div>
          <div class="row">
            <div class="col s12 m6 input-field but" style="padding-right:0px">
              {!! Form::submit('¡ENVIAR!',['class' => 'btn-flat transparent', 'style' => 'width:100%;color:#f3357f;font-weight:100;border:1px solid #f3357f; padding: 2px 2px;height:50px;font-size:20px;font-weight:900']) !!}
            </div>
            <div class="col s12 m6 hide-on-med-and-down" style="margin-top:14px;padding-right:0px">
              <a id="whatslink" target="_blank" href="{{ $whats }}">
                <div class="row valign-wrapper nobottom" style="background-color: #80c357;height:50px">
                  <div class="col s2">
                    <i class="fa fa-whatsapp fa-2x" style="color:white;font-size:2.6em"></i>
                  </div>
                  <div class="col s10">
                    <h6 class="nobottom notop white-text left-align" style="font-weight:900;margin-left:54px">WHATSAPP</h6>
                  </div>
                </div>
              </a>
            </div>
            <div class="col s12 hide-on-large-only" style="margin-top:14px">
              <a id="whatslinkmini" target="_blank" href="{{ $whats }}" style="width:100%">
                <div class="row nobottom" style="background-color: #80c357;height:50px">
                  <div class="col s2">
                    <i class="fa fa-whatsapp fa-2x" style="color:white;font-size:44px;margin-top:2px"></i>
                  </div>
                  <div class="col s10" style="padding-top:14px">
                    <h6 class="nobottom notop white-text left-align" style="font-weight:900;margin-left:22px;font-size:20px">WHATSAPP</h6>
                  </div>
                </div>
              </a>
            </div>
          </div>
        {!! Form::close() !!}
      </div>
    </div>
    {{-- MAPAS --}}
    <div class="col s12 m12 l6" id="wrapper">
      <div id="google_map">
        <iframe id="qro" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1867.173473575692!2d-100.389456641952!3d20.61471039655604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d35b18951ac631%3A0xaf3478a208390d1!2sPlaza+Boulevares!5e0!3m2!1ses!2smx!4v1554993321609!5m2!1ses!2smx" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
        <iframe id="irapuato" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.951745061328!2d-101.37423878539242!3d20.67154210525353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842c7fb4b3a75dc5%3A0xd05f16c502b4458d!2sPlaza+Jacarandas!5e0!3m2!1ses!2smx!4v1523416722510" width="100%" height="500" frameborder="0" style="border:0;display:none" allowfullscreen></iframe>
      </div>
      <div class="row notop" id="over_map" style="padding: 0 0.75em;">

        <div class="col s6" style="padding:0 0.5em;">
          <ul class="collapsible z-depth-0" style="border:none;color:white;background-color:rgba(243,53,127,.9);margin-top:0">
            <li onclick="mapQro()" style="border:none">
              <div class="collapsible-header active transparent center maptitle"><h5 class="center-align">QUERÉTARO</h5></div>
              <div class="collapsible-body transparent center" style="border:none;padding:2px">
                Plaza Boulevares, Local PB-36, Boulevard Bernardo Quintana 4100 y, Prol. Corregidora Nte. 306, Alamos 3ra Secc, 76160 Santiago de Querétaro, Qro.
              </div>
            </li>
          </ul>
        </div>

        <div class="col s6" style="padding:0 0.5em;">
          <ul class="collapsible z-depth-0" style="border:none;color:white;background-color:rgba(243,53,127,.9);margin-top:0">
            <li onclick="mapIrapuato()">
              <div class="collapsible-header transparent center maptitle"><h5 class="center-align">IRAPUATO</h5></div>
              <div class="collapsible-body transparent center" style="border:none;padding:2px">
                Plaza Jacarandas, Soriana, Av. Arboledas #1200, Local B-20, Pasillo Principal, San Miguelito, 36690, Irapuato, Gto. 462.607.1044
              </div>
            </li>
          </ul>
        </div>

      </div>
    </div>
  </div>
</div>
