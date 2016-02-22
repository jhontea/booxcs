<!DOCTYPE html>
<html>
  <head>
    <title><?php echo $title ?> | BPPT PingSpeed</title>
    <!--Import materialize.css-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>application/assets/css/materialize.min.css"  media="screen, projection"/>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>application/assets/css/ghpages-materialize.css"  media="screen, projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <style>
      .container {
          padding-top: 5%;
      }
    </style>
  </head>
  <body>
    <div class="container">
    <?php
        $msg = $this->session->flashdata('msg');
        if(!empty($msg)) {
    ?>
    <div class="row">
      <div class="col s12 m6 offset-m3">
        <div class="card-panel red">
          <span class="white-text"><?php echo $msg ?>.</span>
        </div>
      </div>
    </div>
    <?php
        }
    ?>
        
      <div class="row">
        <div class="col s12 m6 offset-m3">
          <div class="card">
            <div class="card-content">
              <span class="card-title blue-text text-darken-2 center center-align">PingSpeed Login</span>
              <?php echo form_open(base_url().'login/process/') ?>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="icon_prefix" type="text" class="validate" name="user">
                        <label for="icon_prefix">Username</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">vpn_key</i>
                        <input id="icon_telephone" type="password" class="validate" name="pass">
                        <label for="icon_telephone">Password</label>
                    </div>
                </div>
                <div class="row">
                  <button class="waves-effect waves-light btn right" type="submit" name="<?php echo base_url().'login/process/' ?>">Masuk</button>
                </div>
            </div>
            <?php echo form_close() ?>
          </div>
        </div>
      </div>
    </div>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="<?php echo base_url() ?>application/assets/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>application/assets/js/materialize.min.js"></script>
    <script>
      $(document).ready(function(){
        $(".button-collapse").sideNav();
        $('.collapsible').collapsible({accordion : false});
        $('.tooltipped').tooltip({delay: 50});
        $('.modal-trigger').leanModal();
        $('select').material_select();
      });
    </script>
  </body>
</html>