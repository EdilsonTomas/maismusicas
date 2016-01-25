<br />
<b>Notice</b>:  Undefined index: SID in <b>/home/musicada/web/musicadahora.com/public_html/Modules/Log.php</b> on line <b>2</b><br />
    <div class="modal-dialog" id="regModal" style="margin-top: 150px;">
      <div class="modal-content">
          <div class="modal-header" style="background-color: #212121; color: #FFF; border-bottom-color: #323232;">
              <button type="button" class="close text-white" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title text-white" id="regModal">Login no Música da Hora</h4>
          </div>
          <div class="modal-body" style="background: #212121;">
              <div class="row">
              <div class="col-md-2"></div>
                  <div class="col-md-8">

<div id="LoginID"></div>
<form class="form-signin" name="FormLogin" onsubmit="post_this(this,'http://www.musicadahora.com/got.php?ct=lgtsd','LoginID','');return false;" method="post">
                        <div class="form-group">
                          <label>E-mail</label>
                          <input type="email" name="email" placeholder="Email" class="form-control no-border">
                        </div>

                        <div class="form-group">
                          <label>Senha</label>
                          <input type="password" name="senha" placeholder="Senha" class="form-control no-border">
                        </div>
                        <center>
                        <button type="submit" class="btn btn-lg btn-danger btn-block" style="width:230px;">Entrar!</button>
                        <a href="https://www.facebook.com/dialog/oauth?client_id=728472007261374&redirect_uri=http://www.musicadahora.com/Login.php&scope=public_profile,email,user_friends"><img src="http://www.musicadahora.com/images/logarViaFacebook.png" alt="Login via Facebook" style="width: 230px; margin-top: 5px;"></a>
                        </center>
</form>

                  </div>
                <div class="col-md-2"></div>
              </div>
          </div>
      </div>
  </div>