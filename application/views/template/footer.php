<audio src="<?= base_url('/assets/song') ?>/song.mp3" id="my_audio" loop="loop"></audio>

<button class="btn btn-primary lagu" type="button">
    <i class="fas fa-pause"></i>
</button>

<footer class="container-fluid bg-dark fixed-bottom navigasi">
    <div class="container">
        <div class="row mt-3 mb-3 d-flex justify-content-center">
            <div class="col-md-3"></div>
            <div class="col-2 col-md-1"><a href="#home"><i class="fas fa-home"></i></a></div>
            <div class="col-2 col-md-1"><a href="#couple"><i class="fas fas fa-user-friends"></i></a></div>
            <div class="col-2 col-md-1"><a href="#gallery"><i class="fas fa-images"></i></a></div>
            <div class="col-2 col-md-1"><a href="#location"><i class="fas fa-map"></i></a></div>
            <div class="col-2 col-md-1"><a href="#greeting"><i class="fas fa-comment"></i></a></div>
            <div class="col-md-3"></div>
        </div>
    </div>
</footer>

<script type="text/javascript">
    window.addEventListener("DOMContentLoaded", event => {
        const audio = document.querySelector("audio");
        audio.volume = 0.5;
        setTimeout(function() {
            audio.play();
        }, 3000);
    });

    $(document).ready(function() {
        $("button.lagu").click(function() {
            var audio = $("audio#my_audio")[0];
            if (audio.paused) {
                audio.play();
                $(this).html('<i class="fas fa-pause"></i>');
            } else {
                audio.pause();
                $(this).html('<i class="fas fa-play"></i>');
            }

        });
    });
</script>
</body>

</html>