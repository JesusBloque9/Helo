
        //Forced loader after 10sec
        window.hidden_loader = false;
        window.onload = updateClock;
        var totalTime = 4;
        function updateClock() {
            if(!window.hidden_loader && totalTime==0){
                $('#ctn-preloader').addClass('loaded');
                if ($('#ctn-preloader').hasClass('loaded')) {
                  $('#preloader').delay(1000).queue(function() {
                    $(this).addClass('d-none');
                  });
                }
                console.log('foced hide load');
            }else{
                if (totalTime>=0) {
                    totalTime-=1;
                    setTimeout("updateClock()",1000);
                }
                
            }
        }
        /**/

        window.loaded_videos = 0;
        window.start_time = 2;

        function run_videos(){
            $( ".item_video_" ).each(function( index ) {
                var videoId = $( this ).attr('id');
                if (index===0) {
                    video_instance_principal(videoId);
                }else{
                    video_instance(videoId);
                }
            });
        }

        const no_videos = $('.item_video_').length;
        const first_video_id = $('.item_video_').first().attr('id');
        const isIOS = /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;
        var qual = '720p';
        if (isIOS) {
            qual = '720p';
        }else if ($(window).width() < 992) {
            qual = '360p';
        }else{
            qual = '720p';
            if (window.loaded_videos!==0) {
                qual = '360p';
            }
        }
        function video_instance(videoId){
            const options = {
                id: videoId,
                duration: 5,
                quality: qual,
                keyboard: false,
                loop: true,
                autoplay: false,
                muted: true,
                background: true,
                controls: false,
                responsive: true,
                pip: true
            };
            var start_at = parseInt($('#'+videoId).attr('start'));
            var video_content = $('#'+videoId).children('.video_content');
            var info_content = $('#'+videoId).children('.info_content');
            var button_playModal = $('#'+videoId).children('.info_content').children('div').children('div').children('img');
            var videoPlayer = new Vimeo.Player(video_content, options);            
            videoPlayer.setCurrentTime(start_at);
            videoPlayer.on('play', function() {
                window.loaded_videos++;
                if (window.loaded_videos<no_videos+1) {
                    if (videoId!==first_video_id) {
                        videoPlayer.pause();
                    }else{
                        //$('#'+first_video_id).addClass('active_');
                    }
                }
            });

            info_content.on("mouseover", function(){
                videoPlayer.play();
                //$('#'+first_video_id).removeClass('active_');
                window.videoPlayerPrincipal.pause();
            });
            info_content.on("mouseleave", function(){
                videoPlayer.pause().then(function(){
                    videoPlayer.setCurrentTime(start_at);
                });
            });

            button_playModal.click(function(){
                $video = '<div id="vimeo-pop-container"><div><div class="modal_loader"><div class="row w-100 h-100 m-0 justify-content-center align-items-center"><div class="col-auto"><div class="spinner-border text-light" role="status"><span class="visually-hidden">Loading...</span></div></div>    </div></div><span class="vimeo-close"></span><iframe src="https://player.vimeo.com/video/' + videoId + '/?autoplay=1&loop=1&autopause=0&controls=1" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allow="autoplay; fullscreen" allowfullscreen></iframe></div></div>';
                $('html').append($video);
            });

        }
        function video_instance_principal(videoId){
            const options = {
                id: videoId,
                duration: 5,
                quality: qual,
                keyboard: false,
                loop: true,
                autoplay: false,
                muted: true,
                background: true,
                controls: false,
                responsive: true,
                pip: true
            };
            var start_at = parseInt($('#'+videoId).attr('start'));
            var video_content = $('#'+videoId).children('.video_content');
            var info_content = $('#'+videoId).children('.info_content');
            var button_playModal = $('#'+videoId).children('.info_content').children('div').children('div').children('img');
            window.videoPlayerPrincipal = new Vimeo.Player(video_content, options);            
            window.videoPlayerPrincipal.setCurrentTime(start_at);
            window.videoPlayerPrincipal.on('play', function() {
                $('#ctn-preloader').addClass('loaded');
                if ($('#ctn-preloader').hasClass('loaded')) {
                  $('#preloader').delay(1000).queue(function() {
                    $(this).addClass('d-none');
                  });
                }
                window.hidden_loader = true;
                window.loaded_videos++;
                if (window.loaded_videos<no_videos+1) {
                    if (videoId!==first_video_id) {
                        window.videoPlayerPrincipal.pause();
                    }else{
                        //$('#'+first_video_id).addClass('active_');
                    }
                }
            });

            info_content.on("mouseover", function(){
                window.videoPlayerPrincipal.play();
                //$('#'+first_video_id).removeClass('active_');
            });
            info_content.on("mouseleave", function(){
                window.videoPlayerPrincipal.pause().then(function(){
                    window.videoPlayerPrincipal.setCurrentTime(start_at);
                });
            });

            button_playModal.click(function(){
                $video = '<div id="vimeo-pop-container"><div><div class="modal_loader"><div class="row w-100 h-100 m-0 justify-content-center align-items-center"><div class="col-auto"><div class="spinner-border text-light" role="status"><span class="visually-hidden">Loading...</span></div></div>    </div></div><span class="vimeo-close"></span><iframe src="https://player.vimeo.com/video/' + videoId + '/?autoplay=1&loop=1&autopause=0&controls=1" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allow="autoplay; fullscreen" allowfullscreen></iframe></div></div>';
                $('html').append($video);
            });
        }
        $('html').on('click', '.vimeo-close', function () {
            $(this).addClass('closing');
            $('#vimeo-pop-container').delay(700).animate({
                height: 0,
                top: '50%'
            }, 'fast', function () {
                $('#vimeo-pop-container').remove();
            });
        });
        run_videos();