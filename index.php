<div id='page-wrapper'>
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Con X Live</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-xs-12">
                <div class="white-box">
                    <h3 class="box-title">
                        <i class="icon-camrecorder p-r-10"></i> 
                    </h3>
                    <video height="300" id="localVideo" style="width:100%; height: 70vh;"></video>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/latest-v2.js"></script>
<script type="text/javascript" charset="utf-8" async defer>
  var webrtc = new SimpleWebRTC({
    // the id/element dom element that will hold "our" video
    localVideoEl: 'localVideo',
    // the id/element dom element that will hold remote videos
    remoteVideosEl: 'remotesVideos',
    // immediately ask for camera access
    autoRequestMedia: true
  });
  console.log(webrtc);
  // we have to wait until it's ready
  webrtc.on('readyToCall', function () {
    // you can name it anything
    webrtc.joinRoom('roam');
  });
</script>