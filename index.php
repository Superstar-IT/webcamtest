<!DOCTYPE html>
<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <script src="js/latest-v2.js"></script> 
    </head>
    <body>
        <video height="300" id="localVideo" controls></video>
        <!-- <div id="remotesVideos"></div> -->
    </body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" charset="utf-8" async defer>
  var webrtc = new SimpleWebRTC({
    // the id/element dom element that will hold "our" video
    localVideoEl: 'localVideo',
    // the id/element dom element that will hold remote videos
    remoteVideosEl: 'remotesVideos',
    // immediately ask for camera access
    autoRequestMedia: true
  });

  // we have to wait until it's ready
  webrtc.on('readyToCall', function () {
    // you can name it anything
    webrtc.joinRoom('roam');
    $(document).ready(function(){
            $('#localVideo').click();

      });

    document.addEventListener('click', event => {
      const video = document.getElementById('localVideo');
      video.play();
    });
  });
</script>